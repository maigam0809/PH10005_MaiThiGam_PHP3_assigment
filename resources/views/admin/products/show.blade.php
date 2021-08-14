@extends('admin.layout')

@section('title','Show - Comments')

@section('contents')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Tổng bình luận: ({{$product->comments->count()}})
                    <small>{{$product->name}}</small>
                </h1>
            </div>
               <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id</th>
                        <th>Người bình luận</th>
                        <th>Name</th>
                        <th>Ngày bình luận</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($product->comments as $item)
                    <tr class="odd gradeX text-capitalize" align="center">
                        <td>{{$item->id}}</td>
                        <td>
                        
                        @foreach($users as $user)
                            @if($item->user_id == $user->id)
                            {{$user->last_name}}
                            {{$user->first_name}}
                            @endif
                            
                        @endforeach

                        </td>
                        <td>{{$item->content}}</td>
                        <td>{{$item->updated_at}}</td>
                        
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
