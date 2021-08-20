@extends('client.index')
@section('title', 'Danh sách tin tức')

@section('contents')
<div class="content content_news">
    <div class="container col-12">

        @foreach ($listNews as $item)
            <div class="row ">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ $item->image }}" alt="" class="mx-auto" style="width: 100%;">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-8">
                    <h4 class="text-title">{{ $item->name }}</h4>
                    <p>
                        {{ $item->detail }}
                    </p>
                </div>

            </div>
        @endforeach

    </div>
</div>
@endsection
