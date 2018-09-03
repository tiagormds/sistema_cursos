<div class="input-field">
    <input type="text" name="titulo" value="@if(isset($registro->titulo)) {{ $registro->nome }} @endif"/>
    <label>Titulo</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="@if(isset($registro->descricao)) {{ $registro->descricao }} @endif"/>
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="@if(isset($registro->valor)) {{ $registro->valor }} @endif"/>
    <label>Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem"/>
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

@if(isset($registro->imagem))
<div class="input-field">
    <img width="150px" src="{{ asset($registro->imagem) }}" alt="">
</div>
@endif

<div class="input-field">
    <p>
        <label>
            <input type="checkbox" @if(isset($registro->publicado) && $registro->publicado=='sim') {{ 'checked' }} @else {{ '' }} @endif value="true"/>
            <span>Publicar?</span>
        </label>
    </p>
    <br /><br />
</div>