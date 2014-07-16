@extends('layouts.admin')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
  		<li class="active"><a href="#reportes" role="tab" data-toggle="tab">Reportes</a></li>
	</ul>

	<div class="tab-content">
  		<div class="tab-pane active" id="reportes">
  			<div class="col-md-3">
	  			<h3>Buscar Ordenes</h3>
	  			<br>
	  			<form role="form">
					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
	    				<select class="form-control">
	    					@foreach($restaurants as $restaurant)
								<option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label class="visible-xs-inline-block" for="exampleInputPassword1">Estado</label>
						<select class="form-control">
							<option value="1">En Progreso</option>
							<option value="3">Aceptado</option>
							<option value="4">Rechazado</option>
							<option value="5">Con problemas</option>
						</select>
					</div>
					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Fecha Inicial</label>
        				<div class="input-group">
          					<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
      						<input type="date" name="" id="" style="width: 100%;">
    					</div>
  					</div>
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Fecha Final</label>
        				<div class="input-group">
          					<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
      						<input type="date" name="" id="" style="width: 100%;">
    					</div>
  					</div>
					<button type="submit" class="btn btn-danger">Consultar</button>
					<br><br>
  					<div class="btn-group">
						<button type="button" class="btn btn-danger">Exportar a PDF</button>
						<button type="button" class="btn btn-danger">Exportar a Excel</button>
					</div>
				</form>
			</div>
			<div class="col-md-9">
				<h3>Listar Ordenes</h3>
	  			<div id="info_search" class="text-left">
		  			<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							Estadisticas <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Total Ordenes Aceptadas: 0</a></li>
							<li><a href="">Total Ordenes Rechazadas: 0</a></li>
							<li><a href="">Total Ordenes: 0</a></li>
							<li><a href="">Total de venta del restaurante: $ 0</a></li>
							<li><a href="">Total de perdida del restaurante: $ 0</a></li>							
						</ul>
					</div>
				</div>
				<div class="table-responsive">
	  				<table class="table table-condensed">
		  				<thead>
		          			<tr>
		            			<th>#</th>
								<th>Usuario</th>
								<th>Restaurante</th>
								<th>Orden</th>
								<th>Total</th>
								<th>Estado</th>
		          			</tr>
		        		</thead>
		        		<tbody>
							<tr>
								<td>1</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>$0</td>
								<td>
									<button class="btn btn-info">En Proceso</button>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>$0</td>
								<td>
									<button class="btn btn-success">Aceptado</button>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>$0</td>
								<td>
									<button class="btn btn-warning">Rechazado</button>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>$0</td>
								<td>
									<button class="btn btn-default">Con Problemas</button>
								</td>
							</tr>
	        			</tbody>
					</table>
	  			</div>
  			</div>
  		</div>
	</div>
@stop