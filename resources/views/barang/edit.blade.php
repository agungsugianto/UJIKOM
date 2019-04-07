@extends('layouts.admin')
@section('title') Table @endsection
@section('subtitle') Barang @endsection
@section('breadcrumb')
<nav align="center">
  <ol class="breadcrumb float-right" >
    <li class="breadcrumb-item">
      <a href="{{ url('home')}}"><i class="ion ion-home"></i> Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('barang.index')}}">Barang</a>
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
      <h3 class="card-title">Ubah Kategori</h3>
    </div>
    <div class="card-body">
      <form action="{{ route('barang.update',$barangs->id) }}" method="post" enctype="multipart/form-data" >
        <input name="_method" type="hidden" value="PATCH">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
          <label class="control-label">Kategori</label>
          <select name="kategori_id" class="form-control">
          @foreach($kategori as $data)
          <option value="{{$data->id}}" {{$selectedKategori == $data->id ?'selected = "selected"': ''}} >{{$data->kategori}}</option>
          @endforeach 
          </select>
          @if ($errors->has('kategori_id'))
          <span class="help-block">
          <strong>{{ $errors->first('kategori_id') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group {{ $errors->has('nama_barang') ? ' has-error' : '' }}">
          <label class="control-label">Nama Barang</label>
          <input type="text" name="nama_barang" class="form-control" value="{{ $barangs->nama_barang }}"  required>
          @if ($errors->has('nama_barang'))
          <span class="help-block">
          <strong>{{ $errors->first('nama_barang') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
          <label class="control-label">Harga</label>
          <input type="text" name="harga" class="form-control" value="{{ $barangs->harga }}"  required>
          @if ($errors->has('harga'))
          <span class="help-block">
          <strong>{{ $errors->first('harga') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
          <label class="control-label">Foto</label><br>
          <img src="{{asset('/img/'.$barangs->foto)}}" style="width:250px; height:250px;" alt=""><br><br>
          <input type="file" name="foto" class="form-control" accept="/img" value="{{ $barangs->foto }}">
          @if ($errors->has('foto'))
          <span class="help-block">
          <strong>{{ $errors->first('foto') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
          <label class="control-label">Deskripsi</label>
          <textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required="">
          {{$barangs->deskripsi}}</textarea>
          @if ($errors->has('deskripsi'))
          <span class="help-block">
          <strong>{{ $errors->first('deskripsi') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group {{ $errors->has('beli') ? ' has-error' : '' }}">
          <label class="control-label">Masukan Link Tokopedia</label>
          <input type="url" name="beli" class="form-control" value="{{ $barangs->beli }}"  required>
          @if ($errors->has('beli'))
          <span class="help-block">
          <strong>{{ $errors->first('beli') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
</div>
<!-- /.col-md-12 -->
@endsection