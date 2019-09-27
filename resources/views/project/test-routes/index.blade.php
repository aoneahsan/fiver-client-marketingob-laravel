<h3>Login</h3>
<form method="post" action="{{ url('test_login/') }}" class="custom_div_1" enctype="multipart/form-data">
	@csrf
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>email</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="email" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>password</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="password" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row from-group">
		<div class="col-xs-12">
			<button type="submit" class="btn btn-success">Login</button>
		</div>
	</div>
</form>
<hr>
<h3>Register</h3>
<form method="post" action="{{ url('test_register/') }}" class="custom_div_1" enctype="multipart/form-data">
	@csrf
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>name</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="name" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>role</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<select name="role" required="required" class="form-control" style="width: 100%;">
					<option value="rider">Rider</option>
					<option value="customer">customer</option>
					<option value="service_provider">service_provider</option>
				</select>
			</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>email</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="email" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>password</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="password" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row from-group">
		<div class="col-xs-12">
			<button type="submit" class="btn btn-info">Register</button>
		</div>
	</div>
</form>
<hr>
<h3>Logout</h3>
<form method="post" action="{{ url('test_logout/') }}" class="custom_div_1" enctype="multipart/form-data">
	@csrf
	<div class="row form-group">
		<div class="col-xs-12">
			<div class="col-xs-1 d-inline-block">
				<strong>user</strong>
			</div>
			<div class="col-xs-11 d-inline-block">
				<select name="user_api_token" required="required" class="form-control" style="width: 100%;">
					@foreach($users as $user)					
					<option value="{{ $user->api_token }}">{{ $user->id }} - {{ $user->name }}</option>
					@endforeach
				</select>
			</div>
		</div>
	</div>
	<div class="row from-group">
		<div class="col-xs-12">
			<button type="submit" class="btn btn-danger">Logout</button>
		</div>
	</div>
</form>
<hr>
<h3>Get Products</h3>
<form method="post" action="{{ url('api/products/') }}" class="custom_div_1" enctype="multipart/form-data">
	@csrf
	<button type="submit" class="btn btn-danger">products</button>
</form>
<hr>
<h3>Get Products Categories</h3>
<form method="post" action="{{ url('api/product-categories/') }}" class="custom_div_1" enctype="multipart/form-data">
	@csrf
	<button type="submit" class="btn btn-danger">product Categories</button>
</form>
<hr>
<h3>Add Service</h3>
<form method="post" action="{{ url('api/addService') }}" class="custom_div_1" enctype="multipart/form-data">
	@csrf
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>title</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="title" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>description</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="description" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>image</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="file" name="image" required="required">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>time</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="time" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>price</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="price" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>extra_field</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="extra_field" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-xs-12">
			<div class="col-xs-1 d-inline-block">
				<strong>user</strong>
			</div>
			<div class="col-xs-11 d-inline-block">
				<select name="user_id" required="required" class="form-control" style="width: 100%;">
					@foreach($users as $user)					
					<option value="{{ $user->id }}">{{ $user->id }} - {{ $user->name }}</option>
					@endforeach
				</select>
			</div>
		</div>
	</div>
	<div class="row from-group">
		<div class="col-xs-12">
			<button type="submit" class="btn btn-success">Add Service</button>
		</div>
	</div>
</form>
<hr>
<h3>Place Order</h3>
<form method="post" action="{{ url('api/placeOrder') }}" class="custom_div_1" enctype="multipart/form-data">
	@csrf
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>customer_id</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="customer_id" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>product_id</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="product_id" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>service_id</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="service_id" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>deal_id</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="deal_id" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row from-group">
		<div class="col-xs-12">
			<button type="submit" class="btn btn-success">Place Order</button>
		</div>
	</div>
</form>