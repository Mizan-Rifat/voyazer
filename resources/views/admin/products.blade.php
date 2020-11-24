@extends('voyager::master')

@section('page_title','Products')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            Products
        </h1>
       
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" name="row_id">
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Ingredients
                                        </th>
                                        <th>
                                            Category
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Active
                                        </th>
                                        <th class="actions text-right dt-not-orderable">{{ __('voyager::generic.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                                <td>
                                                    <input type="checkbox" name="row_id">
                                                </td>
                                                <td>
                                                    {{$product->name}}
                                                </td>
                                                <td>
                                                    <img src="{{ Voyager::image( $product->image ) }}" style="width:100px">
    
                                                </td>
                                                <td>
                                                    <ul style="padding-left: 16px;">
                                                        @foreach($product->ingredients as $ingredient)
                                                            <li>{{$ingredient->name}}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>
                                                    {{$product->category['name']}}
                                                </td>
                                                <td>
                                                    {{$product->description}}
                                                </td>
                                                <td>
                                                    {{$product->price}}$
                                                </td>
                                                <td>
                                                    {{$product->active ? 'Yes' : 'No'}}
                                                </td>
                                                <td>
                                                    
                                                    <a href="button" class="btn btn-warning action-btn ">
                                                        <i class="far fa-user pr-2" aria-hidden="true"></i>
                                                        View
                                                    </a>

                                                    <a href="/products/edit/{{$product->id}}" class="btn btn-primary action-btn ">
                                                        <i class="far fa-user pr-2" aria-hidden="true"></i>
                                                        Edit
                                                    </a>

                                                    <a href="button" class="btn btn-danger action-btn ">
                                                        <i class="far fa-user pr-2" aria-hidden="true"></i>
                                                        Delete
                                                    </a>
    
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

   
@stop
