@extends('shared.master')
@section('title', 'Laravel CRUD Demo')

@section('content')
	
	@if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

	<form method="POST" action="/auth/login">
	    {!! csrf_field() !!}
	    <div>
	        Email
	        <input type="email" name="email" value="{{ old('email') }}">
	    </div>
	    <div>
	        Password
	        <input type="password" name="password" id="password">
	    </div>
	    <div>
	        <input type="checkbox" name="remember"> Remember Me
	    </div>
	    <div>
	        <button type="submit">Login</button>
	    </div>
	</form>
@endsection