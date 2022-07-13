<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\rndValue;


class Rnd_value extends Controller
{
    public function generate()
    {



        $flight = rndValue::create(['value' => mt_rand(1,100)]);
        if($flight) {
            echo 'число добавлено';
        }else {
         echo 'отправка не удалась';
        }


    }

    public function index()
    {


        return rndValue::all();
    }

    public function retrieve($id)
    {
        return rndValue::find($id);
    }
}
