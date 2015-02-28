<?php

namespace Razor\Http\Controllers;


use Illuminate\Http\Request;

use Razor\Http\Requests\CreateSongRequest;
use Razor\Song;

/**
 * Class SongsController
 * @package Razor\Http\Controllers
 */
class SongsController extends Controller {

    public $song;

    public function __construct(Song $song) {

        $this->song = $song;
    }

    /**
     * @return \Illuminate\View\View
     */
    function index()
    {

        $songs =  $this->song->get();



        return view('songs.index',['songs' => $songs]);

    }


    /**
     * @param $slug
     * @return \Illuminate\View\View
     */
    function show($song) {


        return view('songs.show',compact('song'));


    }

    /**
     * @param $slug
     * @return \Illuminate\View\View
     */
    function edit($song) {


        return view('songs.edit',compact('song'));

    }

    /**
     * Create a new song
     * @return \Illuminate\View\View
     */
    function create() {

        return view('songs.create');
    }


    /**
     * @param Request $request
     * @param Song $song
     * @return \Illuminate\Http\RedirectResponse
     */
    function store(CreateSongRequest $request, Song $song) {


        $song->create($request->all());

        return redirect()->route('songs_path');

    }


    /**
     * @param Song $song
     * @throws \Exception
     */
    function destroy(Song $song) {

        $song->delete();

        return redirect()->route('songs_path');
    }


    /**
     * @param $slug
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function update($slug, CreateSongRequest $request) {

        $song = Song::where('slug',$slug)->first();

        $song->fill($request->input())->save();

        return redirect('songs');

    }
}
