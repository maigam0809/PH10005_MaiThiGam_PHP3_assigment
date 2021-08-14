@extends('client.index')
@section('title', 'Đăng nhập')

@section('contents')


<div class="container-fluild login-detail">
    <div class="container">
        <h4>ĐĂNG NHẬP TÀI KHOẢN</h4>
        <div class="main">
            <div class="to-login">
                <p>Nếu bán đã có tài khoản, đăng nhập tại đây</p>
                <div class="mt-4">
                    @if(session()->has('error') === true)
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </div>
                <form action="{{ route('client.login') }}"  method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật khẩu *</label>
                        <input type="password" class="form-control" name="password" id="pwd" required placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        <a class="btn btn-info" href="{{ route('register') }}">Đăng ký</a>
                    </div>
                </form>
            </div>
            <div class="get-pass">
                <p>Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email</p>
                <form action="">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" required placeholder="Email">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info">Lấy lại mật khẩu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
