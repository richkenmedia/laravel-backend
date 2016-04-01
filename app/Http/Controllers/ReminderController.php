<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Controllers\Controller;

use App\Models\User;
use Sentinel;
use Reminder;
use DB;
use Input;
use Mail;
use Hash;
use Session;
use Validator;


class ReminderController extends Controller
{
	

    public function create() /*To enter user email*/{
        return view('reminders.reset-password');
    }

     
     public function store(Request $request) /*To check whether user exists*/{
        
        $email = Input::get('email');
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            ]);

        if ($validator->fails()):
            $this->throwValidationException( $request, $validator );
        endif;

        $get = User::where('email', $email)->first();
        $user = Sentinel::findById($get->id);
        if ($user) {

            $reminder = Reminder::create($user);
            $userdetails = ['id' => $user->id,
                    'email' => $user->email,
                    'username' => $user->username,
                    'first_name' => $user->first_name,
                    'code' => $reminder->code
                    ];

            return view('emails.reminder')->with('id',$userdetails['id'])->with('code', $userdetails['code']) ; 


   //          Mail::send('emails.reminder',$userdetails, function($message) use ($userdetails) {  //it wont return anything coz its void
				
			// 	$message->to($userdetails['email'], $userdetails['username'])->subject('iBox-Reset password');
			// 	$message->sender('no-reply@ibox.com', 'IBox');
			
			// });
           
   //          if(count(Mail::failures()) > 0) {
                
   //              return view('reminders.reset_password');
            
   //          } else {

   //              return view('reminders.checkmail');
   //          }
        }
        

    }

    public function edit($id, $code) {
        $user = Sentinel::findById($id);

        if (Reminder::exists($user, $code)) {
            return view('reminders.edit')->with('id', $id)->with('code', $code);
        }
        else {
            //incorrect info was passed
            return redirect('user/forgot_password');
        }
    }

    public function update(Request $request) {
        
        $password = Input::get('password');
        $passwordConf = Input::get('password_confirmation');
        $id = Input::get('id');
        $code = Input::get('code');
        $user = Sentinel::findById($id);
    
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'password_confirmation' =>'required|same:password'
            ]);

        if ($validator->fails()):
            $this->throwValidationException( $request, $validator );
        endif;
        //incorrect info was passed.
        if (!$user) {
             return redirect('user/login');
        }

        $success = Reminder::complete($user, $code, $password); 
        if($success){ 
            Session::flash('success', 'Password Reset successfull. Please Login');
            return redirect('user/login');
        }
    }
}