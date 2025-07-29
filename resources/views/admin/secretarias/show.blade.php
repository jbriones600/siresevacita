@extends('layouts.admin')
@section('content')
<div class='row'>
    <h1>Secretaria:{{$secretarias->nombres}} {{$secretarias->apellidos}}</h1>

</div>
    <br>
    <hr>
<div class='row'>

    <div class="col-md-10">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">Datos de la Secretaria</h3>

                <div class="card-tools">
                    <a href="{{url('admin/secretarias')}}" class="btn btn-primary">
                        Mostrar Secretaria
                    </a>

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="" class="form-label">Nombre de Secretaria</label>
                                    <p>{{$secretarias->nombres}}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="" class="form-label">apellidos de Secretaria</label>
                                    <p>{{$secretarias->apellidos}}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="" class="form-label">cedula de Secretaria</label>
                                    <p>{{$secretarias->cedula}}</p>
                                    </div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="" class="form-label">celular de Secretaria</label>
                                    <p>{{$secretarias->celular}}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="" class="form-label">fecha_nacimiento de Secretaria</label>
                                    <p>{{$secretarias->fecha_nacimiento}}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="exampleInputEmail1" class="form-label">Correo</label>
                                     <p>{{$secretarias->user->email}}</p>
                                    </div>
                                </div>
                            </div>

                        <a class="btn btn-secondary" href="{{url('admin/secretarias')}}">Cancelar</a>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>

@endsection

