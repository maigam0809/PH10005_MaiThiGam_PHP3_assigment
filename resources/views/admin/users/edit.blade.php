@extends('admin.layout')

@section('title','Sửa users')

@section('contents')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users
                    <small>Edit Users</small>
                </h1>
            </div>
            <div class="col-lg-6" style="padding-bottom:120px">
                @if(session()->has('errors'))
                    <div class="alert alert-danger">
                        {{"Sửa thất bại !"}}
                    </div>
                @endif

                <form method="post" action="{{route('admin.users.update',['user'=>$user->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="sr-only ml-5"  for="exampleInputAmount">LastName</label>
                        <div class="input-group" >
                            <div class="input-group-addon">LastName</div>
                            <input type="text" class="form-control"  name="last_name" value="{{$user->last_name}}"   id="exampleInputAmount" placeholder="LastName">
                           
                        </div>
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="margin-top: 17px;">
                        
                        <label class="sr-only" for="exampleInputAmount">FirstName</label>
                        <div class="input-group">
                          <div class="input-group-addon">FirstName</div>
                          <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}"  id="exampleInputAmount" placeholder="FirstName">
                        </div>
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email"  value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image1" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image1" id="image1">
                        <img src="{{ $user->image }}" alt=""  width="200px;">
                        @error('image1')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Address" class="form-label">Address</label>
                        <input type="address" name="address"  value="{{$user->address}}" class="form-control" id="Address">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gioitinh" class="form-label">Giới tính</label>
                        <select name="gender" id="gioitinh" class="form-control" >
                            <option value="1" {{$user->gender == 1 ? 'selected' : ''}} class="form-control" name="gender">Nam</option>
                            <option value="0" {{$user->gender == 0 ? 'selected' : ''}} class="form-control" name="gender">Nữ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" id="gioitinh" value="{{$user->role}}" class="form-control">
                            <option value="1" {{$user->role == 1 ? 'selected' : ''}} class="form-control" name="role">User</option>
                            <option value="0" {{$user->role == 0 ? 'selected' : ''}} class="form-control" name="role">Admin</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top: 17px;">
                        
                        <label class="sr-only" for="exampleInputAmount">Birthday</label>
                        <div class="input-group">
                          <div class="input-group-addon">Birthday</div>
                          <input type="date" class="form-control" name="birthday" value="{{$user->birthday}}" id="exampleInputAmount" placeholder="Birthday">
                        </div>
                        @error('birthday')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-default">Update</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
<!-- /.row -->
    </div>
<!-- /.container-fluid -->
</div>





@endsection
