@section('formModificarPerfil')

<form action="/user/guardarFotoPerfil" method="post" enctype="multipart/form-data">
	@csrf
	<h1><label>Cambiar Foto de Perfil</label></h1>
	<img src="avatar/descarga.png" alt="logo" class="ModFotoPerfil">
	<input type="file" name="file">
	<input type="submit" name="submit_FotoPerfil">
</form>