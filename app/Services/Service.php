<?php

namespace App\Services;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Service
{
    public function newsStore($request){
        $post = Post::create([
            'content'=>$request->content,
        ]);
        $post->save();
    }

    public function RegisterStore($request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
    }

    public function LoginStore($request){
        if (!Auth::attempt($request->validated())) {
            return back()->withInput();
        }
        return redirect('/home');
    }

    public function UserInfo(){
        $user = Auth::user();
    }
}
