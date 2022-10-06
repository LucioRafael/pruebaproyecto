<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class user extends Authenticable
{
    use HasApiTokens,HasFactory,Notifiable;

    protected $filliable =[
        '#IBM',
        'fistname',
        'lastname',
        'email',
        'password'
    ];


    protected $hidden =[
        'password',
        'remember_token'
    ];
}
