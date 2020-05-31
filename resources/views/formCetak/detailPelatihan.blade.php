<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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
      }
      th{
        background-color: #708090;
        text-align: center;
        color: white;
      }
      td{
        text-align: left;
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
         margin-left:50%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-right{
         text-align:right;
     }
     .isi{
         padding:10px;
     }
     .page-break { page-break-before: always; }

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
            <h2 style="text-align:center;">DETAIL PELATIHAN</h2>
            <table>
                <tr >
                    <td style="width:100px !important;">Nomor</td>
                    <td>:</td>
                </tr>
                <tr >
                    <td style="width:100px !important;">Lampiran</td>
                    <td>:</td>
                </tr>
                <tr >
                    <td style="width:100px !important;">Perihal</td>
                    <td>: Pelaksanaan Pelatihan</td>
                </tr>
            </table>
                <p style="text-align:justify;">dengan ini memberitahukan mengenai pelaksanaan Pelatihan {{$data->nama_pelatihan}} yang diselenggarakan oleh
                Balai Pelatihan dan Penerapan Teknologi Pertanian (BP2TP) Provinsi Kalimantan Selatan, dengan peserta usulan dari setiap kecamatan. Adapun rincian usulan pelaksanaan  sebagai berikut : </p>
                <table>
                <tr >
                    <td style="width:150px !important;">Nama Pelatihan</td>
                    <td>: {{$data->nama_pelatihan}}</td>
                </tr>
                <tr >
                    <td style="width:100px !important;">uraian</td>
                    <td> <p style="text-align:justify;">: {{$data->uraian}}</p></td>
                </tr>
                <tr >
                    <td style="width:100px !important;">Pelaksanaan</td>
                    <td>: {{carbon\carbon::parse($data->tgl_mulai)->translatedFormat('d F Y')}} - {{carbon\carbon::parse($data->tgl_selesai)->translatedFormat('d F Y')}}</td>
                </tr>
            </table>
            <p style="text-align:justify;">Sebagai upaya agar kegitan pelatihan {{$data->nama_pelatihan}} berjalan lancar, terlampir kami sampaikan Daftar Peserta yang mengikuti pelatihan ini  </p>
            <p> Demikian pemberitahuan ini disampaikan. Atas perhatiannya, kami ucapkan terima kasih. </p>
            <br>
            <br>
            <div class="page-break"></div>
            <table>
                <tr >
                    <td style="width:100px !important;">Lampiran</td>
                    <td>: Peserta Pelatihan</td>
                </tr>
            </table>
            <br>
            <h2 style="text-align:center;">PESERTA PELATIHAN</h2>
            <table class="table table-hover" id="myTable" style="border:1px solid black;">
                        <thead >
                        <tr style="border:1px solid black;">
                            <th style="border:1px solid black;">No</th>
                            <th style="border:1px solid black;">Nama</th>
                            <th style="border:1px solid black;">No SPT</th>
                            <th style="border:1px solid black;">Jenis Kelamin</th>
                            <th style="border:1px solid black;">Tempat, Tanggal Lahir</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid 1px;">1</td>
                                <td style="border:1px solid 1px;">-</td>
                                <td style="border:1px solid 1px;">-</td>
                                <td style="border:1px solid 1px;">-</td>
                                <td style="border:1px solid 1px;">-</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="ttd">
                    <p> Kabupaten Tanah Laut,
                </p>
                       
                      <p>Kepala Balai Pelatihan dan Penerapan Teknologi Pertanian </p>
                      <br>
                      <br>
                      <h5 style="text-decoration:underline;">Nama</h5>
                      <h5>NIP. 19580726 1984 03 1 007</h5>
                      </div>
                    </div>
             </div>
         </body>
</html>