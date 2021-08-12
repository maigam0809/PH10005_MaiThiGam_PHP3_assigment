@extends('admin.layout')

@section('title','Add Products')

@section('contents')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products
                    <small>Add Products</small>
                </h1>
            </div>
            <div class="col-lg-5" style="padding-bottom:120px">
                @if(session()->has('errors'))
                    <div class="alert alert-danger">
                        {{"Thêm thất bại !"}}
                    </div>
                @endif

                <form method="post" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name1">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price"  value="{{old('price')}}"  class="form-control" id="price">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity"  value="{{old('quantity')}}"  class="form-control" id="quantity">
                        @error('quantity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sale" class="form-label">Sale</label>
                        <input type="number" name="sale"  value="{{old('sale')}}"  class="form-control" id="sale">
                        @error('sale')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="intro" class="form-label">Sản xuất :</label>
                        <input type="text" name="intro" class="form-control" value="{{old('intro')}}" id="name1">
                        @error('intro')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id" class="form-label">Loại danh mục</label>
                        <select name="category_id" id="category_id" class="form-control" >
                            @foreach ($categories as $item)
                            <option
                            @if (old('category_id') == $item->id )
                                {{"selected"}}
                            @endif
                            value="{{$item->id }}" class="form-control">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="detail" class="form-label">Mô tả</label>
                        <input type="text" name="detail" class="form-control" value="{{old('detail')}}" id="name1">
                        @error('detail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Chi tiết sản phẩm</label>
                        <textarea  class="form-control ckeditor" rows="1" id="description" name="description">{{ old('description') }}</textarea>
                        @error('description')
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
