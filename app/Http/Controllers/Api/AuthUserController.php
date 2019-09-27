<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UserDetails;

use App\Models\Role;

use Carbon\Carbon;

class AuthUserController extends Controller
{
    
    public function register(Request $request)
    {
        dd($request->toArray());
        $emails = User::pluck('email');
        $email_exists = in_array($request->email, $emails->toArray());
        if ($email_exists) {
            return response()->json(['data' => "Email Exists"], 201);
        } else {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'token' => str_random(60),
                'token_expireIn' => Carbon::now()->addHour(2)->toDateTimeString(),
            ]);

            if ($data->user_role === 'rider') {
                $user->roles()->attach(Role::where('name', 'Rider')->first());
            }
            elseif($data->user_role === 'customer') {
                $user->roles()->attach(Role::where('name', 'Customer')->first());
            }
            elseif($data->user_role === 'service_provider') {
                $user->roles()->attach(Role::where('name', 'Service Provider')->first());
            }
            else {
                $user->roles()->attach(Role::where('name', 'Customer')->first());
            }
            UserDetails::create([
                'user_id' => $user->id,
                'profile_image' => 'user.png'
            ]);
            // return redirect('/')->with('signup_success','You have Successfully Signed Up!');
            // return $user;
            $new_user = User::where('id',$user->id)->with('user_details')->first();
            return response()->json(['data' => $new_user->toArray()], 201);
        }
        
    }

    public function login(Request $request)
    {
        $emails = User::pluck('email');
        $email_exists = in_array($request->email, $emails->toArray());
        // dd($email_exists);
        if (!$email_exists) {
            // this code will run when email will not found
            return response()->json(['data' => "No User Found"], 201);
        } else {
            $user = User::where('email', $request->email)->with('user_details')->first();            
            // dd(Hash::make($request->password),$user->password);
            if (!(Hash::make($request->password) == $user->password)) {
                # this code will run when password will not match
                return response()->json(['data' => "Wrong Password"], 201);
            } else {
                return response()->json(['data' => $user->toArray()], 201);
            }
            
        }
        
    }

    public function logout(Request $request)
    {
        # code...
    }

}
