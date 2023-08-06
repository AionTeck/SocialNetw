<?php

namespace App\Services;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Service
{
    //Метод сохранения данных из полей content и author для передачи в модель Post
    public function newsStore($request){
        // Если пользователь аутентифицирован то в переменную author записывается имя залогиненого пользователя
        if (Auth::check()) {
            $author = Auth::user()->name;
        }
        // Запись данных в БД с помощью модели Post
        $post = Post::create([
            'content'=>$request->content,
            'author' =>$author,
        ]);
        $post->save();
    }

    //Регистрация нового пользователя
    public function RegisterStore($request){
        //Запись в БД валидных данных взятых из request
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // хеширование пароля
            'password' => Hash::make($request->password)
        ]);
        // Авторизация пользователя после успешной регистрации
        Auth::login($user);
    }

    // Проверка данных и авторизация пользователя
    public function LoginStore($request){
        // Если данные пользователя не валидны, то возврат на предыдущую страницу для изменения данных
        if (!Auth::attempt($request->validated())) {
            return back()->withInput();
        }
        return redirect('/home');
    }

    public function logout($request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
    }
}
