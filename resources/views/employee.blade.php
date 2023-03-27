	@extends('layouts/base')
	
	@section('content')
 	<div class="flex flex-col px-2 p-2">
 		<div>
			<a href="/employees" class="float-right text-gray-400">All employees</a>
		</div>
		<div class="flex flex-col border border-blue-500 rounded-md shadow-md shadow-blue-500 mt-5">
        	<span class="relative text-gray-200 p-3">{{$employee->fname}} {{$employee->lname}}<a href="/employee.edit/{{$employee->id}}" class="absolute top-0 right-0 p-3">Edit</a></span>
        	@if($employee->email)
        		<a class="text-gray-400 hover:text-gray-600 p-3 border-t border-t-blue-500 break-all" href="mailto:{{$employee->email}}">{{$employee->email}}</a>
        	@else
        		<span class="text-gray-200 p-3 border-t border-t-blue-500 break-all">no email on record...</span>
        	@endif
        	@if($employee->phone)
        		<a class="text-gray-400 hover:text-gray-600 p-3 border-t border-t-blue-500" href="tel:{{$employee->phone}}">{{$employee->phone}}</a>
        	@else
        		<span class="text-gray-200 p-3 border-t border-t-blue-500 break-all">no phone on record...</span>
        	@endif
    		<span class="text-gray-200 p-3 border-t-4 border-t-blue-500">Workplace:</span>
    		<div class="flex gap-3 p-3 border-t border-t-blue-500">
    			<div class="min-w-fit pt-2">
        			<img src="{{$employee->company->logo()}}" alt="logo" width="30" height="30">
        		</div>
        		<a class="text-gray-400 hover:text-gray-600" href="/companies/{{$employee->company->id}}">{{$employee->company->name}}</a>
        	</div>
    	</div>
	</div>
	@stop