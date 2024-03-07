<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Like\StoreRequest;
use App\Http\Resources\Like\LikeResource;
use App\Models\likes;
use App\Models\Memes;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['likeable_type']=1;
        $like = likes::create($data);
        return new LikeResource($like);
    }


    public function index()
    {
        return LikeResource::collection(Likes::all());
    }

}
