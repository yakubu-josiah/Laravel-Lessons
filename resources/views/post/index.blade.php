@extends('Layout.layout')
@section('title', 'Vlog Posts')



@section('content')


<div class="h3">
    <h3 class="mb-4">List of All Blog Posts Published</h3>
</div>

@forelse($posts as $key => $post)
   @include('post.partials.post')
@empty
    <p>Oh sorry!! No  Blog found in this Page</p>
@endforelse


@endsection