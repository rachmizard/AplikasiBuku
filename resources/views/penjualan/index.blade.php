@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Penjualan</div>

                <div class="panel-body">
					<table class="table table-striped">
					<a class="btn btn-primary" href="{{ route('addPenjualan.penjualan')}}">Create Data</a>
					<thead>
						<tr>
							<th>Buku</th>
							<th>Kasir</th>
							<th>Jumlah</th>
							<th>Total</th>
							<th>Tanggal</th>
							<th>Action</th>
						</tr>
					</thead>
					@foreach ($penjualans as $penjualan)
					<tr>
						<td>{{ $penjualan->id_buku }}</td>
						<td>{{ $penjualan->id_kasir }}</td>
						<td>{{ $penjualan->jumlah }}</td>
						<td>{{ $penjualan->total }}</td>
						<td>{{ $penjualan->tanggal }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('edit.show', $penjualan->id )}}">Edit</a>
							<a class="btn btn-success" href="">Detail</a>
							<a class="btn btn-danger" href="">Hapus</a>
						</td>

					</tr>
					@endforeach
					</table>
					<center>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection