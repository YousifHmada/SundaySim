@extends('layouts.auth')

@section('title', 'login')

@section('header', 'welcome, please login')

@section('content')
    {!! form::open() !!}
	    <div class="form-group">
	    	{!! form::label('email') !!}
	    	{!! form::text('email', null, ['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	    	{!! form::label('password') !!}
	    	{!! form::password('password', ['class'=>'form-control']) !!}
	    </div>
	    {!! form::submit('login', ['class'=>'btn btn-primary']) !!}
    	<a href="#" class="small">forget password</a>
    {!! form::close() !!}
@endsection