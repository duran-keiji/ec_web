<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\models\UserInfo;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        return UserInfo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email, $password)
    {
        $CheckUser = UserInfo::where('email', '=', $email)->where('delete_flg', '=', 0)->first();
        $error_msg = [];
        if (!empty($CheckUser)) {
            if ($CheckUser->password === (string)$password) {
                $respons = [
                    'status' => 200
                ];
                return $respons;
            } else {
                $error_msg = "パスワードが違います";
            } 
        } else {
            $error_msg = "メールアドレスが違います";
        }
        
        return $respons = [
                 'status' => 404,
                 'error_msg' => $error_msg
               ];

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
