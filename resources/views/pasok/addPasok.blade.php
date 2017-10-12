@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
     			
				<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('storePasok.pasok')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('id_distributor') ? ' has-error' : '' }}">
                            <label for="distributor_id" class="col-md-4 control-label">Distributor</label>

                            <div class="col-md-6">
                                <select name="id_distributor">
                                @foreach ($distributor as $in)
                                  <option value="{{$in->id}}">{{$in->nama_distributor}}</option>
                                @endforeach
                                  </select>

                                @if ($errors->has('id_distributor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_distributor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('id_buku') ? ' has-error' : '' }}">
                            <label for="id_buku" class="col-md-4 control-label">Pilih Buku</label>

                            <div class="col-md-6">
                                <select name="id_buku" id="">
                                @foreach ($buku as $in)
                                  <option value="{{$in->id}}">{{$in->judul}}</option>
                                @endforeach
                                  </select>

                                @if ($errors->has('id_buku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_buku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('jumlah') ? ' has-error' : '' }}">
                            <label for="jumlah" class="col-md-4 control-label">Jumlah</label>

                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{ old('jumlah') }}" required autofocus>

                                @if ($errors->has('jumlah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                            <label for="tanggal" class="col-md-4 control-label">Tanggal</label>

                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control" name="tanggal" value="{{ old('tanggal') }}" required autofocus>

                                @if ($errors->has('penerbit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penerbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span> Tambah Pasok
                                </button>
                                <a href="{{ route('index.pasok') }}" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span> Batal
                                </a>
                            </div>
                       	</div>
                    </form>    
				</div>
            </div>
        </div>
    </div>
</div>
@endsection