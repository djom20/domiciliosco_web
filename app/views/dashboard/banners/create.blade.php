<h3>Registrar Banner</h3>
<br>
{{ Form::open(array('onsubmit' => 'return false', 'id' => 'bannersForm', 'files'=>true)) }}
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