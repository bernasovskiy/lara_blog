@extends('layouts.app')

@section('content')
<div id="admin-articles-edit" class="content-section-a">
	<div class="container">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <div class="panel panel-default">
	                <div class="panel-heading">Добавить статью</div>

	                <div class="panel-body">
						@if(Session::has('message'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{Session::get('message')}}
						</div>
						@endif
						<form method="POST" action="{{action('ArticlesController@update',['articles'=>$article->id])}}" enctype="multipart/form-data">
							<input type="hidden" name="_method" value="put">
							Превью:<br>
							@if(!empty($article->preview))
							<img src="{{$article->preview}}">
							@endif
							<input type="file" name="preview"><br>
							Название статьи:<br>
							<input type="text" name="title" value="{{$article->title}}"><br><br>
							Текст статьи:<br>
							<textarea name="content">{{$article->content}}</textarea><br><br>
							Категория:<br>
							<select name="category_id">
							@foreach($categories as $category)
							@if($article->category_id==$category->id)
							<option value="{{$category->id}}" selected>{{$category->title}}</option>
							@else
							<option value="{{$category->id}}">{{$category->title}}</option>
							@endif
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
							<!--<h2>Мета</h2>
							description:<br>
							<input type="text" name="meta_description"><br>
							keywords:<br>
							<input type="text" name="meta_keywords"><br>-->
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="submit" value="Сохранить" class="btn btn-success">
							<a class="btn btn-info" href="/adminzone/articles" role="button">Все статьи</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection