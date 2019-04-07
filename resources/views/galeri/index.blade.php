@extends('layouts.admin')
@section('title') Table @endsection
@section('subtitle') Galeri @endsection
@section('breadcrumb')
<nav align="center">
  <ol class="breadcrumb float-right" >
    <li class="breadcrumb-item">
      <a href="{{ url('home')}}"><i class="ion ion-home"></i> Home</a>
    </li>
    <li class="breadcrumb-item active">
      Galeri
    </li>
  </ol>
</nav>
@endsection
@section('content')
<div class="col-md-12">
  <div class="card card-default widget">
    <div class="card-heading">
      <h3 class="card-title">Tabel Galeri</h3>
      <br>
      <div class="card-title">
        <a id="modal-create" href="{{ route('galeri.create') }}" class="btn btn-round btn-primary" title="Add"><i class="fa fa-plus">&nbsp;</i>Tambah Galeri</a>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Gambar</th>
            <th colspan="3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
          @php $no = 1; @endphp
          @foreach($galeris as $data)
          <tr>
            <td>{{ $no++ }}</td>
            <td>
              <img src="{{asset('/img/'.$data->gambar.'' )}}" width="70" height="70">
            </td>
            <td>
              <a class="btn btn-success" href="{{ route('galeri.edit',$data->id) }}">Ubah</a>
            </td>
            <td>
              <form method="post" action="{{ route('galeri.destroy',$data->id) }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3"></div>
        <div class="col-md-2">
        {{$galeris->links()}}</div>
        <div class="col-md-3">
        </div>
        </div>
    </div>
  </div>
</div>
<!-- /.col-md-12 -->
@endsection