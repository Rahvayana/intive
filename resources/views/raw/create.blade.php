@extends('layout')
@section('menu', 'Raw Product')
@section('sub_menu', 'Create Raw Product')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('raw.store') }}">@csrf
                    <div class="form-group">
                        <label for="simpleinput">Name</label>
                        <input type="text" id="simpleinput" name="name" class="form-control" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <label for="simpleinput1">Description</label>
                        <input type="text" id="simpleinput1" name="description" class="form-control" placeholder="Product Description">
                    </div>
                    <div class="form-group">
                        <label for="simpleinput2">Price</label>
                        <input type="text" id="simpleinput2" name="price" class="form-control" placeholder="Product Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Unit</label>
                        <select class="form-control" name="unit" id="exampleFormControlSelect1">
                            <option value="">Select Unit</option>
                            <option value="Buah">Buah</option>
                            <option value="Lusin">Lusin</option>
                            <option value="KG">KG</option>
                            <option value="Roll">Roll</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" >Submit!</button>
                </form>
            </div>
            <!-- end card-body-->
        </div>
        <!-- end card -->

    </div>
    <!-- end col -->
</div>
@endsection
