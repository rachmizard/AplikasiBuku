@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
				<a class="btn btn-default btn-sm" style="margin-bottom:15px;" href="{{ url('/home') }}"><span class="glyphicon glyphicon-home"></span> Home</a>
                	<form class="inline" action="{{route('querysearch')}}" method="GET">
						<div class="form-group">
    						<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
   						 <div class="input-group">
      						<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
      						<input type="text" class="form-control" placeholder="Masukan Keyword" name="searchdata">
    					</div>
 						 </div>
  						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Cari Data</button>
  					</form>
				</div>
				<div class="panel">
				<a class="btn btn-success btn-sm" href="{{ route('addPasok.pasok')}}"><span class="glyphicon glyphicon-plus"></span> Tambah pasok</a>
				</div>
				<div class="panel">
						<table class="table table-hover table-bordered table-striped text-justify">
							<tr>
								<td>No</td>
								<td>Distributor</td>
								<td>Buku</td>
								<td>Jumlah</td>
								<td>Tanggal</td>
								<td>Action</td>
							</tr>
							@if($pasok->count() > 0)
							@foreach($pasok as $data)
							<tr>
								<td>{{ (($pasok->currentPage() -1) * $pasok->perPage() ) + $loop->iteration }}</td>
								<td>{{ $data->distributor['nama_distributor'] }}</td>
								<td>{{ $data->buku->judul }}</td>
								<td>{{ $data->jumlah }}</td>
								<td>{{ $data->tanggal }}</td>
								<td><a class="btn btn-warning btn-sm" href="{{ route('detailPasok.pasok', $data->id) }}"><span class="glyphicon glyphicon-folder-open"></span> Detail</a> <a class="btn btn-danger btn-sm" href="{{ route('deletePasok.pasok', $data->id)}}"><span class="glyphicon glyphicon-remove"></span> Hapus</a></td>	
							</tr>
							@endforeach
							@else
							<tr>
								<td style="text-align: center;" colspan="6">Tidak ditemukan</td>
							</tr>
							@endif
						</table>
						<div class="text-center">{{$pasok->render()}}</div>
					</div>
			</div>
		</div>
	</div>
</div>
	

@endsection