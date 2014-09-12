@extends ('layout')

@section ('content')

<table class="table-bordered" width="300" border="0" cellspacing="5">
  <tr>
    <td colspan="4"><h1>Nuevo Usuario</h1></td>
  </tr>
   <tr>
    <td colspan="4">  {{Form::open(['route' => 'users.store'])}} </td>
  </tr>
  <tr>
    <td>Nombre</td>
    <td><input name="user[username]" type="text"> </td>
    <td>Email</td>
    <td> <input name="user[email]" type="text"></td>
  </tr>
  <tr>
    <td>Contraseña</td>
    <td><input name="user[password]" type="password"></td>
    <td>Confirmar</td>
    <td> <input name="user[password_confirmation]" type="password"></td>
  </tr>
    <tr>
    <td colspan="4">
	Tipo de Usuario
	  <select name="user[role]">
    @foreach (Config::get('artecol.users_roles') as $tipo) {
      <option value="{{$tipo}}">{{$tipo}}</option>
    @endforeach
  </select>
	</td>
  </tr>
    <tr>
    <td colspan="4"> {{Form::submit('Aceptar')}}</td>
  </tr>
  
  {{Form::close()}}
@stop

</table>
@stop