<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KillBirdModel extends Model
{
    //

    protected $table ="kill_bird_score";
    protected $fillable =
        [
            "score"
        ];

}
