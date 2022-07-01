@extends('layouts.main')

@section('content')
    <tbody>
        @if (empty($foods))
            <tr>
                <td colspan="5">
                    No data is available!
                </td>
            </tr>
        @else
            <div class="row" style="gap:15px">
                @foreach ($foods as $food)
                    <div class="card" style="width: 18rem; heigth: 30rem;">
                        <img width="150" height="300" class="card-img-top" src="/image/{{ $food->image }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title ">{{ $food->name }}</h5>
                            <p class="card-text">{{ $food->price }}</p>
                            <p class="card-text">{{ $food->decription }}</p>
                            <a class="btn btn-primary">Chi tết</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </tbody>
    </>
@endsection
@extends('layouts.main')
@section('content')
    <div class="text-start">
        <a role="button" class="btn" href="{{ route('foods.index') }}"><i class="fa fa-arrow-left text-warning"
                aria-hidden="true"></i></a>
    </div>
    @if (empty($foods))
        <tr>
            <td colspan="5">
                No data is available!
            </td>
        </tr>
    @else
        <div class="row" style="gap:15px">
            @foreach ($foods as $food)
                <div class="card" style="width: 18rem; heigth: 30rem;">
                    <img width="150" height="300" class="card-img-top" src="/image/{{ $food->image }}"
                        alt="">
                    <div class="card-body">
                        <h5 class="card-title ">{{ $food->name }}</h5>
                        <p class="card-text">{{ $food->price }}</p>
                        <p class="card-text">{{ $food->decription }}</p>
                        <a class="btn btn-primary">Chi tết</a>
                    </div>
                </div>
            @endforeach
        </div>
        @include('pages.foods.form')
    @endsection
