
<div class="container justify-center">
   
    <div class="mx-2 my-2 ">
        <h3> <a href="{{ route('post.show', [$post->id] )}}" class=" text-decoration-none"> {{ $post['title'] }}</a> </h3>
    </div>

    <div class="mb-4">
        <a href="{{ route('post.edit', [$post->id])}}" class="btn btn-sm btn-secondary">Edit Post</a>
        <form action="{{ route('post.destroy', [$post->id]) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete Post" class="btn btn-sm btn-secondary">            
        </form>
    </div>
</div>