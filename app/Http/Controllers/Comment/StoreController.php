<?php

namespace App\Http\Controllers\Comment;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        
        $this->service->store($data);
       
        return redirect()->route('comment.index');
    }
}
