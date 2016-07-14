@extends('layouts.app')

@section('content')
<div id="admin-dash" class="content-section-a">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h3>Dashboard</h3>
			</div>

			<div class="col-sm-4 wow fadeInDown text-center">
				<img class="rotate" src="{{ URL::asset('Flatfy/img/icon/tweet.svg')}}" alt="Generic placeholder image">
				<h3>Статьи</h3>
				<p><a href="/adminzone/articles" class="btn btn-embossed btn-primary view" role="button">Все статьи</a></p>
				<p><a href="/adminzone/articles/create" class="btn btn-embossed btn-primary view" role="button">Добавить статью</a></p>
			</div>

			<div class="col-sm-4 wow fadeInDown text-center">
				<img class="rotate" src="{{ URL::asset('Flatfy/img/icon/picture.svg')}}" alt="Generic placeholder image">
				<h3>Категории</h3>
				<p><a href="/adminzone/categories" class="btn btn-embossed btn-primary view" role="button">Все категории</a></p>
				<p><a href="/adminzone/categories/create" class="btn btn-embossed btn-primary view" role="button">Добавить категорию</a></p>
			</div>

			<div class="col-sm-4 wow fadeInDown text-center">
				<img class="rotate" src="{{ URL::asset('Flatfy/img/icon/retina.svg')}}" alt="Generic placeholder image">
				<h3>Комментарии</h3>
				<p><a href="/adminzone/comments" class="btn btn-embossed btn-primary view" role="button">Управление комментариями</a></p>
			</div>

        </div>
	</div>
</div>
@endsection