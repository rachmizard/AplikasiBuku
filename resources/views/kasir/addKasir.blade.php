@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Akun kasir</div>

                <div class="panel-body">
					<form class="form-horizontal" action="{{ route('storeKasir.kasir')}}" method="post">
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Account kasir</label>
					  <div class="col-md-9">
					  	<input class="form-control" type="text" name="nama" placeholder="Nama kasir">
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Kasir</label>
					  <div class="col-md-9">
						<input class="form-control" type="text" name="alamat" placeholder="Alamat">
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Nomor Telepon</label>
					  <div class="col-md-9">
					  	<input class="form-control" type="text" name="telepon" placeholder="No-Telp">
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Status</label>
					  <div class="col-md-9">
						<select name="status" id="">
							<option value="" selected>--Pilih Status--</option>
							<option value="pekerja">Pekerja</option>
						</select>
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Username kasir</label>
					  <div class="col-md-9">
					  	<input class="form-control" type="text" name="username" placeholder="Username kasir">
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Password</label>
					  <div class="col-md-9">
					  	<input class="form-control" type="text" name="password" placeholder="Password kasir">
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Akses</label>
					  <div class="col-md-9">
					  	<select name="akses" id="">
					  		<option value="" selected="">--Pilih Akses--</option>
					  		<option value="blokir">Blokir</option>
					  		<option value="aktif">Aktif</option>
					  	</select>
					  </div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input class="btn btn-primary col-md-offset-2" type="submit" name="name" value="Tambah account kasir">

					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
@endsection