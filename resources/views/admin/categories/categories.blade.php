@extends('layouts.app')

@section('content')
<div id="admin-categories" class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Категории</h4></div>

                    <div class="panel-body">

                        <table class="table table-strip">
                            <thead>
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
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            {{$category->title}}
                                        </td>
                                        <td>
                                            <form method="GET" action="{{action('CategoriesController@edit',['categories'=>$category->id])}}">
                                                <input type="submit" value="Изменить" class="btn btn-info">
                                            </form>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{action('CategoriesController@destroy',['categories'=>$category->id])}}">
                                                <input type="hidden" name="_method" value="delete"/>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                <input type="submit" value="Удалить" class="btn btn-danger">
                                            </form>
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