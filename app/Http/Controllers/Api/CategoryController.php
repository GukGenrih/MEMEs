<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Meme\MemeResource;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Categories::all());

    }
    public function show(Categories $category)
    {
        return new CategoryResource($category);

    }
    public function allMemes(Categories $category)
    {
        $memes=$category->meme;
        return MemeResource::collection($memes);

    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $meme = Categories::create($data);

        return new CategoryResource($meme);
    }

}
