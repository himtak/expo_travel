<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () { return view('index'); })->name('index');
Auth::routes(['register' => false]);


Route::get('/contact-us', function (request $request) {
        $data = array(
            'name' => $request->contact_name,
            'email' => $request->contact_email,
            'subject' => $request->contact_subject,
            'message' => $request->contact_message
        );
        Mail::send('contactus', ['data'=>$data], function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('info@nooralshams.ae');
            $message->subject($data['subject']);
        });
        return redirect(url('/#contact-section'))->with('success', 'Thanks for contacting us!');
 })->name('contact_us');



Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::post('/dashboard/{section}', [App\Http\Controllers\HomeController::class, 'forms']);



Route::get('/{any}', function () { return redirect()->route('index'); });
Route::get('/dashboard/{any}', function () { return redirect()->route('index'); });
