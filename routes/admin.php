<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostsController;

use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\Dashboardcontroller;



Route::prefix('admin')->group(function(){
    Route::get('/',[Dashboardcontroller::class , 'index']);
    Route::resource('/users',UserController::class);
    Route::resource('/roles',RolesController::class);
    Route::resource('/posts',PostsController::class);

    
    // code for test relation retreive data
    // Route::get('/role' , function(){
    //     $roles =Role::with([
    //         'users' => function($query){
    //             $query->select('name' ,'email' , 'role_id');
    //         }
    //     ])->get();
    //     return response()->json($roles);
    // });

    // Route::get('/posts' , function(){
    //         $users =User::with([
    //             'posts' => function($query){
    //                 $query->select('title' ,'description' , 'user_id');
    //             }
    //         ])->get();
    //         return response()->json($users);
    //     });
    

});


