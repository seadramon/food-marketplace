@extends('layouts.main')
<style type="text/css">
	body{padding-top: 70px;}
</style>
@section('title', 'Register | Marketplace')

<div class="container">
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="{{ url('/register') }}">
			{{ csrf_field() }}
				<h2>Please Sign Up <small>It's free and always will be.</small></h2>
				<hr class="colorgraph">

				@if(null !== Session::get('message'))
			        <p class="alert alert-danger">{{ Session::get('message') }}</p>
			    @endif

			    @if(null !== Session::get('success'))
			        <p class="alert alert-success">{{ Session::get('success') }}</p>
			    @endif
			    @foreach($errors->register_store->all() as $error)
			        <p class="alert alert-danger">{{$error}}</p>
			    @endforeach

				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Nama" tabindex="3">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="radio" name="jk" value="laki-laki"> Laki-laki<br>
	                        <!-- <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1"> -->
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 text-left">
						<div class="form-group">
							<input type="radio" name="jk" value="perempuan"> Perempuan<br>
							<!-- <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2"> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<input type="checkbox" name="agree" id="agree">&nbsp;&nbsp;
						 Dengan klik daftar, kamu telah menyetujui <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> dari Marketplace.
					</div>
				</div>
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
					<div class="col-xs-12 col-md-6"><a href="{{ url('/signin') }}" class="btn btn-success btn-block btn-lg">Sign In</a></div>
				</div>
			</form>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>