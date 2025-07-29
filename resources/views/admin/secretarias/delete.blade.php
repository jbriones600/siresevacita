@extends('layouts.admin')
@section('content')
<div class='row'>
    <h1>Usuario: {{$usuarios->name}} a Eliminar</h1>

</div>
    <br>
    <hr>
<div class='row'>

    <div class="col-md-10">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">¿Seguro que desea Eliminar este Usuario?</h3>

                <div class="card-tools">
                    <a href="{{url('admin/usuarios')}}" class="btn btn-primary">
                        Mostrar Usuarios
                    </a>

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">

                        <form action="{{url('/admin/usuarios',$usuarios->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="" class="form-label">Nombre de Usuario</label>
                                     <input type="text" class="form-control" value="{{$usuarios->name}}" id="name" name="name" disabled>
                                     @error('name')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="exampleInputEmail1" class="form-label">Correo</label>
                                     <input type="email" class="form-control" value="{{$usuarios->email}}" id="email" name="email" disabled>
                                     @error('email')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                        <a class="btn btn-secondary" href="{{url('admin/usuarios')}}">Cancelar</a>
                        <button type="submit" class="btn btn-danger">Eliminar Usuario</button>
                        </form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>

@endsection
