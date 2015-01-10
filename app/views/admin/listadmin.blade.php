@extends('dashboard')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Admin</h1>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
          <div class="form-group">
            <section class="container">
             <table class="table">
                <tr>
                   <th>Username</th>
                   <th>Password</th>
                   <th>Action</th>
                </tr>
                @foreach($adminsdata as $city)
                  <tr>
                     <td>{{ $city->username }}</td>
                     <td>{{ $city->password }}</td>
                      <td>{{ link_to_action('AdminController@edit', 'edit', array($city->id))}} | {{ link_to_action('AdminController@delete', 'delete', array($city->id))}}</td>
                @endforeach
             </table>
            </section>
            </div>
          </div>
      </div>
   </div>
  </div>
@stop