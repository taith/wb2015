@extends('master')
@section('content')
<h3>Calculation</h3>
<div class="search_wraper">
  <div class="group-form">
  <div class="form-group-2">
    <label for="search_id" class="col-sm-2 control-label">Input ID</label>
    <div class="col-sm-3">
      {{ Form::text('search_id',Input::old('search_id'),array('placeholder' => ' ID')) }}
    </div>
  </div>
  <div class="form-group-3">
    <div class="col-sm-2">
      <input type="submit" class="btn btn-primary" value="Search">
    </div>
  </div>
  </div>
</div> <!-- End search wraper -->
<div class="clear-fix"></div> <!-- fix position -->
<div class="caculation-content">
  <div class="refine-by">
    <div class="row"><h5>REFINE BY</h5></div>
    {{ Form::open() }}
      <div class="col-lg-8">
        <div class="input-group">
            {{ Form::radio('refineby', 'by_student',true) }} By Student
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-8">
        <div class="input-group">
          {{ Form::radio('refineby', 'by_lecturer') }} By Lecturer
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-8">
        <div class="input-group">
          {{ Form::radio('refineby', 'by_major') }} By Major
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-8">
        <div class="input-group">
          {{ Form::radio('refineby', 'by_faculty') }} By Faculty
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->    
    {{ Form::close() }}
  </div> <!-- End refine by -->
</div> <!-- End caculation content -->

@stop