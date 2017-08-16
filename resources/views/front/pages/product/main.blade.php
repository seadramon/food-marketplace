@extends('layouts.main')

@section('title', 'My MarketPlace')

@section('menu')
    @include('components.menu')
@endsection

@section('content')
<div>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			@include('components.sidemenu')
		</div>
		<form method="post" action="{{ URL::route('produk::store') }}">
			<div class="col-md-10">
				  <div class="panel panel-default">
					<!-- <div class="panel-heading">
						Dashboard
					</div> -->
					<h3>Tentukan Jualan</h3>
					<hr>
					<div class="panel-body">
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Nama Produk</label>  
							  	<div class="col-md-10 col-lg-5">
								  	<input id="textinput" name="nama" type="text" placeholder="Nama Produk" class="form-control input-md">
								  	<!-- <span class="help-block">help</span>   -->
								</div>
							</div>
						</div>
					</div>

					<h3>Tuliskan Deskripsi Produk</h3>
					<hr>
					<div class="panel-body">
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Perkiraan Berat</label>  
							  	<div class="col-md-10 col-lg-3">
								  	<input name="berat" type="number" placeholder="berat" class="form-control input-md">
								  	<span class="help-block">Gram</span>  
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Stok</label>  
							  	<div class="col-md-10 col-lg-2">
								  	<input name="stok" type="number" placeholder="Buah" class="form-control input-md">
								  	<br>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Harga Satuan</label>  
							  	<div class="col-md-10 col-lg-4">
								  	<input name="harga_satuan" type="number" placeholder="Harga" class="form-control input-md">
								  	<br>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Gambar</label>  
							  	<div class="col-md-10 col-lg-2">
								  	<input name="gambar" type="file" class="form-control input-md">
								  	<br>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Deskripsi</label>  
							  	<div class="col-md-10 col-lg-5">
								  	<textarea name="deskripsi" class="form-control input-md"></textarea>
								  	<br>
								</div>
							</div>
						</div>
					</div>

					<h3>Tentukan Label Produk</h3>
					<hr>
					<div class="panel-body">
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Label</label>  
							  	<div class="col-md-10 col-lg-5">
								  	<textarea name="label" class="form-control input-md"></textarea>
								  	<br>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Tag</label>  
							  	<div class="col-md-10 col-lg-5">
								  	<textarea name="tag" class="form-control input-md"></textarea>
								  	<br>
								</div>
							</div>
						</div>
					</div>

					<h3>Aturan Pengiriman Penjualan</h3>
					<hr>
					<div class="panel-body">
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Jasa Pengiriman</label>  
							  	<div class="col-md-10 col-lg-5">
								  	<input name="pengiriman" type="text"class="form-control input-md">
								  	<br>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Asuransi</label>  
							  	<!-- <div class="col-md-1 col-lg-5">
								  	<input name="asuransi" type="checkbox" class="form-control input-md" value="1">
								</div> -->
								<div class="checkbox col-md-10 col-lg-5">
								  <label><input type="checkbox" name="asuransi" value="1">Ya, wajib asuransi saat pengiriman</label>
								</div>
								<br>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
							  	<label class="col-md-2 control-label" for="textinput">Gratis Kirim</label>  
							  	<div class="col-md-10 col-lg-5">
								  	<textarea name="gratis_kirim" class="form-control input-md"></textarea>
								</div>
							</div>
						</div>
					</div>

					<hr>
					<div class="panel-body">
						<div class="row">
							<div class="form-group">
							  <div class="col-md-4">
							  	<button id="button1id" name="button1id" class="btn btn-danger">Batal</button>
							  </div>
							  <div class="col-md-8 text-right">
							   	<button id="button2id" name="button2id" class="btn btn-warning">Simpan ke draft</button>
							    <button id="button2id" name="button2id" class="btn btn-primary">Jual</button>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@section('footer')
    @include('components.footer')
@endsection