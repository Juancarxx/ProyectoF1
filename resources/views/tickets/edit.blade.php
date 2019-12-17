@extends('master')
@section('title', 'Contact')

@section('content')
	<div class="container col-md-8 col-md-offset-2">   
		<div class="well well bs-component">
			<form class="from-horizontal" method="post">
				@foreach ($errors->all() as $error)
				<p class="alert alert-danger">{{ $error }}</p>
				@endforeach

				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif	

				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<fieldset>
					<legend>Editar usuario</legend>
					<div class="form-group"> 
						<label for="title" class="col-lg-2 control-label">Usuario</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" name="title"
							value="{!! $ticket->title !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="quote_number" class="col-lg-2 control-label">Nro de cita</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="quote_number" name="quote_number"
							value="{!! $ticket->quote_number !!}">
						</div>
						</div>
						<div class="form-group">
						<label for="date_quoted" class="col-lg-2 control-label">Fecha de cita</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="date_quoted" name="date_quoted"
							value="{!! $ticket->date_quoted !!}">
						</div>
						</div>
						<div class="form-group">
						<label for="firt_name" class="col-lg-2 control-label">Primer Nombre</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="firt_name" name="firt_name"
							value="{!! $ticket->firt_name !!}">
						</div>
						</div>
						<div class="form-group">
						<label for="last_name" class="col-lg-2 control-label">Segundo Nombre</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="last_name" name="last_name"
							value="{!! $ticket->last_name !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="phone" class="col-lg-2 control-label">Telefono</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="phone" name="phone"
							value="{!! $ticket->phone !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="email" class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="email" name="email"
							value="{!! $ticket->email !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="tariff" class="col-lg-2 control-label">Tarifa</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="tariff" name="tariff"
							value="{!! $ticket->tariff !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="deposit" class="col-lg-2 control-label">Deposito</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="deposit" name="deposit"
							value="{!! $ticket->deposit !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="estimated_ship_date" class="col-lg-2 control-label">Fecha estimada de envio</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="estimated_ship_date" name="estimated_ship_date"
							value="{!! $ticket->estimated_ship_date !!}">
						</div>
						</div>
						<div class="form-group">
						<label for="year" class="col-lg-2 control-label">Año</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="year" name="year"
							value="{!! $ticket->year !!}">
						</div>	
						</div>
						<div class="form-group"> 
						<label for="make" class="col-lg-2 control-label">Marca</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="make" name="make"
							value="{!! $ticket->make !!}">
						</div>
						</div>
						
						<div class="form-group"> 
						<label for="model" class="col-lg-2 control-label">Modelo</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="model" name="model"
							value="{!! $ticket->model !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="vehicle_type" class="col-lg-2 control-label">Tipo de vehiculo</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="vehicle_type" name="vehicle_type"
							value="{!! $ticket->vehicle_type !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="ship_via" class="col-lg-2 control-label">Ship Via</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="ship_via" name="ship_via"
							value="{!! $ticket->ship_via !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="vehicle_runs" class="col-lg-2 control-label">Vehicle Runs</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="vehicle_runs" name="vehicle_runs"
							value="{!! $ticket->vehicle_runs !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="pickup_city" class="col-lg-2 control-label">Pickup City</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="pickup_city" name="pickup_city"
							value="{!! $ticket->pickup_city !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="pickup_state" class="col-lg-2 control-label">Pickup State</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="pickup_state" name="pickup_state"
							value="{!! $ticket->pickup_state !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="pickup_zip" class="col-lg-2 control-label">Pickup Zip</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="pickup_zip" name="pickup_zip"
							value="{!! $ticket->pickup_zip !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="dropoff_city" class="col-lg-2 control-label">Dropoff City</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="dropoff_city" name="dropoff_city"
							value="{!! $ticket->dropoff_city !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="dropoff_state" class="col-lg-2 control-label">Dropoff State</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="dropoff_state" name="dropoff_state"
							value="{!! $ticket->dropoff_state !!}">
						</div>
						</div>
						<div class="form-group"> 
						<label for="dropoff_zip" class="col-lg-2 control-label">Dropoff Zip</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="dropoff_zip" name="dropoff_zip"
							value="{!! $ticket->dropoff_zip !!}">
						</div>
						</div>
						
						
						
						
					<div class="form-group"> 
						<label for="content" class="col-lg-2 control-label">Contenido</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="3" id="content" name="content">{!! $ticket->content !!}</textarea>
						</div>	 
					</div>

					<div class="form-group"> 
						<label>
							<input type="checkbox" name="status" {!! $ticket->status?"":"checked" !!}>
							¿Cerrar este ticket?
						</label>
					</div>

					<div class="form-group"> 
						<div class="col-lg-10 col-md-offset-2">
							<button class="btn btn-default">Cancelar</button>
							<button type="submit" class="btn btn-primary">Actualizar</button>
						</div>	
					</div>
				</fieldset>
			</form>
		</div>
	</div>
@endsection