@extends('admin.layout')

@section('title','Show - invoices')

@section('contents')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Đơn hàng: {{$invoice->id}}
                    <small> Tên khách hàng:
                    {{$invoice->user->last_name}}
                    {{$invoice->user->first_name}}
                    </small>
                </h1>
            </div>
               <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id</th>
                        <th>Loại sản phẩm</th>
                        <th>Số tiền</th>
                        <th>Số sản phẩm</th>
                    </tr>
                </thead>

                <tbody>
                  @foreach ($invoice->invoiceDetails as $item)
                    <tr class="odd gradeX text-capitalize" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->product->name}}</td>
                        <td>{{$item->unit_price}}</td>
                        <td>{{$item->quantity}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
