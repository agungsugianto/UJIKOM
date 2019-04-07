@extends('layouts.admin')
@section('title') Dashboard @endsection
@section('subtitle') Admin @endsection
@section('content')
<div class="col-md-12">
    <div class="card card-default widget">
        <div class="card-heading">
            <div class="card-controls">
                <!-- <a href="#" class="widget-minify"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="widget-close"><i class="fa fa-times"></i></a> -->
            </div>
            <h3 class="card-title">Dashboard</h3>
        </div>
        <div class="card-body">
            <br /><br />
            <br />
            <div class="card-body" align="center">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                Selamat Datang Di Halaman Admin:)
            </div>
            <br /><br />
            <br /><br />
            <br /><br />
        </div>
    </div>
</div><!-- /.col-md-12 -->
@endsection