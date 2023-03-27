<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function saveEmployee(){        
        
        if(request()->validate([
            'name' => 'required|min:5|max:100'
        ])){        
            Employee::where('id', request('id'))->update([            
                'fname' => explode(" ", request('name'))[0],
                'lname' => explode(" ", request('name'))[1],
                'email' => request('email'),
                'phone' => request('phone'),
                'company_id' => request('company_id')
            ]);
            
            return redirect('/employees/' . request('id'));
        }
    }
}
