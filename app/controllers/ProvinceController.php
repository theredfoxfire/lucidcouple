<?php

class ProvinceController extends BaseController {
  public function store(){

    $province = new Province;

    $province->prov_name= Input::get('prov_name');
    $province->prov_desc= Input::get('prov_desc');
    $province->save();
    return Redirect::to('adm/provincelist');

  }

  public function edit($id){
   $province = Province::find($id);
   return View::make('province/editprov')->with('province', $province);
}

 public function update() {
     $id   = Input::get('id');
     $province = Province::find($id);

     
    $province->prov_name= Input::get('prov_name');
    $province->prov_desc= Input::get('prov_desc');
    $province->save();
     return Redirect::to('adm/provincelist');
 }

 public function delete($id)
    {
      $province = Province::find($id);
      $province->delete();
      return Redirect::to('provlist');
    }

}

?>