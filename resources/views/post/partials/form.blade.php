
<div><input type="text" name="title" value="{{ old('title', optional($posts ?? null)->title) }}"></div>
{{-- A field specific error display --}}
@error('title')
<div> {{ $message }} </div>
@enderror
<div><textarea name="content" cols="30" rows="10" placeholder="Write here...">{{ old('content', optional($posts ?? null)->content) }}</textarea></div>
@if($errors->any())
<div>  
    @foreach ($errors->all() as $error)
    <ul>
        <li>{{ $error }}</li>
    </ul>  
    @endforeach
</div>
@endif