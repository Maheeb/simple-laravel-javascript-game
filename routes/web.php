<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/main-game', 'ScoreController@index')->name('score.index');
Route::get('/main-game/score-detail', 'ScoreController@detail')->name('score.detail');
//Route::post('/main-game/score-detail-post', 'ScoreController@detail')->name('score.detail');



Route::get('/snake-game', 'SnakeController@index')->name('snake.index');
Route::get('/snake-game/snake_score_detail', 'SnakeController@snake_score_detail')->name('snake_score_detail.detail');



Route::get('/kill-bird', 'KillBirdController@index')->name('kill-bird.index');
Route::get('/kill-bird/kill-bird-score-detail', 'KillBirdController@detail')->name('kill-bird-score.detail');


Route::get('/ping-pong', 'ScoreController@ping_pong')->name('ping_pong.index');
Route::get('/ping-pong/ping-pong-score-detail', 'ScoreController@detail')->name('ping-pong-score.detail');






Route::get('/fy-bird', 'ScoreController@flappy_bird')->name('flappy-bird.index');
