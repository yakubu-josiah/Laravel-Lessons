<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\BlogPost;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    

    public function testPostWhenNoBlogAvailable()
    {
        $response = $this->get('/post');

        $response->assertSeeText('List of All Blog Posts Published');
    }
    
    public function testPostIfThisBlogPostExist()
    {
        //ARRANGE
        $post = $this->createDummyPost();

       
        //ACT
        $response = $this->get('/post');

        //ASSERT
        $response->assertSeeText('New Title');

        // $this->assertDatabaseHas('blog_posts', [
        //     'title' => 'PHP: Hypertext Preprocessor'
        // ]);
    
       $this->assertDatabaseHas('blog_posts', [
            'title' => 'New Title',
        ]);
    }
    public function testValidStoreFormAndSessionWorking()
    {
        $params = [
            'title' => 'A Valid Title',
            'content' => 'This content should meet Validations'
        ];
        
        $this->post('/post', $params)
             ->assertStatus(302)
             ->assertSessionHas('status');

        $this->assertEquals(session('status'), 'Congratulations!! Your Blog Post Has Been Uploaded!!!');
    }

    public function testIfErrorsWOrkForInvalidForms()
    {
        $params = [
            'title' => 'x',
            'content' => 'xx'
        ];

        $this->post('/post', $params)
             ->assertStatus(302)
             ->assertSessionHas('errors');

       $messages = session('errors')->getMessages();
        
        $this->assertEquals($messages['title'][0], 'The title must be at least 2 characters.');
        $this->assertEquals($messages['content'][0], 'The content must be at least 20 characters.');
    }

    public function testIfUpdateWorksOnPost()
    {
        $post = $this->createDummyPost();

        //$this->assertDatabaseHas('blog_posts', $post->toArray());

        $params = [
            'title' => 'Changed Title',
            'content' => 'Changed content of the Blog Post'
        ];

        $this->put("/post/{$post->id}", $params)
            ->assertStatus(302)
            ->assertSessionHas('status');

        $this->assertEquals(session('status'), 'Blog Post Updated Successfully!!!');
        $this->assertDatabaseMissing('blog_posts', [
            'title' => 'New Title',
            'content' => 'New Content Of the Blog Post',
        ]);
        
    }

    public function testIfDeleteWorks()
    {
        $post = $this->createDummyPost();
        
        $this->delete("/post/{$post->id}")
            ->assertStatus(302)
            ->assertSessionHas('status');
        
        $this->assertEquals(session('status'), "Successfully Deleted Blog Post 1");

        
    }

    private function createDummyPost(): BlogPost
    {
        $post = new BlogPost();
        $post->title = 'New Title';
        $post->content = 'New Content Of the Blog Post';
        $post->save();

        return $post;
    }

}