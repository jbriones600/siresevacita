@extends('layouts.admin')
@section('content')
<div class='row'>
    <h1>Panel Principal</h1>
</div>
<hr>
<div class="row">
    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$totalUsuario}}</h3>
                <p>Usuarios:</p>
              </div>
              <div class="icon">
                <i class="ion fas bi bi-file-person-fill"></i>
              </div>
        <a href="{{url('admin/usuarios')}}" class="small-box-footer">Mas información</i></a>
     </div>
    </div>
</div>
@endsection
