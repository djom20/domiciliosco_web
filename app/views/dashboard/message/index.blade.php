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
    	
    </div>
@stop
