@extends('layouts.function')
@section('title', '详情页')
@section('content')



    <!-- navbar bottom -->
    <div class="navbar-bottom">
        <div class="row">
            <div class="col s2">
                <a href="index.html"><i class="fa fa-home"></i></a>
            </div>
            <div class="col s2">
                <a href="wishlist.html"><i class="fa fa-heart"></i></a>
            </div>
            <div class="col s4">
                <div class="bar-center">
                    <a href="#animatedModal" id="cart-menu"><i class="fa fa-shopping-basket"></i></a>
                    <span>2</span>
                </div>
            </div>
            <div class="col s2">
                <a href="contact.html"><i class="fa fa-envelope-o"></i></a>
            </div>
            <div class="col s2">
                <a href="#animatedModal2" id="nav-menu"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </div>
    <!-- end navbar bottom -->



    <!-- wishlist -->
    <div class="wishlist section">
        <div class="container">
            <div class="pages-head">
                <h3>PRODUCT</h3>
            </div>

            <div class="content">

                <div class="cart-1">
                    <div class="row">
                        <div class="col s5">
                            <h5>Image</h5>
                        </div>
                        <div class="col s7">
                            <img src="{{$goodinfo['g_img']}}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s5">
                            <h5>Name</h5>
                        </div>
                        <div class="col s7">
                            <h5><a href="">{{$goodinfo->g_name}}</a></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s5">
                            <h5>Stock Status</h5>
                        </div>
                        <div class="col s7">
                            <h5>In Stock</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s5">
                            <h5>Price</h5>
                        </div>
                        <div class="col s7">
                            <h5>${{$goodinfo->g_jiage}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s5">
                            <h5>Action</h5>
                        </div>
                        <div class="col s7">
                            <h5><i class="fa fa-trash"></i></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col 12">
                            <button class="btn button-default">SEND TO CART</button>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

            </div>

        </div>
    </div>
    <!-- end wishlist -->

    <!-- loader -->
    <div id="fakeLoader"></div>
    <!-- end loader -->



@endsection