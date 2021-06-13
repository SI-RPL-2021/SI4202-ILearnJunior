<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index(){
        return view('client.feedback.feedback');
    }
    public function show(){
        $feedback = DB::table('feedback')->offset(0)->limit(7)->get();
        return view('admin.feedback.listfeed')->with('feedback',$feedback);
    }
    public function store(Request $request){
        $feedback = Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'feedback' => $request->feedback,
        ]);  
        return back()->with('success','You feedback have successfully sent!.');
    }
}
