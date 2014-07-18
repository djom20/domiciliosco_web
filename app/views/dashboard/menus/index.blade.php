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
						<select class="restaurantList form-control">
							@if($restaurants->count() > 0)
								@foreach($restaurants as $restaurant)
									<option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
								@endforeach
							@else
								<option value="0">No existen registros</option>
							@endif
						</select>
					</div>
					<div class="form-group">
						<label class="visible-xs-inline-block" for="exampleInputPassword1">Categoria</label>
						<select class="menuCategoryList form-control">
							@if($menu_category->count() > 0)
								@foreach($menu_category as $mc)
									<option value="{{ $mc->getKey() }}">{{ $mc->getName() }}</option>
								@endforeach
							@else
								<option value="0">No existen registros</option>
							@endif
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
				<div class="btn-group btn-group-justified">
					<div class="btn-group">
						<select class="restaurantList form-control select-group-rigth">
							@if($restaurants->count() > 0)
								@foreach($restaurants as $restaurant)
									<option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
								@endforeach
							@else
								<option value="0">No existen registros</option>
							@endif
						</select>
					</div>
					<div class="btn-group">
						<select class="menuCategoryList form-control select-group-left">
							@if($menu_category->count() > 0)
								@foreach($menu_category as $mc)
									<option value="{{ $mc->getKey() }}">{{ $mc->getName() }}</option>
								@endforeach
							@else
								<option value="0">No existen registros</option>
							@endif
						</select>
					</div>
				</div>
				<br>
				<div class="table-responsive">
					<table class="table table-condensed">
						<thead>
							<tr>
								<th>#</th>
								<th>Restaurante</th>
								<th>Categoria</th>
								<th>Nombre</th>
								<th>Descripcion</th>
								<th>Precio</th>
								<th>Adicionales</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@if($menus->count() > 0)
								@foreach ($menus as $menu)
									<tr>
										<td>{{ $menu->getKey() }}</td>
										<td>{{ Restaurant::find($menu->getRestaurant())->name }}</td>
										<td>{{ MenuCategory::find($menu->getCategory())->name }}</td>
										<td>{{ $menu->getName() }}</td>
										<td>{{ $menu->getDescription() }}</td>
										<td>{{ $menu->getPrice() }}</td>
										<td>{{ $menu->getAditional() }}</td>
										<td>
											<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
											@if($menu->getState() == 1)
												<button onclick="additionalChangeState({{ $menu->getKey() }}, 0);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button>
											@else
												<button onclick="additionalChangeState({{ $menu->getKey() }}, 1);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span></button>
											@endif
											<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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
		<div class="tab-pane" id="profile">
			<div id="menus_categoryEdit" class="col-md-4">
				<h3>Registrar Categoria de Menus</h3>
				<br>
				{{ Form::open(array('onsubmit' => 'return false', 'id' => 'menus_categoryForm')) }}
					<div class="form-group">
						<p>Introduce el nombre de la nueva categoria:</p>
						<input type="text" class="form-control" id="menuCategoryName" placeholder="Nombre de la Categoria">
					</div>
					<button onclick="menuCategoryAdd()" type="button" class="btn btn-danger">Adicionar</button>
				{{ Form::close() }}
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
						<tbody id="menuCategoryList">
							 @if($menu_category->count() > 0)
								 @foreach ($menu_category as $mc)
									<tr>
										<td>{{ $mc->getKey() }}</td>
										<td>{{ $mc->getName() }}</td>
										<td>
											<button onclick="menuCategoryEdit({{ $mc->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
											@if($mc->getState() == 1)
												<button onclick="menuCategoryChangeState({{ $mc->getKey() }}, 0);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button>
											@else
												<button onclick="menuCategoryChangeState({{ $mc->getKey() }}, 1);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span></button>
											@endif
											<button onclick="menuCategoryDestroy({{ $mc->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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
	</div>
@stop

