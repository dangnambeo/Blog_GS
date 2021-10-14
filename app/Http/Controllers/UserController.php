<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Alert;

class UserController extends Controller
{
    function __construct()
    {
        $users = User::all();
        \view()->share('users', $users);
    }
    public function getListUser()
    {
        $user = User::all();
        $this->authorize($user);
        return view('admin.user.list-user', compact('user'));
        //dd($user);
    }
    public function getAddUser()
    {
        $user = User::all();
        $this->authorize($user);
        return view('admin.user.add-user');
    }
    public function postAddUser(Request $request)
    {
        $eror1 = [
            'full_name.required' => 'Bạn chưa nhập tên người dùng',
            'user_name.required' => 'Bạn chưa nhập tên đăng nhập',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password2.required' => 'Bạn chưa nhập lại mật khẩu ',
            'password2.same' => 'Mật Khẩu nhập lại không khớp ',
        ];
        $this->validate($request, [
            "full_name" => "required",
            "user_name" => "required",
            "password" => "required",
            "password2" => "required|same:password"
        ], $eror1);
        $user = new User;
        $user->full_name = $request->full_name;
        $user->user_name = $request->user_name;
        $user->level = $request->level;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            if ($request->hasFile('avatar')) {
                $file = $request->avatar;
                // $file_name=$file->getClientOriginalName();
                $file->move('upload/avatar', $file->getClientOriginalName());
                $user->avatar = "upload/avatar/" . $file->getClientOriginalName();
                $user->save();
            }
        }
        return redirect(route('list-user'));
    }
    public function getEditUser($user_id)
    {
        $user = User::findOrFail($user_id);
        $this->authorize($user);
        return view('admin.user.edit-user', compact('user'));
    }
    public function postEditUser(Request $request, $user_id)
    {


        $user = User::find($user_id);
        //$user ->full_name = $request ->full_name;
        $user->user_name = $request->user_name;
        $user->level = $request->level;
        if ($request->change_pass == "on") {
            $this->validate($request, [

                "password" => "required",
                "password2" => "required|same:password"
            ]);
            $user->password = bcrypt($request->password);
        }
        if ($user->save()) {
            if ($request->hasFile('avatar')) {
                $file = $request->avatar;
                // $file_name=$file->getClientOriginalName();
                $file->move('upload/avatar', $file->getClientOriginalName());
                $user->avatar = "upload/avatar/" . $file->getClientOriginalName();
                $user->save();
            }
        }

        return redirect(route('list-user'));
    }
    public function DeleteUser($user_id)
    {
        $user = User::find($user_id);
        alert()->toast('Xóa người dùng thành công', 'delete')->autoClose(1200);
        $user->delete();
        return back();
    }
    public function getSignUp()
    {
        return \view('admin.sign-up');
    }
    public function postSignUp(Request $request)
    {
        $eror = [
            'full_name.requỉed' => 'Bạn chưa nhập tên người dùng',
            'user_name.requỉed' => 'Bạn chưa nhập tên đăng nhập',
            'password.requỉed' => 'Bạn chưa nhập mật khẩu',
            'password2.requỉed' => 'Bạn chưa nhập lại mật khẩu ',
            'password2.same' => 'Mật Khẩu nhập lại không khớp ',
        ];
        $this->validate($request, [
            "full_name" => "required",
            "user_name" => "required",
            "password" => "required",
            "password2" => "required|same:password"
        ], $eror);
        $user = new User;
        $user->full_name = $request->full_name;
        $user->user_name = $request->user_name;
        $user->level = $request->level;
        $user->password = bcrypt($request->password);
        $user->save();
        alert()->success('Successfully', 'Tạo tài khoản thành công');
        return redirect(route('login'));
    }

    public function getLogin()
    {
        if (Auth::guard()->check()) {
            return redirect(\route('list-post'));
        } else {
            return view('admin.login');
        }
    }
    public function postLogin(Request $request)
    {
        $user_name = $request->user_name;
        $password = $request->password;

        if (Auth::attempt(['user_name' => $user_name, 'password' => $password])) {
            alert()->toast('Đăng nhập thành công', 'success')->persistent(false)->autoClose(1200);
            return redirect(route('home'));
        } else {
            alert()->toast('Bạn đã nhập sai tên đăng nhập hoặc mật khẩu', 'error')->persistent(false)->autoClose(5000);
            return back();
            //return redirect(route('login'));
            //with('mess','Bạn Đã Nhập Sai Tên Đăng Nhập Hoặc Mật Khẩu Mời nhập lại');
        }
    }
    public function getLogout()
    {
        Auth::logout();
        //   alert()->success('Successfully','Đăng xuất thành công');
        return redirect(route('login'));
    }
}
