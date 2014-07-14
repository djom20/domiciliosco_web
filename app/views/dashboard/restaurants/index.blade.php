@extends('layouts.admin')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
  		<li class="active"><a href="#reg_restaurante" role="tab" data-toggle="tab">Registrar Restaurante</a></li>
  		<li><a href="#list_restaurante" role="tab" data-toggle="tab">Listar Restaurante</a></li>
  		<li><a href="#tipo_restaurante" role="tab" data-toggle="tab">Registrar Categoria de Restaurante</a></li>
	</ul>

	<div class="tab-content">
  		<div class="tab-pane active" id="reg_restaurante">
  			<h3>Registrar Restaurante</h3>
  			<br>
  			<form role="form">
  				<div class="col-md-5">
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
	    				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Restaurante">
  					</div>
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Descripcion</label>
	    				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Descripcion">
  					</div>
					<div class="form-group">
						<label class="visible-xs-inline-block" for="exampleInputPassword1">Tipo de comida</label>
						<select class="form-control">
							@foreach($restaurantsCategory as $rc)
								<option value="{{ $rc->getKey() }}">{{ $rc->getName() }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
    					<label class="visible-xs-inline-block" for="exampleInputFile">Logo</label>
    					<input type="file" id="exampleInputFile">
  					</div>
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Correo Electronico</label>
  						<div class="input-group">
          					<div class="input-group-addon">@</div>
	    					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Correo Electronico">
    					</div>
  					</div>
  					<!-- <div class="form-group">
	  					<div class="row">
	  						<div class="col-lg-6">
	    						<label class="visible-xs-inline-block" for="exampleInputPassword1">Latitud</label>
	    						<div class="input-group">
          							<div class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></div>
		    						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Latitud">
    							</div>
	  						</div>
	  						<div class="col-lg-6">
	    						<label class="visible-xs-inline-block" for="exampleInputPassword1">Longitud</label>
	    						<div class="input-group">
          							<div class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></div>
		    						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Longitud">
    							</div>
	  						</div>
						</div>
					</div> -->
  					<div class="form-group">
  						<div class="input-group">
      						<div id="openMaps" class="input-group-addon" style="background-color:#428bca;"><span style="color:#fff;" class="glyphicon glyphicon-map-marker"></span></div>
	    					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Domicilio">
						</div>
					</div>
					<div class="form-group">
						<div class="row">
	  						<div class="col-lg-6">
	    						<label class="visible-xs-inline-block" for="exampleInputPassword1">Usuario</label>
		    					<div class="input-group">
          							<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
    								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
    							</div>
	  						</div>
	  						<div class="col-lg-6">
	    						<label class="visible-xs-inline-block" for="exampleInputPassword1">Password</label>
		    					<div class="input-group">
          							<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
    								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
    							</div>
	  						</div>
						</div>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Enviar a la central de DomiciliosCO?
						</label>
					</div>
  				</div>
  				<div class="col-md-7">
  					<label for="exampleInputFile">Horarios de Atencion</label>
  					<div class="form-group">
	  					<div class="row">
	  						<div class="col-lg-6">
	    						<div class="row">
	    							<div class="col-lg-6">
	    								<label for="exampleInputPassword1">Lunes abre:</label>
	    							</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
	    						</div>
	  						</div>
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
	    								<label for="exampleInputPassword1">Lunes cierra:</label>
	    							</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
						</div>
					</div>
					<div class="form-group">
	  					<div class="row">
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
		    							<label for="exampleInputPassword1">Martes abre:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
	    						</div>
	  						</div>
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
	    								<label for="exampleInputPassword1">Martes cierra:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
						</div>
					</div>
					<div class="form-group">
	  					<div class="row">
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
		    							<label for="exampleInputPassword1">Miercoles abre:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
	    								<label for="exampleInputPassword1">Miercoles cierra:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
						</div>
					</div>
					<div class="form-group">
	  					<div class="row">
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
		    							<label for="exampleInputPassword1">Jueves abre:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
		    							<label for="exampleInputPassword1">Jueves cierra:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
						</div>
					</div>
					<div class="form-group">
	  					<div class="row">
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
		    							<label for="exampleInputPassword1">Viernes abre:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
		    							<label for="exampleInputPassword1">Viernes cierra:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
						</div>
					</div>
					<div class="form-group">
	  					<div class="row">
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
		    							<label for="exampleInputPassword1">Sabado abre:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
		    							<label for="exampleInputPassword1">Sabado cierra:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
						</div>
					</div>
					<div class="form-group">
	  					<div class="row">
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
		    							<label for="exampleInputPassword1">Domingo abre:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
	  						<div class="col-lg-6">
	  							<div class="row">
	    							<div class="col-lg-6">
		    							<label for="exampleInputPassword1">Domingo cierra:</label>
			    					</div>
			    					<div class="col-lg-6">
			    						<div class="input-group">
          									<div class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span></div>
				    						<select class="form-control">
				    							@for ($i = 0; $i < 24; $i++)
				    								@if($i < 10) <option>0{{ $i }}:00</option>
				    								@else <option>{{ $i }}:00</option> @endif
												@endfor
				    						</select>
    									</div>
			    					</div>
		    					</div>
	  						</div>
						</div>
					</div>
					<button type="submit" class="btn btn-danger">Registrar</button>
  				</div>
			</form>
  		</div>
  		<div class="tab-pane" id="list_restaurante">
  			<h3>Listar Restaurantes</h3>
  			<br>
			<div class="table-responsive">
  				<table class="table table-condensed">
	  				<thead>
	          			<tr>
							<th>Restaurante</th>
							<th>Descripcion</th>
							<th>Tipo de comida</th>
							<th>Logo</th>
							<!-- <th>Pedido minimo</th> -->
							<th>Domicilio</th>
							<th>Atencion</th>
							<th>Estado</th>
							<th>Acciones</th>
	          			</tr>
	        		</thead>
	        		<tbody>
	        			@foreach ($restaurants as $restaurant)
						<tr>
							<td>{{ $restaurant->getName() }}</td>
							<td>{{ $restaurant->getDescription() }}</td>
							<td>{{ $restaurant->getFood() }}</td>
							<td>{{ HTML::image('uploads/restaurants/'.$restaurant->getLogo(), $restaurant->getName(), array('style' => 'width:14em;')) }}</td>
							<!-- <td></td> -->
							<td>{{ $restaurant->getAddress() }}</td>
							<td><button class="btn btn-{{ $restaurant->isOpen() ? 'primary' : 'warning' }}">{{ $restaurant->isOpen() ? 'Abierto' : 'Cerrado' }}</button></td>
							<td><button class="btn btn-{{ $restaurant->getState() ? 'success' : 'warning' }}">{{ $restaurant->getState() ? 'Activo' : 'Inactivo'  }}</button></td>
							<td>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
						@endforeach
        			</tbody>
				</table>
  			</div>
  		</div>
  		<div class="tab-pane" id="tipo_restaurante">
  			<div class="col-md-4">
  				<h3>Registrar Categoria de Restaurante</h3>
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
  				<h3>Listar Categorias de Restaurante</h3>
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
		        			@foreach($restaurantsCategory as $rc)
							<tr>
								<td>{{ $rc->getKey() }}</td>
								<td>{{ $rc->getName() }}</td>
								<td>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr>
							@endforeach
	        			</tbody>
					</table>
  				</div>
  			</div>
  		</div>
	</div>

	<button id="gmModal" style="display:none;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</button>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="myModalLabel">Ubicacion del Restaurante</h4>
      			</div>
      			<div class="modal-body" style="padding:0">
        			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=es&amp;msa=0&amp;msid=114181991181516154927.000455df9d7be30832e20&amp;s=AARTsJpZ2OTmZ3WnrMV2lQLED4wu_PIRfw&amp;ll=40.420913,-3.696256&amp;spn=0.005718,0.00912&amp;z=16&amp;output=embed"></iframe>
      			</div>
    		</div>
  		</div>
	</div>
@stop

@section('scripts')
	<script>
		$('#openMaps').click(function(){
			$('#gmModal').click();
		});
	</script>
@stop