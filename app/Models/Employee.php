<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'fname',
        'lname',
        'company_id',
        'email',
        'phone'
    ];
    
    public function company(){
        return $this->belongsTo(Company::class);
    }
    
    public function companies(){
        return Company::all();
    }
}
