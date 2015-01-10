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

						<div class='container'>

						<h3>Insert new City</h3>

						 {{ Form::open(array('action' => 'CityController@store')) }}

						 {{Form::label('Nama ', 'Title') }}

						 {{Form::text('city_name', '', array('class' => 'form-control span6'))}}

						 {{Form::label('Deskripsi', 'Description') }}

						 {{Form::textarea('city_desc', '', array('class' => 'form-control span6'))}}

						 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}

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