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
                {{ Form::open(array('onsubmit' => 'return false', 'id' => 'additionalForm')) }}
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
	    				<select id="additionalRestaurant" class="form-control">
							@foreach($restaurants as $restaurant)
								<option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
							@endforeach
						</select>
  					</div>
                    <div class="form-group">
                        <label class="visible-xs-inline-block" for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" id="additionalName" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label class="visible-xs-inline-block" for="exampleInputPassword1">Descripcion</label>
                        <input type="text" class="form-control" id="additionalDescription" placeholder="Descripcion">
                    </div>
                    <div class="form-group">
                        <label class="visible-xs-inline-block" for="exampleInputPassword1">Precio</label>
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input id="additionalPrice" class="form-control" type="text" placeholder="Precio">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="visible-xs-inline-block" for="exampleInputPassword1">Comida</label>
                        <select id="additionalFood" class="form-control">
                            @foreach($menus as $menu)
                                <option value="{{ $menu->getKey() }}">{{ $menu->getName() }}</option>
                            @endforeach
                        </select>
                    </div>
  					<button id="additionalSubmit" type="button" class="btn btn-danger">Adicionar</button>
				{{ Form::close() }}
  			</div>
  			<div class="col-md-9">
  				<h3>Listar Adicionales</h3>
  				<br>
  				<div class="table-responsive">
	  				<table class="table table-condensed">
		  				<thead>
		          			<tr>
								<th>Nombre</th>
								<th>Descripción</th>
								<th>Precio</th>
								<th>Restaurante</th>
								<th>Comida</th>
								<th>Acciones</th>
		          			</tr>
		        		</thead>
		        		<tbody id="additionalList">
                            @if($additional->count() > 0)
    		        			@foreach ($additional as $add)
    							<tr>
    								<td>{{ $add->getName() }}</td>
    								<td>{{ $add->getDescription() }}</td>
    								<td>{{ $add->getPrice() }}</td>
    								<td>{{ $add->getRestaurant() }}</td>
    								<td>{{ $add->getMenu() }}</td>
    								<td>
    									<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
    									<button class="additionalDelete btn btn-danger" elementid="{{ $add->getKey() }}"><span class="glyphicon glyphicon-trash"></span></button>
    								</td>
    							</tr>
                                @endforeach
                            @else
                                <tr><td colspan="7">No existen registros</td></tr>
    						@endif
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
                    <div class="form-group">
                        <select class="form-control">
                            @foreach ($additional as $add)
                                <option value="{{ $add->getKey() }}">{{ $add->getName() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            @foreach($restaurants as $restaurant)
                                <option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="button" class="btn btn-danger">Adicionar</button>
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

@section('scripts')
	<script id="additional">
        $(function(){
            function deleteAdditional(element_id){
				$.ajax({
                    url: 'additional/destroy',
                    type: 'post',
                    data: { id: element_id },
                    dataType: 'json',
                    error: function(data){ alert("Lo sentimos, no se pudo eliminar."); },
                    success: function(data) {
                        if(data == 1) listAdditional();
                        else alert("Lo sentimos, no se pudo eliminar.");
                    }
                });
            }

            function listAdditional(){
            	$.ajax({
                    url: 'additional/index',
                    type: 'post',
                    dataType: 'html',
                    error: function(){ $("#additionalList").html('<tr><td colspan="7">No existen registros</td></tr>'); },
                    success: function(data) {
                        if(data != '') $("#additionalList").html(data);
                        else $("#additionalList").html('<tr><td colspan="7">No existen registros</td></tr>');
                    }
                });
            }

            $("#additionalSubmit").click(function() {
            	var datas = {
            		name: $('#additionalName').val(),
            		description: $('#additionalDescription').val(),
            		price: $('#additionalPrice').val(),
            		food: $('#additionalFood').val(),
            		restaurant: $('#additionalRestaurant').val()
            	}
                $.ajax({
                    url: 'additional/store',
                    type: 'post',
                    data: datas,
                    dataType: 'json',
                    error: function(data){ alert("Lo sentimos, no se pudo almacenar."); },
                    success: function(data) {
                        if(data == 1) listAdditional();
                        else alert("Lo sentimos, no se pudo almacenar.");
                    }
                });
            });

            $(".additionalDelete").click(function(){
                $.ajax({
                    url: 'additional/destroy',
                    type: 'post',
                    data: { id: $(this).attr('elementid') },
                    dataType: 'json',
                    error: function(data){ alert("Lo sentimos, no se pudo eliminar."); },
                    success: function(data) {
                        if(data == 1) listAdditional();
                        else alert("Lo sentimos, no se pudo eliminar.");
                    }
                });
            });

        });
    </script>
@stop