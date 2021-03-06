<?php

use Illuminate\Http\Request;
// use Validator;
use App\Message;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Artisan::call('view:clear');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/message', function (Request $request) {

    $name       = mb_convert_case($request->input('name'), MB_CASE_TITLE, "UTF-8");
    $email      = $request->input('email');
    $message    = $request->input('message');


    $messages = [
        'required' => 'Поле :attribute обязательно для заполнения!',
        'email'  => 'Поле :attribute должно быть корректным адресом e-mail',
    ];

    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'nullable|email',
        'message' => 'required',
    ], $messages);

    if ($validator->fails()) {
        return redirect('/#contact')
                    ->withErrors($validator)
                    ->withInput();
    }

    $mess = new Message;

        $mess->name = $name;
        $mess->email = $email;
        $mess->message = $message;

        $mess->save();

    return view('message', [
        'name'      => $name,
        'email'     => $email,
        'message'   => $message,
    ]);
})->name('message');

Route::get('/ssd', function () {

    

    $messages = App\Message::all();
    

return view('ssd', ['messages' => $messages]);
})->name('ssd');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
