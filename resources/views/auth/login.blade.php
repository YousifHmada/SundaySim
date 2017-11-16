@extends('layouts.auth')

@section('title', 'login')

@section('heading', 'welcome, please login')

@section('content')
    {!! Form::open() !!}
	    <div class="form-group">
	    	{!! Form::label('email') !!}
	    	{!! Form::text('email', null, ['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	    	{!! Form::label('password') !!}
	    	{!! Form::password('password', ['class'=>'form-control']) !!}
	    </div>
	    {!! Form::submit('login', ['class'=>'btn btn-primary']) !!}
    	<a href="#" class="small">forget password</a>
    {!! Form::close() !!}
@endsection