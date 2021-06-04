<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        return view('client.feedback.feedback');
    }
    public function store(Request $request){
        $feedback = Feedback::create([
            
        ])
    }
}
