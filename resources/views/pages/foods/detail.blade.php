@extends('layouts.main')
@section('content')
    <div class="text-start">
        <a role="button" class="btn" href="{{ route('foods.index') }}"><i class="fa fa-arrow-left text-warning"
                aria-hidden="true"></i></a>
    </div>
    <h1 class="text-center">CHI TIẾT SẢN PHẨM</h1>

    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 border bg-light"><img width="300" height="400" class="card-img-top"
                        src="/image/{{ $food->image }}" alt=""></div>
            </div>
            <div class="col">
                <div class="p-3 ">
                    <h5 class="card-title ">{{ $food->name }}</h5>
                    <p class="card-text">{{ $food->price }}</p>
                    <p class="card-text">{{ $food->decription }}</p>
                    <a class="btn btn-primary">Chi tết</a>
                </div>
            </div>
        </div>
    </div>
@endsection
