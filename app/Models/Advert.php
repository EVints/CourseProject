<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    protected $table = 'advert';

    /**
     * @return string
     */
    public function getMeetForGoogleLink(): string
    {
        $pointList = json_decode($this->meet, true);

        return join(",", $pointList);
    }
}
