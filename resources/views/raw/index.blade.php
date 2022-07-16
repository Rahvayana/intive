@extends('layout')
@section('menu', 'Raw Product')
@section('sub_menu', 'List Raw Product')
@section('create')
<div class="dropdown d-none d-sm-inline-block">
    <a href="{{ route('raw.create') }}" class="btn waves-effect">
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
                                <th>Name</th>
                                <th>Price</th>
                                <th>Unit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($raws as $raw)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$raw->code}}</td>
                                <td>{{$raw->name}}</td>
                                <td>Rp. {{number_format($raw->price)}}</td>
                                <td>{{$raw->unit}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
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
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="vcenter">Hapus User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger btn-ok">Delete</button>
            </div>
        </div>
    </div>
  </div>
@endsection
@section('script')
<script>
    $('#confirm-delete').on('click', '.btn-ok', function(e) {
        var $modalDiv = $(e.delegateTarget);
        var id = $(this).data('recordId');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.post('/delete-user/' + id).then()
        setTimeout(function() {
            location.reload();            
        })
    });
    $('#confirm-delete').on('show.bs.modal', function(e) {
        var data = $(e.relatedTarget).data();
        $('.btn-ok', this).data('recordId', data.recordId);
    });
    </script>
@endsection
