@extends('layout')
@section('menu', 'WIP Product')
@section('sub_menu', 'List WIP Product')
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
                            @foreach ($wips as $wip)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$wip->code}}</td>
                                <td>{{$wip->name}}</td>
                                <td>Rp. {{number_format($wip->price)}}</td>
                                <td>{{$wip->unit}}</td>
                                <td>
                                    <a href="{{ route('wip.show', $wip->code) }}" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
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
