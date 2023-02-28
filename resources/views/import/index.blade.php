@extends('layouts.app')

@section('content')

<div class="container">
    <br>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="Nombre">Impor de linea</label>
                <div class="row">
                    <div class="clod-md-4"></div>
                    <div class="clod-md-6">
                        <div class="row">
                            <form action="{{ route('import.linea') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="clo-md-6">
                                    <input type="file" name="documento_line">
                                </div>
                                <div class="clo-md-6">
                                    <button class="btn btn-primary" type="submit">Importar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

<br>
<div class="card">
    <div class="card-body">
        <div class="form-group">
            <label for="Nombre">Import de Categoria</label>
            <div class="row">
                <div class="clod-md-4"></div>
                <div class="clod-md-6">
                    <div class="row">
                        <form action="{{ route('import.categoria') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="clo-md-6">
                                <input type="file" name="documento_cat">
                            </div>
                            <div class="clo-md-6">
                                <button class="btn btn-primary" type="submit">Importar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
</div>
  
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop