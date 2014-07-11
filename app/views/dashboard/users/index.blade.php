@extends('layouts.admin')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
  		<li class="active"><a href="#list_restaurante" role="tab" data-toggle="tab">Listar Usuarios</a></li>
  		<li><a href="#pedido_restaurante" role="tab" data-toggle="tab">Pedidos por Usuarios</a></li>
	</ul>

	<div class="tab-content">
  		<div class="tab-pane active" id="list_restaurante">
  			<h3>Listar Usuarios</h3>
  			<br>
			<div class="table-responsive">
  				<table class="table table-condensed">
	  				<thead>
	          			<tr>
							<th>Nombre</th>
							<th>Email</th>
							<th>Edad</th>
							<th>Sexo</th>
							<th>Domicilio</th>
							<th>Telefono</th>
							<th>Acciones</th>
	          			</tr>
	        		</thead>
	        		<tbody>
						@foreach ($users as $user)
						<tr>
							<td>{{ $user->getName() }}</td>
							<td>{{ $user->getReminderEmail() }}</td>
							<td>{{ $user->getAge() }}</td>
							<td>{{ $user->getSex() }}</td>
							<td>{{ $user->getAddress() }}</td>
							<td>{{ $user->getCellphone() }}</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-comment"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-phone"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
						@endforeach
        			</tbody>
				</table>
  			</div>
  		</div>
  		<div class="tab-pane" id="pedido_restaurante">
  			<h3>Pedidos por Usuarios</h3>
  			<br>
			<div class="table-responsive">
  				<table class="table table-condensed">
	  				<thead>
	          			<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Pedidos Enviados</th>
							<th>Pedidos No Enviados</th>
							<th>Pedidos con Problema</th>
							<th>Pedidos en Proceso</th>
							<th>Acciones</th>
	          			</tr>
	        		</thead>
	        		<tbody>
						<tr>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-comment"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-phone"></span></button>
							</td>
						</tr>
						<tr>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-comment"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-phone"></span></button>
							</td>
						</tr>
						<tr>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-comment"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-phone"></span></button>
							</td>
						</tr>
						<tr>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-comment"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-phone"></span></button>
							</td>
						</tr>
        			</tbody>
				</table>
  			</div>
  		</div>
	</div>
@stop