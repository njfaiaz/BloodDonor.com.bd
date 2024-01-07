<?php

namespace App\Http\Controllers\Auth;

use App\Constants\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Thana;
use App\Models\User;

class RegisterController extends Controller
{
    use RegistersUsers;


    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if (Auth()->user()->role == 'admin') {
            return route('admin.dashboard');
        } elseif (Auth()->user()->role == 'user') {
            return route('user.dashboard');
        }
    }


    public function __construct()
    {
        $this->middleware('guest');
    }



    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'name' => ['required', 'string', 'max:255'],
                'blood_group' => ['required', 'string', 'max:255'],
                'gender' => ['required', 'string', 'max:255'],
                'district_id' => ['required', 'string', 'max:255'],
                'thana_id' => ['required', 'string', 'max:255'],
                'blood_give' => ['required', 'string', 'max:255'],
                'plat_give' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'min:11', 'max:15', 'unique:users'],
                'last_time' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ],
            [
                'phone' => 'The phone field must be an Number!',
            ]
        );
    }


    protected function create(array $data)
    {
        $slug = User::uniqueSlug($data['name']);
        return User::create([
            'name' => $data['name'],
            'blood_group' => $data['blood_group'],
            'slug' => $slug,
            'gender' => $data['gender'],
            'district_id' => $data['district_id'],
            'thana_id' => $data['thana_id'],
            'blood_give' => $data['blood_give'],
            'plat_give' => $data['plat_give'],
            'phone' => $data['phone'],
            'last_time' => $data['last_time'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        dd($data);
    }

    public function thana($district_id)
    {
        $subCat = Thana::where('district_id', $district_id)->orderBy('thana_name', 'ASC')->get();
        return json_encode($subCat);
    }
}
