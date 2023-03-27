<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{    
    public function deleteEmployee($id){
        Employee::where('id', $id)->delete();
        
        return redirect('/employees');
    }
    
    public function saveEmployee($id){        
        if(request()->input('cancel'))
            return redirect(request('url'));
        
        if(request()->validate([
            'name' => 'required|min:5|max:100',
            'email' => 'nullable|email|max:50',
            'phone' => 'nullable|regex:/^(?![ \.\-])[0-9 \.\-\+]+(?<! \.\-\+)$/|max:20'
        ])){        
            Employee::where('id', $id)->update([            
                'fname' => explode(" ", request('name'))[0],
                'lname' => explode(" ", request('name'))[1],
                'email' => request('email'),
                'phone' => request('phone'),
                'company_id' => request('company_id')
            ]);
            
            return redirect(request('url'));
        }
    }
}
