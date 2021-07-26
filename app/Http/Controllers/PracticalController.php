<?php

namespace App\Http\Controllers;

use App\Models\Practical_;
use Illuminate\Http\Request;

class PracticalController extends Controller
{
    public function save(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "feedback"=>"required"
        ]);
        Practical::created([
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "phone"=>$request->get("phone"),
            "feedback"=>$request->get("feedback")
        ]);
    }
}
