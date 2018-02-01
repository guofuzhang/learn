<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Mews\Captcha\Facades\Captcha;

class LoginController extends Controller
{


    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {

//        if (Request::getMethod() == 'POST')
//        {
//            $rules = [
//                'captcha_code'=>'required|captcha'
//            ];
//            $messages = [
//                'captcha_code.required' => '验证码必填',
//                'captcha_code.captcha' => '验证码不正确',
//            ];
////            $rules = ['captcha' => 'required|captcha'];
////            dd($request);
//            $res=$this -> validate($request,$rules,$messages);
////            $validator = Validator::make(Input::all(), $rules);
//
//            dd($res);
//            if ($validator->fails())
//            {
//                dd(00000);
//            }
//            else
//            {
//                dd(1111);
//            }
//        }
//

        $this->middleware('guest')->except('logout');
    }
}
