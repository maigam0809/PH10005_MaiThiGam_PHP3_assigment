@extends('admin.layout')

@section('title','Add news')

@section('contents')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">news
                    <small>Add news</small>
                </h1>
            </div>
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(session()->has('errors'))
                    <div class="alert alert-danger">
                        {{"Thêm thất bại !"}}
                    </div>
                @endif

                <form method="post" action="{{route('admin.news.update',['newId'=>$newId->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name1" class="form-label">Tiêu đề</label>
                        <input type="text" name="name" class="form-control" value="{{$newId->name}}" id="name1">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                 
                    <div class="form-group">
                        <label for="image1" class="form-label">Image</label>
                        <input type="file" name="image1" class="form-control" id="image1">
                            <img src="{{ $newId->image }}" alt=""  width="200px;">
                        @error('image1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   
                    <div class="form-group">
                        <label for="description" class="form-label">Mô tả</label>
                        <input type="text" name="description" class="form-control" value="{{$newId->description}}" id="name1">
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="detail" class="form-label">Chi tiết tin tức</label>
                        <textarea  class="form-control ckeditor" rows="1" id="detail" name="detail">{{ $newId->detail }}</textarea>
                        @error('detail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-default">Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
