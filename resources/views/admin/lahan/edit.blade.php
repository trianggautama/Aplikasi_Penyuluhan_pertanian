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
                        <h2 class="content-header-title float-left mb-0">Lahan</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Lahan</a>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-6">
                                    <h4 class="card-title">Form Input</h4>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <form action="" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                        <label for="">Kode buah</label>
                                        <input type="text" name="kode_buah" id="kode_buah" class="form-control"
                                            placeholder="Kode Buah">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama buah</label>
                                        <input type="text" name="nama_buah" id="nama_buah" class="form-control"
                                            placeholder="Nama Buah">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Stok</label>
                                        <input type="text" name="stok" id="stok" class="form-control"
                                            placeholder="Kode Buah">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Satuan</label>
                                        <input type="text" name="satuan" id="satuan" class="form-control"
                                            placeholder="Nama Buah">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="text" name="harga" id="harga" class="form-control"
                                            placeholder="Kode Buah">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Satuan Harga</label>
                                        <input type="text" name="satuan_harga" id="satuan_harga" class="form-control"
                                            placeholder="Nama Buah">
                                    </div>
                                </div>
                                <div class="card-footer d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <a href="{{Route('lahanIndex')}}"
                                        class="btn btn-secondary  mb-1 mb-sm-0 mr-0 mr-sm-1"><i
                                            class="feather icon-arrow-left"></i> Batal</a>
                                    <button type="submit" class="btn btn-primary  mb-1 mb-sm-0 mr-0 mr-sm-1"><i
                                            class="feather icon-save"></i> Ubah Data</button>
                                </div>
                                </form>
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