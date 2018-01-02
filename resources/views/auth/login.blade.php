@extends('layouts.auth')
@section('content')	
<div class="container-fluid">
	<div class="row">
		<div class="ldb-login-container">
			<div class="ldb-login-subcontainer">
				<div class="login-box">
					<div class="login-logo">
						<img src="/img/logo.png">
					</div>
					@if ($message = Session::get('success'))
						<div class="alert alert-success alert-block text-center alert-login">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							@if(is_array($message)) @foreach ($message as $m) {{ $m }} @endforeach
							@else {{ $message }} @endif
						</div>
					@endif 
					@if ($message = Session::get('error'))
						<div class="alert alert-danger alert-block text-center alert-login">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							@if(is_array($message)) @foreach ($message as $m) {{ $m }} @endforeach
							@else {{ $message }} @endif
						</div>
					@endif
					<h1>Lender Dashboard Login</h1>
					<div class="login-form">
						{!! Form::open(['route' => 'login']) !!}
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
										<img src="/img/Username.png">
									</span>
									{!! Form::text('email_id', null, ['class' => 'form-control login-form-top', 'placeholder' => 'Enter Email']) !!}
								</div>
								@if ($errors->has('email_id'))
			                        <span class="help-block error-block">
			                            <strong>{{{ $errors->first('email_id') }}}</strong>
			                        </span>
		                    	@endif
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
										<img src="/img/Password.png" style="height:30px;">
									</span>
									{!! Form::password('password', ['class' => 'form-control login-form-top', 'placeholder' => 'Enter Password']) !!}
								</div>
								@if ($errors->has('password'))
			                        <span class="help-block error-block">
			                            <strong>{{{ $errors->first('password') }}}</strong>
			                        </span>
			                    @endif
							</div>
							{!! Form::submit('LOGIN', ['class' => 'btn btn-primary btn-lg btn-block login-btn']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection