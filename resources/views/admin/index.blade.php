@extends('layouts.admin')

@section('content')  <!-- BEGIN: Content-->
   <!-- BEGIN: Content-->
   <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Beranda Admin</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Beranda</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
           <!-- Zero configuration table -->
            <!-- Card Captions and Overlay section start -->
            <section id="card-caps">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="{{asset('admin/app-assets/images/slider/04.jpg')}}" alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-danger overlay-lighten-2">
                                        <h class="card-title text-white">Data Pelatihan</h4>
                                        <p class="card-text text-white"> 12 Data Pelatihan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card text-white border-0 box-shadow-0">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="{{asset('admin/app-assets/images/slider/04.jpg')}}" alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-success">
                                        <h4 class="card-title text-white">Card Image Overlay</h4>
                                        <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy chupa chups.
                                        </p>
                                        <p class="card-text text-white"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="{{asset('admin/app-assets/images/slider/04.jpg')}}" alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-warning">
                                        <h4 class="card-title text-white">Card Image Overlay</h4>
                                        <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy chupa chups.
                                        </p>
                                        <p class="card-text"><small class="text-white">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card text-white border-0 box-shadow-0">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="{{asset('admin/app-assets/images/slider/04.jpg')}}" alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-info">
                                        <h4 class="card-title text-white">Card Image Overlay</h4>
                                        <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy chupa chups.
                                        </p>
                                        <p class="card-text text-white"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                <h3>Selamat Datang Admin (Nama Auth)</h3><hr>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id nemo sit maxime voluptates a reprehenderit quo ipsa ad atque iste, error consequatur, dignissimos ipsam sint odio itaque quod! Quibusdam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur impedit fugiat atque, libero minima sit reiciendis ad quas reprehenderit, aspernatur velit quos? Unde, possimus voluptatibus voluptas iste officia minima aperiam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Card Captions and Overlay section end -->
                <!--/ Zero configuration table -->
                <!-- Data list view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
