@extends('master')
@section('title', 'Home::Shipping System!')

@section('content')

    <div class="content">
        <div class="col-md-4">
            <div class="panel-heading">
                <h2> Products </h2>
            </div>
        </div>
        <div class="col-md-8">
            <div class="menu pull-right">
                <a class="btn btn-success" href="{{ url('/add_products') }}">Add Product</a>
            </div>
        </div>

        @if ($products->isEmpty())
            <p>There is no Product</p>
        @else

        <div class="entry-table">
            <table class="responstable">

                <tr>
                    <th>Date</th>
                    <th>Product Name</th>
                    <th>JAN</th>
                    <th>Price</th>
                </tr>

                @foreach($products as $product)
                <tr>
                    <td>{{ $product->created_at->format('d M Y - H:i:s') }}</td>
                    <td>{{ $product->p_name }}</td>
                    <td>{{ $product->jan }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
                @endforeach

            </table>

        </div> <!-- /Entry Table -->

        @endif

    </div> <!-- /content -->

@endsection