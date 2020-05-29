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
                            <h2 class="content-header-title float-left mb-0">Data Pelatihan</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Pelatihan</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Data</a>
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
                                            <h4 class="card-title">Tabel Data</h4>
                                        </div>
                                        <div class="col-6 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button  class="btn btn-secondary  mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="feather icon-printer"></i> Cetak Data</button>
                                            <button  class="btn btn-primary  mb-1 mb-sm-0 mr-0 " data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                        </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Pelatihan</th>
                                                        <th>Tanggal Mulai</th>
                                                        <th>Tanggal Selesai</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Pelatihan Penanaman Jagung</td>
                                                        <td>1 Januari 2020</td>
                                                        <td>18 Januari 2020</td>
                                                        <td>
                                                        <a href="{{Route('pelatihanShow')}}" class="btn btn-icon btn-primary"><i class="feather icon-info"></i></a>
                                                        <a href="{{Route('pelatihanEdit')}}" class="btn btn-icon btn-warning"><i class="feather icon-edit"></i></a>
                                                            <a href="" class="btn btn-icon btn-danger"><i class="feather icon-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode evaluasi</th>
                                                        <th>Nama Evaluasi</th>
                                                        <th>Keterangan</th>
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
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            @csrf
            <div class="form-group">
                <label for="">Nama Pelatihan</label>
                <input type="text" name="nama_pelatihan" id="nama_pelatihan" class="form-control" placeholder="Nama Pelatihan">
            </div>
            <div class="form-group">
                <label for="">Tanggal Mulai</label>
                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Tanggal Selesai</label>
                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan Data</button>
      </div>
    </div>
  </div>
</div>
@endsection