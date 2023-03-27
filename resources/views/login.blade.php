@extends('layouts/base')
	
	@section('content')
    	<div class="relative text-gray-200 mx-auto mt-10 flex flex-col w-full sm:w-96 bg-gray-700 px-5 sm:px-10 py-5 rounded-xl">
    		<h1 class="text-xl">Please log in</h1>
    		<form method="post" action="/login" class="flex flex-col">
    			@csrf
    			<input type="text" id="email" name="email" value="{{old('email')}}" placeholder="EMail address" class="text-gray-800 my-2 rounded-md p-2">
    			@error('email')
    				<p class="text-red-500 text-xs">{{$message}}</p>
    			@enderror
    			<input type="password" id="password" name="password" placeholder="Password" class="text-gray-800 my-2 rounded-md p-2">
    			@error('password')
    				<p class="text-red-500 text-xs">{{$message}}</p>
    			@enderror
    			<div>
    				<input type="submit" name="submit" value="Log In" class="text-gray-800 font-bold my-2 bg-slate-200 hover:bg-slate-300 w-24 rounded-md p-2">
    			</div>
    		</form>
			<div tabindex="5" class="peer cursor-help absolute top-48 right-6 rounded-full px-3 bg-blue-500">?</div>
			<div class="peer-focus:max-h-80 max-h-0 overflow-hidden transition-all duration-1000">
				<p class="mb-2">admin login:</p>
				<a class="text-blue-200 hover:text-blue-400" href="javascript: fillForm('admin');">email: admin@admin.com</a>
				<p>password: password</p>
				<hr class="my-3">
				<p class="mb-2">alternative user:</p>
				<a class="text-blue-200 hover:text-blue-400" href="javascript: fillForm('user');">email: user@admin.com</a>
				<p>password: password</p>
			</div>
    	</div>
	@endsection