@extends('layouts.app')

@section('content')
<div id="articles" class="content-section-b" style="border-top: 0">
	<div class="container">

		<div class="col-md-6 col-md-offset-3 text-center wrap_title">
			<h2>What is?</h2>
			<p class="lead" style="margin-top:0">Articles</p>

		</div>

		<div class="row">
			@foreach($articles as $article)
				<div class="col-sm-4 wow fadeInDown text-center">
					<img class="rotate" src="{{ URL::asset('Flatfy/img/icon/laptop.svg')}}" alt="Generic placeholder image">
					<h3>{{$article->title}}</h3>
					<p class="lead">{{str_limit($article->content, 30)}}</p>
					<p><a href="{{action('HomeController@show',['id'=>$article->id])}}" class="btn btn-embossed btn-primary view" role="button">Дата статьи: {{$article->updated_at}}</a></p>
				</div><!-- /.col-lg-4 -->
								<!--<img src="{{$article->preview}}">-->
			@endforeach
		</div><!-- /.row -->

	</div>
</div>
@endsection