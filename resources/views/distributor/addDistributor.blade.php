@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
     			
				<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('storeDistributor.distributor')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama_distributor') ? ' has-error' : '' }}">
                            <label for="nama_distributor" class="col-md-4 control-label">Nama Distributor</label>

                            <div class="col-md-6">
                                <input id="nama_distributor" type="text" class="form-control" name="nama_distributor" required autofocus>

                                @if ($errors->has('nama_distributor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_distributor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                            
                                <input id="alamat" type="text" class="form-control" name="alamat" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                            <label for="telepon" class="col-md-4 control-label">Telepon</label>

                            <div class="col-md-6">
                                <input id="telepon" type="text" class="form-control" name="telepon" value="{{ old('telepon') }}" required autofocus>

                                @if ($errors->has('telepon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telepon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span> Tambah Distributor
                                </button>
                                <a href="{{ route('index.distributor') }}" class="btn btn-danger">
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