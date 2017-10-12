<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Detail</div>

                <div class="panel-body">
					<table class="table table-striped">
					<thead>
						<tr>
							<th>Nama Buku</th>
							<th>ID Kasir</th>
							<th>Jumlah</th>
							<th>Total</th>
							<th>Tanggal</th>
						</tr>
					</thead>
					<tr>
						<td>{{ $penjualan->id_buku }}</td>
						<td>{{ $penjualan->id_kasir }}</td>
						<td>{{ $penjualan->jumlah }}</td>
						<td>{{ $penjualan->total }}</td>
						<td>{{ $penjualan->tanggal }}</td>

					</tr>
					</table>
