@extends('layouts.admin')

@section('content')
    <div class="col-md-3">
    	<form action="">
    		<h3>Enviar un Push</h3>
    		<br>
    		<div class="form-group">
				<label class="visible-xs-inline-block" for="exampleInputEmail1">Enviar a:</label>
				<select class="form-control">
					@foreach($users as $user)
						<option value="{{ $user->getKey() }}">{{ $user->getName() }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="visible-xs-inline-block" for="exampleInputEmail1">Mensaje:</label>
				<textarea placeholder="Comentario" name="" id="" cols="30" class="form-control"></textarea>
			</div>
			<button type="submit" class="btn btn-danger">Enviar</button>
    	</form>
    </div>
    <div class="col-md-9">
    	<div class="table-responsive">
    		<h3>Listar Push Enviados</h3>
    		<br>
			<table class="table table-condensed">
  				<thead>
          			<tr>
            			<th>#</th>
						<th>Usuario</th>
						<th>Mensaje</th>
						<th>Fecha</th>
						<th>Hora</th>
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
@stop
