<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;
use Test;
use DB;

class MyController extends Controller
{
    public function show($id)
    {
        /*DB::table('mcD')->insert(
            ['name' => 'Heribertooooooo']
        );*/

        $name = DB::table('mcD')->pluck('name');

        return $name;
    }



}