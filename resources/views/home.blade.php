@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Daftar Buku</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card text-center">
                          <div class="card-body">
                            <h4 class="card-title">Daftar Buku</h4>
                            <p class="card-text"></p>
                                <a class="btn btn-default btn-sm" href="{{ url('home/buku') }}"><span class="glyphicon glyphicon-book"></span> Lihat Daftar Buku</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Pemasokan</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card text-center">
                          <div class="card-body">
                            <h4 class="card-title">Pasok</h4>
                            <p class="card-text"></p>
                                <a class="btn btn-default btn-sm" href="{{ url('home/pasok') }}"><span class="glyphicon glyphicon-book"></span> Lihat Daftar Pasok</a>
                          </div>
                        </div>
                    </div>
                    <!-- BAGIAN RIDWAN -->

                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Distributor</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card text-center">
                          <div class="card-body">
                            <h4 class="card-title">Distributor buku</h4>
                            <p class="card-text"></p>
                                <a class="btn btn-default btn-sm" href="{{ url('home/distributor') }}"><span class="glyphicon glyphicon-book"></span> Lihat daftar Distributor </a>
                          </div>
                        </div>
                    </div>
                    <!-- BAGIAN RIDWAN -->

                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Penjualan</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card text-center">
                          <div class="card-body">
                            <h4 class="card-title">Daftar Penjualan buku </h4>
                            <p class="card-text"></p>
                                <a class="btn btn-default btn-sm" href="{{ route('index.penjualan') }}"><span class="glyphicon glyphicon-book"></span> Lihat Penjualan buku</a>
                          </div>
                        </div>
                    </div>
                    <!-- BAGIAN RIDWAN -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
