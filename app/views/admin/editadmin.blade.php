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

						<div class='container'>

						<h3>Edit Admin</h3>

						  {{ Form::open(array('action' => 'CityController@update')) }}

						 {{Form::hidden('id', $city->id)}}

						 {{Form::label('Nama Admin', 'Nama') }}

						 {{Form::text('city_name', $city->city_name , array('class' => 'form-control'))}}

						 {{Form::label('Deskripsi Admin', 'Deskripsi') }}

						 {{Form::text('city_desc', $city->city_desc , array('class' => 'form-control'))}}

						 {{Form::submit('Update', array('class' => 'btn btn-primary')) }}

						 {{ Form::close() }}

						 </div>

						 </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

 @stop