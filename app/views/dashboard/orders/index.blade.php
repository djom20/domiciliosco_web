@extends('layouts.admin')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
  		<li class="active"><a href="#ordenes" role="tab" data-toggle="tab">Ordenes por atender</a></li>
  		<li><a href="#proceso" role="tab" data-toggle="tab">Ordenes en proceso</a></li>
  		<li><a href="#atendidos" role="tab" data-toggle="tab">Ordenes atendidas</a></li>
  		<li><a href="#rechazados" role="tab" data-toggle="tab">Ordenes rechazadas</a></li>
  		<li><a href="#problemas" role="tab" data-toggle="tab">Ordenes con problemas</a></li>
  		<!-- <li><a href="#buscar" role="tab" data-toggle="tab">Buscar ordenes</a></li> -->
	</ul>

	<div class="tab-content">
  		<div class="tab-pane active" id="ordenes">
  			<h3>Listar Ordenes</h3>
  			<br>
  			<form role="form">
  				<p>Total de pedidos sin atender es : $0</p>
  				<p>Cantidad de pedidos sin atender es : 0</p>
				<div class="form-group">
    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
    				<select class="form-control">
						<option>Restaurante 1</option>
						<option>Restaurante 2</option>
						<option>Restaurante 3</option>
						<option>Restaurante 4</option>
						<option>Restaurante 5</option>
					</select>
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputPassword1">Usuario</label>
					<select class="form-control">
						<option>Usuario 1</option>
						<option>Usuario 2</option>
						<option>Usuario 3</option>
						<option>Usuario 4</option>
						<option>Usuario 5</option>
					</select>
				</div>
			</form>
			<div class="table-responsive">
  				<table class="table table-condensed">
	  				<thead>
	          			<tr>
	            			<th>#</th>
							<th>Usuario</th>
							<th>Restaurante</th>
							<th>Orden</th>
							<th>Acciones</th>
	          			</tr>
	        		</thead>
	        		<tbody>
						<tr>
							<td>1</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-exclamation-sign"></span></button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-exclamation-sign"></span></button>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-exclamation-sign"></span></button>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-exclamation-sign"></span></button>
							</td>
						</tr>
        			</tbody>
				</table>
  			</div>
  		</div>
  		<div class="tab-pane" id="proceso">
  			<h3>Listar Ordenes</h3>
  			<br>
  			<form role="form">
  				<p>Total de pedidos en proceso es : $0</p>
  				<p>Cantidad de pedidos en proceso es : 0</p>
				<div class="form-group">
    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
    				<select class="form-control">
						<option>Restaurante 1</option>
						<option>Restaurante 2</option>
						<option>Restaurante 3</option>
						<option>Restaurante 4</option>
						<option>Restaurante 5</option>
					</select>
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputPassword1">Usuario</label>
					<select class="form-control">
						<option>Usuario 1</option>
						<option>Usuario 2</option>
						<option>Usuario 3</option>
						<option>Usuario 4</option>
						<option>Usuario 5</option>
					</select>
				</div>
			</form>
			<div class="table-responsive">
  				<table class="table table-condensed">
	  				<thead>
	          			<tr>
	            			<th>#</th>
							<th>Usuario</th>
							<th>Restaurante</th>
							<th>Orden</th>
							<th>Total</th>
							<th>Acciones</th>
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
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok-circle"></span></button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok-circle"></span></button>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok-circle"></span></button>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok-circle"></span></button>
							</td>
						</tr>
        			</tbody>
				</table>
  			</div>
  		</div>
  		<div class="tab-pane" id="atendidos">
  			<h3>Listar Ordenes</h3>
  			<br>
  			<form role="form">
  				<p>Total de pedidos atendidos es : $0</p>
  				<p>Cantidad de pedidos atendidos es : 0</p>
				<div class="form-group">
    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
    				<select class="form-control">
						<option>Restaurante 1</option>
						<option>Restaurante 2</option>
						<option>Restaurante 3</option>
						<option>Restaurante 4</option>
						<option>Restaurante 5</option>
					</select>
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputPassword1">Usuario</label>
					<select class="form-control">
						<option>Usuario 1</option>
						<option>Usuario 2</option>
						<option>Usuario 3</option>
						<option>Usuario 4</option>
						<option>Usuario 5</option>
					</select>
				</div>
			</form>
			<div class="table-responsive">
  				<table class="table table-condensed">
	  				<thead>
	          			<tr>
	            			<th>#</th>
							<th>Usuario</th>
							<th>Restaurante</th>
							<th>Orden</th>
							<th>Total</th>
	          			</tr>
	        		</thead>
	        		<tbody>
						<tr>
							<td>1</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
						</tr>
        			</tbody>
				</table>
  			</div>
  		</div>
  		<div class="tab-pane" id="rechazados">
  			<h3>Listar Ordenes</h3>
  			<br>
  			<form role="form">
  				<p>Total de pedidos rechazados es : $0</p>
  				<p>Cantidad de pedidos rechazados es : 0</p>
				<div class="form-group">
    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
    				<select class="form-control">
						<option>Restaurante 1</option>
						<option>Restaurante 2</option>
						<option>Restaurante 3</option>
						<option>Restaurante 4</option>
						<option>Restaurante 5</option>
					</select>
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputPassword1">Usuario</label>
					<select class="form-control">
						<option>Usuario 1</option>
						<option>Usuario 2</option>
						<option>Usuario 3</option>
						<option>Usuario 4</option>
						<option>Usuario 5</option>
					</select>
				</div>
			</form>
			<div class="table-responsive">
  				<table class="table table-condensed">
	  				<thead>
	          			<tr>
	            			<th>#</th>
							<th>Usuario</th>
							<th>Restaurante</th>
							<th>Orden</th>
							<th>Total</th>
	          			</tr>
	        		</thead>
	        		<tbody>
						<tr>
							<td>1</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>$0</td>
						</tr>
        			</tbody>
				</table>
  			</div>
  		</div>
  		<div class="tab-pane" id="problemas">
  			<h3>Listar Ordenes</h3>
  			<br>
  			<form role="form">
  				<p>La cantidad de pedidos con problemas es : 0</p>
				<div class="form-group">
    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
    				<select class="form-control">
						<option>Restaurante 1</option>
						<option>Restaurante 2</option>
						<option>Restaurante 3</option>
						<option>Restaurante 4</option>
						<option>Restaurante 5</option>
					</select>
				</div>
				<div class="form-group">
					<label class="visible-xs-inline-block" for="exampleInputPassword1">Usuario</label>
					<select class="form-control">
						<option>Usuario 1</option>
						<option>Usuario 2</option>
						<option>Usuario 3</option>
						<option>Usuario 4</option>
						<option>Usuario 5</option>
					</select>
				</div>
			</form>
			<div class="table-responsive">
  				<table class="table table-condensed">
	  				<thead>
	          			<tr>
	            			<th>#</th>
							<th>Usuario</th>
							<th>Restaurante</th>
							<th>Orden</th>
							<th>Razon</th>
	          			</tr>
	        		</thead>
	        		<tbody>
						<tr>
							<td>1</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>Table cell</td>
						</tr>
        			</tbody>
				</table>
  			</div>
  		</div>
  		<!-- <div class="tab-pane" id="buscar">
  			<div class="col-md-3">
	  			<h3>Buscar Ordenes</h3>
	  			<br>
	  			<form role="form">
					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
	    				<select class="form-control">
							<option>Restaurante 1</option>
							<option>Restaurante 2</option>
							<option>Restaurante 3</option>
							<option>Restaurante 4</option>
							<option>Restaurante 5</option>
						</select>
					</div>
					<div class="form-group">
						<label class="visible-xs-inline-block" for="exampleInputPassword1">Estado</label>
						<select class="form-control">
							<option>Estado 1</option>
							<option>Estado 2</option>
							<option>Estado 3</option>
							<option>Estado 4</option>
							<option>Estado 5</option>
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
				</form>
			</div>
			<div class="col-md-9">
				<h3>Listar Ordenes</h3>
	  			<br>
	  			<div id="info_search" class="text-left">
					<small>Total Ordenes Aceptadas: 0</small>
					<small>Total Ordenes Rechazadas: 0</small>
					<small>Total Ordenes: 0</small>
					<small>Total de venta del restaurante: $ 0</small>
					<small>Total de perdida del restaurante: $ 0</small>
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
  		</div> -->
	</div>
@stop