@extends('layouts.app')

@section('title', 'Create an Account')

@section('contents')

<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/tailwind.css') }}">
	<div class="p-3" style="overflow: hidden;">
		<form class="w-max bg-white rounded-lg m-auto px-3 py-3" id="login_form" method="post" action="/signup" style="width: max-content;">
			<div class="form form-contents p-3" style="width: 400px;">
				<h1 class="text-black text-lg text-center relative my-2">Create an account</h1>
				<div class="mb-3">
					<label class="text-xs font-semibold block relative w-full">Email:</label>
					<input type="email" name="email" placeholder="Enter Working Email Address" class="border border-1 px-2 py-1 rounded w-full text-red">
					@error('email')
						<p class="text-red-600 text-xs font-bolder">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-3">
					<label class="text-xs font-semibold block relative w-full">Username:</label>
					<input type="text" name="username" placeholder="Enter Your Username" class="border border-1 px-2 py-1 rounded w-full">
					@error('username')
						<p class="text-red-600 text-xs font-bolder">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-3">
					<label class="text-xs font-semibold block relative w-full">Password:</label>
					<input type="password" name="password" placeholder="********" class="border border-1 px-2 py-1 rounded w-full">
					@error('password')
						<p class="text-red-600 text-xs font-bolder">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-3">
					<button class="text-sm rounded bg-blue-600 w-max text-center font-semibold text-white py-2 px-3">Signup</button>
					<a href="/login" class="text-sm w-max text-center py-2 px-3 pointer" style="text-decoration: none !important; color: blue; cursor: pointer;"><u>Login Instead</u></a>
				</div>
				<div class="mb-3">
					<a href="/forget-password" class="text-sm text-blue-600" style="text-decoration: none !important; color: blue;"><u>Forget Password</u></a>
				</div>
			</div>
			@csrf
		</form>
	</div>
@endsection