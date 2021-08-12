@extends('admin.layout')

@section('title','Create categories')

@section('contents')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Categories
                    <small>Add Categories</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-4" style="padding-bottom:120px">
                @if(session()->has('errors'))
                    <div class="alert alert-danger">
                        {{"Thêm thất bại !"}}
                    </div>
                @endif

                <form method="post" action="{{ route('admin.categories.update',['category'=>$category->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group" style="margin-top: 17px;">
                        
                        <label class="sr-only" for="exampleInputAmount">Tên danh mục</label>
                        <div class="input-group">
                          <div class="input-group-addon">Tên danh mục</div>
                          <input type="text" class="form-control" name="name" value="{{$category->name}}" id="exampleInputAmount" placeholder="Tên danh mục ...">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    

                    <div class="form-group" style="margin-top: 17px;">
                        
                        <label class="sr-only" for="exampleInputAmount">Image</label>
                        <div class="input-group">
                          <div class="input-group-addon">Image</div>
                          <input type="file" class="form-control" name="image1"  id="exampleInputAmount" placeholder="Image">
                        </div>
                        <img src="{{ $category->image }}" alt=""  width="200px;">
                        @error('image1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   

                    
                    <button type="submit" class="btn btn-default">Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
<!-- /.row -->
    </div>
<!-- /.container-fluid -->
</div>


@endsection
