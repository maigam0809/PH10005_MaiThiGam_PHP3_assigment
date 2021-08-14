@extends('client.index')
@section('title', 'Đăng ký')

@section('contents')

    <div class="container-fluild register-detail">
        <div class="container">
            <h4>ĐĂNG KÝ TÀI KHOẢN</h4>
            <p>Nếu chưa có tài khoản vui lòng đăng ký tại đây</p>
            @if(session()->has('errors') == true)
                <div class="alert alert-danger">
                    {{"Đăng ký thất bại !"}}
                </div>
            @endif
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <form action="{{ route('register.store') }}" class="form-group" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="last_name">Last Name *</label>
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" id="first_name" required placeholder="Họ tên" required>
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="first_name">First Name *</label>
                    <input type="text" class="form-control" name="first_name"  value="{{ old('first_name') }}" id="first_name" required placeholder="Họ tên" required>
                    @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control"  name="email" value="{{ old('email') }}" id="email" required placeholder="Email" required>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="text"></label>Địa chỉ *</label>
                    <input type="text" class="form-control"  name="address" value="{{ old('address') }}" id="text" required placeholder=" Địa chỉ" required>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="text"></label>Ảnh *</label>
                    <input type="file" class="form-control"  name="image" value="{{ old('image') }}" id="text" required placeholder=" Địa chỉ" required>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label for="pwd">Giới tính *</label>
                    <select name="gender" id="gioitinh" class="form-control" >
                        <option value="{{ config('common.users.gender.male') }}"  {{ old('gender',config('common.users.gender.male')) == config('common.users.gender.male') ? 'selected' : ''}}  class="form-control" name="gender">Nam</option>
                        <option value="{{ config('common.users.gender.female') }}"  {{ old('gender',config('common.users.gender.female')) == config('common.users.gender.female') ? 'selected' : ''}}  class="form-control" name="gender">Nữ</option>
                    </select>
                    @error('gender')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pwd">Mật khẩu *</label>
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="pwd" required placeholder="Mật khẩu" required>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pwd">Xác nhận mật khẩu *</label>
                    <input type="password" class="form-control"  name="passwordAgain" value="{{ old('passwordAgain') }}"  id="pwd" required placeholder=" Xác nhận mật khẩu" required>
                    @error('passwordAgain')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pwd">Ngày sinh *</label>
                    <input type="date" class="form-control"  name="birthday" value="{{ old('birthday') }}"  id="pwd" required placeholder=" Xác nhận mật khẩu" required>
                    @error('birthday')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Đăng ký</button>
                    <a class="btn btn-info" href="login.html">Đăng nhập</a>
                </div>
            </form>
        </div>

    </div>
@endsection
