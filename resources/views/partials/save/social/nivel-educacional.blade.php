<div class="form-group">
    <label class='control-label' for='inputText'>Nivel Educacional</label>
    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
        <select style="width:100%;" name='educacion' class='form-control capitalize select-tag' id='inputSelect'>
            @foreach($niveles_educacion as $nivel_educacion)
                <option value="{{$nivel_educacion->id}}">{{$nivel_educacion->nombre}}</option>
            @endforeach
        </select>
    </div>
</div>