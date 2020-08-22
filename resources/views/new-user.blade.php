<!DOCTYPE html>
<html>
<head>
	<title>New User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="{{route('home')}}">Home</a>
				<a class="nav-item nav-link" href="{{route('addNewUser')}}">Add user</a>
			</div>
		</div>
	</nav>
	<div class="container"  style="margin-top: 50px">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<form id="form-1">
							@csrf
							<div class="d-flex input-feilds mb-2" id="1" >
								<div class="form-group w-100 mb-0 mr-1">
									<label for="userName">First Name <span style="color: #bf2a2a">*</span></label>
									<input type="text" name="first_name" class="form-control first-name" id="userName"   placeholder="Enter First Name">
								</div>
								<div class="form-group w-100 mb-0 mr-1">
									<label for="status">Last Name <span style="color: #bf2a2a">*</span></label>
									<input type="text" name="last_name" class="form-control last-name" id="status"  placeholder="Enter Last Name">
								</div>
								<a href="javascript:void (0)"class="btn btn-primary" style="height: 36px; align-self: flex-end;">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src=
	"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="{{ asset('js/user.js')}}"></script>
</body>
</html>