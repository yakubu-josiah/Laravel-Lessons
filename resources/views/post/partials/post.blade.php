@if ($loop->even)
<div><strong>{{ $key }}.{{ $post['title'] }}</strong></div>
@else
<div style=" background-color: silver;"><strong>{{ $key }}.{{ $post['title'] }}</strong></div>
@endif

<div>
    <form action="{{ route('post.destroy', [$post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="container">
        <input type="submit" value="Delete Post" class="btn btn-md btn-secondary">            
        </div>
    </form>
</div>