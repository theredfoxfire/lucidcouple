<?php

class AdminController extends BaseController {
  public function store(){

    $city = new City;

    $city->city_name= Input::get('city_name');
    $city->city_desc= Input::get('city_desc');
    $city->save();
    return Redirect::to('adm/citylist');

  }

  public function edit($id){
   $city = City::find($id);
   return View::make('city/editcity')->with('city', $city);
}

 public function update() {
     $id   = Input::get('id');
     $city = City::find($id);

     
    $city->city_name= Input::get('city_name');
    $city->city_desc= Input::get('city_desc');
    $city->save();
     return Redirect::to('adm/citylist');
 }

 public function delete($id)
    {
      $city = City::find($id);
      $city->delete();
      return Redirect::to('citylist');
    }

}

?>