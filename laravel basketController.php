<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class basketController extends Controller
{
    public function basket(Request $request){

        $user_id = session('user_id');

        $product_id = $request->product_id;


        $status=1;
        $basket_exist = DB::select('select * from baskets where user_id = ? and status = ? ', [$user_id, 1]);


        if(empty($user_id)){
            return redirect()->to(route('user.registration'))->withErrors([
                    'email' => 'Произошла ошибка '
            ]);
        }

//        if (empty($basket_exist)){
//
//            return redirect()->to(route('user.index'))->with([
//                    'email' => 'Произошла ошибка '
//            ]);
//
//        }

        if(@$basket_exist[0]){
            $basket_id=$basket_exist[0]->id;
        }else{
            $basket_id= DB::table('baskets')->insertGetId(['user_id'=> $user_id, 'status'=>$status]);
        }
        DB::table('baskets_products')->insert(['basket_id'=> $basket_id, 'product_id'=>$product_id]);

        return redirect()->to(route('user.index'))->withErrors([
            'email' => 'Произошла ошибка '

        ]);
//        return redirect()->to(route('basket.upload'))->withErrors([
//            'email' => 'Произошла ошибка '
//
//        ]);

    }
}
