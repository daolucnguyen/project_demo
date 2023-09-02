<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function test(){
        // $value = json_encode([1,2,3]);
        // $redis = Redis::connection();
        // $redis->set('foo', 'bar');
        // $redis->set('foo1', $value);
        // $redis->set('foo2', 2);
        // $name = $redis->get('foo1');
        // dd($name,json_decode($value));
    }
}
