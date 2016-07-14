@extends('layouts.app')
@section('content')
<div id="admin-comment" class="content-section-a">
	<div class="container">
		<div class="row">

        	<div class="col-md-10 col-md-offset-1">
	            <div class="panel panel-default">
	                <div class="panel-heading"><h4>Комментарии</h4></div>

	                <div class="panel-body">

	                    <table class="table table-striped">
	                        <thead>
	                        		<th>Статья</th>
									<th>Автор</th>
									<th>Комментарий</th>
									<th>Дата</th>
									<th>Статус</th>
									<th>Действие</th>
							</thead>
							<tbody>
								@foreach($comments as $comment)
								<tr>
									<td>{{$comment->article->title}}</td>
									<td>{{$comment->author}}</td>
									<td><p></p>{{$comment->content}}</p></td>
									<td>{{$comment->created_at}}</td>
									<td>{{$comment->public}}</td>
									<td>
									<p><a href="{{action('CommentsController@published',['id'=>$comment->id])}}" class="btn btn-embossed btn-success view" role="button">Опубликовать</a></p>
									<p><a href="{{action('CommentsController@delete',['id'=>$comment->id])}}" class="btn btn-embossed btn-danger view" role="button">Удалить</a></p>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection