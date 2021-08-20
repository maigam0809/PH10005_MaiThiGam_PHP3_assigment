@extends('client.index')
@section('title', 'Liên hệ')

@section('contents')
 <!-- bắt đầu phần content -->
 <div class="content content_contact">
    <div class="container col-12">
        <div class="row">
            <div class="bg_content_contact">
                <div class="select_maps sec_footer col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="map_h">
                        <div class="page_contact">
                            <h1 class="title_db">
                                <span>Liên hệ với chúng tôi</span>
                            </h1>
                        </div>
                        <div class="list_menu">
                            <div class="widget_db">
                                <div class="item">
                                    <ul class="contact contact_x">
                                        <b class="title_bold">Cửa hàng chính:</b>
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <span class="txt_content_child">
                                                Số 23/71 Đường Mỹ Đình, Quận Nam Tù Niêm ,Thành Phố Hà Nội
                                            </span>
                                        </li>
                                        <li class="sdt">
                                            <i class="fa fa-mobile"></i>
                                            <span class="txt_content_child">
                                              Điện Thoại
                                            </span>
                                            <a href="">0344358618</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <span class="txt_content_child">
                                                Email:
                                            </span>
                                            <a href="">maigam08092000@gmail.com</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="page-login page_contact">
                            <div class="title-head-contact a-left">
                                <span>Gửi Liên hệ</span>
                            </div>
                            <div id="pagelogin">
                                @if(session()->has('errors') == true)
                                <div class="alert alert-danger">
                                    {{"Gửi liên hệ thất bại"}}
                                </div>
                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                                <form action="{{ route('contacts.store') }}" method="POST">
                                    @csrf
                                    <div class="form-signup clearfix">
                                        <div class="row group_contact">
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" placeholder="Họ và tên" name="name" value="{{ old('name') }}" class="form-control  form-control-lg" required="">
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </fieldset>
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" class="form-control  form-control-lg" required="">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </fieldset>
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" class="form-control  form-control-lg" required="">
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </fieldset>
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <textarea placeholder="Lời nhắn" name="content" id="loinhan" class="form-control content-area form-control-lg" rows="2" required="">{{ old('content') }}</textarea>
                                                @error('content')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </fieldset>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-button">
                                                <button type="submit" class="btn btn-primary btn-lienhe">Gửi liên hệ</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="select_maps sec_footer col-lg-6 col-md-6 col-sm-12 col-xs-12 right_contact">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1373202472373!2d105.77297221424524!3d21.027190793209357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b1eec75f8d%3A0xaabda7549065fb73!2zVHLGsOG7nW5nIG3huqdtIG5vbiBN4bu5IMSQw6xuaCAy!5e0!3m2!1svi!2s!4v1605431715983!5m2!1svi!2s "
                        width="100%" height="450 " frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false " tabindex="0 "></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- kết thúc phần content -->


@endsection
