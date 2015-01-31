<?php

class SearchController extends BaseController {
  public $restful = true;
  protected $input;
  
  public function index() {
    return View::make('search.search');
  }
  
  public function store() {
    $input = Input::all('');
    
   $rules = array (
     'choose_search' => 'required',
     'search_id' => 'required'
   );
   
    $valid = Validator::make($input, $rules);
    
    if($valid->fails()) {
      Session::flash('message', 'Please input ID and try again !');
      return Redirect::back()->withInput();
    }
    else {
      $search_by = $input['choose_search'];
      $search_id = $input['search_id'];
      
      /*
      if(sql to data base)
      Session::flash('message1', 'Sorry can not not search ID in DataBase !');
      return Redirect::back()->withInput();
      if($search_by == 'lecturer_search')
        return Redirect::back()->withInput();
      else if($search_by == 'student_search')
        return Redirect::back()->withInput();
      */
    }
  }
}