@extends('layouts.admin')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
  		<li class="active"><a href="#home" role="tab" data-toggle="tab">Menus</a></li>
  		<li><a href="#profile" role="tab" data-toggle="tab">Categorias de Menus</a></li>
	</ul>

	<div class="tab-content">
  		<div class="tab-pane active" id="home">
  			<div class="col-md-3">
	  			<h3>Registrar Menu</h3>
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
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Categoria</label>
	    				<select class="form-control">
							<option>Categoria 1</option>
							<option>Categoria 2</option>
							<option>Categoria 3</option>
							<option>Categoria 4</option>
							<option>Categoria 5</option>
						</select>
  					</div>
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
  					<button type="submit" class="btn btn-danger">Adicionar</button>
				</form>
  			</div>
  			<div class="col-md-9">
  				<h3>Listar Menus</h3>
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
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Categoria</label>
	    				<select class="form-control">
							<option>Categoria 1</option>
							<option>Categoria 2</option>
							<option>Categoria 3</option>
							<option>Categoria 4</option>
							<option>Categoria 5</option>
						</select>
  					</div>
  				</form>
  				<div class="table-responsive">
	  				<table class="table table-condensed">
		  				<thead>
		          			<tr>
		            			<th>#</th>
								<th>Categoria</th>
								<th>Nombre</th>
								<th>Descripcion</th>
								<th>Precio</th>
								<th>Adicionales</th>
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
							<tr>
								<td>4</td>
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
  		<div class="tab-pane" id="profile">
  			<div class="col-md-4">
  				<h3>Registrar Categoria de Menus</h3>
  				<br>
  				<form action="">
  					<div class="form-group">
	    				<p>Introduce el nombre de la nueva categoria:</p>
	    				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre de la Categoria">
  					</div>
  					<button type="submit" class="btn btn-danger">Adicionar</button>
  				</form>
  			</div>
  			<div class="col-md-8">
  				<h3>Listar Categorias de Menus</h3>
  				<br>
  				<div class="table-responsive">
  					<table class="table table-condensed">
		  				<thead>
		          			<tr>
		            			<th>#</th>
								<th>Nombre</th>
								<th>Acciones</th>
		          			</tr>
		        		</thead>
		        		<tbody>
							<tr>
								<td>1</td>
								<td>Table cell</td>
								<td>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Table cell</td>
								<td>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr>
							<tr>
								<td>3</td>
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
	</div>
@stop