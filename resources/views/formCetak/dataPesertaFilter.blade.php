<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    p{
        font-size: 12px;
    }
    h4,h2{
        font-family:serif;
    }
        body{
            font-family:sans-serif;
        }
        table{
        border-collapse: collapse;
        width:100%;
      }
      table, th, td{
        border: 1px solid black;
      }
      th{
        text-align: center;
      }
      td{
        text-align: center;
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         margin-bottom: 0px;
         text-align: center;
         height: 150px;
         padding: 0px;
     }
     .pemko{
         width:150px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 15%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         float:right;
         margin-left: 0px;
         width: 75%;
         padding-left:0px;
         padding-right:10%;
     }
     hr{
         margin-top: 10%;
         height: 4px;
         background-color: black;
         width:100%;
     }
     .ttd{
         margin-left:70%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-right{
         text-align:right;
     }
     .isi{
         padding:10px;
     }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="depan/img/logo.png">
            </div>
            <div class="headtext">
                <h4 style="margin:0px;">PEMERINTAH PROVINSI KALIMANTAN </h4>
                <h3 style="margin:0px; text-transform:uppercase;">Balai Pelatihan dan Penerapan Teknologi Pertanian (BP2TP) Provinsi Kalimantan Selatan</h3>
                <p style="margin:0px;">Jalan Jendral Ahmad Yani KM.51 Kecamatan Tambang Ulang, Kabupaten Tanah Laut</p>
                <p style="margin:0px;">Email: bp2tp.provkalsel@gmail.com </p>
            </div>
            <br>
    </div> 
    <hr style="margin-top:1px;">
    <div class="container">
        <div class="isi">
            <h3 style="text-align:center; text-transform:uppercase;">DATA PELATIHAN  </h3>
            <table style="width:100%; border:none;">
                <tr style="text-align:left; border:none;">
                    <td style="text-align:left; width:25%; border:none;">Nama Pelatihan</td>
                    <td style="text-align:left; border:none;">: {{$pelatihan->nama_pelatihan}}</td>
                </tr>
                <tr style="text-align:left; border:none;">
                    <td style="text-align:left; border:none;">Pelaksanaan</td>
                    <td style="text-align:left; border:none;">: {{carbon\carbon::parse($pelatihan->tgl_mulai)->translatedFormat('d F Y')}} - {{carbon\carbon::parse($pelatihan->tgl_mulai)->translatedFormat('d F Y')}}</td>
                </tr>
                <tr style="text-align:left; border:none;">
                    <td style="text-align:left; border:none;">Narasumber</td>
                    <td style="text-align:left; border:none;">: {{$pelatihan->narasumber}}</td>
                </tr>
                <tr style="text-align:left; border:none;">
                    <td style="text-align:left; vertical-align:top; border:none;">Uraian</td>
                    <td style="text-align:left; text-align:justify; border:none;">: {{$pelatihan->uraian}}</td>
                </tr>
            </table>
            <br>
            <h3 style="text-align:center; text-transform:uppercase;">DAFTAR PESERTA  </h3>
            <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Pelatihan</th>
                                                    <th>Nama</th>
                                                    <th>Nomor SPT</th>
                                                    <th>Tanggal SPT</th>
                                                    <th>Nomor Ktp</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tempat Tanggal lahir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->pelatihan->nama_pelatihan}}</td>
                                                    <td>{{$d->nama_peserta}}</td>
                                                    <td>{{$d->no_spt}}</td>
                                                    <td>{{carbon\carbon::parse($d->tgl_spt)->translatedFormat('d F Y')}}
                                                    </td>
                                                    <td>{{$d->NIK}}</td>
                                                    <td>
                                                        @if($d->jk == 1)
                                                        Laki-laki
                                                        @else
                                                        Perempuan
                                                        @endif
                                                    </td>
                                                    <td>{{$d->tempat_lahir}},
                                                        {{carbon\carbon::parse($d->tgl_spt)->translatedFormat('d F Y')}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                      <br>
                      <br>
                      <div class="ttd">
                        <h5 style="margin:0px;"> <p> Kabupaten Tanah Laut, </p></h5>
                       <h6  style="margin:0px;">Mengetahui</h6>
                      <h5  style="margin:0px;">Kepala Balai Pelatihan dan Penerapan Teknologi Pertanian </h5>
                      <br>
                      <br>
                      <h5 style="text-decoration:underline; margin:0px;">Nama</h5>
                      <h5 style="margin:0px;">NIP. 19580726 1984 03 1 007</h5>
                      </div>
                    </div>
             </div>
         </body>
</html>