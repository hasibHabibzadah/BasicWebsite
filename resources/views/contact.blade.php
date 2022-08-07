@extends('layouts.app')

@section('content')
    <h1>Contact page Bro</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'name',['class' => 'mt-3'])}}
            {{Form::text('name', '', ['class' => 'form-control ', 'placeholder' => 'Enter name'])}} 
        </div>
        <div class="form-group">
            {{Form::label('email', 'email' ,['class' => 'mt-3'])}}
            {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}} 
        </div>
        <div class="form-group">
            {{Form::label('message', 'message' ,['class' => 'mt-3'])}}
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}} 
        </div>
        
            {{{ Form::submit('submit', ['class' => 'btn btn-secondary m-3']) }}}
       
    {!! Form::close() !!}
@endsection
