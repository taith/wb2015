@extends('master')
@section('content')
<h3>Import Data</h3>
<div class="clear-fix"></div> <!-- fix position -->
<div class="wraper">
          <div class="row">
          	@if (Session::has('message'))
			   <div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif
          </div>
          <div class="row">
            <div class="col-md-8">
              {{ Form::open(array("url" => "upload", "files" => true))}}
                <div class="form-group">
                  <label for="choose_file" class="col-sm-4 control-label">Choose File</label>
                  <div class="col-sm-8">
                    <select id="choose_file" name="choose_file" class="form-control">
                      <option value="student_imfo">Student Imformation</option>
                      <option value="lecturer_cost">Thu nhap giang vien</option>
                      <option value="school_assets">Tai san</option>
                      <option value="lecture_register">Mon hoc dang ki</option>
                      <option value="edu_program">Chuong trinh dao tao</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="file" class="col-sm-4 control-label">File</label>
                  <div class="col-sm-8">
                  	{{ Form::file('excelfile', array('class' => 'field','accept' => '.xls,.xlsx')) }}
                    <!-- <input aria-required="true" id="file" name="file" accept=".xls,.xlsx" required="" type="file"> -->
                  </div>
                </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <input type="submit" class="btn btn-success" value="Import File">
                    </div>
                </div>
                   
              {{ Form::close() }}
            </div>
            <div class="col-md-4"></div>
          </div>
        </div> <!-- End wraper -->

@endsection