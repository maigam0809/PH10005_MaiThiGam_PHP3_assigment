<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\Client\RegisterController;
use App\Models\Category;
use App\Models\Product;
class LoginController extends Controller
{
    public function getLoginForm(){
        return view('auth/login');
    }

    public function getLoginFormClient(){
        $categories = Category::all();
        $categories->load('products');
        return view('client/pages/login',[
            'categories'=>$categories
        ]);
    }

    public function login(Request $request){
        $data = $request->only([
            'email',
            'password',
            'remember_token',
        ]);
        // dd($data['remember_token']);

        $a = User::where('email',$data['email'])->first();
        $b = $a->email_verified_at;
        // dd($a->role);

        if($a->role == config('common.users.role.admin')){
            if($b !== null){
                $result = Auth::attempt($data);

                if($result === false){
                    session()->flash('error','sai email or mật khẩu');
                    return back();
                }

                $user = Auth::user();

                // dd($user);
                return redirect()->route('admin.users.index')->with('Đăng nhập thành công');
            }else{
                session()->flash('error','Tài khoản này chưa kích hoạt.');
                return back();
            }
        }
    }

    public function loginClient(Request $request){
        // dd($request);
        $data = $request->only([
            'email',
            'password',
            'remember_token',
        ]);
        // dd($data);

        $a = User::where('email',$data['email'])->first();
        $b = $a->email_verified_at;
        if($a->role == config('common.users.role.users')){
            if($b !== null){
                $result = Auth::attempt($data);

                if($result === false){
                    session()->flash('error','sai email or mật khẩu');
                    return back();
                }

                $user = Auth::user();

                // dd($user);
                return redirect()->route('client.login')->with('Đăng nhập thành công');
            }else{
                session()->flash('error','Tài khoản này chưa kích hoạt.');
                return back();
            }

        }
    }

    public function logoutClient(Request $request){
        Auth::logout();
        return redirect()->route('client.getLoginFormClient')->with('message',"Đăng xuất thành công.");
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('auth.getLoginForm')->with('message',"Đăng xuất thành công.");

    }

    public function register(){
        $categories = Category::all();
        $categories->load('products');

        return view('client/pages/register',[
            'categories' => $categories
        ]);
    }

    public function store(RegisterController $request){
        $categories = Category::all();
        $categories->load('products');

        $path = $request->file('image')->store('public/users');
        $path = str_replace('public','storage',$path);

        $data = $request->except('_token');
        $data['role'] = config('common.users.role.users');
        $data['image'] = $path;

        $result = User::create($data);

        return redirect()->route('client.getLoginFormClient')->with('message',"Thêm Thành công!! Mời bạn đăng nhập.");


    }
}
