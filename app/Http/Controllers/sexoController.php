<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;
use App\mcD;
use DB;

class sexoController extends Controller
{
    public function show($id)
    {
        /*DB::table('mcD')->insert(
            ['name' => 'Heribertooooooo']
        );*/

        //$name = DB::table('mcD')->pluck('name');
        //$name = mcD::where('id', $id)->get(); //same as mcD::find($id);
        //$name = mcD::find($id);
        $name = mcD::all();
         return $name;
    }

}