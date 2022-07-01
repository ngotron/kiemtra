<form action="{{ !isset($food) ? route('foods.store') : route('foods.update', $food->id) }}" method="post"
    enctype="multipart/form-data">

    @csrf
    @if (isset($food))
        @method('put')
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    Name:
    <input type="text" class="form-control mb-3" name="name" value="{{ isset($food) ? $food->name : '' }}"
        placeholder="Enter food name...">
    Decription:
    <input type="text" class="form-control mb-3" name="decription"
        value="{{ isset($food) ? $food->decription : '' }}" placeholder="Enter food decription...">
    price:
    <input type="text" class="form-control" name="price" value="{{ isset($food) ? $food->price : '' }}"
        placeholder="Enter price...">

    @if (isset($cat))
        <img class="mt-3" src="/image/{{ $food->img }}" alt="" style="width: 5rem"><br />
    @endif
    <input type="file" class="form-control-file mt-3" name="image"><br />

    <button class="btn btn-primary mt-3" type="submit">Save</button>
</form>
