@extends('dashboard')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Kota</h1>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
          <div class="form-group">
            <section class="container">
             <table class="table">
                <tr>
                   <th>Nama Kota</th>
                   <th>Deskripsi</th>
                   <th>Action</th>
                </tr>
                @foreach($citiesdata as $city)
                  <tr>
                     <td>{{ $city->city_name }}</td>
                     <td>{{ $city->city_desc }}</td>
                      <td>{{ link_to_action('CityController@edit', 'edit', array($city->id))}} | {{ link_to_action('CityController@delete', 'delete', array($city->id))}}</td>
                @endforeach
             </table>
            </section>
            </div>
          </div>
      </div>
   </div>
  </div>
@stop