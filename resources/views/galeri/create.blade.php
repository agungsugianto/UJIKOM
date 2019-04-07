@extends('layouts.admin')
@section('title') Table @endsection
@section('subtitle') Galeri @endsection
@section('breadcrumb')
<nav align="center">
  <ol class="breadcrumb float-right" >
    <li class="breadcrumb-item">
      <a href="{{ url('home')}}"><i class="ion ion-home"></i> Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('galeri.index')}}">Galeri</a>
    </li>
    <li class="breadcrumb-item active">
      Membuat
    </li>
  </ol>
</nav>
@endsection
@section('content')
<div class="col-md-12">
  <div class="card card-default widget">
    <div class="card-heading">
      <h3 class="card-title">Table Galeri</h3>
    </div>
    <div class="card-body">
      <form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
          <label class="control-label">Gambar</label>
          <input type="file" name="gambar" class="form-control" accept="/img" required>
          @if ($errors->has('gambar'))
          <span class="help-block">
          <strong>{{ $errors->first('gambar') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.col-md-12 -->
@endsection