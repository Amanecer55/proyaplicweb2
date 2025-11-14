

@section('contenido')
<div class="container">
    <center>
        <h1 class="mt-4">Reporte de Animales (Examen Joel)</h1>
        <hr>

        @if (Session::has('mensaje_animal'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('mensaje_animal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table table-striped table-hover mt-4" style="width: 80%;">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($animales as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>
                           
                            <img src="https://placehold.co/50x50/333/FFF?text=A" alt="Animal" class="rounded-circle">
                        </td>
                        <td>{{ $a->nombre_animal }}</td>
                        <td>{{ $a->nombre_especie }}</td>
                        <td>
                            
                            <form action="{{ route('eliminaAnimal') }}" method="POST" style="display:inline;">
                                {{ csrf_field() }}
                            
                                <input type="hidden" name="id" value="{{ $a->id }}">
                                <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('¿Estás seguro de eliminar a {{ $a->nombre_animal }}?');">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        @if(empty($animales))
            <div class="alert alert-info mt-5" role="alert">
                Aún no hay animales registrados en la base de datos.
            </div>
        @endif
        
    </center>
</div>
@stop