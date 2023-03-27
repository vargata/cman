	@extends('layouts.base')
	
	@section ('content')
 	<div class="flex flex-col px-2 my-2"> 
    	<div>{{$employees->links()}}</div>
         	<div class="flex flex-col rounded-md border border-blue-500 my-5">
         		@foreach($employees as $employee)
         		<div class="flex gap-3 p-3 border-t border-t-blue-500 first:border-t-0">
            		<img src="{{$employee->company->logo()}}" alt="logo" width="30" height="30">
					<a class="text-gray-400 hover:text-gray-600" href="/employees/{{$employee->id}}">{{$employee->fname}} {{$employee->lname}}</a>
            	</div>
            	@endforeach
        	</div>
    	<div>{{$employees->links()}}</div>
	</div>
	@stop