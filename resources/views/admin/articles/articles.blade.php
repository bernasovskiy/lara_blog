@extends('layouts.app')

@section('content')
<div id="admin-articles-all" class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Статьи</h4></div>

                    <div class="panel-body">

                        <table class="table table-strip">
                            <thead>
                                <th>
                                    Миниатюра
                                </th>
                                <th>
                                    Название
                                </th>
                                <th>
                                    Изменить
                                </th>
                                <th>
                                    Удалить
                                </th>

                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td>
                                        	<img width=20 height=20 src="{{$article->preview}}">
                                        </td>
    									<td>
    										{{$article->title}}
    									</td>
                                        <td>
                                        	<form method="GET" action="{{action('ArticlesController@edit',['articles'=>$article->id])}}">
    										<input type="submit" value="Изменить" class="btn btn-warning">
                                            </form>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{action('ArticlesController@destroy',['articles'=>$article->id])}}">
    											<input type="hidden" name="_method" value="delete"/>
    											<input type="hidden" name="_token" value="{{csrf_token()}}"/>
    	                                        <input type="submit" value="Удалить" class="btn btn-danger">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if(Session::has('message'))
    					{{Session::get('message')}}
    					@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection