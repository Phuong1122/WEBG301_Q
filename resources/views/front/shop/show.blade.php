@extends('front.layout.master')

@section('title','Product')

@section('body')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.blade.php"><i class="fa fa-home"></i>Home</a>
                        <a href="shop.blade.php">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-categories">
                            <li><a href="#">BoardGame chien thuat</a></li>
                            <li><a href="#">BoardGame chien thuat</a></li>
                            <li><a href="#">BoardGame chien thuat</a></li>
                            <li><a href="#">BoardGame chien thuat</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>
                         <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin" > 
                                    Thanh
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-calvin" > 
                                    Thanh
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-calvin" > 
                                    Thanh
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-calvin" > 
                                    Thanh
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="front/img/products/{{$product->productImages[0]->path}}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">

                                    @foreach($product->productImages as $productImage)
                                    <div class="pt active" data-imgbigurl="front/img/products/{{$productImage->path}}">
                                        <img src="front/img/products/{{$productImage->path}}" alt=""></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>{{$product->tag}}</span>
                                    <h3>{{$product->name}}</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">

                                    @for($i = 1; $1 <= 5; $1++)
                                        <i class="fa fa-star"></i>
                                    @else
                                        <i class="fa fa-star-0"></i>
                                    @endif
                                    @endfor 

                                    <span>({{ count($product->productComments)}})</span>
                                </div>
                                <div class="pd-desc">
                                    <p>Thanh Long dep trai</p>
                                    <h4>1tr$</h4>
                                </div>
                                <div class="quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                        <a href="#" class="primary-btn pd-cart"> Add To Cart</a>
                                    </div>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span>: {{ $product->productsCategory->name }}</li>
                                    <li><span>TAGS</span>:{{ $product->tag }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section Begin -->

@endsection