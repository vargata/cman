	@extends('layouts.base')
	
	@section('content')
 	<div class="flex flex-col px-2 my-2"> 
    	<div>{{$companies->links()}}</div>
         	<div class="flex flex-col rounded-md border border-blue-500 my-5">
     			@foreach($companies as $company)
         		<div class="flex gap-3 p-3 border-t border-t-blue-500 first:border-t-0">
            		<div class="m-2 min-w-fit">
            			<img src="{{$company->logo()}}" alt="logo" width="60" height="60">
            		</div>
            		<a class="text-gray-400 hover:text-gray-600" href="/companies/{{$company->id}}">{{$company->name}}</a>
            	</div>
            	@endforeach
        	</div>
    	<div>{{$companies->links()}}</div>
	</div>
	@stop