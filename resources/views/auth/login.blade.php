@extends('layouts.app')

@section('content')
<!-- Login -->
	<div id="login-form" class="content-section-a">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
					<h2>Login</h2>
				</div>

				<form role="form" action="{{ url('/login') }}" method="post" >
					{{ csrf_field() }}
					<div class="col-md-6">
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="InputName">E-Mail Address</label>
							<div class="input-group">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>

									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password">Password</label>
							<div class="input-group">
								<input id="password" type="password" class="form-control" name="password" required>
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>

								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
								<input type="submit" name="submit" id="submit" value="Login" class="btn wow tada btn-embossed btn-primary pull-right">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection