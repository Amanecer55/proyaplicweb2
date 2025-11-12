@extends('principal')

@section('contenido')
<center>
        <h1>Editar empleados</h1>
        <br>
        <form action ="{{route('actualizaemp')}}" method="post">
            {{csrf_field()}}
            <table >
               <tr>
                    <td>Clave</td>
                    <td>
                        @if($errors->has('idemp')) {{-- CORREGIDO: Usar 'idemp' --}}
                            {{ $errors->first('idemp') }}
                        @endif
                        <input type="text" name="idemp" value="{{ $infoempleado->idemp }}"readonly>
                    </td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td>
                        @if($errors->has('nombre'))
                            {{ $errors->first('nombre') }}
                        @endif
                        <input type="text" name="nombre" value="{{ $infoempleado->empe }}">
                    </td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td>
                        @if($errors->has('apellido'))
                            {{ $errors->first('apellido') }}
                        @endif
                        <input type="text" name="apellido" value="{{ $infoempleado->apellido }}">
                    </td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td>
                        @if($errors->has('edad'))
                            {{ $errors->first('edad') }}
                        @endif
                        <input type="number" name="edad" value="{{ $infoempleado->edad }}" min="18" max="65">
                    </td>
                </tr>
                <tr>
                    <td>Fecha nacimiento</td>
                    <td><input type="date" name="fechanac" value="{{ $infoempleado->fechanac }}"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        @if($errors->has('correo')) {{-- CORREGIDO: Usar 'correo' --}}
                            {{ $errors->first('correo') }}
                        @endif
                        <input type="email" name="correo" value="{{ $infoempleado->correo }}" > {{-- Usar 'correo' --}}
                    </td>
                </tr>
                <tr>
                    <td>RFC</td>
                    <td>
                     @if($errors->has('rfc'))
                            {{ $errors->first('rfc') }}
                        @endif
                    <input type="text" name="rfc" value="{{ $infoempleado->rfc }}"></td>
                </tr>
                <tr>
                    <td>Selecciona carrera</td>
                    <td>
                        <select name='idca' class="form-select">
                            <option value = '{{$infoempleado->idca}}'>{{$infoempleado->carre}}</option>
                            @foreach($carreras as $c)
                            {{-- CORRECCIÓN: Evitar repetir la carrera seleccionada si ya es la primera opción --}}
                            @if($c->idca != $infoempleado->idca)
                                <option value = '{{$c->idca}}'>{{$c->nombre}}</option>
                            @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Sexo</td>
                    <td>
                        @if($infoempleado->sexo=='F')
                        <input type="radio" name="sexo" value="M">Masculino
                        <input type="radio" name="sexo" value="F" checked>Femenino
                        @else
                        <input type="radio" name="sexo" value="M" checked>Masculino
                        <input type="radio" name="sexo" value="F">Femenino
                        @endif

                    </td>
                </tr>
                
                <tr>
                    <td>Curriculum</td>
                    <td>
                        {{-- CORREGIDO: Sintaxis para textarea --}}
                        <textarea name="curriculom">{{ old('curriculom', $infoempleado->curriculom) }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="lead" _msttexthash="3134703" _msthash="200" value="Actualizar">
                        
                    </td>
                </tr>  
                <tr>
                    <td>Activo</td>
                    {{-- CORRECCIÓN CRÍTICA: Se combina todo en una sola celda <td> --}}
                    <td>
                        @if($infoempleado->activo == 'Si')
                        <input type = 'radio' name = 'activo' value = 'Si' checked>Si
                        <input type = 'radio' name = 'activo' value = 'No'>No
                        @else
                        <input type = 'radio' name = 'activo' value = 'Si'>Si
                        <input type = 'radio' name = 'activo' value = 'No'checked>No
                        @endif
                    </td>
                </tr>

            </table>
        </form>
        </center>
@stop