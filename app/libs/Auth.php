<?php

    class Auth  {
        protected $user;
        public function __construct(){
        }

        public static function user(){
           return User::where('id','=',$_SESSION['user_id'])->first();
        }
    }