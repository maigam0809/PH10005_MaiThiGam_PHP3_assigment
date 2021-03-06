@extends('admin.layout')

@section('title','List Products')
@section('contents')
@if(!empty($products))

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products
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
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category_id</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $item)
                    <tr class="odd gradeX " align="center">
                        <td>{{$item->id}}</td>
                        <td>
                            <a href="{{route('admin.products.show',['product'=>$item->id])}}">{{$item->name}}</a>
                        </td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>
                            <img src="{{ $item->image }}" alt="" width="100px;">
                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i>
                            <a href="{{route('admin.products.edit',['product'=>$item->id])}}">Edit</a>
                        </td>

                        <td>
                            <i class="fa fa-trash-o  fa-fw"></i>
                            <a type="button"  data-toggle="modal" data-target="#confirm_delete_{{$item->id}}">
                            xo??
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="confirm_delete_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">X??c nh???n</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        B???n c?? th???c s??? mu???n xo?? hay kh??ng
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route('admin.products.delete',['product'=> $item->id])}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            {{-- end modal --}}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            @else
                <h2>Kh??ng c?? d??? li???u</h2>
            @endif
        </div>
    </div>
</div>
@endsection
