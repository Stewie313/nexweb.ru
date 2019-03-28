@extends('default.layouts.layout')

@section('header')

@endsection

@section('sidebar')

@endsection

@section('content')
		<div class="jumbotron">


            <br><a href="{{ route('articles') }}"><- Назад к постам!</a><h2 class="blog-post-title">{{ $article->name }}</h2>
						{!!$article->text!!}


    </div>
@endsection
