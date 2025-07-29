@extends('layouts.admin')
@section('content')
<div class='row'>
    <h1>Modulo Secretaria</h1>

</div>
    <br>
    <hr>
<div class='row'>

    <div class="col-md-10">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Registrar Secretaria</h3>

                <div class="card-tools">
                    <a href="{{url('admin/secretarias')}}" class="btn btn-primary">
                        Mostrar Secretarias
                    </a>

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">

                        <form action="{{url('/admin/secretarias/create')}}" method="POST">
                            @csrf
                            <div class="row">
<!-- Nombres Apellidos Cedula y Celular-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                     <label for="" class="form-label">Nombres</label><b style="color: red">*</b>
                                     <input type="text" class="form-control" value="{{old('nombres')}}" id="nombres" name="nombres" required>
                                     @error('nombres')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                     <label for="" class="form-label">Apellidos</label><b style="color: red">*</b>
                                     <input type="text" class="form-control" value="{{old('apellidos')}}" id="apellidos" name="apellidos" required>
                                     @error('apellidos')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                     <label for="" class="form-label">Cedula</label><b style="color: red">*</b>
                                     <input type="text" class="form-control" value="{{old('cedula')}}" id="cedula" name="cedula" required>
                                     @error('cedula')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>

                                 <div class="col-md-3">
                                    <div class="form-group">
                                     <label for="" class="form-label">Celular</label><b style="color: red">*</b>
                                     <input type="text" class="form-control" value="{{old('celular')}}" id="celular" name="celular" required>
                                     @error('celular')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>

                            </div>
<!-- Fecha de nacimiento-->
                             <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="" class="form-label">Fecha de Nacimiento</label><b style="color: red">*</b>
                                     <input type="date" class="form-control" value="{{old('fecha_nacimiento')}}" id="fecha_nacimiento" name="fecha_nacimiento" required>
                                     @error('fecha_nacimiento')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                     <label for="" class="form-label">Dirección</label><b style="color: red">*</b>
                                     <input type="text" class="form-control" value="{{old('direccion')}}" id="direccion" name="direccion" required>
                                     @error('direccion')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>

                            </div>

                             <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="" class="form-label">Correo</label><b style="color: red">*</b>
                                     <input type="text" class="form-control" value="{{old('email')}}" id="email" name="email" required>
                                     @error('email')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="" class="form-label">Contraseña</label><b style="color: red">*</b>
                                     <input type="password" class="form-control" value="{{old('password')}}" id="password" name="password" required>
                                     @error('password')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="" class="form-label">Verificar Contraseña</label>
                                     <input type="password" class="form-control" value="{{old('password_confirmation')}}" id="password" name="password_confirmation">
                                     @error('password_confirmation')
                                     <small style="color:red">{{$message}}</small>
                                    @enderror
                                    </div>
                                </div>

                            </div>

                        <a class="btn btn-secondary" href="{{url('admin/secretarias')}}">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Registrar Usuario</button>
                        </form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
@endsection
