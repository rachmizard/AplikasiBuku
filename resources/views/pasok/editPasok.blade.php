@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
     			<div class="panel-heading">Edit Buku</div>
    				<div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('updatePasok.pasok', $edit->id )}}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('buku') ? ' has-error' : '' }}">
                                <label for="buku" class="col-md-4 control-label">Buku</label>

                                <div class="col-md-6">
                                    <select name="buku" id="">
                                      @foreach($buku as $baca)
                                      <option value="{{$baca->id}}"@if(($edit->id_buku)==($baca->id)) selected @endif>{{$baca->judul}}</option>
                                      @endforeach
                                      </select>

                                    @if ($errors->has('buku'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('buku') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('distributor') ? ' has-error' : '' }}">
                                <label for="distributor" class="col-md-4 control-label">Distributor</label>

                                <div class="col-md-6">
                                        <select name="distributor" id="">
                                      @foreach($distributor as $baca)
                                      <option value="{{$baca->id}}"@if(($edit->id_distributor)==($baca->id)) selected @endif>{{$baca->nama_distributor}}</option>
                                      @endforeach
                                      </select>

                                    @if ($errors->has('distributor'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('distributor') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('jumlah') ? ' has-error' : '' }}">
                                <label for="jumlah" class="col-md-4 control-label">Jumlah</label>

                                <div class="col-md-6">
                                    <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{ $edit->jumlah }}" required autofocus>

                                    @if ($errors->has('jumlah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jumlah') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                                <label for="penerbit" class="col-md-4 control-label">Tanggal</label>

                                <div class="col-md-6">
                                    <input id="tanggal" type="text" class="form-control" name="tanggal" value="{{ $edit->tanggal }}" required autofocus>

                                    @if ($errors->has('tanggal'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tanggal') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-ok"></span> Edit Buku
                                    </button>
                                    <a href="{{ route('addPasok.pasok')}}" class="btn btn-danger">
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