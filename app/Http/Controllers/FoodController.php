<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("pages.foods.index", ["foods" => Food::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("pages.foods.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => "required",
            "price" => "required",
            "decription" => "required",
            'image' => 'mimes:jpg,png,gif,jpeg|max: 2048'
        ], [
            "name.requied" => "Nhập tên",
            "price.requied" => "Nhập giá",
            "decription.requied" => "Nhập mô tả",
            'image.mimes' => 'Chỉ chấp nhận file hình ảnh',
            'image.max' => 'Chỉ chấp nhận hình ảnh dưới 2Mb'
        ]);

        $file = $request->file("image");
        $fileName = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path("image"), $fileName);
        $food = new Food();
        $food->name = $request->name;
        $food->decription = $request->decription;
        $food->price = $request->price;

        $food->image = $fileName;
        $food->save();
        return redirect()->route("foods.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $food = Food::find($id);

        // return view('pages.foods.detail')->with('food', $food);
        return view("pages.foods.detail", ['food' => $food]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
