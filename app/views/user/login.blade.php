@extends('master')
@section('content')
<h3>Login</h3>
<div class="clear-fix"></div> <!-- fix position -->
<div  class="admin-login">
  <div class="col-md-4">
  <div class="row">
    <div class="span4 offset4">
      <div class="well">
        <legend>Please Login</legend>
        {{ Form::open() }}
        {{ Form::label('email','Email') }}
        {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email')) }}
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password',array('class' => 'form-control', 'placeholder' => 'Password')) }}
        {{ Form::submit('Login',array('class' => 'btn btn-success')) }}
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
</div>
@endsection