@extends('default.layouts.layout')

@section('header')

@endsection

@section('sidebar')

@endsection

@section('content')
		<div class="jumbotron">

				@forelse ($articles as $article)
            <h2 class="blog-post-title"><a href="{{ route('article',[$article->id]) }}">{{ $article->name }}</a></h2>
						{!!$article->text!!}

				@empty

					<h2 class="blog-post-title">Записей нет!</h2>

				@endforelse

    </div>
@endsection
