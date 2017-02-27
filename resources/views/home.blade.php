@extends('master')
@section('title', 'Home::Shipping System!')

@section('content')

    <div class="content">

        <?php
            $stock = $stockItem;
        ?>

        <div class="entry-table">
            <table class="responstable">

                <tr>
                    <th>Date</th>
                    <th>Item Name</th>
                    <th>JAN</th>
                    <th>Previous</th>
                    <th>Arrival of goods</th>
                    <th>Shipment</th>
                    <th>New residues</th>
                </tr>

                <tr>
                    <td>Date</td>
                    <td>Motherboard</td>
                    <td>Computer</td>
                    <td>10</td>
                    <td>05</td>
                    <td>-</td>
                    <td>15</td>
                </tr>

                <tr>
                    <td>Keyboard</td>
                    <td>Keyboard(Key)</td>
                    <td>15</td>
                    <td>07</td>
                    <td>-</td>
                    <td>22</td>
                </tr>

                <tr>
                    <td>Motherboard</td>
                    <td>Computer</td>
                    <td>22</td>
                    <td>-</td>
                    <td>9</td>
                    <td>13</td>
                </tr>

            </table>

        </div> <!-- /Entry Table -->

    </div> <!-- /content -->

@endsection