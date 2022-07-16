@extends('layout')
@section('menu', 'Admins')
@section('sub_menu', 'List Admins')
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->role}}</td>
                                <td>
                                    <a href="{{ route('wip.show', $admin->id) }}" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
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
