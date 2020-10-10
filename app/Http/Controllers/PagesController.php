<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Member;
use App\Models\Event;
use App\Models\Academic\Notice;
use App\Models\Advisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function home(){
        $events = Event::all();
        $images = DB::table('slider_images')->get();
        return view('home_page', compact('images', 'events'));
    }

    public function notice(){
        $notices = Notice::all();
        return view('pages.notice', compact('notices'));
    }

    public function events(){
        $events = Event::all();
        return view('pages.event', compact('events'));
    }

    public function admission(){
        return view('pages.admission');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function department(){
        return view('pages.department');
    }
}
