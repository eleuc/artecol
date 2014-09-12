@extends ('layout')

@section ('content')

{{Form::open(['route' => 'users.attempt'])}}

<table class="table-bordered" width="300" >
  <tr>
    <td colspan="2"><h1>Ingresar</h1></td>
  </tr>
  <tr>
    <td align="right">Email</td>
        <td><input name="user[email]" type="text"></td>

  </tr>
  <tr>
    <td align="right">Contraseña</td>
    <td><input name="user[password]" type="password"></td>
  </tr>
   <tr>
    <td colspan="2">{{Form::submit('Aceptar')}}</td>
  </tr>
</table>
  
{{Form::close()}}
@stop