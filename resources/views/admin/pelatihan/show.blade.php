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
                                    <li class="breadcrumb-item"><a href="#">Pelatihan</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Detail</a>
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
                                        <div class="col-12">
                                            <h4 class="card-title">Detail Data</h4>
                                            <hr>
                                        </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Nama Pelatihan</h5>
                                                <p>nama pelatihan</p>
                                            </div>
                                            <div class="form-group">
                                                <h5>Tanggal Mulai</h5>
                                                <p>1 januari 2020</p>
                                            </div>
                                            <div class="form-group">
                                                <h5>Tanggal Selesai</h5>
                                                <p>2 januari 2020</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-5">
                                            <div class="form-group">
                                                <h5>uraian</h5>
                                                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro minima laudantium eaque! Consectetur magnam laborum asperiores vitae dolore a aliquid aperiam voluptate illo sapiente, nemo ut nesciunt necessitatibus laudantium? Velit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel exercitationem velit distinctio, provident delectus maxime recusandae veritatis nihil ullam tempore. Deserunt repellendus dolorem provident error maxime reiciendis, repudiandae hic accusantium.</p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                        <div class="col-6">
                                            <h4 class="card-title">Tabel Modul pelatihan</h4>
                                        </div>
                                        <div class="col-6 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button  class="btn btn-primary  mb-1 mb-sm-0 mr-0 " data-toggle="modal" data-target="#exampleModal">Tambah Modul</button>
                                        </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                        <table class="table zero-configuration">
                                                <thead >
                                                    <tr class=" text-primary">
                                                        <th>No</th>
                                                        <th>Kode Modul</th>
                                                        <th>Judul</th>
                                                        <th>File</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>M01213</td>
                                                        <td>Penerapan Pupuk Kompos pad tanaman A</td>
                                                        <td><a href="" class="btn btn-icon btn-success"><i class="feather icon-download"></i></a></td>
                                                        <td>
                                                            <a href="" class="btn btn-icon btn-danger"><i class="feather icon-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Modul</th>
                                                        <th>Judul</th>
                                                        <th>File</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                        <div class="col-6">
                                            <h4 class="card-title">Tabel Peserta</h4>
                                        </div>
                                        <div class="col-6 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
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
                                                        <td>2 Februari</td>
                                                        <td>123131/2121/12</td>
                                                        <td>Laki -laki</td>
                                                        <td>Banjarbaru, 04 Maret 1997</td>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
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
                <label for="">Modul</label>
                <select name="modul_id" id="modul_id" class="form-control">
                    <option value="">-- pilih modul --</option>
                </select>
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
