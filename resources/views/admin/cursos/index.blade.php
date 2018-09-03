@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')

    <div class="container">
        <center>
            <h3>Lista de Cursos</h3>
        </center>

        <div class="row">
            <table class="">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td><img width="120px" src="{{ asset($registro->imagem) }}" alt="{{ $registro->titulo }}"></td>
                        <td>{{ $registro->publicado }}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('admin.editar'.$registro->id) }}">Editar</a>
                            <a class="btn btn-danger" href="{{ route('admin.deletar'.$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.adicionar') }}">Adicionar</a>
        </div>
    </div>

@endsection