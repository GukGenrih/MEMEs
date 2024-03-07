<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Meme\StoreRequest;
use App\Http\Resources\Meme\MemeResource;
use App\Models\Memes;
use App\Models\User;
use Illuminate\Http\Request;

class MemeController extends Controller
{

    public function index()
    {
        return MemeResource::collection(Memes::all());

    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();


        $meme = Memes::create($data);

        return new MemeResource($meme);
    }


    public function show(Memes $meme)
    {
        return new MemeResource($meme);
    }



}
