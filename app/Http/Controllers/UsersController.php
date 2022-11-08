<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataUsers['users'] = Users::paginate(5);
        return view('User.Dashboard', $dataUsers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('User.Register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dataUser = $request->except(['_token']);
        if($request->hasFile('image')){
            $dataUser['image'] = $request->file('image')->store('uploads', 'public');
        }
        $dataUser['password'] = bcrypt($dataUser['password']);
        Users::insert($dataUser);

        return response()->json($dataUser);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user= Users::findOrFail($id);
        return view('User.Dashboard', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dataUser = $request->except(['_token', '_method']);
        Users::where('id', '=', $id)->update($dataUser);
        $user = Users::findOrFail($id);

        return redirect('user')->with('userUpdate', $user);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Users::destroy($id);
        return redirect('user')->with('message', 'User Deleted Successfully');
    }
}
