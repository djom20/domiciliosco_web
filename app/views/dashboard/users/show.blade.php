@extends('layouts.admin')

@section('content')
	<h1>Configuraciones de Perfil</h1>
	<form action="">
		<div class="row">
			<div class="col-md-4">
				<h3>Imagen de Perfil</h3>
				<img src="/admin/public/profiles/default.jpg" style="width:12em; border: solid 2px #eee;" class="img-profile img-circle img-responsive">
				<p>Esta imagen es provista por el servicio de Gravatar</p>
			</div>
			<div class="col-md-4">
				<h3>Datos del Perfil</h3>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre" value="{{ $user->getName() }}">
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputEmail1">Email</label>
					<div class="input-group">
						<div class="input-group-addon">@</div>
						<input class="form-control" type="text" placeholder="Email" value="{{ $user->getReminderEmail() }}">
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-6">
				    		<label class="visible-xs-inline-block" for="exampleInputEmail1">Edad</label>
							<div class="input-group">
		      					<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
				  				<input class="form-control" type="text" placeholder="Edad" value="{{ $user->getAge() }}">
							</div>
						</div>
						<div class="col-lg-6">
				    		<label class="visible-xs-inline-block" for="exampleInputEmail1">Edad</label>
							<div class="input-group">
				      			<div class="input-group-addon"><span class="glyphicon glyphicon-stats"></span></div>
				  				<input class="form-control" type="text" placeholder="Edad" value="{{ $user->getAge() }} Años">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputEmail1">Genero</label>
					<select class="form-control">
						@if($user->getSex() == 'H') <option value="H" selected="selected"> @else <option> @endif H</option>
						@if($user->getSex() == 'M') <option value="M" selected="selected"> @else <option> @endif M</option>
					</select>
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputEmail1">Dirección</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Dirección" value="{{ $user->getAddress() }}">
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputEmail1">Cellular</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cellular" value="{{ $user->getCellphone() }}">
				</div>
			</div>
			<div class="col-md-4">
				<h3>Cambio de Contraseña</h3>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputEmail1">Contraseña Actual</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contraseña Actual">
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputEmail1">Contraseña Nueva</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contraseña Nueva">
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputEmail1">Repita Contraseña</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Repita Contraseña">
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-danger">Actualizar</button>
	</form>
@stop