@extends('layouts.admin')
@section('content')
<div class='row'>
    <h1>Usuario:{{$usuarios->name}}</h1>

</div>
    <br>
    <hr>
<div class='row'>

    <div class="col-md-10">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">Datos Registrados</h3>

                <div class="card-tools">
                    <a href="{{url('admin/usuarios')}}" class="btn btn-primary">
                        Mostrar Usuarios
                    </a>

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="" class="form-label">Nombre de Usuario</label>
                                    <p>{{$usuarios->name}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="exampleInputEmail1" class="form-label">Correo</label>
                                     <p>{{$usuarios->email}}</p>
                                    </div>
                                </div>
                            </div>

                        <a class="btn btn-secondary" href="{{url('admin/usuarios')}}">Cancelar</a>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>

@endsection

