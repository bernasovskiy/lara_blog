@extends('layouts.app')

@section('content')
<div id="admin-articles-create" class="content-section-a">
	<div class="container">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <div class="panel panel-default">
	                <div class="panel-heading"><h4>Добавить статью</h4></div>

	                <div class="panel-body">
						@if(Session::has('message'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{Session::get('message')}}
						</div>
						@endif
						<form method="POST" action="{{action('ArticlesController@store')}}" enctype="multipart/form-data">
							Превью:<br>
							<input type="file" name="preview"><br>
							Название статьи:<br>
							<input type="text" name="title"><br><br>
							Текст статьи:<br>
							<textarea class="form-control" rows="3" name="content"></textarea><br>
							Категория:<br>
							<select name="category_id">
								@foreach ($categories as $category)
								<option value="{{$category->id}}">{{$category->title}}</option>
								@endforeach
							</select><br><br>
							Разрешить комментарии?<br>
							<select name="comments_enable">
								<option value="1">Да</option>
								<option value="0">Нет</option>
							</select><br><br>
							Опубликовать?<br>
							<select name="public">
								<option value="1">Да</option>
								<option value="0">Нет</option>
							</select><br><br>

							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="submit" value="Сохранить" class="btn btn-success">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection