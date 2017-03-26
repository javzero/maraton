
@extends('vadmin.layouts.main')

{{-- PAGE TITLE--}}
@section('title', 'Vadmin | Clientes')

{{-- HEAD--}}
@section('header')
	@section('header_title')
		
        Cliente: {{ $cliente->razonsocial }}
    @endsection 
	@section('options')
		<div class="actions">
            <a href="{{ url('vadmin/clientes') }}" class="btn btnSm buttonOther">Volver</a>
		</div>	
	@endsection
@endsection

{{-- STYLES--}}
@section('styles')
	{{-- Include Styles Here --}}
@endsection

{{-- CONTENT --}}
@section('content')
    <div class="container">
		<div class="row big-card">		

			<div class="col-md-6">
				<b>Razón Social:</b>
				@if(is_null($cliente->razonsocial)) @else {{ $cliente->razonsocial }} @endif <br>
				<b>Código de Cliente:</b>
				@if(is_null($cliente->id)) @else {{ $cliente->id }} @endif <br>
				<b>CUIT:</b>            
				@if(is_null($cliente->cuit)) @else {{ $cliente->cuit }} @endif
				<hr class="softhr">
			</div>

			<div class="col-md-6">
 				<b>Dirección Fiscal:</b>   
				@if(is_null($cliente->dirfiscal)) @else {{ $cliente->dirfiscal }} @endif <br>
     			<b>Provincia:</b>      
				@if(is_null($cliente->provincia)) @else {{ $cliente->provincia->name }} @endif <br>
				<b>Localidad:</b>    
				@if(is_null($cliente->localidad)) @else {{ $cliente->localidad->name }} @endif <br>
				<hr class="softhr">
			</div>

			<div class="col-md-6">
				<b>Condiciones de Vta.:</b>
				@if(is_null($cliente->condicventas)) @else {{ $cliente->condicventas->name }} @endif <br>
				<b>Lista de Precios:</b>    
				@if(is_null($cliente->listas)) @else {{ $cliente->listas->name }} @endif <br>
			</div>

			<div class="col-md-6">
				<b>Vendedor:</b>          
				@if(is_null($cliente->user)) @else {{ $cliente->user->name }} @endif <br>

				<b>Zona:</b>                
				@if(is_null($cliente->zona)) @else {{ $cliente->zona->name }} @endif <br>

				<b>Flete:</b>
				@if(is_null($cliente->flete)) @else {{ $cliente->flete->name }} @endif <br>
			</div>
			
			
			
			
          
		</div>
		<button id="BatchDeleteBtn" class="button buttonCancel batchDeleteBtn Hidden"><i class="ion-ios-trash-outline"></i> Eliminar seleccionados</button>
	</div>  
	<div id="Error"></div>	
@endsection

@section('scripts')
	{{-- Include Scripts Here --}}
@endsection