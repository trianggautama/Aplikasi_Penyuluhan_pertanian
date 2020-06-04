@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-6">
                        <h2 class="content-header-title float-left mb-0">Data Pelatihan</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Pelatihan</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Detail</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{Route('pelatihanIndex')}}" class="btn btn-secondary  mb-1 mb-sm-0 mr-0 mr-sm-1"><i
                                class="feather icon-arrow-left"></i> Kembali</a>
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
                                    <h4 class="card-title">Detail Data</h4>
                                    <hr>
                                </div>
                                <div class="col-6">
                                </div>

                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Nama Pelatihan</h5>
                                                <p>{{$data->nama_pelatihan}}</p>
                                            </div>
                                            <div class="form-group">
                                                <h5>Tanggal Mulai</h5>
                                                <p>{{carbon\carbon::parse($data->tgl_mulai)->translatedFormat('d F Y')}}
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <h5>Tanggal Selesai</h5>
                                                <p>{{carbon\carbon::parse($data->tgl_selesai)->translatedFormat('d F Y')}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-5">
                                            <div class="form-group">
                                                <h5>uraian</h5>
                                                <p class="text-justify">{{$data->uraian}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="col-6">
                                    <h4 class="card-title">Tabel Peserta dari kecamatan {{Auth::user()->kecamatan->kecamatan}}</h4>
                                </div>
                                <div class="col-6 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                <button class="btn btn-primary  mb-1 mb-sm-0 mr-0 " data-toggle="modal"
                                        data-target="#exampleModal">Tambah Peserta</button>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Tanggal SPT</th>
                                                    <th>Nomor SPT</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tempat / Tanggal Lahir</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>John Doe</td>
                                                    <td>2 Februari</td>
                                                    <td>123131/2121/12</td>
                                                    <td>Laki -laki</td>
                                                    <td>Banjarbaru, 04 Maret 1997</td>
                                                    <td>
                                                        <a href="" class="btn btn-icon btn-primary"><i
                                                                class="feather icon-info"></i></a>
                                                        <a href="" class="btn btn-icon btn-warning"><i
                                                                class="feather icon-edit"></i></a>
                                                        <a href="" class="btn btn-icon btn-danger"><i
                                                                class="feather icon-delete"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal SPT</th>
                                                    <th>Nomor SPT</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tempat / Tanggal Lahir</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('pelatihanAddModul')}}" method="POST">
                    @csrf
                    <input type="hidden" name="pelatihan_id" value="{{$data->id}}" id="">
                    <div class="form-group">
                        <label for="">Nomor SPT</label>
                        <input type="text" name="no_spt" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal SPT</label>
                        <input type="text" name="tanggal_spt" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Peserta</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="text" name="nomor_ktp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">-- ini kurang tau isinya apa --</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection