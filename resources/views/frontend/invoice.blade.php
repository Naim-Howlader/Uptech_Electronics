<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/invoice-style.css">
    <title>Billing Invoice - Webjourney</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
</head>
<body>

<!-- Invoice area Starts -->
<div class="invoice-area">
    <div class="invoice-wrapper">
        <div class="invoice-header">
            <h1 class="invoice-title" style="text-align:center;">Uptech Electronics</h1>
        </div>
        <div class="invoice-details">
            <div class="invoice-details-flex">
                <div class="invoice-single-details">
                    <h2 class="invoice-details-title">Bill To:</h2>
                    <ul class="details-list">
                        <li class="list">{{$order->name}}</li>
                        <li class="list"> <a href="#"> </a>{{$order->email}}</li>
                        <li class="list"> <a href="#"> {{$order->mobile}}</a> </li>
                    </ul>
                </div>
                <div class="invoice-single-details">
                    <h4 class="invoice-details-title">Ship To:</h4>
                    <ul class="details-list">
                        <li class="list"> <strong>Region: </strong> {{$order->region}}</li>
                        <li class="list"> <strong>City: </strong>{{$order->city}}</li>
                        <li class="list"> <strong>Address: </strong>{{$order->street.', '.$order->city.', '.$order->region}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="item-description">
            <h5 class="table-title">Include Services</h5>
            <table class="custom--table">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @php
                        $products = (json_decode($order->cart_details));
                    @endphp
                @foreach ($products as $product)
                @php
                    $total += $product->product_price*$product->product_quantity;
                @endphp
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_quantity}}</td>
                    <td>{{$product->product_price*$product->product_quantity}}</td>
                </tr>
                @endforeach
                <tr class="table_footer_row">
                    <td colspan="3"><strong>Subtotal</strong></td>
                    <td><strong>{{$total}}</strong></td>
                </tr>
                </tbody>
            </table>
        </div>
<br><br><br><br><br><br><br><br><br>
        <div class="item-description">
            <div class="table-responsive">
                <h5 class="table-title">Orders Details</h5>
                <table class="custom--table">
                    <thead class="head-bg">
                    <tr>
                        <th>Buyer Details</th>
                        <th>Date & Schedule</th>
                        <th>Amount Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <span class="data-span">Name:</span> {{$order->name}}<br>
                            <span class="data-span">Email:</span> {{$order->email}} <br>
                            <span class="data-span">Phone: </span> {{$order->mobile}} <br>
                            <span class="data-span">Transaction ID: </span> {{$order->transaction_id}} <br>
                            <span class="data-span">Invoice Id: </span> {{$order->invoice_id}} <br>
                            <span class="data-span">Address:</span> {{$order->street.', '.$order->city.', '.$order->region}}
                        </td>
                        <td>
                                <div>
                                    <h2>Order Date</h2>
                                    <span>{{$order->date}}</span>
                                </div>
                                <div>
                                    <h2>Delivery Date</h2>
                                    <span>{{date('Y-m-d')}}</span>
                                </div>

                        <td>
                            <span class="data-span"> Package Fee:</span>0.00 <br>
                            <span class="data-span"> Sub Total:</span>{{$total}} <br>
                            <span class="data-span"> Tax: </span>0.00 <br>
                            <b><span class="data-span"> Total:</span>{{$total}}</b> <br>
                            <span class="data-span">Payment Status: </span>Cash on delivery
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <footer>
            <h3 style="text-align: center">
                Copyright Uptech Electronics
            </h3>
        </footer>

    </div>
</div>

<!-- Invoice area end -->

</body>

</html>
