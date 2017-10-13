@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Data</div>

                <div class="panel-body">
					<form class="form-horizontal" action="{{ route('storePenjualan.penjualan')}}" method="post">
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Buku</label>
					  <div class="col-md-9">
					  	<select name="id_buku" id="">
					  		@foreach($buku as $in)
					  		<option value="{{ $in->id }}">{{ $in->judul }}</option>
					  		@endforeach
					  	</select>
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Kasir</label>
					  <div class="col-md-9">
						<select name="id_kasir" id="">
							@foreach($kasir as $in)
							<option value="{{ $in->id }}">{{ $in->nama }}</option>
							@endforeach
						</select>
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Jumlah</label>
					  <div class="col-md-9">
					  	<input class="form-control" type="text" name="jumlah" placeholder="Jumlah">
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Total</label>
					  <div class="col-md-9">
						<input class="form-control" type="text" name="total" placeholder="Total">
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Tanggal</label>
					  <div class="col-md-9">
					  	<input class="form-control" type="date" name="tanggal" placeholder="Tanggal">
					  </div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input class="btn btn-primary col-md-offset-2" type="submit" name="name" value="Submit">

					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
@endsection