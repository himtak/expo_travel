<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function forms($section, request $request)
    {
        $data = $request->all();
        $sections = array('header', 'promotions', 'aboutus', 'testimonial', 'services', 'video', 'social-media');
        $files = array('video_photo', 'promotion_1_photo', 'promotion_2_photo', 'promotion_3_photo', 'promotion_4_photo');


        if (in_array($section, $sections)) {
            foreach ($data as $key => $value) {
                if (!in_array($key, $files) and $key != '_token') {
                    Content::updateOrCreate(
                        ['key' =>  $key],
                        ['value' => $value]
                    );
                }elseif(in_array($key, $files) and $key != '_token'){
                    $file = $request->file($key);
                    $filename = $key.'.'.$file->getClientOriginalExtension();
                    $file->move(public_path('img/web'), $filename);
                    Content::updateOrCreate(
                        ['key' =>  $key],
                        ['value' => $filename]
                    );
                }
            }
            Cache::forget('settings');
            return redirect(route('dashboard'))->with('success', 'Data updated successfully');
        } else {
            return response(view('error.404'), 404);
        }

    }
}
