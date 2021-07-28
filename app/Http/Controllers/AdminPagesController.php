<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Recipient;


class AdminPagesController extends Controller
{
    //

    // dashboard
    public function admin_dashboard(){
        
        $count_users = User::count();
        $count_recipients = Recipient::count();
        return view('back_end.pages_backend.admin_dashboard.admin_dashboard_view',compact('count_users','count_recipients'));
    }

    // user_dashboard
    public function user_dashboard(){
        
        $count_users = User::count();
        $count_recipients = Recipient::count();
        return view('back_end.pages_backend.user_dashboard.user_dashboard_view',compact('count_users','count_recipients'));
    }



  

  
    

  


}
