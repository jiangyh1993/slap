@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This tis the laravel application</p>
    <p>
      @if(Auth::guest())
        <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
        <a href="/register" class="btn btn-success btn-lg" role="button">register</a>
      @endif
    </p>
  </div>
@endsection