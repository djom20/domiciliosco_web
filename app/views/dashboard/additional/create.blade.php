<h3>Registrar Adicionales</h3>
<br>
{{ Form::open(array('onsubmit' => 'return false', 'id' => 'additionalForm')) }}
	<input type="hidden" name="element_id">
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
	<button onclick="additionalAdd()" type="button" class="btn btn-danger">Adicionar</button>
{{ Form::close() }}