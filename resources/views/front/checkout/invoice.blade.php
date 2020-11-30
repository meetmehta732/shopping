@extends('front.layouts.master')
<?php $total = 0; ?>
@section('content')
    <div>
        <div class="mt-4">
            <div class="row" style="">
                <div class="col-md-9">
                    <div><h3>INVOICE</h3></div>
                    <div>Company Name</div>
                    <div>Address</div>
                    <div>Rajkot , 36005</div>
                </div>
                <div class="col-md-3">
                    <img src="https://image.shutterstock.com/image-vector/fun-people-healthy-life-logo-260nw-560428081.jpg"
                         style="width: 100px;height: 100px;float: right">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col" style="flex-grow: 1">
                    <div><h4>Bill To : </h4></div>
                    <div>Customer Name</div>
                    <div>SunCity</div>
                    <div>Rajkot , 36005</div>
                </div>

                <div class="mt-4">
                    <div>Invoice No : 22323</div>
                    <div>Invoice Date : 15/11/2020</div>
                </div>
            </div>

        </div>

        <div class="content table-responsive table-full-width mt-4">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Qty</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($order->orderItems as $item)

                    <?php $total = $total + ($item->price * $item->quantity) ?>

                    <tr>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->price * $item->quantity }}</td>
                    </tr>

                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>
                        {{ $total }}
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="float-right">
                <button class="btn btn-sm" onclick="window.print()">
                    Print Invoice
                </button>
            </div>
        </div>
    </div>

@endsection
