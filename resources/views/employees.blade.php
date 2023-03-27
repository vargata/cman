	@extends('layouts.base')
	
	@section ('content')
 	<div class="flex flex-col px-2 my-2"> 
    	<div>{{$employees->links()}}</div>
         	<div class="flex flex-col rounded-md border border-blue-500 my-5">
         		@foreach($employees as $employee)
         		<div class="relative flex gap-3 p-3 items-center border-t border-t-blue-500 first:border-t-0">
            		<img src="{{$employee->company->logo()}}" alt="logo" width="40" height="40">
					<a class="text-gray-400 hover:text-gray-600" href="/employees/{{$employee->id}}">{{$employee->fname}} {{$employee->lname}}</a>
					<a href="/employee.edit/{{$employee->id}}" class="absolute top-0 right-14 px-3 py-1 m-3 rounded-full bg-blue-700 text-gray-200">Edit</a>
        			<a href="/employee.delete/{{$employee->id}}" class="absolute top-0 right-0 px-3 py-1 m-3 rounded-full bg-blue-700 text-gray-200">Del</a>
            	</div>
            	@endforeach
        	</div>
    	<div>{{$employees->links()}}</div>
	</div>
	@stop