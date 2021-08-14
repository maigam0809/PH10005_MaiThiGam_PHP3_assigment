@extends('admin.layout')

@section('title','List Invoices')
@section('contents')
@if(!empty($invoices))

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Invoices
                    <small>List</small>
                </h1>
            </div>
            <div class="col-lg-12">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

            </div>
               <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Tổng tiền đã mua</th>
                        <th>Trạng thái</th>
                        <th>Tổng số sản phẩm</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($invoices as $item)
                    <tr class="odd gradeX text-capitalize" align="center">
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            <a href="{{route('admin.invoices.show',['invoice'=>$item->id])}}"> 
                            {{$item->user->last_name}}
                            {{$item->user->first_name}}
                            </a>
                        </td>
                         <td>
                            {{$item->phone_number}}
                        </td>
                        <td>
                            {{$item->address}}
                        </td>
                        <td>
                            {{$item->total_price}}
                        </td>
                         <td>
                            @if($item->status == config('common.invoice.status.cho_duyet'))
                            {{ "Cho duyệt" }}
                            @elseif($item->status == config('common.invoice.status.dang_xu_ly'))
                            {{  "Đang xử lý"  }}
                            @elseif($item->status == config('common.invoice.status.dang_giao_hang'))
                            {{ "Đang giao hàng" }}
                            @elseif($item->status == config('common.invoice.status.da_giao_hang'))
                            {{ "Đã giao hàng"}}
                            @elseif($item->status == config('common.invoice.status.da_huy'))
                            {{ "Đã huỷ"}}
                            @elseif($item->status == config('common.invoice.status.chuyen_hoan'))
                            {{ "Chuyển hoàn"}}
                            @endif
                        </td>
                        <td>
                            {{$item->invoiceDetails->count()}}
                        </td>
                    @endforeach

                </tbody>
            </table>
            @else
                <h2>Không có dữ liệu</h2>
            @endif
        </div>
    </div>
</div>

@endsection
