<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Elegance extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $users = User::all();
        foreach($users as $user)
        {
            echo $user->username;
        }
    }
}