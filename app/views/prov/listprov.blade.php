@extends('dashboard')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Provinsi</h1>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
          <div class="form-group">
            <section class="container">
             <table class="table">
                <tr>
                   <th>Nama Provinsi</th>
                   <th>Deskripsi</th>
                   <th>Action</th>
                </tr>
                @foreach($provincesdata as $prov)
                  <tr>
                     <td>{{ $prov->prov_name }}</td>
                     <td>{{ $prov->prov_desc }}</td>
                      <td>{{ link_to_action('provController@edit', 'edit', array($prov->id))}} | {{ link_to_action('provController@delete', 'delete', array($prov->id))}}</td>
                @endforeach
             </table>
            </section>
            </div>
          </div>
      </div>
   </div>
  </div>
@stop