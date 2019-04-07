@extends('layouts.admin')
@section('title') Table @endsection
@section('subtitle') Barang @endsection
@section('breadcrumb')
<nav align="center">
  <ol class="breadcrumb float-right" >
    <li class="breadcrumb-item">
      <a href="{{ url('home')}}"><i class="ion ion-home"></i> Home</a>
    </li>
    <li class="breadcrumb-item active">
      Barang
    </li>
  </ol>
</nav>
@endsection
@section('content')
<div class="col-md-12">
  <div class="card card-default widget">
    <div class="card-heading">
      <div class="card-controls">
        <!-- <a href="#" class="widget-minify"><i class="fa fa-chevron-up"></i></a>
          <a href="#" class="widget-close"><i class="fa fa-times"></i></a> -->
      </div>
      <h3 class="card-title">Tabel Barang</h3>
      <br>
      <div class="card-title">
        <a id="modal-create" href="{{ route('barang.create') }}" class="btn btn-round btn-primary" title="Add"><i class="fa fa-plus">&nbsp;</i>Tambah Barang</a>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Foto</th>
            <th colspan="3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
          @php $no = 1; @endphp
          @foreach($barangs as $data)
          <tr>
            <td>{{ $no++ }}</td>
            <td>
              <p> {{ $data->kategori->kategori }} </p>
            </td>
            <td>
              <p>{{$data->nama_barang}}</p>
            </td>
            <td>
              <p>{{ $data->harga }}</p>
            </td>
            <td>
              <img src="{{ asset('/img/'.$data->foto.'')}}" width="70" height="70">
            </td>
            <td>
              <a class="btn btn-round btn-success" href="{{ route('barang.edit',$data->id) }}">Ubah</a>
            </td>
            <td>
            <td>
              <form method="post" action="{{ route('barang.destroy',$data->id) }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-round btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </div>
        </div>
      </table>

        </tbody><div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3"></div>
        <div class="col-md-2">
        {{$barangs->links()}}</div>
        <div class="col-md-3">
    </div>
  </div>
</div>
<!-- /.col-md-12 -->
@endsection