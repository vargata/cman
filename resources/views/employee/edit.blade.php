	@extends('layouts/base')
	
	@section('content')
 	<div class="flex flex-col px-2 p-2">
 		<div>
			<span class="text-gray-400">Editing employee: {{$employee->lname}}</span>
		</div>
		<form method="post" action="/employee.edit/{{$employee->id}}" class="flex flex-col w-full sm:w-96 border border-blue-500 rounded-md shadow-md shadow-blue-500 mt-5">		
        	@csrf
        	<input type="hidden" name="url" value="{{((old('url'))?old('url'):URL::previous())}}">
        	<span class="relative">
        		<input name="name" class="bg-inherit text-blue-400 p-3 rounded-t-md outline-none hover:bg-slate-800" value="@if(old('name')){{old('name')}}@else{{$employee->fname}} {{$employee->lname}}@endif">
        		@error('name')
    				<p class="pl-3 py-1 text-red-500 text-xs border-t border-t-blue-500">{{$message}}</p>
    			@enderror
        		<input name="save" type="submit" value="Save" class="absolute top-0 right-20 text-gray-200 bg-blue-700 rounded-full cursor-pointer px-3 py-1 m-2 z-10">
        		<input name="cancel" type="submit" value="Cancel" class="absolute top-0 right-0 text-gray-200 bg-blue-700 rounded-full cursor-pointer px-3 py-1 m-2 z-10">
        	</span>
        	<input name="email" class="bg-inherit text-blue-400 p-3 border-t border-t-blue-500 outline-none hover:bg-slate-800" value="@if(old('email')){{old('email')}}@else{{$employee->email}}@endif">
        	@error('email')
				<p class="pl-3 py-1 text-red-500 text-xs border-t border-t-blue-700">{{$message}}</p>
			@enderror
        	<input name="phone" class="bg-inherit text-blue-400 p-3 border-t border-t-blue-500 outline-none hover:bg-slate-800" value="@if(old('phone')){{old('phone')}}@else{{$employee->phone}}@endif">
        	@error('phone')
				<p class="px-3 py-1 text-red-500 text-xs border-t border-t-blue-700">{{$message}}</p>
			@enderror
    		<span class="text-gray-200 p-3 border-t-4 border-t-blue-500">Workplace:</span>
    		<div class="border-t border-t-blue-500">
                <select class="w-full bg-gray-900 text-blue-400 p-3 outline-none hover:bg-slate-800" name="company_id">
                    @foreach($employee->companies() as $company)
                    	<option value="{{$company->id}}"{{(old('company_id'))?((old('company_id')==$company->id)?' selected':''):(($company->id==$employee->company->id)?' selected':'')}}>{{$company->name}}</option>
                    @endforeach
                </select>
        	</div>
    	</form>
	</div>
	@stop