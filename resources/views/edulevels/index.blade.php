@extends('layout.index')

@section('title','Home')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edulevels</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Edulevels</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection


@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    Data Jenjang
                </div>
                <div class="pull-right">
                    <a href="" class="btn btn-success btn-sm">
                        <i class="fa fa-plus">Add</i> </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            @foreach($users as $row)
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->desc}}</td>
                            <td>
                                <a href="" class="btn-warning btn-sm">
                                    <i class="fa fa-edit"></i></a>
                                <a href="" class="btn-danger btn-sm">
                                <i class="fa fa-trash-o"></i></a>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>
        </div>



    </div>
</div>
@endsection