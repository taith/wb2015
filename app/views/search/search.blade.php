@extends('master')
@section('content')
<h3>Search</h3>
<div class="search_wraper">
  <div class="col-md-12">
    {{ Form::open(array('url' => 'search')) }}
      <div class="form-group-1">
        <label for="choose_search" class="col-sm-2 control-label">Search by</label>
        <div class="col-sm-3">
          <select id="choose_search" name="choose_search" class="form-control">
            <option value="student_search">Student</option>
            <option value="lecturer_search">Lecturer</option>
          </select>
        </div>
      </div>
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
    {{ Form::close() }}
  </div>
</div>  <!-- End search area -->
@if (Session::has('message1'))
  <div class="row">
    <div class="alert alert-info" role="alert">{{ Session::get('message1') }}</div>
  </div>
  <div class="clear-fix"></div> <!-- fix position -->
@endif
@if (isset($_POST['Search']))
   <div>aaaaa</div>
@elseif (Session::has('message'))
  <div class="row">
    <div class="alert alert-danger" role="alert">{{ Session::get('message') }}</div>
  </div>
  <div class="clear-fix"></div> <!-- fix position -->
  <div class="note-area">
    <h4>How to search</h4>
    <div class="col-md-8">
      <p>Please select <font color="#8a0000">Search by</font> then type to <font color="#8a0000">ID</font> who you want to search</p>
    </div>
  </div>
@else
  <div class="clear-fix"></div> <!-- fix position -->
  <div class="note-area">
    <h4>How to search</h4>
    <div class="col-md-12">
      <p>Please select <font color="#8a0000">Search by</font> then type to <font color="#8a0000">ID</font> who you want to search</p>
    </div>
  </div>
@endif
@stop