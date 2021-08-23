
@extends('client.index')
@section('title', 'Lịch sử mua hàng')

@section('contents')

<div class="container-fluild cart-detail">
    <div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <h4>LỊCH SỬ MUA HÀNG</h4>
            <table>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th> Hình ảnh</th>
                    <th> Giá</th>
                    <th> Số lượng</th>
                    <th> Giảm giá</th>
                    <th> Thành tiền</th>
                </tr>
                @foreach($bill->invoiceDetails as $item)
                <tr class="item">
                    <td>
                        {{ $item->product->name }}
                    </td>
                    <td>
                        <img src="{{ $item->product->image }}" alt="">
                    </td>
                    <td>
                        {{ $item->product->price }}
                    </td>
                    <td>
                        {{ $item->quantity }}
                    </td>
                    <td>
                        {{ $item->product->sale }}%
                    </td>
                    <td>
                        {{ $item->unit_price }}
                    </td>
                </tr>
                @endforeach


                <tr>
                    <th> Địa chỉ</th>
                    <th> Số điện thoại</th>
                    <th> Tên khách hàng</th>
                    <th> Email</th>
                    <th> Trạng thái</th>
                    <th> Tổng tiền</th>
                </tr>
                <tr class="item">
                    <td >
                        {{ $bill->address }}
                    </td>
                   <td >
                        {{ $bill->phone_number}}
                    </td>
                    <td >
                        {{ $bill->user->last_name}}
                        {{ $bill->user->first_name}}
                    </td>
                    <td >
                        {{ $bill->user->email }}
                   </td>
                    <td >
                        @if($bill->status == config('common.invoice.status.cho_duyet'))
                        {{ "Cho duyệt" }}
                        @elseif($bill->status == config('common.invoice.status.dang_xu_ly'))
                        {{  "Đang xử lý"  }}
                        @elseif($bill->status == config('common.invoice.status.dang_giao_hang'))
                        {{ "Đang giao hàng" }}
                        @elseif($bill->status == config('common.invoice.status.da_giao_hang'))
                        {{ "Đã giao hàng"}}
                        @elseif($bill->status == config('common.invoice.status.da_huy'))
                        {{ "Đã huỷ"}}
                        @elseif($bill->status == config('common.invoice.status.chuyen_hoan'))
                        {{ "Chuyển hoàn"}}
                        @endif
                   </td>
                   <td >
                    {{ $bill->total_price}}
                </td>

                </tr>

            <div class="cart-btn">
                {{-- <a class="btn btn-success" href="{{ route('/') }}">Tiếp tục mua hàng</a> --}}
            </div>
        </table>
    </div>

</div>

</section>
@endsection
