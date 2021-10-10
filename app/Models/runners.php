<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class runners extends Model
{
    use HasFactory;

    protected $table = 'runners';

    public function getRunnerDetails($id)
    {
        $runs = DB::table('runners')->select('name', 'age', 'sex', 'color')->where('id', $id)->get();

        return $runs;
    }
}
