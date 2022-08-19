@extends('Layout.layout')
@section('title', 'Add Your Vlog')


@section('content')
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
            @include('post.partials.form')
        <div><input type="submit" value="Create Blog"></div>
    </form>
@endsection