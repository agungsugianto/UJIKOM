@extends('layouts.admin')
@section('title') Table @endsection
@section('subtitle') Promo @endsection
@section('breadcrumb')
<nav align="center">
  <ol class="breadcrumb float-right" >
    <li class="breadcrumb-item">
      <a href="{{ url('home')}}"><i class="ion ion-home"></i> Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('promo.index')}}">Promo</a>
    </li>
    <li class="breadcrumb-item active">
      Ubah
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
      <h3 class="card-title">Ubah Promo</h3>
    </div>
    <div class="card-body">
      <form action="{{ route('promo.update',$promos->id) }}" method="post" enctype="multipart/form-data" >
        <input name="_method" type="hidden" value="PATCH">
        {{ csrf_field() }}
        
        <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
          <label class="control-label">Foto</label><br>
          <img src="{{asset('/img/'.$promos->foto)}}" style="width:250px; height:250px;" alt=""><br><br>
          <input type="file" name="foto" class="form-control" accept="/img" value="{{ $promos->foto }}"  required>
          @if ($errors->has('foto'))
          <span class="help-block">
          <strong>{{ $errors->first('foto') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.col-md-12 -->
@endsection