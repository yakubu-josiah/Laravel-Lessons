@extends('Layout.layout')
@section('title', 'Vlog Posts')



@section('content')


<h3>This Are The Blog Posts Published</h3>
@forelse($posts as $key => $post)
   @include('post.partials.post')
@empty
    <p>Oh sorry!! No  Blog found in this Page</p>
@endforelse


@endsection