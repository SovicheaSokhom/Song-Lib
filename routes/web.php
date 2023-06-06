<?php

use App\Http\Controllers\SongController;
use App\Models\Song;
use App\Proto\SongSerializer;
use Illuminate\Support\Facades\Route;
use Mypackage\SongProto;
use Symfony\Component\HttpFoundation\File\Stream;
use Symfony\Component\HttpFoundation\StreamedResponse;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/songProto', [SongController::class, 'getSongProtobuf']);
Route::get('/songJson', [SongController::class, 'getSongJson']);

// Route::get('/songs', function () {
//     $song= new SongProto();
//     $song->setId(1);
//     $song->setName("test name");
//     $song->setSinger("test singer");

//     $output = new Stream('php://temp','w+b')



//     return response()->download($song);
// });

