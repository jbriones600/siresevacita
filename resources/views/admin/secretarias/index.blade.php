@extends('layouts.admin')
@section('content')
<div class='row'>
    <h1>Listado de Secretarias</h1>
</div>
    <br>
    <hr>
    <div class='row'>

    <div class="col-md-12">
            <div class="card card-outline card-primary">
            <!-- /.card-header -->
            <div class="card-header">
                <h3 class="card-title">Secretarias Registradas</h3>

                        <div class="card-tools">
                            <a href="{{url('admin/secretarias/create')}}" class="btn btn-primary">
                                Registrar Secretarias
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
                            <th style="text-align: center" scope="col">Apellidos</th>
                            <th style="text-align: center" scope="col">Cedula</th>
                            <th style="text-align: center" scope="col">Celular</th>
                            <th style="text-align: center" scope="col">Fecha_Nac</th>
                            <th style="text-align: center" scope="col">Dirección</th>
                            <th style="text-align: center" scope="col">Correo</th>
                            <th style="text-align: center" scope="col">Acción</th>
                        </tr>
                     </thead>
                        <?php $contador=1; ?>
                        <tbody>
                        @foreach($secretarias as $secretaria)
                        <tr>
                            <td style="text-align: center">{{$contador++}}</td>
                            <td>{{$secretaria->nombres}}</td>
                            <td>{{$secretaria->apellidos}}</td>
                            <td>{{$secretaria->cedula}}</td>
                            <td>{{$secretaria->celular}}</td>
                            <td>{{$secretaria->fecha_nacimiento}}</td>
                            <td>{{$secretaria->direccion}}</td>
                            <td>{{$secretaria->user->email}}</td>

                            <td style="text-align: center">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                   <a href="{{url('admin/secretarias/'.$secretaria->id)}}" class="btn btn-primary btn btn-sm"><i class="bi bi-eye-fill"></i></a>
                                   <a href="{{url('admin/secretarias/'.$secretaria->id.'/edit')}}" class="btn btn-success btn btn-sm"><i class="bi bi-pencil"></i></a>
                                   <a href="{{url('admin/secretarias/'.$secretaria->id.'/confirm-delete')}}" class="btn btn-danger btn btn-sm"><i class="bi bi-trash3-fill"></i></a>
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


<script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando START a END de TOTAL Secretaria",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Secretaria",
                                    "infoFiltered": "(Filtrado de MAX total Secretaria)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar MENU Secretaria",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    },{
                                        extend: 'csv'
                                    },{
                                        extend: 'excel'
                                    },{
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }
                                    ]
                                },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
