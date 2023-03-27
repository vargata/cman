	@extends('layouts/base')
	
	@section('content')
	<div class="flex flex-col px-2 my-2">
    	<div>
    		<a href="/companies" class="float-right text-gray-400 hover:text-gray-600">All companies</a>
    	</div>
    	<div class="flex flex-col sm:flex-row border rounded-md border-blue-500 mt-5 shadow-md shadow-blue-500">
        	<div class="flex justify-center border-b border-b-blue-500 sm:justify-left sm:border-r sm:border-r-blue-500">
        		<div>
        			<img src="{{$company->logo()}}" class="m-2">
        		</div>
        	</div>
         	<div class="flex flex-col">
            	<span class="text-gray-200 p-3">{{$company->name}}</span>
            	<a class="text-gray-400 p-3 border-t border-t-blue-500 break-all hover:text-gray-600" href="mailto:{{$company->email}}">{{$company->email}}</a>
            	<a class="text-gray-400 p-3 border-t border-t-blue-500 break-all hover:text-gray-600" href="{{$company->website}}" target='_blank'>{{Str::limit($company->website, 20, ' ...')}}</a>
            	<span class="text-gray-200 p-3 border-t-4 border-t-blue-500">Employees:</span>
            	@foreach($company->employees as $employee)
            		<a class="text-gray-400 p-3 border-t border-t-blue-500 hover:text-gray-600" href="/employees/{{$employee->id}}">{{$employee->fname}} {{$employee->lname}}</a>
            	@endforeach
        	</div>
    	</div>
	</div>
	@stop