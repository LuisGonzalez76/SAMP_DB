<?php namespace App\Http\Controllers;
use App\Models\User;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;
use App\Facility;
use DB;

class FacilitiesController extends Controller {

    //const MODEL = "App\Facility";

   // use RESTActions;



    public function all(){

        //$facilities = DB::table('Facility')->get();

        $facilities = Facility::all();

        return $facilities;


    }

    //public function add(){


   // }

}
