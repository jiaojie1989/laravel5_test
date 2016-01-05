<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test", function() {
//    $listModel = new Jiaojie\Models\Hours();
//    $data = DB::table("more_work_count")->paginate(15);
//    var_dump($data);exit;
//    $all = Jiaojie\Models\Hours::paginate(10);
//    var_dump($all);exit;
    $some = Jiaojie\Models\Hours::where("day", ">", "1999-01-10");//->paginate(10);
    var_dump($some);exit;
    return view("test.list", ["lists" => $some, "render" => $some->render()]);
});

Route::get("/redis", function() {
    $redis = LaravelRedis::connection();
    var_dump($redis->info());
    exit;
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
