<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Inertia::render('Welcome', [
            'tweets' => Tweet::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file =null ;
        $extension = null;
        $fileName =null;
        $path = '';
        if($request->hasFile('file')){
            $request->validate([
                'file' => 'required|mimes:mp4,jpg,jpeg,png,gif',
            ]);
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $extention === 'mp4' ? $path = '/videos/' : $path = '/pics/';
            
            $tweet = new Tweet;
            $tweet->name = 'taher snousis';
            $tweet->username = 'tahersn';
            $tweet->image = 'https://avatars.githubusercontent.com/u/93453566?v=4';
            $tweet->time = '2h';
            $tweet->handle = '@tahersn';
            $tweet->tweet = $request->input('tweet');
            if($fileName){
                $tweet ->file = $path.$fileName;
                $tweet->is_video = $extension === 'mp4' ? true : false;
                $file->move(public_path().$path, $fileName);
            }
            $tweet->comments = rand(0,100);
            $tweet->retweets = rand(0,100);
            $tweet->likes = rand(0,100);
            $tweet->analytics = rand(0,100);
            $tweet->save();

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tweet $tweet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tweet $tweet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tweet $tweet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $tweet = Tweet::find($id);
        if(!is_null($tweet->file)&&file_exists(public_path().$tweet->file)){
            unlink(public_path().$tweet->file);
        }
        $tweet->delete();
        return redirect()->route('tweets.index');
    }
    
}
