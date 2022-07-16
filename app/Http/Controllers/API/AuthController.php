<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Finish;
use App\Models\Raw;
use App\Models\User;
use App\Models\Wip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
         ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['data' => $user,'access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|string|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }
        
        $user=User::where('email',$request->email)->first();
        if($user!=null){
            if (Hash::check($request->password, $user->password)){
                $user = User::where('email', $request->email)->firstOrFail();
        
                $token = $user->createToken('auth_token')->plainTextToken;
        
                return response()
                    ->json(['message' => 'Hello '.$user->name.'!','access_token' => $token, 'token_type' => 'Bearer', ]);
                
            }else{
                return response()
                    ->json(['message' => 'Unauthorized'], 401);
                }
            }else{
            return response()
                ->json(['message' => 'User Not Found!'], 404);
        }

    }

    public function user()
    {
        return auth()->user();
    }

    // method for user logout and delete token
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out'
        ];
    }

    //Route for List data

    public function stocks()
    {
        $data['raws']=Raw::all();
        $data['wips']=Wip::all();
        $data['finishes']=Finish::all();
        
        return response()->json([
            'message' => 'Success retrieve data',
            'status' => 200,
            'data' => $data
        ]);
    }

    public function stock(Request $request)
    {
        if(substr($request->q,0,1)==1){
            $data['stock']=Raw::where('code',$request->q)->first();
        }elseif(substr($request->q,0,1)==2){
            $data['stock']=Wip::where('code',$request->q)->first();
        }else{
            $data['stock']=Finish::where('code',$request->q)->first();
        }

        return response()->json([
            'message' => 'Success retrieve data',
            'status' => 200,
            'data' => $data
        ]);
    }

    public function buy(Request $request)
    {
        if(substr($request->code,0,1)==1){
            $table='raws';   
        }elseif(substr($request->code,0,1)==2){
            $table='wips';   
        }else{
            $table='finishes';   
        }
        

    }
    
}
