	@extends('layouts/base')
	
	@section('content')
 	<div class="flex flex-col px-2 p-2">
 		<div>
			<span class="text-gray-400">Editing employee: {{$employee->lname}}</span>
		</div>
		<form method="post" action="/employee.edit" class="flex flex-col border border-blue-500 rounded-md shadow-md shadow-blue-500 mt-5">		
        	@csrf
        	<input class="hidden" name="id" value="{{$employee->id}}">
        	<span class="relative">
        		<input name="name" class="bg-inherit text-blue-400 p-3 rounded-t-md" value="{{$employee->fname}} {{$employee->lname}}">
        		<input type="submit" value="Save" class="absolute top-0 right-0 text-gray-200 cursor-pointer p-3 z-10">
        	</span>
        	<input name="email" class="bg-inherit text-blue-400 p-3 border-t border-t-blue-500" value="{{$employee->email}}">
        	<input name="phone" class="bg-inherit text-blue-400 p-3 border-t border-t-blue-500" value="{{$employee->phone}}">
    		<span class="text-gray-200 p-3 border-t-4 border-t-blue-500">Workplace:</span>
    		<div class="flex gap-3 p-3 border-t border-t-blue-500">
        		<select class="bg-gray-900 text-blue-400 p-3" name="company_id">
        			@foreach($employee->companies() as $company)
        				<option value="{{$company->id}}"{{ ($company->id == $employee->company->id) ? ' selected' : '' }}>{{$company->name}}</option>
        			@endforeach
        		</select>
        	</div>
    	</form>
	</div>
	@stop