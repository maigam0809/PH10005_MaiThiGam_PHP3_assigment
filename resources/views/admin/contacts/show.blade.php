@extends('admin.layout')

@section('title','Show - contacts')

@section('contents')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Email phản hồi:
                    <small>
                    {{$contact->email}}
                    </small>
                </h1>
            </div>
               <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id</th>
                        <th>Phone</th>
                        <th>Trạng thái</th>
                        <th>Content</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="odd gradeX text-capitalize" align="center">
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>
                            {{$contact->status == config('common.contact.status.da_xem') ? 'Đã xem' : 'Chưa xem'}}
                        </td>
                        <td>{{$contact->content}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
