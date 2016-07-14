@extends('layouts.app')

@section('content')
<div id="admin-category-edit" class="content-section-a">
	<div class="container">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">
	        	<div class="panel panel-default">
	                <div class="panel-heading"><h4>Изменение категории</h4></div>

	                <div class="panel-body">
						@if(Session::has('message'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{Session::get('message')}}
						</div>
						@endif
						<form method="POST" action="{{action('CategoriesController@update',['categories'=>$category->id])}}"/>
							Название категории<br>
							<input type="text" name="title" value="{{$category->title}}"/><br><br>
							<input type="hidden" name="_method" value="put"/>
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
							<input type="submit" value="Сохранить" class="btn btn-success">
							<a class="btn btn-info" href="/adminzone/categories" role="button">Все категории</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection