<nav class="navbar navbar-main navbar-default navbar-expand-md" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand" href="{{ url('/')}}">
    <img src="/img/lg.png" style="width:300px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-controls="navbar-ex1-collapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars"></span>
    </button>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item ">
          <a href="{{ url('/')}}" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false">Beranda</a>
        </li>
        <li class="nav-item">
          <a href="{{ url('product')}}" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false">Produk</a>
        </li>
        <li class="nav-item">
          <a href="{{ url('about')}}" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false">Tentang</b></a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>