@extends('client.index')
@section('title', 'Trang chủ')

@section('contents')
{{-- @if(!empty($categories || $products)) --}}
{{-- @foreach ($categories as $item) --}}
    <section class="content">
        <div class="container">
            <!-- start voucher-->
            <div class="voucher">

                <div class="col-lg-4  img_voucher">
                    <div class="img_effect ">
                        <a href="#" title="Banner 1">
                            <img class="image_voucher" src="frontend/images/main-image/banner_1.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4  img_voucher">
                    <div class="img_effect ">
                        <a href="#" title="Banner 1">
                            <img class="image_voucher" src="frontend/images/main-image/banner_1.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4  img_voucher">
                    <div class="img_effect ">
                        <a href="#" title="Banner 1">
                            <img class="image_voucher" src="frontend/images/main-image/banner_1.jpg">
                        </a>
                    </div>
                </div>

            </div>
            <!-- end voucher-->

            <!-- start Sản phẩm bán chạy -->
            <div class="product">
                <div class="title_top_menu">
                    <span class="title-head">
                        <a href="#" class="dk" title="Sản phẩm bán chạy">Sản phẩm bán chạy nhất</a>

                    </span>
                </div>
                <div class="product_wap owl-carousel ">
                    @foreach ($products as $item)
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart">
                                                    <span class="badge badge-danger" style="background-color: #ff8e4a;">{{ $item->sale }}%</span>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="{{ $item->name }}">
                                            <img class="lazyload loaded" src="{{ $item->image }}">

                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="{{ $item->name }}">{{ $item->name }}</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">{{ ($item->price - ($item->price* (($item->sale) /100)) ) }}₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del>{{ $item->price }} ₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{--
                        <div class="product_border hide-pro">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <i class="far fa-heart">
                                                    <span class="badge badge-danger" style="background-color: #ff8e4a;">{{ $item->sale }}%</span>
                                                </i>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                             <span class="badge badge-danger" style="background-color: #ff8e4a;">{{ $item->sale }}%</span>

                                            <img class="lazyload loaded" src="{{ $item->image }}">

                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="{{ $item->name }}">
                                                {{ $item->name }}
                                                </a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">
                                                    {{ ($item->price - ($item->price* (($item->sale) /100)) ) }}
                                                </span>
                                                <span class="price product-price-old">
                                                    <del>{{ $item->price }}</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}
                    </div>
                    <!-- end product -->
                    @endforeach
                </div>

            </div>
            <!-- end Sản phẩm bán chạy -->

            <div class="product show-product">
                <div class="title_top_menu">
                    <span class="title-head">
                        <a href="#" class="dk" title="Đồ khô">Hoa quả trong nước</a>
                        <a href="#" class="xem-them" title="Xem thêm">Xem thêm <i class="fa fa-caret-right"></i></a>
                    </span>
                </div>
                <div class="pro_do_kho">
                    @foreach ($cateHoaQuaSay as $item)
                    <div class="product_border">
                        <div class="product-box-h">
                            <div class="border_in">
                                <div class="icon_pro">
                                    <div>
                                        <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden" href="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <i class="far fa-heart">
                                            <span class="badge badge-danger" style="background-color: #ff8e4a;">{{ $item->sale }}%</span>
                                        </i>
                                    </div>
                                </div>
                                <div class="product-thumbnail">
                                    <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="{{ $item->name }}">
                                        <img class="lazyload loaded" src="{{ $item->image }}">
                                    </a>
                                    <div class="pro_action">
                                        <form action="" method="post">
                                            <input type="hidden" name="" value="">
                                            <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="height_name" href="#" title="{{ $item->name }}">{{ $item->name }}</a>
                                    </h3>
                                    <div class="product-hides">
                                        <div class="price-box clearfix">
                                            <span class="price product-price">{{ ($item->price - ($item->price* (($item->sale) /100)) ) }}₫/kg</span>
                                            <span class="price product-price-old">
                                                <del>{{ $item->price }}₫/kg</del>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
            {{-- start rau củ quả --}}
            <div class="product">
                <div class="title_top_menu">
                    <span class="title-head">
                        <a href="#" class="dk" title="Sản phẩm bán chạy">Rau củ quả</a>
                    </span>
                </div>
                <div class="product_wap owl-carousel ">
                    @foreach ($cateRC as $item)
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <i class="far fa-heart">
                                                <span class="badge badge-danger" style="background-color: #ff8e4a;">{{ $item->sale }}%</span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="{{ $item->image }}">

                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="{{ $item->name }}">{{ $item->name }}</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">{{ ($item->price - ($item->price* (($item->sale) /100)) ) }}₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del>{{ $item->price }}₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end product -->
                    @endforeach
                </div>

            </div>
            {{-- end rau củ quả --}}

            {{-- <div class="product hidden-product">
                <div class="title_top_menu ">
                    <span class="title-head">
                        <a href="#" class="dk" title="Đồ khô">{{  }}</a>
                    </span>
                </div>
                <div class="product_wap owl-carousel ">
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                           <i class="far fa-heart">
                                                <span class="badge badge-danger" style="background-color: #ff8e4a;">{{ $item->sale }}%</span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end product -->
                </div>


            </div> --}}

            <div class="product show-product">
                <div class="title_top_menu">
                    <span class="title-head">
                        <a href="#" class="dk" title="Đồ khô">Đồ khô</a>
                        <a href="#" class="xem-them" title="Xem thêm">Xem thêm <i class="fa fa-caret-right"></i></a>
                    </span>
                </div>
                <div class="pro_do_kho">
                    @foreach ($cateTN as $item)
                    <div class="product_border">
                        <div class="product-box-h">
                            <div class="border_in">
                                <div class="icon_pro">
                                    <div>
                                        <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden" href="">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <i class="far fa-heart">
                                            <span class="badge badge-danger" style="background-color: #ff8e4a;">{{ $item->sale }}%</span>
                                        </i>
                                    </div>
                                </div>
                                <div class="product-thumbnail">
                                    <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="{{ $item->name }}">
                                        <img class="lazyload loaded" src="{{ $item->image }}">

                                    </a>
                                    <div class="pro_action">
                                        <form action="" method="post">
                                            <input type="hidden" name="" value="">
                                            <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="height_name" href="#" title="{{ $item->name }}">{{ $item->name }}</a>
                                    </h3>
                                    <div class="product-hides">
                                        <div class="price-box clearfix">
                                            <span class="price product-price">{{ ($item->price - ($item->price* (($item->sale) /100)) ) }}₫/kg</span>
                                            <span class="price product-price-old">
                                                <del>{{ $item->price }}₫/kg</del>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
            <!-- end đồ khô -->
        </div>

        <div class="content-buttom show-product">
            <div class="img flex">
                <img src="frontend/images/main-image/bg_left_body.png" alt="">
                <img src="frontend/images/main-image/bg_right_body.png" alt="">
            </div>

            <div class="container content_product_relative">

                <div class="product">
                    <div class="title_top_menu">
                        <span class="title-head">
                            <a href="#" class="dk" title="Rau quả">Thịt đông lạnh</a>
                            <a href="#" class="xem-them" title="Xem thêm">Xem thêm <i class="fa fa-caret-right"></i></a>
                        </span>
                    </div>
                    <div class="pro_do_kho">
                        @foreach ($cateThit as $item)
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <i class="far fa-heart">
                                                <span class="badge badge-danger" style="background-color: #ff8e4a;">{{ $item->sale }}%</span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="{{ $item->name }}">
                                            <img class="lazyload loaded" src="{{ $item->image }}">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="{{ $item->name }}">{{ $item->name }}</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">{{ ($item->price - ($item->price* (($item->sale) /100)) ) }}₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del>{{ $item->price }}₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        @endforeach
                    </div>
                </div>
            </div>



        </div>
{{--
        <div class="container">
            <div class="product hidden-product">
                <div class="title_top_menu">
                    <span class="title-head">
                        <a href="#" class="dk" title="Rau quả">Thịt đông lạnh</a>
                    </span>
                </div>
                <div class="product_wap owl-carousel ">
                    @foreach ($cateThit as $item)
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="product_border">
                            <div class="product-box-h">
                                <div class="border_in">
                                    <div class="icon_pro">
                                        <div>
                                            <a data-toggle="modal" data-target="#myModal" class="xem_nhanh hidden"
                                                href="">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="like" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title="Chuối Nam Mỹ">
                                            <img class="lazyload loaded" src="frontend/images/main-image/chuoi.jpg">
                                        </a>
                                        <div class="pro_action">
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="height_name" href="#"
                                                title="Chuối Nam Mỹ">Chuối
                                                Nam Mỹ</a>
                                        </h3>
                                        <div class="product-hides">
                                            <div class="price-box clearfix">
                                                <span class="price product-price">120.000₫/kg</span>
                                                <span class="price product-price-old">
                                                    <del> 150.000₫/kg</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end product -->
                </div>


            </div>
        </div> --}}
    </section>

@endsection
