@extends('client.index')
@section('title', 'Sản phẩm giảm giá')

@section('contents')
<div class="content content_sale">
    <div class="container col-12 col-bg">
        <div class="row">
            <div class="bg_collection clearfix">
                <!-- start turn left -->
                <article class="content_left dqdt-sidebar sidebar left-content col-lg-3 col-lg-3-fix show-product2" >
                    <article class="aside-filter aside-item sidebar-category collection-category">
                        <div class="aside-title">
                            <div class="title_module border_bottom_10">
                                <h2><span>Danh sách sản phẩm</span></h2>
                            </div>
                        </div>
                        <div class="aside-content">
                            <nav class="nav-category navbar-toggleable-md">
                                <ul class="nav navbar-pills">
                                    @foreach($categories as $item)
                                    <li class="nav-item lv1">
                                        <a href="{{ route('categories.show',['category'=>$item->id]) }}" class="nav-link">{{ $item->name }}</a>
                                    </li>
                                    @endforeach
{{--
                                    <li class="nav-item lv1">
                                        <a href="" class="nav-link">Hoa quả trong nước <i class="fa fa-angle-right"></i></a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item lv2">
                                                <a class="nav-link" href="">Rau củ</a>
                                            </li>
                                            <li class="nav-item lv2">
                                                <a class="nav-link" href="">Hải sản</a>
                                            </li>

                                            <li class="dropdown-submenu nav-item lv2">
                                                <a class="nav-link" href="">Hoa quả trong nước</a>
                                                <i class="fa fa-angle-right"></i>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item lv3">
                                                        <a class="nav-link" href="">Rau củ</a>
                                                    </li>
                                                    <li class="nav-item lv3">
                                                        <a class="nav-link" href="">Hải sản</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item lv3">
                                                        <a class="nav-link" href="">Hoa quả trong nước</a>
                                                    </li>
                                                    <li class="nav-item lv3">
                                                        <a class="nav-link" href="">Hoa quả nhập khẩu</a>
                                                    </li>
                                                    <li class="nav-item lv3">
                                                        <a class="nav-link" href="">Hoa quả sấy</a>
                                                    </li>
                                                    <li class="nav-item lv3">
                                                        <a class="nav-link" href="">Thịt các loại</a>
                                                    </li>
                                                    <li class="nav-item lv3">
                                                        <a class="nav-link" href="">Đồ hộp</a>
                                                    </li>
                                                    <li class="nav-item lv3">
                                                        <a class="nav-link" href="">Các loại hạt</a>
                                                    </li>
                                                    <li class="nav-item lv3">
                                                        <a class="nav-link" href="">Đồ hộp khô</a>
                                                    </li>
                                                    <li class="nav-item lv3">
                                                        <a class="nav-link" href="">Củ các loại</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item lv2">
                                                <a class="nav-link" href="">Hoa quả nhập khẩu</a>
                                            </li>



                                            <li class="nav-item lv2">
                                                <a class="nav-link" href="">Hoa quả sấy</a>
                                            </li>



                                            <li class="nav-item lv2">
                                                <a class="nav-link" href="">Thịt các loại</a>
                                            </li>



                                            <li class="nav-item lv2">
                                                <a class="nav-link" href="">Đồ hộp</a>
                                            </li>



                                            <li class="nav-item lv2">
                                                <a class="nav-link" href="">Các loại hạt</a>
                                            </li>



                                            <li class="nav-item lv2">
                                                <a class="nav-link" href="">Đồ hộp khô</a>
                                            </li>



                                            <li class="nav-item lv2">
                                                <a class="nav-link" href="">Củ các loại</a>
                                            </li>



                                        </ul>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>

                    </article>

                    <article class="aside-filter">
                        <div class="filter-container">
                            <div class="filter-container__selected-filter">

                                <div class="filter-container__selected-filter-list">
                                    <ul></ul>
                                </div>

                                <aside class="aside-item filter-price">

                                    <div class="aside-title filter-price aside-title-fillter">
                                        <div class="title_module border_bottom_10">
                                            <h2><span>Tìm theo giá</span></h2>
                                        </div>
                                    </div>
                                                                <!-- price range -->
                        <div class="aa-sidebar-price-range aside-content filter-group filter-price-value">
                            <form action="">
                                <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                </div>
                                <div class="multi-range-slider">
                                    <input type="range" id="input-left" min="0" max="1000000" value="200000">
                                    <input type="range" id="input-right" min="0" max="1000000" value="700000">

                                    <div class="slider">
                                        <div class="track"></div>
                                        <div class="range"></div>
                                        <div class="thumb left"></div>
                                        <div class="thumb right"></div>
                                        <br>

                                    </div>
                                </div>
                                <br>
                                <div style="line-height: 40px; display: flex; justify-content: space-between;">
                                    <p>Từ:</p>
                                    <input type="number" name="" class="value1" value=""></input>
                                </div>
                                <div style="line-height: 40px;display: flex; justify-content: space-between;">
                                    <p style="text-align: left;">Đến:</p>
                                    <input type="number" name="" class="value2" value=""></input>
                                </div>
                                <button class="aa-filter-btn" type="submit">Lọc</button>
                            </form>
                        </div>
                                </aside>
                                <!-- lọc theo giá -->


                                <aside class="aside-item filter-vendor">
                                    <div class="aside-title aside-title-fillter">
                                        <div class="title_module border_bottom_10">
                                            <h2><span>Tìm theo kích cỡ</span></h2>
                                        </div>
                                    </div>
                                    <div class="aside-content filter-group sizes-list">
                                         <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <div class="size" style="display: flex;">
                            <p class="checkbox"></p>
                            <p class="font">Cỡ lớn</p>
                        </div>
                        <div class="size" style="display: flex;">
                            <p class="checkbox"></p>
                            <p class="font">Cỡ vừa</p>
                        </div>
                        <div class="size" style="display: flex;">
                            <p class="checkbox"></p>
                            <p class="font">Cỡ nhỏ</p>
                        </div>
                    </div>
                                    </div>
                                </aside>
                                <!-- lọc theo tag2 kích cỡ -->

                            </div>
                        </div>
                    </article>

                    <article class="aside-item aside-filter hidden-md hidden-sm hidden-xs">
                        <div class="aside-title aside-title-fillter">
                            <div class="title_module border_bottom_10">
                                <h2><span>SP xem nhiều nhất</span></h2>
                            </div>
                        </div>

                        <div class="sale_off_today">
                            <div class="not-dqowl wrp_list_product">
                                @foreach($products as $item)
                                <div class="item_small">
                                    <div class="product-mini-item clearfix on-sale">
                                        <a href="{{ route('products.show',['product'=>$item->id]) }}" class="product-img">
                                            <img src="{{ $item->image }}" alt="">
                                        </a>
                                        <div class="product-info">
                                            <h3>
                                                <a href="{{ route('products.show',['product'=>$item->id]) }}" class="product-name text3line">{{ $item->name }}</a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="price">
                                                    <span class="product-price">{{ ($item->price - ($item->price* (($item->sale) /100)) ) }}₫/kg</span>
                                                </span>
                                                <!-- giá khuyến mãi -->
                                                <span class="old-price">
                                                    <del class="sale-price">{{ $item->price }}₫/kg</del>
                                                </span>
                                                <!-- giá gốc của sản phẩm nhé-->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <span class="view_more">
                                    <a href="" title="Xem thêm">
                                        Xem thêm
                                        <i class="fas fa-caret-right"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </article>

                </article>
                <!-- end turn left -->


                <!-- start turn right -->
                <article class="content_right dqdt-sidebar sidebar left-content col-lg-9 col-lg-9-fix col-xs-12">
                    <article class="aside-filter aside-item sidebar-category collection-category">
                        <div class="aside-title">
                            <div class="title_module border_bottom_10">

                                {{-- @foreach($cateID as $item) --}}
                                <h2>
                                    <span>
                                       Sản phẩm giảm giá: {{ $proDiscount->count() }}
                                    </span>
                                </h2>
                                {{-- @endforeach --}}
                            </div>
                        </div>

                        <section class="products-view products-view-grid aside-content">
                            <div class="row row-noGutter-45">
                                <!-- box-1 -->
                                @foreach($proDiscount as $item)
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="  margin-bottom: 10px;">
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
                                                    <a class="image_link" href="{{ route('products.show',['product'=>$item->id]) }}" title=" {{ $item->name }}">
                                                        <img class="lazyload loaded" src=" {{ $item->image }}">
                                                    </a>
                                                    <div class="pro_action">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="" value="">
                                                            <button class="btn btn-cart hidden ">Thêm vào giỏ hàng</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name"><a class="height_name" href="{{ route('products.show',['product'=>$item->id]) }}"
                                                            title=" {{ $item->name }}"> {{ $item->name }}</a>
                                                    </h3>
                                                    <div class="product-hides">
                                                        <div class="price-box clearfix">
                                                            <span class="price product-price">{{ ($item->price - ($item->price* (($item->sale) /100)) ) }}₫/kg</span>
                                                            <span class="price product-price-old">
                                                                <del> {{ $item->price }}₫/kg</del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach


                            </div>
                        </section>
                </article>
            </article>
                <!-- end turn right -->
            </div>
        </div>
    </div>
</div>

@endsection
