<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class form_last_runrs extends Model
{
    use HasFactory;

    protected $table = 'form_last_runrs';

    public function get_single_runner_last_runs($id)
    {

        $last_runs = DB::table('form_last_runrs')->where('runner_id', $id)->get();

        return $last_runs;
    }
}
