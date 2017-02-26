
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
                            <label for="p_name" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="p_desc" class="col-lg-2 control-label">JAN</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" rows="3" id="jan" name="jan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price" class="col-lg-2 control-label">Unit Price</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>




@endsection
