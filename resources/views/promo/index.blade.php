@extends('layouts.admin')
@section('title') Table @endsection
@section('subtitle') Promo @endsection
@section('breadcrumb')
<nav align="center">
  <ol class="breadcrumb float-right" >
    <li class="breadcrumb-item">
      <a href="{{ url('home')}}"><i class="ion ion-home"></i> Home</a>
    </li>
    <li class="breadcrumb-item active">
      Promo
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
      <h3 class="card-title">Tabel Promo</h3>
      <br>
      <div class="card-title">
        <a id="modal-create" href="{{ route('promo.create') }}" class="btn btn-round btn-primary" title="Add"><i class="fa fa-plus">&nbsp;</i>Tambah Promo</a>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Promo</th>
            <th colspan="3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
          @php $no = 1; @endphp
          @foreach($promos as $data)
          <tr>
            <td>{{ $no++ }}</td>
            <td>
              <img src="{{ asset('/img/'.$data->foto.'')}}" width="70" height="70">
            </td>
            <td>
              <a class="btn btn-round btn-success" href="{{ route('promo.edit',$data->id) }}">Ubah</a>
            </td>
            <td>
            <td>
              <form method="post" action="{{ route('promo.destroy',$data->id) }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-round btn-danger">Hapus</button>
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
        {{$promos->links()}}</div>
        <div class="col-md-3">
        </div>
        </div>
    </div>
  </div>
</div>
<!-- /.col-md-12 -->
@endsection