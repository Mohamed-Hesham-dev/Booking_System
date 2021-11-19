<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\ResponseObject;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Response as FacadeResponse;

class LoginController extends Controller
{
    // public function login(Request $request)
    // {

    //     $user = User::where('email', $request->email)->first();
    //     if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
    //         if (Hash::check($request->password, $user->password)) {
    //         //     $token = $user->createToken('authtoken')->accessToken;

    //         //    // $token = $user->createToken('My Token', ['place-orders'])->accessToken;

    //         $user = Auth::user();
    //         $token = auth()->user()->createToken('authToken')->accessToken;
    //             $response = ["message" =>'User Login','token'=>  $token];
              
    //             return response($response, 200);
    //         } else {
    //             $response = ["message" => "Password mismatch"];
    //             return response($response, 400);
    //         }
    //     } else {
    //         $response = ["message" =>'User does not exist'];
    //         return response($response, 400);
    //     }
    // }


    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = Auth::user()->createToken('auth')->accessToken;
            return response()->json([
                'message' => 'success',
                'token' => $token,
                'data' => $user,
            ]);
        } else {
            $error = "Invalid email or Password";
            return response()->json([

                'message' => 'failed',
                'data' => $error,
            ], 400);
        }
    }

}
