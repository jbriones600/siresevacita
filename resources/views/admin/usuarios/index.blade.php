@extends('layouts.admin')
@section('content')
<div class='row'>
    <h1>Listado de Usuarios</h1>
</div>
    <br>
    <hr>
    <div class='row'>

    <div class="col-md-10">
            <div class="card card-outline card-primary">
            <!-- /.card-header -->
            <div class="card-header">
                <h3 class="card-title">Usuarios Registrados</h3>

                        <div class="card-tools">
                            <a href="{{url('admin/usuarios/create')}}" class="btn btn-primary">
                                Registrar Usuarios
                            </a>
                        </div>
                <!-- /.card-tools -->
              </div>

              <div class="card-body" style="display: block;">
                    <table id="example1" class="table table-striped table-hover table-bordered table-sm">
                      <thead style="background-color: #c0c0c0">
                        <tr class="table-dark">
                            <th style="text-align: center" scope="col">No</th>
                            <th style="text-align: center" scope="col">Nombres</th>
                            <th style="text-align: center" scope="col">Email</th>
                            <th style="text-align: center" scope="col">Acción</th>
                        </tr>
                     </thead>
                        <?php $contador=1; ?>
                        <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td style="text-align: center">{{$contador++}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>

                            <td style="text-align: center">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                   <a href="{{url('admin/usuarios/'.$usuario->id)}}" class="btn btn-primary btn btn-sm"><i class="bi bi-eye-fill"></i></a>
                                   <a href="" class="btn btn-success btn btn-sm"><i class="bi bi-pencil"></i></a>
                                   <a href="" class="btn btn-danger btn btn-sm"><i class="bi bi-trash3-fill"></i></a>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
@endsection
