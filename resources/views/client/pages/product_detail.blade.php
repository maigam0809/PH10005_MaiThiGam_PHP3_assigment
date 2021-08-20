@extends('client.index')
@section('title', 'Chi tiết sản phẩm')

@section('contents')

<div class="container-fluild product_detail">
    <div class="container info">
        <div class="row">
            <div class="image col-lg-5 col-md-6 col-sm-12">
                <img src="{{ $proID->image }}" alt="">
            </div>
            <div class="info-product col-lg-5 col-md-6 col-sm-12">
                <p>
                <h4 style="font-weight:bold; margin-bottom: 10px;font-size: 20px">
                    {{ $proID->name }}
                </h4>
                <span>Xuất xứ: {{ $proID->intro }}</span>
                <p style="margin-top: 10px;">
                    Giảm giá :  <span class="badge badge-danger" style="background-color: #ff8e4a;">{{ $proID->sale }}%</span>
                </p>
                </p>
                <p>
                    <span style="color: #ff8e4a; font-size:24px; font-weight:bold"
                        class="price">{{ ($proID->price - ($proID->price* (($proID->sale) /100)) ) }}đ/kg</span>

                    <span style="color:#707070; font-size: 16px; font-weight:bold"
                        class="sale"><del>{{ $product->price }}đ/kg</del></span>
                </p>
                <p>

                </p>
                <div class="count">
                    <p>Số lượng: </p>
                    <p class="btn-count">
                        <button id="btn_delete">-</button>
                        <span id="count">1</span>
                         <input id="count" type="hidden" value="1">
                        <button id="btn_add">+</button>
                    </p>
                </div>
                <p class="cart">
                <form action="{{ route('addToCart',['product'=>$proID->id]) }}" method="get">
                    {{-- <input name="count" id="set_count" type="hidden" value="1"> --}}
                    <button
                        style="background-color: #ff8e4a;color: white;padding: 13px 20px 13px 20px;border-radius: 3px;outline: none;border: none;"
                        class="cart" type="submit">
                        Thêm vào giỏ hàng
                    </button>
                </form>
                </p>
            </div>
            <div class="product-icon col-lg-2">
                <div class="icon">
                    <img src="frontend/images/icon/serpro_1.png" alt="">
                    <p>Giao hàng miễn phí</p>
                </div>
                <div class="icon">
                    <img src="frontend/images/icon/serpro_2.png" alt="">
                    <p>Tích điểm đổi quà</p>
                </div>
                <div class="icon">
                    <img src="frontend/images/icon/serpro_3.png" alt="">
                    <p>100% an toàn thực phẩm</p>
                </div>
                <div class="icon">
                    <img src="frontend/images/icon/serpro_4.png" alt="">
                    <p>Tư vấn 8/24</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container info pl-4">
        <h2 style="font-family:Arial;font-size: 2rem; font-weight:bold; margin: 10px 5px;">Mô tả </h2>
        <p style="font-size: 1.4rem;">
            {{ $proID->description }}
        </p>
    </div>

    <div class="container info pl-3">

        <h2 class="mb-2 text-danger" style="font-family:Arial;font-size: 2rem; font-weight:bold; margin: 10px 5px;">Bình
            luận của bạn: </h2>
        <script>
        function post() {
            var customer_id = document.getElementById("customer_id").value;
            var product_id = document.getElementById("product_id").value;
            var comment = document.getElementById("comment").value;
            if (customer_id && product_id && comment) {
                $.ajax({

                        type: 'POST',
                        url: "{{ route('contacts.store') }}",
                        data: {
                            _token:_token,
                            customer_id: customer_id,
                            product_id: product_id,
                            comment: comment
                        }

                        ,
                        success: function(response) {
                            document.getElementById("all_comments").innerHTML = response + document
                                .getElementById("all_comments").innerHTML;
                            document.getElementById("comment").value = "";
                            document.getElementById("customer_id").value = "

                            @if (Auth::check())
                                Auth::user()->name;
                            @else
                                {{ "Roongx" }}
                            @endif ";
                            document.getElementById("product_id").value =
                                "{{ $proID->id }}";

                        }
                    }

                );
            }
            return false;
        }
        </script>
        <form class="" method='POST' action="{{ route('comments.index')}}" onsubmit="return post();" id="container">
            @csrf

            <input type="hidden" id="customer_id" name="user_id" value="{{ Auth::id() }}"
                @if (Auth::check())
                   {{ Auth::user() }}

                @else {
                    {{ 'Rỗng' }}
                @endif
                >
            <input type="hidden" id="product_id" name="product_id" value="{{ $proID->id }}" >

            <textarea class="form-control" name="content" id="comment" cols="100" rows="5"@if (!Auth::check()){{"disabled"}}@else{{ "YÊU CẦU ĐĂNG NHẬP TRƯỚC KHI BÌNH LUẬN!"}}@endif></textarea>
            <br>

            <button
            @if (!Auth::check())
            {{"disabled"}}
            @endif
                         type="submit" value="Post Comment" id="submit"
                style="background-color: #ff8e4a;color: white;padding: 10px 20px 10px 20px;border-radius: 3px;outline: none;border: none;">Bình
                luận</button>
        </form>
        <h5 class="font-weight-bold text-success">Bình luận mới nhất</h5>
        <div class="comments-list col-xl-6 col-md-6" style="margin-top: 20px; " id ="all_comments">

           @foreach($proID->comments as $item)
            <div class="media mb-4 pl-1 col-10" style="border-bottom: 0.2px solid #DDDDDD;">

                <a class="media-left mr-3 " href="#">
                    @foreach ($users as $user)
                    @if($user->id == $item->user_id)
                    <img src="{{ $user->image }}" style="max-width: 65px;" >
                    @endif

                    @endforeach
                </a>
                <div class="media-body">
                    @foreach ($users as $user)
                        @if($user->id == $item->user_id)
                            <h5 class="media-heading user_name font-weight-bold" style="color: gray;">
                                {{ $user->first_name }}
                                {{ $user->last_name }}
                            </h5>
                        @endif
                    @endforeach
                    <p class="font-size-2" style="font-size: 14px;">{{ $item->content }}</p>
                </div>

                <p class="pull-right">
                    <small>{{ $item->created_at }}</small>
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
