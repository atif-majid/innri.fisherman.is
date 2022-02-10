<?php

namespace App\Models;

use App\Models\Employees;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getpicture()
    {
        $strEmail = $this->email;
        $objCurrentEmployee = Employees::where('email',$strEmail)->first();
        $strPicture = "";
        if($objCurrentEmployee)
        {
            if(trim($objCurrentEmployee->picture!=""))
            {
                $strPicture = "/uploads/".$objCurrentEmployee->picture;
            }

        }
        if(trim($strPicture)=="")
        {
            $strPicture = "/app-assets/images/portrait/small/group 238_2x.jpg";
        }
        return $strPicture;
    }

    public function getempid()
    {
        $strEmail = $this->email;
        $objCurrentEmployee = Employees::where('email',$strEmail)->first();
        $nThisEmpID = 9;
        if($objCurrentEmployee)
        {
            $nThisEmpID = $objCurrentEmployee->id;
        }
        return $nThisEmpID;
    }

    public function getempdesignation()
    {
        $strEmail = $this->email;
        $objCurrentEmployee = Employees::where('email',$strEmail)->first();
        $nThisEmpDesignation = "Chef";
        if($objCurrentEmployee)
        {
            $nThisEmpDesignation = $objCurrentEmployee->designation;
        }
        return $nThisEmpDesignation;
    }

    public function getempStatus()
    {
        $strEmail = $this->email;
        $objCurrentEmployee = Employees::where('email',$strEmail)->first();
        $strStatus = "active";
        if($objCurrentEmployee)
        {
            $strStatus = $objCurrentEmployee->status;
        }

        return $strStatus;
    }
}
