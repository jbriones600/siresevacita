@extends('layouts.admin')
@section('content')
<div class='row'>
    <h1>Modificar Usuario: {{$usuarios->name}}</h1>

</div>
    <br>
    <hr>
<div class='row'>

    <div class="col-md-10">
            <div class="card card-outline card-success">
              <div class="card-header">
                <h3 class="card-title">Registrar Usuarios</h3>

                <div class="card-tools">
                    <a href="{{url('admin/usuarios')}}" class="btn btn-primary">
                        Mostrar Usuarios
                    </a>

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">

                        <form action="{{url('admin/usuarios',$usuarios->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="" class="form-label">Nombre de Usuario</label><b style="color: red">*</b>
                                     <input type="text" class="form-control" value="{{$usuarios->name}}" id="name" name="name" required>
                                     @error('name')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="exampleInputEmail1" class="form-label">Correo</label><b style="color: red">*</b>
                                     <input type="email" class="form-control" value="{{$usuarios->email}}" id="email" name="email" required>
                                     @error('email')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="" class="form-label">Contraseña</label><b style="color: red">*</b>
                                     <input type="password" class="form-control" value="{{old('password')}}" id="password" name="password">
                                     @error('password')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="" class="form-label">Verificar Contraseña</label>
                                     <input type="password" class="form-control" value="{{old('password_confirmation')}}" id="password" name="password_confirmation">
                                     @error('password_confirmation')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        <a class="btn btn-secondary" href="{{url('admin/usuarios')}}">Cancelar</a>
                        <button type="submit" class="btn btn-success">Actualizar Usuario</button>
                        </form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>

@endsection
