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
                <form method="POST" action="{{ route('stock.store') }}">@csrf
                    <div class="form-group">
                        <label for="stock_type">Stock Type</label>
                        <select class="form-control" name="stock_type" id="stock_type">
                            <option value="">Select Stock Type</option>
                            <option value="raws">Raw</option>
                            <option value="wips">WIP</option>
                            <option value="finishes">FINISH</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock_type">Stock</label>
                                <select class="form-control" name="stock" id="stock">
                                    <option value="">Select Stock</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                    </div>
                                    <input type="disabled" class="form-control" id="stock_price">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="simpleinput">Qty</label>
                                <input type="number" id="qty" name="qty" onkeyup="calculate_price()" class="form-control" placeholder="Quantity">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Total Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                    </div>
                                    <input type="disabled" class="form-control" id="total_price">
                                </div>
                            </div>
                        </div>
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
@section('script')
<script>
    $(document).ready(function(){
        $('#stock_type').change(function(){ 
            var id=$(this).val();
            $.ajax({
                url : "/list-stock/"+id,
                method : "GET",
                async : true,
                dataType : 'json',
                success: function(data){
                    $("#stock").empty()
                    $("#stock").append("<option value=''>Select Stock</option>")
                    for (let index = 0; index < data.length; index++) {
                        $("#stock").append("<option value='"+data[index].code+"'>"+data[index].name+"</option>")
                    }
                }
            });
            return false;
        }); 
        $('#stock').change(function(){ 
            var id=$(this).val();
            var stock_type=$("#stock_type").val();
            $.ajax({
                url : "/detail-stock/"+id+"/"+stock_type,
                method : "GET",
                async : true,
                dataType : 'json',
                success: function(data){
                    console.log(data)
                    $("#stock_price").empty()
                    $("#stock_price").val(data.price)
                }
            });
            return false;
        }); 

    });
    function calculate_price(){
        $("#total_price").val($("#stock_price").val()*$("#qty").val())
    }
</script>
@endsection

