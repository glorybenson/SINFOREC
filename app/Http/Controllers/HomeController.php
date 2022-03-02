<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Util;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    const VALIDATION_FIELDS = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'role' => 'required',
        'pays' => 'required',
        'regions' => 'required',
        'departments' => 'required',
        'arrondissements' => 'required',
        'communes' => 'required',
        'centres' => 'required',
    ];

    public function index()
    {
        //Client::whereNotNull('id')->delete();
        $data['title'] = "Users";
        $data['sn'] = 1;
        $data['users'] = User::with('created_user:id,first_name,last_name')->orderBy('id', 'desc')->get();
        return view('users.index', $data);
    }

    public function my_profile(Request $request)
    {
        try {
            # code...
            $data['mode'] = 'profile';
            if ($_POST) {
                $rules = array(
                    'first_name' => ['required', 'string', 'max:255'],
                    'last_name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::user()->id],
                );

                $validator = Validator::make($request->all(), $rules);
                // $validator->setAttributeNames($fieldNames);

                if ($validator->fails()) {
                    Session::flash('warning', 'All fields are required');
                    return back()->withErrors($validator)->withInput();
                }

                $user = User::find($request->id);
                $user->first_name = $request->first_name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
                $user->save();

                Session::flash('success', "Profile updated successfully");
                return back();
            }
            return view('settings.profile', $data);
        } catch (\Throwable $th) {
            Session::flash('error', $th->getMessage());
            return back();
        }
    }

    public function change_password(Request $request)
    {
        # code...
        try {
            //code...
            $data['mode'] = 'password';
            if ($_POST) {
                $rules = array(
                    'current_password'     => 'required',
                    'new_password'  => ['required', 'min:8', 'same:confirm_new_password', 'max:16', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&+-]/'],
                    'confirm_new_password' => 'required'
                );

                $fieldNames = array(
                    'current_password'     => 'Current Password',
                    'new_password'  => 'New Password',
                    'confirm_new_password' => 'Confirm New Password'
                );
                //dd($request);
                $validator = Validator::make($request->all(), $rules);
                $validator->setAttributeNames($fieldNames);
                if ($validator->fails()) {
                    $request->session()->flash('warning', 'Password must 8 character long, maximum of 16 character, One English uppercase characters (A – Z), One English lowercase characters (a – z), One Base 10 digits (0 – 9) and One Non-alphanumeric (For example: !, $, #, or %)');
                    return back()->withErrors($validator);
                }

                $current_password = Auth::user()->password;
                if (!Hash::check($request->current_password, $current_password)) {
                    $request->session()->flash('warning', 'Password Wrong');
                    return back()->withErrors(['current_password' => 'Please enter correct current password']);
                }

                $obj_user = User::find(Auth::user()->id);
                $obj_user->password = Hash::make($request->new_password);
                $obj_user->save();
                $request->session()->flash('success', 'Password changed successfully');
                return \back();
            }

            return view('settings.profile', $data);
        } catch (\Throwable $th) {
            Session::flash('error', $th->getMessage());
            return back();
        }
    }

    public function create()
    {
        $shell = new \stdClass();
        $binding = Util::load( $shell);

        return view('users.create', $binding);
    }

    public function edit_user( $id)
    {
        $user = DB::table( 'users')->where( 'id', $id)->get()[ 0];
        return view( 'users.edit', collect([ 'user' => $user]));
    }

    public function update_user( Request $request)
    {
        Util::try_save( $this->stash( $request), 'update');

        return redirect( 'home')->with('success', 'Utilisateur créé avec succès');
    }

    public function save( Request $request)
    {
//        $this->validate( $request, HomeController::VALIDATION_FIELDS);

        $user = $this->stash( $request);
        $user->save();

//        Util::try_save( , 'save');

        return redirect( 'home')->with('success', 'Utilisateur créé avec succès');
    }

    public function delete_user( $id)
    {
        DB::delete( "DELETE FROM users WHERE id=?", [ $id]);
        return back()->with( 'success', "Deleted entry successfully!");
    }

    private function stash( Request $request)
    {
//        $this->validate( $request, HomeController::VALIDATION_FIELDS);

        $createUser = new User();

        Util::fill( $createUser, [ 'first_name', 'last_name', 'email', 'created_by'], $request);
        $createUser->password = Hash::make( $request->password);
        $createUser->roles = $request->role;
        $createUser->created_by = Auth::user()['id'];
        $createUser->timestamps = true;
        $createUser->pays = json_encode( $request->pays);
        $createUser->regions = json_encode( $request->regions);
        $createUser->departments = json_encode( $request->departments);
        $createUser->arrondissements = json_encode( $request->arrondissements);
        $createUser->communes = json_encode( $request->communes);
        $createUser->centres = json_encode( $request->centre);

        return $createUser;
    }
}
