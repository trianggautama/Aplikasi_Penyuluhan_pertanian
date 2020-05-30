@extends('layouts.admin')

@section('content') 
   <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Berita Kegiatan</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Berita</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Edit</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
           <section id="basic-datatable">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top " src="{{asset('admin/app-assets/images/profile/post-media/2.jpg')}}" alt="Card image cap" height="500px"/>
                                    <div class="card-body">
                                        <h3 class="card-title">Judul Berita</h3>
                                        <hr>
                                        <p class="card-text text-justify">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut
                                            pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate bar
                                            chocolate tart dragée. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus assumenda distinctio deleniti labore cupiditate numquam minus id. Explicabo repellendus nesciunt ullam sunt impedit! Labore delectus qui voluptas, rerum eveniet consequatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, fugit. Maiores aspernatur quae facilis illo dignissimos labore totam voluptates quibusdam. Qui error, minus ut corporis sunt quos maiores. Officia, Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, reprehenderit aspernatur? Explicabo saepe omnis fugiat voluptatem commodi beatae dolorem veritatis rerum id magnam necessitatibus sit modi, facere facilis maxime dolores?</p>
                                        <p class="card-text">Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar
                                            muffin.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
                <!-- Data list view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
