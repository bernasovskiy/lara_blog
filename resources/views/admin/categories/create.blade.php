@extends('layouts.app')

@section('content')
<div id="admin-category-create" class="content-section-a">
	<div class="container">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">
	        	<div class="panel panel-default">
	                <div class="panel-heading"><h4>Добавление категории</h4></div>

	                <div class="panel-body">
						@if(Session::has('message'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{Session::get('message')}}
						</div>
						@endif
						<form method="POST" action="{{action('CategoriesController@store') }}"/>
							Название категории<br>
							<input type="text" name="title"/><br><br>
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
							<input type="submit" value="Сохранить" class="btn btn-success"/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection