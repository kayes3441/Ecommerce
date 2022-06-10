@extends('master.front.master')

@section('title')
    Customer Dashboard
@endsection

@section('body')

    <div >
        <div class="page-header text-center" style="background-image: url('{{asset('/')}}front/assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title"><span></span></h1>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item"><a href="#">Customer Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
            </div><!-- End .container -->
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body" >
                        <div class="product-list-action" >
                            <ul><a href="" class="product-list">My account</a></ul>
                            <ul><a href="" class="product-list">My account</a></ul>
                            <ul><a href="" class="product-list">My account</a></ul>
                            <ul><a href="" class="product-list">My account</a></ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <table class="table table-bordered">
                            <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Order Id</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Payment Status</th>
                                <th>Payment Delivery Status</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>11</td>
                                <td>TK.21112</td>
                                <td>10.20.2020</td>
                                <td>Pending</td>
                                <td>Paid</td>
                                <td>Processing</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>11</td>
                                <td>TK.21112</td>
                                <td>10.20.2020</td>
                                <td>Pending</td>
                                <td>Paid</td>
                                <td>Processing</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>11</td>
                                <td>TK.21112</td>
                                <td>10.20.2020</td>
                                <td>Pending</td>
                                <td>Paid</td>
                                <td>Processing</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>11</td>
                                <td>TK.21112</td>
                                <td>10.20.2020</td>
                                <td>Pending</td>
                                <td>Paid</td>
                                <td>Processing</td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
