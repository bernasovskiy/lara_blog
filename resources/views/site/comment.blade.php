<div id="comment" class="content-section-a">
	<div class="container">
		<div class="row">

		<div class="col-md-6 col-md-offset-3 text-center wrap_title">
			<h3>Add comment</h3>
		</div>

		@if(Session::has('message'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{Session::get('message')}} <!-- здесь будем выводить сообщения об успешности добавления комментария -->
			</div>
		@endif

		<form role="form" action="" method="post" >
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<div class="form-group">
					<label for="InputName">Your Name</label>
					<div class="input-group">
						<input type="text" class="form-control" name="author" id="author" placeholder="Enter Name" required>
						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
					</div>
				</div>

				<div class="form-group">
					<label for="InputEmail">Your Email</label>
					<div class="input-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required  >
						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
					</div>
				</div>

				<div class="form-group">
					<label for="InputMessage">Message</label>
					<div class="input-group">
						<textarea name="content" id="content" class="form-control" rows="5" required></textarea>
						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
					</div>
				</div>

				<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				<input type="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
			</div>
		</form>
	</div>
</div>