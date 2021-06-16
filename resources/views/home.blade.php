@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Home page</h1>
    <ul>
        <li><a href="{{route('categories')}}">Category</a></li>
        <li> <a href="{{route('posts')}}">Post</a></li>
    </ul>
</div>

@endsection
