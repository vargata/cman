<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CompanyController;

class Company extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'logo',
        'website'
    ];
    
    function logo(){
        return CompanyController::getLogo($this);
    }

    function employees(){
        return $this->hasMany(Employee::class);
    }
}
