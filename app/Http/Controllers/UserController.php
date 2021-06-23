<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\requestpremium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->limit(7)->get();
        return view('admin.user.user')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request = requestpremium::create([
            'name' => $request->name,
            'email' => $request->email,
            'alasan' => $request->alasan,
        ]);
        return back()->with('success','Your request have successfully sent!.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findorFail($id);
        return view('admin.user.edituser')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->emails,
            'password' => bcrypt($request->password),
        ];
        User::where('id','=', $id)->update($data);

        return redirect()->route('listuser')->with('success','User Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorFail($id);
        $user->delete();
        return redirect()->route('register');
    }

    public function indexpremiumadmin()
    {
        $data = DB::table('requestpremium')->limit(7)->get();
        return view('admin.user.requestpremium')->with('data',$data);
    }

    public function indexpremium()
    {
        $data = DB::table('users')->limit(7)->get();
        return view('client.pengajuanpremium')->with('data',$data);
    }

    public function approve($id){
        $approve = requestpremium::findorfail($id);
        $approve->status = 'Diterima';
        $approve->save();

        return redirect()->back();
    }

    public function destroypremium($id)
    {
        $user = requestpremium::findorFail($id);
        $user->delete();
        return redirect()->back();
    }
}
