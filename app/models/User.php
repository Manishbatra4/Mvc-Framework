<?php

//namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{

    protected $fillable = ['fullname','username', 'email', 'password'];

    public function posts(){
       return $this->hasMany('Post');
    }

}