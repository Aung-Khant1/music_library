<?php

namespace App\Http\Controllers;
use App\Song;
use App\Singer;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home($value='')
    {
        $latest_one_song = Song::orderby('id', 'desc')
                            ->take(1)
                            ->get();
        $songs = Song::all();
        $singers = Singer::all();
    	return view('frontend.mainpage', compact('latest_one_song', 'songs', 'singers'));
    }
    public function songsbysinger($id)
    {
        $latest_one_song = Song::orderby('id', 'desc')
                            ->take(1)
                            ->get();
        $songs = Song::all();
        $singers = Singer::all();
        $mysinger = Singer::find($id);
        // dd($mysinger);
    	return view('frontend.mainpage', compact('latest_one_song', 'songs', 'singers', 'mysinger'));
    }

    public function filterSongOfSinger(Request $request)
    {
        $sid=$request->sid;
        $songs=Song::where('singer_id',$sid)->get();
        //dd( $songs);
        return $songs;
    }
}
