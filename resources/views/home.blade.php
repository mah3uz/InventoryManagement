@extends('master')
@section('title', '入出荷システム')

@section('content')

    <div class="content">



        <div class="entry-table">
            <table class="responstable">

                <tr>
                    <th>Date</th>
                    <th>Item Name</th>
                    <th>JAN</th>
                    <th>Previous</th>
                    <th>Arrival</th>
                    <th>Shipment</th>
                    <th>New residues</th>
                </tr>
                <?php

                    $product_stock = array();

                    foreach($total_records as $record) {

                        $productID = $record->product_id;
                        if(!isset($product_stock[$productID])) {
                            $product_stock[$productID] = 0;
                        }
                        $initial_stock = $product_stock[$productID];

                        if(Schema::hasColumn($record->getTable(), 'supplier_id')){
                            $product_stock[$productID] += $record->quantity;
                        }else{
                            $product_stock[$productID] -= $record->quantity;
                        }

                        $ending_stock = $product_stock[$productID];

                ?>

                <tr>
                    <td>{{ $record->created_at->format('d M Y - H:i:s') }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->jan }}</td>
                    <td><?php echo $initial_stock;?></td>
                    <td>{{ $record->quantity }}</td>
                    <td>{{ $record->quantity }}</td>
                    <td><?php echo $ending_stock;?></td>
                </tr>

                <?php
                    }
                ?>

            </table>

        </div> <!-- /Entry Table -->

    </div> <!-- /content -->

@endsection