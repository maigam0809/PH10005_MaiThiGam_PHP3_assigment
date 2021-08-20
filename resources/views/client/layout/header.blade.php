
<header>
    <div class="index-container">
        <!-- start top -->
        <div class="container">
            <div class="index-top">
                <div class="top">
                    <i class="fas fa-check"></i>
                    <p>Giá cả nhiều ưu đãi hấp dẫn khi mua hàng</p>
                </div>
                <div class="top top-middle">
                    <i class="fas fa-plane"></i>
                    <p>Giao hàng miễn phí toàn quốc và nhanh chóng</p>
                </div>
                <div class="top">
                    <i class="fas fa-star"></i>
                    <p>Sản phẩm đa dạng đạt tiêu chuẩn có kiểm định</p>
                </div>
            </div>
        </div>
        <!-- end top -->
        <!-- start header -->
        <header class="container-fluid">
            <div class="container">
                <div class="index-header">
                    <div class="logo">
                        <a href="{{ route('/') }}">
                            <img src="frontend/images/icon/logo.png" alt="">
                        </a>
                    </div>
                    <div class="flex">
                        <div class="header-middle">
                            <form action="{{ route('search') }}" method="get">
                                <i class="fas fa-search"></i>
                                <input type="text" name="search_text" value="{{ old('search_text') }}" placeholder="Tìm kiếm ở đây" required>
                                <button>Tìm kiếm</button>
                            </form>
                            <div class="link">
                                <a href="{{ route('products.selling') }}">Bán chạy nhất</a> |
                                <a href="{{ route('news.index') }}">Tin tức</a> |
                                <a href="{{ route('products.discount') }}">Giảm giá</a>
                            </div>
                        </div>
                        <div class="header-final">
                            <div class="detail detail-none">
                                <i class="fas fa-heart"></i>
                                <a href="yeu-thich.html">Danh sách yêu thích</a>
                            </div>
                            <div class="detail detail-none">
                                <i class="fas fa-user"></i>
                                <div>
                                    {{-- @auth --}}
                                    @if (Auth::check())
                                        <img src="{{ Auth::user()->image }} " style='max-width:20px; max-height: 25px;border-radius: 90%;margin-right: 7px;'>
                                        <a href="{{ route('/') }}">
                                            {{  Auth::user()->last_name }}
                                            {{  Auth::user()->first_name }}

                                        </a>
                                        <div>
                                            @auth
                                            <li style=" list-style: none;"><a href="{{ route('client.logout') }}">Đăng xuất</a></li>
                                            @endauth
                                        </div>

                                    @else
                                    <a href="{{ route('client.getLoginFormClient') }}">Đăng nhập</a> <br>
                                    <a href="{{ route('register') }}">Đăng ký</a>
                                    @endif
                                </div>
                            </div>
                            <div class="detail btn">
                                <i class="fas fa-shopping-bag"></i>
                                <a href="{{ route('cart') }}">GIỎ HÀNG(<?= isset ($_SESSION['totalQuantity'])?$_SESSION['totalQuantity']:"" ?>)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
    </div>
</header>
