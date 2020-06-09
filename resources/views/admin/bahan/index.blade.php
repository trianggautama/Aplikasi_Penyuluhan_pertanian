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
                        <h2 class="content-header-title float-left mb-0">Data Bahan</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Bahan</a>
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
                                    <a href="{{Route('pelatihanCetak')}}"
                                        class="btn btn-secondary  mb-1 mb-sm-0 mr-0 mr-sm-1" target="_blank"><i
                                            class="feather icon-printer"></i> Cetak Data</a>
                                    <button class="btn btn-primary  mb-1 mb-sm-0 mr-0 " data-toggle="modal"
                                        data-target="#exampleModal">Tambah Data</button>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Bahan</th>
                                                    <th>Nama Bahan</th>
                                                    <th>Stok</th>
                                                    <th>Kategori</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>L012</td>
                                                    <td>Pupuk MPK</td>
                                                    <td>2 Karung</td>
                                                    <td>Pupuk</td>
                                                    <td>
                                                        <a href="{{Route('bahanEdit')}}"
                                                            class="btn btn-icon btn-warning"><i
                                                                class="feather icon-edit"></i></a>
                                                        <button onclick="Hapus('')" class="btn btn-icon btn-danger"><i
                                                                class="feather icon-delete"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Bahan</th>
                                                    <th>Nama Bahan</th>
                                                    <th>Stok</th>
                                                    <th>Kategori</th>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('bahanStore')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Kode bahan</label>
                        <input type="text" name="kode_bahan" id="kode_bahan" class="form-control"
                            placeholder="Kode bahan">
                    </div>
                    <div class="form-group">
                        <label for="">Nama bahan</label>
                        <input type="text" name="nama_bahan" id="nama_bahan" class="form-control"
                            placeholder="Nama bahan">
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="text" name="stok" id="stok" class="form-control"
                            placeholder="Stok">
                    </div>
                    <div class="form-group">
                        <label for="">Satuan</label>
                        <input type="text" name="satuan" id="satuan" class="form-control"
                            placeholder="Stok">
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                       <select name="bahan_id" id="" class="form-control">
                           <option value="">-- pilih katgeori --</option>
                           <option value="">Bibit</option>
                           <option value="">Pupuk</option>
                           <option value="">Lain -lain</option>
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
@section('scripts')
        <script>
            function Hapus(uuid, nama) {
                Swal.fire({
                title: 'Anda Yakin?',
                text: " Menghapus data Pelatihan" + nama ,        
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.value) {
                url = '{{route("pelatihanDestroy",'')}}';
                window.location.href =  url+'/'+uuid ;
                }
            })
            }
        </script>
    @endsection