@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Penjualan</div>
                @if(session()->has('message'))
				    <div class="alert alert-success">
				        {{ session()->get('message') }}
				    </div>
				@endif
                @if(session()->has('messagedelete'))
				    <div class="alert alert-danger">
				        {{ session()->get('messagedelete') }}
				    </div>
				@endif
                <div class="panel-body">
					<table class="table table-striped">
					<div class="col-md-6 col-md-offset 1 ">
					<a class="btn btn-primary" href="{{ route('addPenjualan.penjualan')}}">Create Data</a>
					</div>
					<div class="col-md-6 col-md-offset 1 ">
					<a class="btn btn-danger" href="{{route('deleteTbPenjualan.penjualan')}}">Hapus semua 
					report</a>
					</div>
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
						<td>{{ $penjualan->buku->judul }}</td>
						<td>{{ $penjualan->kasir->nama}}</td>
						<td>{{ $penjualan->jumlah }}</td>
						<td>Rp. {{ $penjualan->total }}</td>
						<td>{{ $penjualan->tanggal }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('edit.show', $penjualan->id )}}">Edit</a>
							<a class="btn btn-success" href="">Detail</a>
							<a class="btn btn-danger" href="{{route('deletePenjualan.penjualan', $penjualan->id)}}">Hapus</a>
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