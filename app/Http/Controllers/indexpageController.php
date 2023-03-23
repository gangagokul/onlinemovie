<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\indexpage;
use App\Models\register;
use App\Models\booking;



class indexpageController extends Controller
{
    public function indexpage()
    {
        return view('indexpage');
    }
    public function register()
    {
        return view('register');
    }
    public function registeraction(Request $req)
    {
        $name = $req->input('name');
        $username = $req->input('username');
        $email = $req->input('email');
        $gender = $req->input('gender');
        $address = $req->input('address');
        $phoneno = $req->input('phoneno');
        $password = $req->input('password');

        $data = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'gender' => $gender,
            'address' => $address,
            'phoneno' => $phoneno,
            'password' => $password
        ];
        register::insert($data);
        return redirect('/');
    }
    public function login()
    {
        return view('login');
    }
    public function loginaction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        // echo $username;
        // exit();
        $data = register::where('username', $username)->where('password', $password)->first();
        if (isset($data)) {
            $req = session()->put(array('sessid' => $data->id));
            return redirect('/userhome');
        } else {
            return redirect('/login');
        }
    }
    public function userhome()
    {
        return view('userhome');
    }
    public function booking()
    {
        return view('booking');
    }
    public function bookingaction(Request $req)
    {
        $moviename = $req->input('moviename');
        $date = $req->input('date');
        $time = $req->input('time');
        $theatername = $req->input('theatername');
        $seattype = $req->input('seattype');
        $noofseats = $req->input('noofseats');

        $id = session('sessid');
        // echo $id;
        //  exit();
        $data = [
            'moviename' => $moviename,
            'date' => $date,
            'time' => $time,
            'theatername' => $theatername,
            'seattype' => $seattype,
            'noofseats' => $noofseats,
            'userid'=>$id
        ];
        booking::insert($data);
        return redirect('/userhome');
    }
    
    public function viewbooking()
    {
        $id=session('sessid');
        $data['res']=booking::where('userid',$id)->get();
        
        return view('viewbooking',$data);
    }
    
    public function edit($id){
        $data['result']=booking::where('id',$id)->get();
        return view('edit',$data);
    }
    public function updateaction(Request $req,$id){
        $moviename = $req->input('moviename');
        $date = $req->input('date');
        $time = $req->input('time');
        $theatername = $req->input('theatername');
        $seattype = $req->input('seattype');
        $noofseats = $req->input('noofseats');
        $data = [
            'moviename' => $moviename,
            'date' => $date,
            'time' => $time,
            'theatername' => $theatername,
            'seattype' => $seattype,
            'noofseats' => $noofseats
            
        ];
        booking::where('id',$id)->update($data);
        return redirect('/viewbooking');
    }
    public function delete($id)
    {
        booking::where('id',$id)->delete();
        return redirect('/viewbooking');
    }
    public function viewprofile()
    {
        $id=session('sessid');
        $data['profile']=register::where('id',$id)->get();
        
        return view('viewprofile',$data);
    }
    public function edit1($id){
        $data['result']=register::where('id',$id)->get();
        return view('edit1',$data);
    }
    public function updatedaction(Request $req,$id){
        $name = $req->input('name');
        $username = $req->input('username');
        $email = $req->input('email');
        $gender = $req->input('gender');
        $address = $req->input('address');
        $phoneno = $req->input('phoneno');
        $password = $req->input('password');
        $data = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'gender' => $gender,
            'address' => $address,
            'phoneno' => $phoneno,
            'password' => $password
            
        ];
        register::where('id',$id)->update($data);
        return redirect('/viewprofile');
    }
    public function adminhome()
    {
        return view('/adminhome');
    }
    public function adminviewbooking()
    {
        $data['res'] = booking::get();
        return view('/adminviewbooking', $data);
    }

    public function confirm($id)
    {
        $data = ['status' => "confirm"];
        booking::where('id', $id)->update($data);
        return redirect('/adminviewbooking');
    }
    public function decline($id)
    {
        $data = ['status' => "decline"];
        booking::where('id', $id)->update($data);
        return redirect('/adminviewbooking');
    }
public function adminviews()
    {
        $data['views']=register::get();
        
        return view('adminviews',$data);
    }
    public function logout(Request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/');
    }
    public function adminlogout(Request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/');
    }
}