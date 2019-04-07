@extends('layouts.frontend')
@section('product')
@foreach($barangs as $data)
<div class="col-md-4 col-12">
  <div class="thumbnail">
    <div class="imageWrapper">
      <img src="{{('/img/'.$data->foto.'')}}" alt="feature-collection-image" style="height:300px; widht:300px;">
      <div class="caption">
        <h3>{{$data->nama_barang}}</h3>
        <small>Rp .{{$data->harga}}</small>
      </div>
      <div class="masking">
        <a href="/product/{{$data->slug}}" class="btn viewBtn">View Products</a>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection