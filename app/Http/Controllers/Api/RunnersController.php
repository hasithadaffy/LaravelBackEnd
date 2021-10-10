<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\runners;
use App\Models\form_last_runrs;

class RunnersController extends Controller
{
    //get single runner details

    public function getSingleRunnerDetails($id)
    {
        $Runner = new runners();
        $LastRuns = new form_last_runrs();

        if(runners::where(["id" => $id,])->exists())
        {
            $data = $Runner->getRunnerDetails($id);
            $data['last_runs'] = $LastRuns->get_single_runner_last_runs($id);

            return response()->json([
                            "success" => true,
                            "message" => "Runner details",
                            "data" => $data
                        ]);
        }else{
            return response()->json([
                            "success" => false,
                            "message" => "Runner not found"
                        ]);
        }
    }

}
