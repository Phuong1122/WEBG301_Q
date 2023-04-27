@extends('front.layout.master')

@section('title', 'shop')


@section('body')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.blade.php"><i class="fa fa-home"></i>Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 products-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-categories">
                        @foreach($categories as $category)
                            <li><a href="shop/{{$category->name}}">{{$category->name}}</a></li>
                        @endforeach
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
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-list">
                    <div class="row">
                        @foreach($product as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="front/img/products/{{ $product->productImages[0]->path }}" alt="">
                                    
                                    @if($product->discount != null)
                                        <div class = "Sale">Sale</div>
                                    @endif

                                    <div class="icon">
                                        <i class="icon_heart_all"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="shop/product/{{ $product->id }}">+Quick View</a></li>
                                        <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="category-name">{{ $product->tag }}</div>
                                    <a href="#">
                                        <h5>{{$product->name}} </h5>
                                    </a>
                                    <div class="product-price">
                                        @if($product->discount != null)
                                            <span>${{ $product->price}}</span>
                                        @else
                                            ${{ $product->price }}
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{ $products->links() }}
            </div>
        </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

@endsection