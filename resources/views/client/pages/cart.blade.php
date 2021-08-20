
@extends('client.index')
@section('title', 'Giỏ hàng')

@section('contents')
<div class="container-fluild cart-detail">
    <div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <h4>GIỎ HÀNG CỦA BẠN</h4>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Hành động</th>
                    <th>Sản phẩm</th>
                    <th> Giá</th>
                    <th> Số lượng</th>
                    <th> Giảm giá</th>
                    <th> Tổng</th>
                </tr>
                @foreach ($data->items as $item)
                <tr class="item">
                    <td>
                        <a  onclick="return confirm('Bạn có muốn xóa thật không?')"
                        class="btn btn-danger" href="{{ route('cart.delete',['product'=>$item['data']['id']]) }}">Xoá</a>
                    </td>

                    <td>
                        <img src="{{ $item['data']['image'] }}" alt="">
                        <span>{{ $item['data']['name'] }}</span>
                    </td>

                    <td >
                        {{  number_format($item['data']['price']) }} VNĐ
                        <input id="price" type="hidden" value="{{ $item['data']['price'] }}">
                    </td>

                    <td>
                        <a class="btn btn-info"  href="{{ route('createToCart', ['product' => $item['data']['id']]) }}"> + </a>
                            <input class="cart_quantity_input" type="text" name="quantity"
                                value="{{ $item['quantity'] }}" autocomplete="off" size="2">

                        <a class="btn btn-info cart_quantity_down"
                            href=" {{ route('updateToCart', ['product' => $item['data']['id']]) }}"> - </a>
                    </td>
                    <td>
                        {{ $item['data']['sale'] }} %
                    </td>
                    <td>
                        <span id="sum_item">
                            {{ number_format(
                                ($item['data']['price']- ($item['data']['price']*($item['data']['sale']/100)))*$item['quantity']
                            ) }} VNĐ
                        </span>
                    </td>
                </tr>
                @endforeach
                {{-- <tr>
                    <td class="final" colspan="4">Tổng tiền: {{number_format($item['totalPrice'])}} VND</td>
                </tr> --}}
            </table>
            <div class="cart-btn">
                <a class="btn btn-success" href="{{ route('/') }}">Tiếp tục mua hàng</a>
                <a class="btn btn-primary" href="{{ route('order') }}">Thanh toán</a>
            </div>
        </form>
    </div>

</div>

</section>
@endsection
