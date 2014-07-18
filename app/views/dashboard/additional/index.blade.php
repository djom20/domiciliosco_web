@extends('layouts.admin')

@section('content')
	<div id="additionalEdit" class="col-md-3">
        <h3>Registrar Adicionales</h3>
        <br>
        {{ Form::open(array('onsubmit' => 'return false', 'id' => 'additionalForm')) }}
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
                <label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
                <select id="additionalRestaurant" class="form-control">
                    @foreach($restaurants as $restaurant)
                        <option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="visible-xs-inline-block" for="exampleInputPassword1">Comida</label>
                <select id="additionalFood" class="form-control">
                    @foreach($menus as $menu)
                        <option value="{{ $menu->getKey() }}">{{ $menu->getName() }}</option>
                    @endforeach
                </select>
            </div>
			<button onclick="additionalAdd()" type="button" class="btn btn-danger">Adicionar</button>
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
                                <td>{{ Restaurant::find($add->getRestaurant())->name }}</td>
                                <td>{{ Menu::find($add->getMenu())->name }}</td>
                                <td>
                                    <button onclick="additionalEdit({{ $add->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
                                    @if($add->getState() == 1)
                                        <button onclick="additionalChangeState({{ $add->getKey() }}, 0);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button>
                                    @else
                                        <button onclick="additionalChangeState({{ $add->getKey() }}, 1);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span></button>
                                    @endif
                                    <button onclick="additionalDestroy({{ $add->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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
@stop

@section('scripts')
	<script id="additional">
        function additionalChangeState(element_id, element_state){
            $.ajax({
                url: 'additional/update',
                type: 'post',
                data: { id: element_id, state: element_state, action: 'state' },
                dataType: 'json',
                error: function(data){ alert("Lo sentimos, no se pudo actualizar."); },
                success: function(data) {
                    if(data == 1) additionalList();
                    else alert("Lo sentimos, no se pudo actualizar.");
                }
            });
        }

        function additionalDestroy(element_id){
			$.ajax({
                url: 'additional/destroy',
                type: 'post',
                data: { id: element_id },
                dataType: 'json',
                error: function(data){ alert("Lo sentimos, no se pudo eliminar."); },
                success: function(data) {
                    if(data == 1) additionalList();
                    else alert("Lo sentimos, no se pudo eliminar.");
                }
            });
        }

        function additionalList(){
        	$.ajax({
                url: 'additional/index',
                type: 'post',
                dataType: 'html',
                error: function(){ $("#additionalList").html('<tr><td colspan="7">No existen registros</td></tr>'); },
                success: function(data) {
                    if(data != null) $("#additionalList").html(data);
                    else $("#additionalList").html('<tr><td colspan="7">No existen registros</td></tr>');
                }
            });
        }

        function additionalAdd(){
            var datas = {
                name: $('#additionalName').val(),
                description: $('#additionalDescription').val(),
                price: $('#additionalPrice').val(),
                food: $('#additionalFood').val(),
                restaurant: $('#additionalRestaurant').val(),
                element_id: $('#element_id').val()
            }

            $.ajax({
                url: 'additional/store',
                type: 'post',
                data: datas,
                dataType: 'html',
                error: function(data){ alert("Lo sentimos, no se pudo almacenar."); },
                success: function(data) {
                    if(data != null){
                        $("#additionalEdit").html(data);
                        additionalList();
                    }else alert("Lo sentimos, no se pudo almacenar.");
                }
            });
        }

        function additionalEdit(element_id){
            var datas = { id: element_id }
            $.ajax({
                url: 'additional/edit',
                type: 'post',
                data: datas,
                dataType: 'html',
                error: function(data){ alert("Lo sentimos, no se pudo encontrar el elemento."); },
                success: function(data) {
                    if(data != null) $("#additionalEdit").html(data); 
                    else alert("Lo sentimos, no se pudo encontrar el elemento.");
                }
            });
        }

        function additionalUpdate(){
            var datas = {
                name: $('#additionalName').val(),
                description: $('#additionalDescription').val(),
                price: $('#additionalPrice').val(),
                food: $('#additionalFood').val(),
                restaurant: $('#additionalRestaurant').val(),
                id: $('#element_id').val(),
                action: 'element'
            }

            $.ajax({
                url: 'additional/update',
                type: 'post',
                data: datas,
                dataType: 'html',
                error: function(data){ alert("Lo sentimos, no se pudo actualizar."); },
                success: function(data) {
                    if(data != null){
                        $("#additionalEdit").html(data);
                        additionalList();
                    }else alert("Lo sentimos, no se pudo actualizar.");
                }
            });
        }

        setInterval(function(){ additionalList(); }, 3000);
    </script>
@stop