@extends('layouts.main')

@section('content')

    <div class="text-end">
        <a role="button" href="{{ route('foods.create') }}" class="btn btn-primary">Create</a>
    </div>

    <tbody>
        <script>
            var msg = '{{ Session::get('alert') }}';
            var exist = '{{ Session::has('alert') }}';
            if (exist) {
                alert(msg);
            }
        </script>
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
                            <a href="{{ route('foods.show', $food->id) }}" class="btn btn-primary">Chi tết</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </tbody>
    </>
@endsection
