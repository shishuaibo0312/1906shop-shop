<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Model\ShopGoodsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class ShopIndexController extends Controller
{
    //前台首页
    function index(){
        //echo "<pre>";print_r($_COOKIE); echo "<pre>";die;
        $newgoodsinfo=ShopGoodsModel::where('g_new',1)->get();
        $bestgoodsinfo=ShopGoodsModel::where('g_best',1)->get();
        //dd($goodsinfo);


        if(isset($_COOKIE['user_name'])){
//            $key='str:user:token'.$_COOKIE['user_id'];
//            $token= Redis::get($key);
            $namekey='str:user:name'.$_COOKIE['user_name'];
            $user_name=Redis::get($namekey);
            echo $user_name;
            if($user_name==''){
                $user_name="XXX";
            }
            return view('index.index',['newgoodsinfo'=>$newgoodsinfo,'bestgoodsinfo'=>$bestgoodsinfo,'user_name'=>$user_name]);
        }else{
            $user_name="XXX";
            return view('index.index',['newgoodsinfo'=>$newgoodsinfo,'bestgoodsinfo'=>$bestgoodsinfo,'user_name'=>$user_name]);
        }


    }

    //商品详情页
    function product($gid){
        $goodinfo=ShopGoodsModel::where(['gid'=>$gid])->first();
        //dd($goodinfo);
        return view('index.product',['goodinfo'=>$goodinfo]);
    }

}
