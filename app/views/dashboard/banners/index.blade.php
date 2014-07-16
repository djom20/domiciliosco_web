@extends('layouts.admin')

@section('content')
<!--<ul class="nav nav-tabs" role="tablist">
  		<li class="active"><a href="#home" role="tab" data-toggle="tab">Banners</a></li>
  		<li><a href="#profile" role="tab" data-toggle="tab">Listar Banner</a></li>
	</ul> -->

<!-- 	<div class="tab-content">
  		<div class="tab-pane active" id="home"> -->
  			<div class="col-md-4">
	  			<h3>Registrar Banner</h3>
	  			<br>
  				<form role="form">
  					<div class="form-group">
    					<label class="visible-xs-inline-block" for="exampleInputFile">File input</label>
    					<input type="file" id="exampleInputFile">
  					</div>
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Enlace</label>
        				<div class="input-group">
          					<div class="input-group-addon">http://</div>
      						<input class="form-control" type="text" placeholder="Enlace">
    					</div>
  					</div>
  					<div class="form-group">
	    				<label class="visible-xs-inline-block" for="exampleInputPassword1">Comentario</label>
	    				<textarea placeholder="Comentario" name="" id="" cols="30" class="form-control"></textarea>
  					</div>
  					<button type="submit" class="btn btn-danger">Adicionar</button>
				</form>
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
		        		<tbody>
		        			@foreach ($banners as $banner)
							<tr>
								<td>{{ $banner->getKey() }}</td>
								<td>{{ HTML::image('uploads/banners/'.$banner->getImage(), 'Banner '.$banner->getKey(), array('style' => 'width:14em;')) }}</td>
								<td><a href="{{ $banner->getUrl() }}">{{ $banner->getUrl() }}</a></td>
								<td>{{ $banner->getDescription() }}</td>
								<td>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr>
    						@endforeach
							<!-- <tr>
								<td>2</td>
								<td><img src="http://domiciliosco.info/domiciliosco/banners/539a3cef16f46/BANNER%20DOMICILIOS.jpg" style="width:14em;"></td>
								<td><a href="">Link</a></td>
								<td>Table cell</td>
								<td>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td><img src="http://domiciliosco.info/domiciliosco/banners/539a3cef16f46/BANNER%20DOMICILIOS.jpg" style="width:14em;"></td>
								<td><a href="">Link</a></td>
								<td>Table cell</td>
								<td>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr> -->
	        			</tbody>
					</table>
	  			</div>
  			<!-- </div>
  		</div> -->
  		<!-- <div class="tab-pane" id="profile"></div> -->
	<!-- </div> -->
@stop