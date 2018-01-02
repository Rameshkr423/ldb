<div class="col-sm-12">
<div class="row">
	{!! Form::open(['url' => route(Route::currentRouteName()), 'method' => 'get']) !!}
		<div class="col-md-4">
			{!! Form::text('search',null, ['class' => 'form-control search-box-radius', 'placeholder' => 'Search by Customer Name / Reference ID']) !!}
			{{ Form::button('<i class="icon-search"></i>', ['type' => 'submit', 'class' => 'btn btn-default search-button'] )  }}
		</div>
	{!! Form::close() !!}
</div>
</div>