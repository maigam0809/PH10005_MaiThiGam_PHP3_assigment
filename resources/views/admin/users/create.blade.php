@extends('admin.layout')

@section('title','Create users')

@section('contents')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">users
                    <small>Add users</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-4" style="padding-bottom:120px">
                @if(session()->has('errors'))
                    <div class="alert alert-danger">
                        {{"Thêm thất bại !"}}
                    </div>
                @endif

                <form method="post" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" >
                        <label class="sr-only ml-5"  for="exampleInputAmount">LastName</label>
                        <div class="input-group" >
                            <div class="input-group-addon" >LastName</div>
                            <input type="text" class="form-control"  name="last_name" value="{{old('last_name')}}"   id="exampleInputAmount" placeholder="LastName">

                        </div>
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="margin-top: 17px;">

                        <label class="sr-only" for="exampleInputAmount">FirstName</label>
                        <div class="input-group">
                          <div class="input-group-addon">FirstName</div>
                          <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}"  id="exampleInputAmount" placeholder="FirstName">
                        </div>
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="margin-top: 17px;">

                        <label class="sr-only" for="exampleInputAmount">Email</label>
                        <div class="input-group">
                          <div class="input-group-addon">Email</div>
                          <input type="text" class="form-control" name="email" value="{{old('email')}}" id="exampleInputAmount" placeholder="Email">
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="margin-top: 17px;">

                        <label class="sr-only" for="exampleInputAmount">Password</label>
                        <div class="input-group">
                          <div class="input-group-addon">Password</div>
                          <input type="text" class="form-control" name="password" value="{{old('password')}}" id="exampleInputAmount" placeholder="Password">
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="margin-top: 17px;">

                        <label class="sr-only" for="exampleInputAmount">Gender</label>
                        <div class="input-group">
                            <div class="input-group-addon">Gender</div>
                            <select name="gender" id="gioitinh" class="form-control" >
                                <option value="{{ config('common.users.gender.male') }}"  {{ old('gender',config('common.users.gender.male')) == config('common.users.gender.male') ? 'selected' : ''}}  class="form-control" name="gender">Nam</option>
                                <option value="{{ config('common.users.gender.female') }}"  {{ old('gender',config('common.users.gender.female')) == config('common.users.gender.female') ? 'selected' : ''}}  class="form-control" name="gender">Nữ</option>
                            </select>
                        </div>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="margin-top: 17px;">

                        <label class="sr-only" for="exampleInputAmount">Address</label>
                        <div class="input-group">
                          <div class="input-group-addon">Address</div>
                          <input type="text" class="form-control" name="address" value="{{old('address')}}" id="exampleInputAmount" placeholder="Address">
                        </div>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="margin-top: 17px;">

                        <label class="sr-only" for="exampleInputAmount">Image</label>
                        <div class="input-group">
                          <div class="input-group-addon">Image</div>
                          <input type="file" class="form-control" name="image" value="{{old('image')}}" id="exampleInputAmount" placeholder="Image">
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group" style="margin-top: 17px;">

                        <label class="sr-only" for="exampleInputAmount">Role</label>
                        <div class="input-group">
                            <div class="input-group-addon">Role</div>
                            <select name="role" id="gioitinh" class="form-control" >
                                <option class="form-control" value="{{ config('common.users.role.users') }}"  {{ old('role', config('common.users.role.users')) == config('common.users.role.users') ? 'selected' : ''}}   name="role">Users</option>
                                <option class="form-control" value="{{ config('common.users.role.admin') }}"  {{ old('role', config('common.users.role.admin')) == config('common.users.role.admin') ? 'selected' : ''}}  name="role">Admin</option>
                            </select>
                        </div>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="margin-top: 17px;">

                        <label class="sr-only" for="exampleInputAmount">Birthday</label>
                        <div class="input-group">
                          <div class="input-group-addon">Birthday</div>
                          <input type="date" class="form-control" name="birthday" value="{{old('birthday')}}" id="exampleInputAmount" placeholder="Birthday">
                        </div>
                        @error('birthday')
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
