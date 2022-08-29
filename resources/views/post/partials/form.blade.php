
<div class="form-group">
    <label for="title" class="form-label fs-5">Post Title</label>
    <div class=""><input type="text" name="title" value="{{ old('title', optional($posts ?? null)->title) }}" class="form-control"></div>
</div>
    {{-- A field specific error display --}}
    @error('title')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror

<div class="form-group">
    <label for="content" class="form-label fs-5">Content</label>
    <div><textarea rows="5"class="form-control" name="content" placeholder="Write here...">{{ old('content', optional($posts ?? null)->content) }}</textarea></div>
</div>
    @if($errors->any())

    <div class="mb-1">  
        @foreach ($errors->all() as $error)
        <ul class="list-group">
            <li class="list-group-item list-group-item-warning ">{{ $error }}</li>
        </ul>  
        @endforeach
    </div>
    @endif
