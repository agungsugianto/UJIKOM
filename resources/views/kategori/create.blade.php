@extends('layouts.admin')
@section('title') Table @endsection
@section('subtitle') Category @endsection
@section('breadcrumb')
<nav align="center">
  <ol class="breadcrumb float-right" >
    <li class="breadcrumb-item">
      <a href="{{ url('home')}}"><i class="ion ion-home"></i> Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('kategori.index')}}">Kategori</a>
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
      <div class="card-controls">
        <!-- <a href="#" class="widget-minify"><i class="fa fa-chevron-up"></i></a>
          <a href="#" class="widget-close"><i class="fa fa-times"></i></a> -->
      </div>
      <h3 class="card-title">Tambah Kategori</h3>
    </div>
    <div class="card-body">
      <form action="{{ route('kategori.store') }}" method="post" >
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('kategori') ? ' has-error' : '' }}">
          <label class="control-label">Kategori</label>	
          <input type="text" name="kategori" class="form-control"  required>
          @if ($errors->has('kategori'))
          <span class="help-block">
          <strong>{{ $errors->first('kategori') }}</strong>
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