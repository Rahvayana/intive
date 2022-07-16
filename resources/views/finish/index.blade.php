@extends('layout')
@section('menu', 'Finished Product')
@section('sub_menu', 'List Finished Product')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive table-hover">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Unit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($finishes as $finish)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$finish->code}}</td>
                                <td>{{$finish->name}}</td>
                                <td>Rp. {{number_format($finish->price)}}</td>
                                <td>{{$finish->unit}}</td>
                                <td>
                                    <a href="{{ route('finish.show', $finish->code) }}" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
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
