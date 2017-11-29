<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;
use Test;

class MyController extends Controller
{
    public function show($id)
    {
        return response()->json(['name' => 'Jesse', 'id' => $id]);
        Test::insert('insert into mcDick (id, name) values (?, ?)', [1, 'Luis']);
    }



}