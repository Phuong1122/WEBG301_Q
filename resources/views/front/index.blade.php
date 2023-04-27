@extends('front.layout.master')

@section('title', 'Home')

@section('body')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-item owl-carousel">
            <div class="single-hero-items set-bg" data-setgb="front/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Thanh Long</span>
                            <h1>Thanh Long dep trai</h1>
                            <p>Thanh Long dep trai qua</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale<span>100%</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-item owl-carousel">
            <div class="single-hero-items set-bg" data-setgb="front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Thanh Long</span>
                            <h1>Thanh Long dep trai</h1>
                            <p>Thanh Long dep trai qua</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale<span>100%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-1.jpg">
                        <div class="inner-text">
                            <h4>Thanh Long</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-2.jpg">
                        <div class="inner-text">
                            <h4>Thanh Long dep</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-3.jpg">
                        <div class="inner-text">
                            <h4>Thanh Long trai</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Thanh Long Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setgb="front/img/products/women-large.jpg">
                        <h2>Long</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="women">All</li>
                            <li class="item" data-tag="BoardGame chien thuat" data-category="women">BoardGame chien thuat</li>
                            <li class="item" data-tag="BoardGame doi khang" data-category="women">BoardGame doi khang</li>
                            <li class="item" data-tag="BoardGame nau an" data-category="women">BoardGame nau an</li>
                            <li class="item" data-tag="BoardGame tinh yeu" data-category="women">BoardGame tinh yeu</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">

                        @foreach($womenProducts as $womenProduct)
                        <div class="product-item item {{$womenProduct->tag}}">
                            <div class="pi-pic">
                                <img src="front/img/products/{{$womenProduct->productImages[0]->path  }}" alt="">
                                
                                @if($womenProduct->discount != null)
                                    <div class="sale"> Sale </div>
                                @endif  

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">{{$womenProduct->tag}}</div>
                            <a href="#">
                                <h5>{{$womenProduct->name}}</h5>
                            </a>
                                <div class="product-price">
                                    @if($womenProduct->discount != null)
                                        ${{$womenProduct->discount}}
                                        <span>{{$womenProduct->price}}</span>
                                    @else
                                    {{$womenProduct->price}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Thanh Long Banner Section End -->

    <!-- Thanh Long 1 Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-large set-bg" data-setgb="front/img/products/man-large.jpg">
                        <h2>Long</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="men">All</li>
                            <li class="item" data-tag="BoardGame chien thuat" data-category="men">BoardGame chien thuat</li>
                            <li class="item" data-tag="BoardGame doi khang" data-category="men">BoardGame doi khang</li>
                            <li class="item" data-tag="BoardGame nau an" data-category="men">BoardGame nau an</li>
                            <li class="item" data-tag="BoardGame tinh yeu" data-category="men">BoardGame tinh yeu</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel man">
                        @foreach($manProducts as $manProduct)
                        <div class="product-item item {{$menProduct->tag}}">
                            <div class="pi-pic">
                                <img src="front/img/products/{{$manProduct->productImages[0]->path  }}" alt="">
                                
                                @if($manProduct->discount != null)
                                    <div class="sale"> Sale </div>
                                @endif  

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">{{$manProduct->tag}}</div>
                            <a href="#">
                                <h5>{{$manProduct->name}}</h5>
                            </a>
                                <div class="product-price">
                                    @if($manProduct->discount != null)
                                        ${{$manProduct->discount}}
                                        <span>{{$manProduct->price}}</span>
                                    @else
                                    {{$manProduct->price}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Thanh Long 1 Banner Section End -->

@endsection