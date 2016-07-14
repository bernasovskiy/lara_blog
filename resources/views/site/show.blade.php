@extends('layouts.app')

@section('content')
<div id="article" class="content-section-a" style="border-top: 0">
	<div class="container">

		<div class="col-md-6 col-md-offset-3 text-center wrap_title">
			<img class="rotate" src="{{ URL::asset('Flatfy/img/icon/laptop.svg')}}" alt="Generic placeholder image">
			<h2>{{$article->title}}</h2>
			<p class="lead" style="margin-top:0">Дата статьи: {{$article->updated_at}}</p>

		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="wow fadeInDown">
				<p class="lead">{{$article->content}}</p>
			</div>
		</div>
	</div>
</div>

<div id="article_comments" class="content-section-a" style="border-top: 0">
	<div class="container">

		<div class="wrap_title">
			<div class="panel panel-default">
	                <div class="text-center panel-heading"><h3>Comments</h3></div>

	                <div class="panel-body">
	                    <table class="table table-striped">
							<tbody>
								@foreach($comments as $comment)
								<tr>
									<td><u>Автор: {{$comment->author}}</u><br>{{$comment->content}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
			</div>
		</div>
			@if($article->comments_enable==1)
				@include('site.comment')
			@endif
	</div>
</div>


@endsection