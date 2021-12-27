<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function register(Request $req)
    {
        //return $req->input();

        DB::insert ('insert into users(name,email,password,created_at)values(?,?,?,?)', 
        [$req->fullname, $req->email, $req->password, now()]);

        return redirect('/login');
    }

    function listuser()
    {
        return view ('viewuser', ['users'=>DB::table('users')->paginate(20)]);
    }

    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        $password = User::where(['password'=>$req->password])->first();

        //return 'User' . $user . '<br> Password:' . $password;

        
        if(!$user || !$password)
        {
            return "Username or password does not match";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    public function deleteuser(Request $req)
    {
        //return $req->input();

        DB::table('users')->where('id', $req->rid)->delete();
        return redirect('/userlist');
    }

    public function getuser(Request $req)
    {
     $data = DB::table('users')
     // ->join('table2', 'table2.id', '=', 'users.id')
     ->where ('id', $req -> rid)
     ->first();

     return view('edituser',['users'=>$data]);
    }

    public function edituser(Request $req)
    {
        DB::table('users') -> where('id', $req -> rid)
        ->update(array(
            'name'=> $req -> fullname,
            'password'=> $req -> password,
            'email'=> $req -> email
        ));

        return redirect('/userlist');
    }

    public function search(Request $req)
    {
       
        return view(
            'viewuser',
            ['users' => [ DB::table('users') 
            -> select (DB::raw('id, name, email, password, created_at'))
            ->where('email', 'like', '%'. $req->search.'%')
            ->orWhere('name', 'like', '%'. $req->search.'%')->paginate(2)]]
        );
       // return redirect('/userlist');
    }

   
}
