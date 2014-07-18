@extends('layouts.admin')

@section('content')
	<div id="bannersEdit" class="col-md-4">
		<h3>Registrar Banner</h3>
		<br>
		{{ Form::open(array('onsubmit' => 'return false', 'id' => 'bannersForm')) }}
			<div class="form-group">
				<label class="visible-xs-inline-block" for="exampleInputFile">File input</label>
				<input type="file" id="bannerImage">
			</div>
			<div class="form-group">
				<label class="visible-xs-inline-block" for="exampleInputPassword1">Enlace</label>
				<div class="input-group">
					<div class="input-group-addon">http://</div>
					<input id="bannerLink" class="form-control" type="text" placeholder="Enlace">
				</div>
			</div>
			<div class="form-group">
				<label class="visible-xs-inline-block" for="exampleInputPassword1">Comentario</label>
				<textarea placeholder="Comentario" id="bannerDescription" cols="30" class="form-control"></textarea>
			</div>
			<button onclick="bannerAdd();" class="btn btn-danger">Adicionar</button>
		{{ Form::close() }}
	</div>
	<div class="col-md-8">
		<h3>Listar Banners</h3>
		<br>
		<div class="table-responsive">
			<table class="table table-condensed">
				<thead>
      			<tr>
        			<th>#</th>
					<th>Imagen</th>
					<th>Link</th>
					<th>Comentario</th>
					<th>Acciones</th>
      			</tr>
    		</thead>
    		<tbody id="bannersList">
    			@if($banners->count() > 0)
	    			@foreach ($banners as $banner)
						<tr>
							<td>{{ $banner->getKey() }}</td>
							<td>{{ HTML::image('uploads/banners/2'.$banner->getImage(), 'Banner '.$banner->getKey(), array('style' => 'width:14em;')) }}</td>
							<td><a href="{{ $banner->getLink() }}">{{ $banner->getLink() }}</a></td>
							<td>{{ $banner->getDescription() }}</td>
							<td>
								<button onclick="bannerEdit({{ $banner->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
								@if($banner->getState() == 1)
                                    <button onclick="bannerChangeState({{ $banner->getKey() }}, 0);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button>
                                @else
                                    <button onclick="bannerChangeState({{ $banner->getKey() }}, 1);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span></button>
                                @endif
								<button onclick="bannerDelete({{ $banner->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
					@endforeach
				@else
	                <tr><td colspan="7">No existen registros</td></tr>
				@endif
			</tbody>
		</table>
	</div>
@stop

@section('scripts')
    <script id="banners">
        function bannerChangeState(element_id, element_state){
            $.ajax({
                url: 'banners/update',
                type: 'post',
                data: { id: element_id, state: element_state, action: 'state' },
                dataType: 'json',
                error: function(data){ alert("Lo sentimos, no se pudo actualizar."); },
                success: function(data) {
                    if(data == 1) bannerList();
                    else alert("Lo sentimos, no se pudo actualizar.");
                }
            });
        }

        function bannerEdit(element_id){
            var datas = { id: element_id }
            $.ajax({
                url: 'banners/edit',
                type: 'post',
                data: datas,
                dataType: 'html',
                error: function(data){ alert("Lo sentimos, no se pudo encontrar el elemento."); },
                success: function(data) {
                    if(data != null) $("#bannersEdit").html(data);
                    else alert("Lo sentimos, no se pudo encontrar el elemento.");
                }
            });
        }

        function bannerDelete(element_id){
			$.ajax({
                url: 'banners/destroy',
                type: 'post',
                data: { id: element_id },
                dataType: 'json',
                error: function(data){ alert("Lo sentimos, no se pudo eliminar."); },
                success: function(data) {
                    if(data == 1) bannerList();
                    else alert("Lo sentimos, no se pudo eliminar.");
                }
            });
        }

        function bannerList(){
        	$.ajax({
                url: 'banners/index',
                type: 'post',
                dataType: 'html',
                error: function(){ $("#bannersList").html('<tr><td colspan="7">No existen registros</td></tr>'); },
                success: function(data) {
                    if(data != '') $("#bannersList").html(data);
                    else $("#bannersList").html('<tr><td colspan="7">No existen registros</td></tr>');
                }
            });
        }

        function bannerUpdate(){
            var datas = {
                image: $('#bannerImage').val(),
                link: $('#bannerLink').val(),
                description: $('#bannerDescription').val(),
                id: $('#element_id').val(),
                action: 'element'
            }

            $.ajax({
                url: 'banners/update',
                type: 'post',
                data: datas,
                dataType: 'html',
                error: function(data){ alert("Lo sentimos, no se pudo actualizar."); },
                success: function(data) {
                    if(data != null){
                        $("#bannersEdit").html(data);
                        bannerList();
                    }
                    else alert("Lo sentimos, no se pudo actualizar.");
                }
            });
        }

        function bannerAdd(){
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
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                mimeType:"multipart/form-data",
                data: datas,
                dataType: 'json',
                error: function(data){ alert("Lo sentimos, no se pudo almacenar."); },
                success: function(data) {
                    if(data == 1) additionalList();
                    else alert("Lo sentimos, no se pudo almacenar.");
                }
            });
        }

        setInterval(function(){ bannerList(); }, 3000);
    </script>
@stop