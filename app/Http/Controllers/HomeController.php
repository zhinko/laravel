<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Auth;
use App\Gallery;
use App\Http\Requests\GalleryRequest;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

/*
    public function postIndex(){
        $obj=new Gallery;
        $obj->name=$_POST ['name'];
        $obj->body=$_POST ['body'];
        $obj->user_id=(isset(Auth::user()->id))?Auth::user()->id:0;
        $obj->picture='';
        $obj->status='';
        $obj->save();
        return redirect()->back();
    }
*/
    public function postIndex(GalleryRequest $r)

    {
        $r['user_id'] = (isset(Auth::user()->id))?Auth::user()->id:0;
        $r['picture'] = '';
        $r['status'] = '';
        unset($r['_token']);
        Gallery::create($r->all());
        return redirect()->back();
    }
}
