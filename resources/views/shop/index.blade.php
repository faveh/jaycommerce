@extends('layouts.master')
@section('title')
    Home
@stop
@section('content')
<div class="content-top ">
    <div class="container ">
        @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div class="alert alert-success" id="charge-message">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
        @endif
        <div class="spec ">
            <h3>Home Option</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class="tab-head ">
            <nav class="nav-sidebar">
                <ul class="nav tabs ">
                    <li class="active"><a href="#tab1" data-toggle="tab">Cutlleries</a></li>
                    <li class=""><a href="#tab2" data-toggle="tab">Pots</a></li>
                    <li class=""><a href="#tab3" data-toggle="tab">Fruits & Vegetables</a></li>
                    <li class=""><a href="#tab4" data-toggle="tab">Breakfast & Cereal</a></li>
                </ul>
            </nav>
    <?php $i = 1;
            $tab = "tab";
     ?>
            <div class=" tab-content tab-content-t ">
                <div class="tab-pane active text-style" id="{{$tab.$i}}">
                @foreach($products->chunk(4) as $productChunk)
                <?php
                
                   $i++;
                
                
                ?>
                        <div class=" con-w3l">
                            @foreach($productChunk as $product)
                                <div class="col-md-3 m-wthree">
                                    <div class="col-m">
                                        <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                            <img src="{{$product->imagepath}}" class="img-responsive" alt="">
                                            <div class="offer"><p><span>Offer</span></p></div>
                                        </a>
                                        <div class="mid-1">
                                            <div class="women">
                                                <h6><a href="single.html">{{$product->title}}</a>( {{$product->size}} )</h6>
                                            </div>
                                            <div class="mid-2">
                                                <p ><label>$2.00</label><em class="item_price">${{$product->price}}</em></p>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="add">
                                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}"> <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            @endforeach

                                <?php
                               // }
                                                                ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    @endforeach

            </div>
        </div>

    </div>
</div>

<!--content-->
<div class="content-mid">
    <div class="container">

        <div class="col-md-4 m-w3ls">
            <div class="col-md1 ">
                <a href="kitchen.html">
                    <img src="{{URL::asset('img/images/co1.jpg')}}" class="img-responsive img" alt="">
                    <div class="big-sa">
                        <h6>New Collections</h6>
                        <h3>Season<span>ing </span></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls1">
            <div class="col-md ">
                <a href="hold.html">
                    <img src="{{URL::asset('img/images/co.jpg')}}" class="img-responsive img" alt="">
                    <div class="big-sale">
                        <div class="big-sale1">
                            <h3>Big <span>Sale</span></h3>
                            <p>It is a long established fact that a reader </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls">
            <div class="col-md2 ">
                <a href="kitchen.html">
                    <img src="{{URL::asset('img/images/co2.jpg')}}" class="img-responsive img1" alt="">
                    <div class="big-sale2">
                        <h3>Cooking <span>Oil</span></h3>
                        <p>It is a long established fact that a reader </p>
                    </div>
                </a>
            </div>
            <div class="col-md3 ">
                <a href="hold.html">
                    <img src="{{URL::asset('img/images/co3.jpg')}}" class="img-responsive img1" alt="">
                    <div class="big-sale3">
                        <h3>Vegeta<span>bles</span></h3>
                        <p>It is a long established fact that a reader </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--content-->
<!-- Carousel
  ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="kitchen.html"> <img class="first-slide" src="{{URL::asset('img/images/ba.jpg')}}" alt="First slide"></a>

        </div>
        <div class="item">
            <a href="care.html"> <img class="second-slide " src="{{URL::asset('img/images/ba1.jpg')}}" alt="Second slide"></a>

        </div>
        <div class="item">
            <a href="hold.html"><img class="third-slide " src="{{URL::asset('img/images/ba2.jpg')}}" alt="Third slide"></a>

        </div>
    </div>

</div><!-- /.carousel -->
@stop