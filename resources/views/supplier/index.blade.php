@extends('master')
@section('title', 'Suppliers::Shipping System!')

@section('content')

    <div class="content">
        <div class="col-md-4">
            <div class="panel-heading">
                <h2> Suppliers </h2>
            </div>
        </div>
        <div class="col-md-8">
            <div class="menu pull-right">
                <a class="btn btn-success" href="{{ url('/add_products') }}">Add Product</a>
                <a class="btn btn-success" href="{{ url('/add_buyers') }}">Add Buyer</a>
                <a class="btn btn-success" href="{{ url('/add_suppliers') }}">Add Supplier</a>
            </div>
        </div>

        @if ($suppliers->isEmpty())
            <p>There is no Supplier</p>
        @else

        <div class="entry-table">
            <table class="responstable">

                <tr>
                    <th>Date</th>
                    <th>Supplier Name</th>
                    <th>Address</th>
                </tr>

                @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->created_at->format('d M Y - H:i:s') }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->address }}</td>
                </tr>
                @endforeach

            </table>

        </div> <!-- /Entry Table -->

        @endif

    </div> <!-- /content -->

@endsection