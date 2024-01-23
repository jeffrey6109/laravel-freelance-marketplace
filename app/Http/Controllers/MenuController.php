<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function getUserMenu()
    {
        $menu = array();

        $user = Auth::user();

        if(!is_null($user))
        {
            if($user->hasRole('Employer'))
            {
                $menu['jobs.index'] = 'Jobs';
                $menu['jobs.post'] = 'Post a Job';
                // $menu['jobs.edit'] = 'Edit Job';
            }

            if($user->hasRole('Freelancer'))
            {
                // $menu['jobs.find'] = 'Find a Job';
            }
        }

        return $menu;
    }
}
