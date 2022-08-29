@extends('Layout.layout')
@section('title', $posts['title'])





@section('content')  
    <h1>{{ $posts['title'] }}</h1>
    <h4>{{ $posts['content'] }}</h4>
    @php
        $a = false;
    @endphp
    @while (!$a) 
        <p>{{ $posts['title']. ' on the other hand, we denounce with righteous indignation and dislike 
        men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by 
        desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame 
        belongs to those who fail in their duty through weakness of will, which is the same as saying 
        through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. 
        In a free hour, when our power of choice is untrammelled and when nothing prevents our being able 
        to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain 
        circumstances and owing to the claims of duty or the obligations of business it will frequently 
        occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always 
        holds in these matters to this principle of selection: he rejects pleasures to secure other greater 
        pleasures, or else he endures pains to avoid worse pains...' }}</p>
        @php
            if(random_int(0, 1) === 1) $a = true
        @endphp
    @endwhile 

    <p class="pt_t text-success"><i>This BlogPost Was Added {{ $posts->created_at->diffForHumans() }}!!</i></p>
    @if (now()->diffInMinutes($posts->created_at) < 5)
    <div class="alert alert-info">New Post!!</div>        
    @endif
    
@endsection