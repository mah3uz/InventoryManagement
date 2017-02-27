
@extends('master')
@section('title', 'Add Products::Shipping System!')
@section('content')

    <div class="container-fluid content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="post">

                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <fieldset>
                        <legend>Entry a new product</legend>
                        <div class="form-group">
                            <label for="p_name" class="col-lg-2 control-label">Product</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="product_id" name="product_id" placeholder="Name">
                                    @foreach($products as $product)
                                        <option value="<?php echo $product->id; ?>"><?php echo $product->p_name; ?></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="p_desc" class="col-lg-2 control-label">Supplier</label>
                            <div class="col-lg-10">
                                <select class="form-control" rows="3" id="supplier_id" name="supplier_id">
                                    @foreach($suppliers as $supplier)
                                        <option value="<?php echo $supplier->id; ?>"><?php echo $supplier->name; ?></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price" class="col-lg-2 control-label">Quantity</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>




@endsection