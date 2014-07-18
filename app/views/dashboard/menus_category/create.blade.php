<h3>Registrar Categoria de Menus</h3>
<br>
{{ Form::open(array('onsubmit' => 'return false', 'id' => 'menus_categoryForm')) }}
    <div class="form-group">
        <p>Introduce el nombre de la nueva categoria:</p>
        <input type="text" class="form-control" id="menuCategoryName" placeholder="Nombre de la Categoria">
    </div>
    <button onclick="menuCategoryAdd()" type="button" class="btn btn-danger">Adicionar</button>
{{ Form::close() }}