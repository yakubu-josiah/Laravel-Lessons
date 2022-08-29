@extends('Layout.layout')
@section('title', 'Add Your Vlog')


@section('content')
    <form class="form-group" action="{{ route('post.store') }}" method="POST">
        @csrf
        @include('post.partials.form')
        <div><input type="submit" value="Create Blog" class="form-control btn btn-primary btn-block my-3 btn-lg"></div>
    </form>
@endsection