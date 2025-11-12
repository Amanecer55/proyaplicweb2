<!DOCTYPE html>
<html lang="en">
<head>
    <title>Examen</title>
</head>
<body>

   <form action ="{{route('guardabenjamin')}}" method="POST">
   {{csrf_field()}}

   <center>
    <table border = 1>
    <tr>
        <td colspan="2">Autos</td>
    </tr>
 
    <tr>
        <td>
            <select name = "marca">
            <option value = "1"> BMW</option>
            <option value = "2"> Vento</option>
            <option value = "3"> Toyota</option>
            </select>
        </td>
        <td>
           @if($errors->first('modelo'))
           <span style="color: red;">{{$errors->first('modelo')}}</span>
           @endif
           <input type = "text" name = "modelo" value = "{{old('modelo')}}">
        </td>
    </tr>
    
    <tr>
        <td>
           @if($errors->first('costo'))
           <span style="color: red;">{{$errors->first('costo')}}</span>
           @endif
           <input type = "text" name = "costo" max = 200  min = 100 value = "{{old('costo')}}">
        </td>
        <td>
            <input type = 'checkbox' name = 'seguridad[]' value = 'llantas'>llantas
            <input type = 'checkbox' name = 'seguridad[]' value = 'vaso'>vaso
            <input type = 'checkbox' name = 'seguridad[]' value = 'clima'>clima
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <input type = "submit" value = "Guardar" >
        </td>
    </tr>
    </table>
    </center>
    
    </form> 
    </body>
</html>