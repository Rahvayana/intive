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
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{$finish->name}}</td>
                        </tr>
                        <tr>
                            <td>Kode</td>
                            <td>:</td>
                            <td>{{$finish->code}}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>:</td>
                            <td>{{$finish->description}}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>:</td>
                            <td>Rp. {{number_format($finish->price)}}</td>
                        </tr>
                        <tr>
                            <td>Unit</td>
                            <td>:</td>
                            <td>{{$finish->unit}}</td>
                        </tr>
                    </table>
                </div>

            </div>
            <!-- end card-body-->
        </div>
        <!-- end card -->

    </div>
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
                                <th>Ingredient</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total_price=0;
                            @endphp
                            @foreach ($finishes as $finish)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$finish->code}}</td>
                                <td>{{$finish->name}}</td>
                                <td>Rp. {{number_format($finish->price)}}</td>
                                <td>{{$finish->unit}}</td>
                                <td>Rp. {{number_format($finish->wip_price)}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            @php    
                                $total_price+=$finish->wip_price
                            @endphp
                            @endforeach
                            <tr>
                                <th scope="row">Total</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rp. {{number_format($total_price)}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>  
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
