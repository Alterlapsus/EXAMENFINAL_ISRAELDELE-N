@extends('layouts.plantilla')

@section('content')
<br>



<div class="container title">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center title">{{ __('REGISTRO DE MEDICAMENTO') }}</div>

                <div class="card-body background">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('REGISTRO DE NUEVO MEDICAMENTO') }}
                    {{ session('status') }}

                    <form class="form" action="{{route('guardarheroe')}}" method="POST">
                        @csrf
                        <label class="title">
                            Nombre Medicamento: <br>
                            <input name="NombreMedicamento" type="text">
                        </label>
                        <label class="title">
                            Precio: <br>
                            <input name="Precio" type="text">
                        </label>
            
                        <button class="btn btn-primary boton" type="submit">Guardar</button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection