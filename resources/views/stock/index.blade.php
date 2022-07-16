@extends('layout')
@section('menu', 'Stocks')
@section('sub_menu', 'List Stocks')
@section('create')
<div class="dropdown d-none d-sm-inline-block">
    <a href="{{ route('stock.create') }}" class="btn waves-effect">
        <i class="mdi mdi-plus"></i> Create New
    </a>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" style="font-weight: bold">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive table-hover">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Stock</th>
                                <th>Total Price</th>
                                <th>Type</th>
                                <th>Source</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stocks as $stock)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$stock->code}}</td>
                                <td>{{$stock->stock}}</td>
                                <td>{{number_format($stock->total_price)}}</td>
                                <td>{{$stock->type}}</td>
                                <td>{{$stock->source}}</td>
                                <td>{{$stock->status}}</td>
                                <td>
                                    <a href="{{ route('wip.show', $stock->id) }}" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
                                    <a href="#" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-trash-can"></i></a>
                                </td>
                            </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- end card-body-->
        </div>
        <!-- end card -->

    </div>
    <!-- end col -->
</div>
@endsection
