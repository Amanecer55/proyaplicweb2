@extends ('principal')

@section ('contenido')
<center>
<h1> Reporte de empleados </h1>
<br>

@if (Session::has('mensaje'))
          <div>
        <div class="alert alert-dismissible alert-success">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         {{ Session::get('mensaje') }}
        </div>
     </div>
@endif

<table border=1>
    <tr><td>clave</td>
        <td>nombre</td>
        <td>correo</td>
        <td>carrera</td>
        <td>rfc</td>
        <td>Opciones </td>
        
    </tr>
    @foreach($empleados as $e)
    <tr><td>{{$e->idemp}}</td>
        <td>{{$e->nomc}}</td>
        <td>{{$e->correo}}</td>
        <td>{{$e->carre}}</td>
        <td>{{$e->rfc}}</td>
        
        <td>
        @if($e->activo=='Si')
        <a href="{{ route('desactivaempleado', ['idemp' => $e->idemp])  }}">
        <button type="button" class="btn btn-danger">Desactivar</button>
        </a>
        <a href="{{ route('editaempleado', ['idemp' => $e->idemp])  }}">
        <button type="button" class="btn btn-success">Editar</button>
        </a>
        @else
        <a href="{{ route('activaempleado', ['idemp' => $e->idemp])  }}">
        <button type="button" class="btn btn-primary">Activar</button></a>
        <a href="{{ route('eliminaempleado', ['idemp' => $e->idemp])  }}">
        <button type="button" class="btn btn-warning">Eliminar</button></a>
        @endif
        </td>
    </tr>
    @endforeach
</table>
</center>
@stop