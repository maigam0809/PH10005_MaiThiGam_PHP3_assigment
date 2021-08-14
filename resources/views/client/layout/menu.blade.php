<section>
    <div id="background" style="background-image: url(frontend/images/main-image/slider_1.jpg);">
        <div class="container">
            <div id="menu" class="col-lg-3 col-md-12">
                <div id="cate2" class="cate2">
                    <p >
                        <span><i class="fas fa-bars"id="cate-menu"></i> DANH MỤC</span>
                        <i class=" fas fa-user" id="fa-user"></i>
                    </p>
                    <div id="acount" class="acount">
                        <ul>
                            <li style=" list-style: none;"><a href="{{ route('client.getLoginFormClient') }}">Đăng nhập</a></li>
                            @auth
                            <li style=" list-style: none;"><a href="{{ route('client.logout') }}">Đăng xuất</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <div id="cate" class="dm-none">
                    <a href="">
                        <span><i class="fas fa-bars"></i> DANH MỤC</span>
                        <i class=" fas fa-user"></i>
                    </a>
                </div>

                <div class="show2 hiden-none-menu" id="show_menu_cate">
                    @foreach($categories as $item)
                    <li>
                        <a href="{{ route('categories.show',['category'=>$item->id]) }}">
                            <img class="hiden-none" src="{{ $item->image }}" alt="">
                            {{ $item->name }}
                        </a>
                    </li>
                    @endforeach
                </div>
            </div>
        </div>

    <img src="frontend/images/main-image/slider_1.jpg" alt="" class="hidden">
    </div>
</section>
