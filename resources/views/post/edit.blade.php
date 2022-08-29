@extends('Layout.layout')
@section('title', 'Update Vlog Post')


@section('content')
    <form  action="{{ route('post.update', [$posts->id]) }}" method="POST">
        @csrf
        @method('PUT')
          @include('post.partials.form')
        <div clas><input type="submit" value="Update Blog" class="form-control btn btn-primary btn-block my-3 btn-lg"></div>
    </form>
@endsection