@section('scripts')
	<script id="Menus">

	</script>
	<script id="MenusCategory">
		function restaurantListCombo(){
			$.ajax({
				url: 'restaurant/index',
				type: 'post',
				data: { action: 'combo' },
				dataType: 'html',
				error: function(){ $(".restaurantList").html('<option value="0">No existen registros</option>'); },
				success: function(data) {
					if(data != null) $(".restaurantList").html(data);
					else $(".restaurantList").html('<option value="0">No existen registros</option>');
				}
			});
		}

		function menuCategoryListCombo(){
			$.ajax({
				url: 'menus_category/index',
				type: 'post',
				data: { action: 'combo' },
				dataType: 'html',
				error: function(){ $(".menuCategoryList").html('<option value="0">No existen registros</option>'); },
				success: function(data) {
					if(data != null) $(".menuCategoryList").html(data);
					else $(".menuCategoryList").html('<option value="0">No existen registros</option>');
				}
			});
		}

		function menuCategoryList(){
			$.ajax({
				url: 'menus_category/index',
				type: 'post',
				data: { action: 'list' },
				dataType: 'html',
				error: function(){ $("#menuCategoryList").html('<tr><td colspan="7">No existen registros</td></tr>'); },
				success: function(data) {
					if(data != null) $("#menuCategoryList").html(data);
					else $("#menuCategoryList").html('<tr><td colspan="7">No existen registros</td></tr>');
				}
			});
		}

		function menuCategoryChangeState(element_id, element_state){
			$.ajax({
				url: 'menus_category/update',
				type: 'post',
				data: { id: element_id, state: element_state, action: 'state' },
				dataType: 'json',
				error: function(data){ alert("Lo sentimos, no se pudo actualizar."); },
				success: function(data) {
					if(data == 1) menuCategoryList();
					else alert("Lo sentimos, no se pudo actualizar.");
				}
			});
		}

		function menuCategoryDestroy(element_id){
			$.ajax({
				url: 'menus_category/destroy',
				type: 'post',
				data: { id: element_id },
				dataType: 'json',
				error: function(data){ alert("Lo sentimos, no se pudo eliminar."); },
				success: function(data) {
					if(data == 1) menuCategoryList();
					else alert("Lo sentimos, no se pudo eliminar.");
				}
			});
		}

		function menuCategoryEdit(element_id){
			var datas = { id: element_id }
			$.ajax({
				url: 'menus_category/edit',
				type: 'post',
				data: datas,
				dataType: 'html',
				error: function(data){ alert("Lo sentimos, no se pudo encontrar el elemento."); },
				success: function(data) {
					if(data != null){ $("#menus_categoryEdit").html(data); $('#menuCategoryName').focus(); }
					else alert("Lo sentimos, no se pudo encontrar el elemento.");
				}
			});
		}

		function menuCategoryAdd(){
			var datas = { name: $('#menuCategoryName').val() }
			$.ajax({
				url: 'menus_category/store',
				type: 'post',
				data: datas,
				dataType: 'json',
				error: function(data){ alert("Lo sentimos, no se pudo almacenar."); },
				success: function(data) {
					if(data == 1) menuCategoryList();
					else alert("Lo sentimos, no se pudo almacenar.");
				}
			});
			$('#menuCategoryName').val('')
		}

		function menuCategoryUpdate(){
            var datas = {
                name: $('#menuCategoryName').val(),
                id: $('#element_id').val(),
                action: 'element'
            }

            $.ajax({
                url: 'menus_category/update',
                type: 'post',
                data: datas,
                dataType: 'html',
                error: function(data){ alert("Lo sentimos, no se pudo actualizar."); },
                success: function(data) {
                    if(data != null){
                        $("#menus_categoryEdit").html(data);
                        menuCategoryList();
                    }else alert("Lo sentimos, no se pudo actualizar.");
                }
            });
        }

		setInterval(function(){ menuCategoryList(); }, 3000);
		setInterval(function(){ menuCategoryListCombo(); }, 3000);
	</script>
@stop