@extends('layouts.admin')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
  		<li class="active"><a href="#ordenes" role="tab" data-toggle="tab">Ordenes por atender</a></li>
  		<li><a href="#proceso" role="tab" data-toggle="tab">Ordenes en proceso</a></li>
  		<li><a href="#atendidos" role="tab" data-toggle="tab">Ordenes atendidas</a></li>
  		<li><a href="#rechazados" role="tab" data-toggle="tab">Ordenes rechazadas</a></li>
  		<li><a href="#problemas" role="tab" data-toggle="tab">Ordenes con problemas</a></li>
	</ul>

	<div class="tab-content">
  		<div class="tab-pane fade in active" id="ordenes">
  			<br>
  			<form role="form">
				<div class="btn-group btn-group-justified">
      				<div class="btn-group">
        				<select class="form-control select-group-rigth">
	    					@foreach($restaurants as $restaurant)
          						<option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
          					@endforeach
						</select>
      				</div>
      				<div class="btn-group">
        				<select class="form-control select-group-center">
							@foreach($users as $user)
          						<option value="{{ $user->getKey() }}">{{ $user->getName() }}</option>
          					@endforeach
						</select>
      				</div>
      				<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							Estadisticas <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Total de pedidos sin atender es : $0</a></li>
  							<li><a href="">Cantidad de pedidos sin atender es : 0</a></li>
						</ul>
					</div>
    			</div>
    			<br>
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
  		<div class="tab-pane fade" id="proceso">
  			<br>
  			<form role="form">
				<div class="btn-group btn-group-justified">
      				<div class="btn-group">
        				<select class="form-control select-group-rigth">
	    					@foreach($restaurants as $restaurant)
          						<option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
          					@endforeach
						</select>
      				</div>
      				<div class="btn-group">
        				<select class="form-control select-group-center">
							@foreach($users as $user)
          						<option value="{{ $user->getKey() }}">{{ $user->getName() }}</option>
          					@endforeach
						</select>
      				</div>
      				<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							Estadisticas <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Total de pedidos en proceso es : $0</a></li>
  							<li><a href="">Cantidad de pedidos en proceso es : 0</a></li>
						</ul>
					</div>
    			</div>
    			<br>
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
  		<div class="tab-pane fade" id="atendidos">
  			<br>
  			<form role="form">
				<div class="btn-group btn-group-justified">
      				<div class="btn-group">
        				<select class="form-control select-group-rigth">
	    					@foreach($restaurants as $restaurant)
          						<option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
          					@endforeach
						</select>
      				</div>
      				<div class="btn-group">
        				<select class="form-control select-group-center">
							@foreach($users as $user)
          						<option value="{{ $user->getKey() }}">{{ $user->getName() }}</option>
          					@endforeach
						</select>
      				</div>
      				<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							Estadisticas <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Total de pedidos atendidos es : $0</a></li>
  							<li><a href="">Cantidad de pedidos atendidos es : 0</a></li>
						</ul>
					</div>
    			</div>
    			<br>
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
  		<div class="tab-pane fade" id="rechazados">
  			<br>
  			<form role="form">
				<div class="btn-group btn-group-justified">
      				<div class="btn-group">
        				<select class="form-control select-group-rigth">
	    					@foreach($restaurants as $restaurant)
          						<option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
          					@endforeach
						</select>
      				</div>
      				<div class="btn-group">
        				<select class="form-control select-group-center">
							@foreach($users as $user)
          						<option value="{{ $user->getKey() }}">{{ $user->getName() }}</option>
          					@endforeach
						</select>
      				</div>
      				<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							Estadisticas <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Total de pedidos rechazados es : $0</a></li>
  							<li><a href="">Cantidad de pedidos rechazados es : 0</a></li>
						</ul>
					</div>
    			</div>
    			<br>
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
  		<div class="tab-pane fade" id="problemas">
  			<br>
  			<form role="form">
				<div class="btn-group btn-group-justified">
      				<div class="btn-group">
        				<select class="form-control select-group-rigth">
	    					@foreach($restaurants as $restaurant)
          						<option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
          					@endforeach
						</select>
      				</div>
      				<div class="btn-group">
        				<select class="form-control select-group-center">
							@foreach($users as $user)
          						<option value="{{ $user->getKey() }}">{{ $user->getName() }}</option>
          					@endforeach
						</select>
      				</div>
      				<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							Estadisticas <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">La cantidad de pedidos con problemas es : 0</a></li>
						</ul>
					</div>
    			</div>
    			<br>
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
	</div>
@stop