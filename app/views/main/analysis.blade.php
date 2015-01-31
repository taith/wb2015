@extends('master')
@section('content')
<h3>Calculation</h3>
<div class="info-cal">
  <div class="imfomation">
    <h4>Data Catalog</h4>
    <div class="col-md-12">
      <p>The World Bank's Open Data initiative is intended to provide all users with access to World Bank data, according to the Open Data Terms of Use. The data catalog is a listing of available World Bank datasets, including databases, pre-formatted tables, reports, and other resources</p>
    </div>
  </div>
  <div class="search_wraper">
    <div class="group-form">
    <div class="form-group-2">
      <div class="col-sm-3">
        {{ Form::open(array('id' => 'myform')) }}
        {{ Form::text('search_id',Input::old('search_id'),array('class' => 'search-text','placeholder' => ' Search by ID')) }}
        {{ Form::close() }}
      </div>
    </div>
    <div class="form-group-3">
      <div class="col-sm-2">
        <input type="submit" class="search-btn" value="Search">
      </div>
    </div>
    </div>
    <div><a class="clear" href="javascript:myFunction()">Clear</a></div>
      <script>
        function myFunction() {
        document.getElementById("myform").reset();
        }
      </script>
  </div> <!-- End search wraper -->
</div>
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