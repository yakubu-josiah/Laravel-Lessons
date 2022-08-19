@if ($loop->even)
<div><strong>{{ $key }}.{{ $post['title'] }}</strong></div>
@else
<div style=" background-color: silver;"><strong>{{ $key }}.{{ $post['title'] }}</strong></div>
@endif

<div>
    <form action="{{ route('post.destroy', [$post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete Post">            
    </form>
</div>