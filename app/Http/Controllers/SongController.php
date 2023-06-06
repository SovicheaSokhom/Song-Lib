<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Mypackage\SongProto;
use Mypackage\SongsProto;

class SongController extends Controller
{
    public function getSongProtobuf()
    {
        $songs = Song::limit(5000)->get();
        $songArray = [];
        foreach($songs as $song){
            $songProto = new SongProto();
            $songProto->setId($song["id"]);
            $songProto->setName($song["name"]);
            $songProto->setSinger($song["singer"]);


            $songArray[] = $songProto;
        }

        $songList = new SongsProto();
        $songList->setSongs($songArray);

        return response($songList->serializeToString(),200);
    }

    public function getSongJson()
    {
        $songs = Song::take(5000)->get();

        // return response()->json($songs);
        return view('songs/index', ['data' => $songs]);
    }
}
