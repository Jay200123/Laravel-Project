<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Nette\Utils\Random;
use Storage;

class UserController extends Controller
{
    public function __construct(){
        $this->total = 0;
    }


    //Customer Sign Up Views and Store Function

    //getting the views for signup
    public function getSignup(){

        //route for redirecting to signup views
        return views('user.signup');

    }

    //sending data to database through POST METHOD

    //POST Method for Customer Sign Up
    public function postSignup(Request $request){

        $this->validate($request, [
            'email' => 'email| required| unique:users',
            'password' => 'required| min:4',
        ]);

        $user = new User([
            'name' => $request->input('fname').' '.$request->lname,
              'email' => $request->input('email'),
              'password' => bcrypt($request->input('password')),
              'role' => $request->input('role').''.$request->role = 'customer'
          ]);
          $user->save();

          $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'town' => 'required|max:255',
            'city' => 'required|max:255',
            'customer_image' => 'mimes:png,jpg,gif,svg',
        ]);

         $customer = new Customer();
         $customer->user_id = $user->id;
         $customer->fname = $request->fname;
         $customer->lname = $request->lname;
         $customer->address = $request->address;
         $customer->phone = $request->phone;
         $customer->town = $request->town;
         $customer->city = $request->city;

         $files = $request->file('uploads');

         $customer->customer_image = 'images/' . time() . '-' . $files->getClientOriginalName();

         $customer->save();

         $data = array('status' => 'saved');
        Storage::put('images/' . time() . '-' . $files->getClientOriginalName(), file_get_contents($files));

        return response()->json(["success" => "User Registered Successfully.", "customer" => $customer, "status" => 200]);

    }
}
