<h3>Registrar Adicionales</h3>
<br>
{{ Form::open(array('onsubmit' => 'return false', 'id' => 'additionalForm')) }}
	<input type="hidden" id="element_id" value="{{ $additional->getKey() }}">
    <div class="form-group">
        <label class="visible-xs-inline-block" for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="additionalName" placeholder="Nombre" value="{{ $additional->getName() }}">
    </div>
    <div class="form-group">
        <label class="visible-xs-inline-block" for="exampleInputPassword1">Descripcion</label>
        <input type="text" class="form-control" id="additionalDescription" placeholder="Descripcion" value="{{ $additional->getDescription() }}">
    </div>
    <div class="form-group">
        <label class="visible-xs-inline-block" for="exampleInputPassword1">Precio</label>
        <div class="input-group">
            <div class="input-group-addon">$</div>
            <input id="additionalPrice" class="form-control" type="text" placeholder="Precio" value="{{ $additional->getPrice() }}">
            <span class="input-group-addon">.00</span>
        </div>
    </div>
    <div class="form-group">
        <label class="visible-xs-inline-block" for="exampleInputPassword1">Restaurante</label>
        <select id="additionalRestaurant" class="form-control">
            @foreach($restaurants as $restaurant)
                @if($restaurant->getKey() == $additional->getRestaurant())
                    <option selected="selected" value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
                @else
                    <option value="{{ $restaurant->getKey() }}">{{ $restaurant->getName() }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="visible-xs-inline-block" for="exampleInputPassword1">Comida</label>
        <select id="additionalFood" class="form-control">
            @foreach($menus as $menu)
                @if($restaurant->getKey() == $additional->getMenu())
                    <option selected="selected" value="{{ $menu->getKey() }}">{{ $menu->getName() }}</option>
                @else
                    <option value="{{ $menu->getKey() }}">{{ $menu->getName() }}</option>
                @endif
            @endforeach
        </select>
    </div>
	<button onclick="additionalUpdate()" type="button" class="btn btn-danger">Actualizar</button>
{{ Form::close() }}