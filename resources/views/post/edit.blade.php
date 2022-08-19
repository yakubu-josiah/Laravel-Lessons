@extends('Layout.layout')
@section('title', 'Update Vlog Post')


@section('content')
    <form action="{{ route('post.update', [$posts->id]) }}" method="POST">
        @csrf
        @method('PUT')
          @include('post.partials.form')
        <div><input type="submit" value="Update Blog"></div>
    </form>
@endsection