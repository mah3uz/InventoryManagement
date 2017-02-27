@extends('master')
@section('title', 'Buyers::Shipping System!')

@section('content')

    <div class="content">
        <div class="col-md-4">
            <div class="panel-heading">
                <h2> Buyers </h2>
            </div>
        </div>
        <div class="col-md-8">
            <div class="menu pull-right">
                <a class="btn btn-success" href="{{ url('/add_buyers') }}">Add Buyer</a>
            </div>
        </div>

        @if ($buyers->isEmpty())
            <p>There is no Buyer</p>
        @else

            <div class="entry-table">
                <table class="responstable">

                    <tr>
                        <th>Date</th>
                        <th>Buyer Name</th>
                        <th>Address</th>
                    </tr>

                    @foreach($buyers as $buyer)
                        <tr>
                            <td>{{ $buyer->created_at->format('d M Y - H:i:s') }}</td>
                            <td>{{ $buyer->name }}</td>
                            <td>{{ $buyer->address }}</td>
                        </tr>
                    @endforeach

                </table>

            </div> <!-- /Entry Table -->

        @endif

    </div> <!-- /content -->

@endsection