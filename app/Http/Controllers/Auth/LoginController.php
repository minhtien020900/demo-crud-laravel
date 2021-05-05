<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request)
    {
        if (Auth::user()->role == 0) {
            $this->redirectTo = 'list-product';
            return redirect($this->redirectTo);
        } else {
            $this->redirectTo = '/login';
            return redirect($this->redirectTo)->with('res', "You don't have permission");
        }
    }

//    public function username()
//    {
//        return 'username';
//    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'

        ]);
        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
//        $credentials = $request->only('email', 'password');
        if (auth()->attempt(array($fieldType => $input['email'], 'password' => $input['password']))) {
            return redirect()->route('list-product.index');
        }
//        if (\auth()->attempt(['name' => $input['email'], 'password' => $input['password']])) {
//            return redirect()->route('list-product');
//        }
        else {
            return redirect()->route('login')
                ->with('res','Email-Address And Password Are Wrong.');
        }

    }
}
