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
                        <h2 class="content-header-title float-left mb-0">Data mahasiswa</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">mahasiswa</a>
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
<<<<<<< HEAD
                                    <a href="{{Route('mahasiswaCetak')}}"
=======
                                    <a href="{{Route('tanamanCetak')}}"
>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
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
<<<<<<< HEAD
                                                    <th>nama</th>
                                                    <th>nis</th>
                                                    <th>kelas</th>
=======
                                                    <th>Nama</th>
                                                    <th>NPM</th>
                                            
>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
<<<<<<< HEAD
                                                    <td>{{$d->nama}}</td>
                                                    <td>{{$d->nis}}</td>
                                                    <td>{{$d->kelas}}</td>
                                                    <td>
=======
                                                    <td>{{$d->Nama}}</td>
                                                    <td>{{$d->NPM}}</td>
                                                    <td>
                
>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
                                                        <a href="{{Route('mahasiswaEdit',['id' => $d->id])}}"
                                                            class="btn btn-icon btn-warning"><i
                                                                class="feather icon-edit"></i></a>
                                                        <button onclick="Hapus('{{$d->id}}')" class="btn btn-icon btn-danger"><i
                                                                class="feather icon-delete"></i></button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
<<<<<<< HEAD
=======
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Tanaman</th>
                                                    <th>Nama Tanaman</th>
                                                    <th>Stok</th>
                                                    <th>Harga</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
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
                <form action="{{Route('mahasiswaStore')}}" method="POST">
                    @csrf
                    <div class="form-group">
<<<<<<< HEAD
                        <label for="">nis</label>
                        <input type="text" name="nis" id="nis" class="form-control"
                            placeholder="nis">
                    </div>
                    <div class="form-group">
                        <label for="">Nama </label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            placeholder="Nama ">
                    </div>
                    <div class="form-group">
                        <label for="">kelas</label>
                        <input type="text" name="kelas" id="kelas" class="form-control" placeholder="kelas">
=======
                        <label for="">nama</label>
                        <input type="text" name="Nama" id="nama" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">NPM</label>
                        <input type="text" name="NPM" id="NPM" class="form-control" >
>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
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
<<<<<<< HEAD
    function Hapus(id) {
                Swal.fire({
                title: 'Anda Yakin?',
                text: " Menghapus data mahasiswa" + id ,        
=======
    function Hapus(id, nama) {
                Swal.fire({
                title: 'Anda Yakin?',
                text: " Menghapus data Pelatihan" + nama ,        
>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.value) {
                url = '{{route("mahasiswaDestroy",'')}}';
                window.location.href =  url+'/'+id ;
                }
            })
            }
</script>
@endsection