<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // retrieving the user from database
        try {
            //code...
            $user = User::where('email', '=', $request->email)->get();
            if (!(md5($request->password) == $user->password)) {
                return response()->json([
                    'message' => 'login failed'
                ]);
            }
            // making a user session and sending it to the front-end
            session(['user_id' => $user->id]);
            $user_id = session('user_id');
            return response()->json([
                'user' => $user
                // 'current user email' => $request->email,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th
                // 'current user email' => $request->email,
            ]);
            //throw $th;
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
