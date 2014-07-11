@extends('layouts.admin')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
  		<li class="active"><a href="#home" role="tab" data-toggle="tab">Adicionales</a></li>
  		<li><a href="#messages" role="tab" data-toggle="tab">Adicionales al Menu</a></li>
	</ul>

	<div class="tab-content">
  		<div class="tab-pane active" id="home">
  			<div class="col-md-3">
  				<h3>Registrar Adicionales</h3>
  				<br>
  				<form role="form">
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputEmail1">Nombre</label>
	    				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  					</div>
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Descripcion</label>
	    				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Descripcion">
  					</div>
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Precio</label>
        				<div class="input-group">
          					<div class="input-group-addon">$</div>
      						<input class="form-control" type="text" placeholder="Precio">
      						<span class="input-group-addon">.00</span>
    					</div>
  					</div>
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Comida</label>
	    				<select class="form-control">
							<option>Comida 1</option>
							<option>Comida 2</option>
							<option>Comida 3</option>
							<option>Comida 4</option>
							<option>Comida 5</option>
						</select>
  					</div>
  					<button type="submit" class="btn btn-danger">Adicionar</button>
				</form>
  			</div>
  			<div class="col-md-9">
  				<h3>Listar Adicionales</h3>
  				<br>
  				<div class="table-responsive">
	  				<table class="table table-condensed">
		  				<thead>
		          			<tr>
		            			<th>#</th>
								<th>Restaurante</th>
								<th>Item</th>
								<th>Descripción</th>
								<th>Precio</th>
								<th>Comida</th>
								<th>Acciones</th>
		          			</tr>
		        		</thead>
		        		<tbody>
							<tr>
								<td>1</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr>
	        			</tbody>
					</table>
	  			</div>
  			</div>
  		</div>
  		<div class="tab-pane" id="messages">
			<h2>Agregar Adicionales a una comida</h2>
  			<br>
  			<div class="col-md-3">
  				<form role="form">
  					<p>Selecciona el Restaurante al que pertenece el adicional:</p>
		  			<select class="form-control">
						<option>Restaurante 1</option>
						<option>Restaurante 2</option>
						<option>Restaurante 3</option>
						<option>Restaurante 4</option>
						<option>Restaurante 5</option>
					</select>
				</form>
  			</div>
  			<div class="col-md-9">
  				<div class="table-responsive">
  				<table class="table table-condensed">
	  				<thead>
	          			<tr>
	            			<th>#</th>
							<th>Categoria</th>
							<th>Comida</th>
							<th>Acciones</th>
	          			</tr>
	        		</thead>
	        		<tbody>
						<tr>
							<td>1</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Table cell</td>
							<td>Table cell</td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-ok"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
        			</tbody>
				</table>
  			</div>
  			</div>
  		</div>
	</div>
@stop