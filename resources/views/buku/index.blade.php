@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="btn btn-default btn-sm" style="margin-bottom:15px;" href="{{ url('/home') }}"><span class="glyphicon glyphicon-home"></span> Home</a>
                	<form class="inline" action="{{route('q')}}" method="GET">
						<div class="form-group">
    						<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
   						 <div class="input-group">
      						<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
      						<input type="text" class="form-control" placeholder="Masukan Keyword" name="search">
    					</div>
 						 </div>
  						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Cari Data</button>                		
  						<a class="btn btn-info" href="{{ route('index.buku') }}"><span class="glyphicon glyphicon-list-alt"></span> Daftar Buku</a> <a class="btn btn-success" href="{{ route('add.buku') }}"><span class="glyphicon glyphicon-plus"></span> Tambah Buku</a>
                	</form>
                </div>
					<div class="panel">
						<table class="table table-hover table-bordered table-striped text-justify">
							<tr>
								<td>No</td>
								<td>Judul</td>
								<td>Noisbn</td>
								<td>Stok</td>
								<td>Action</td>
							</tr>
							@if($buku->count() > 0)
							@foreach($buku as $data)
							<tr>
								<td>{{ (($buku->currentPage() -1) * $buku->perPage() ) + $loop->iteration }}</td>
								<td>{{ $data->judul }}</td>
								<td>{{ $data->noisbn }}</td>
								<td>{{ $data->stok }}</td>
								<td class=""><a class="btn btn-warning btn-sm" href="{{ route('detail.buku', $data->id) }}"><span class="glyphicon glyphicon-folder-open"></span> Detail</a> <a class="btn btn-danger btn-sm" href="{{ route('delete.buku', $data->id)}}"><span class="glyphicon glyphicon-remove"></span> Hapus</a></td>	
							</tr>
							@endforeach
							@else
							<tr>
								<td style="text-align: center;" colspan="5">Tidak di temukan hasil tersebut</td>
							</tr>
							@endif
						</table>
						<div class="text-center">{{$buku->render()}}</div>
					</div>	                	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection