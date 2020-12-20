@extends('layout/layout')

@section('title','HUMAN CAPITAL BUSINESS PARTNER TELKOM')

@section('container')

<body>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card" style="font-family:Made Tommy;">
            <div class="tbl col-md-11 mt-5 mx-auto">
            <h3 class="my-1">Daftar Monitoring Karyawan</h3>
                <table id="example" class="display my-2" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>NIK</th>
                            <th>Detail Perihal</th>
                            <th>Via Laporan</th>
                            <th>Tanggal Laporan</th>
                            <th>Penerima</th>
                            <th>Kelengkapan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($monitorings as $monitoring)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</td>
                            <td>{{$monitoring->nama}}</td>
                            <td>{{$monitoring->NIK}}</td>
                            <td>{{$monitoring->detail_perihal}}</td>
                            <td>{{$monitoring->via_laporan}}</td>
                            <td>{{$monitoring->tanggal_lapor}}</td>
                            <td>{{$monitoring->penerima}}</td>
                            <td>{{$monitoring->kelengkapan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>NIK</th>
                            <th>Detail Perihal</th>
                            <th>Via Laporan</th>
                            <th>Tanggal Laporan</th>
                            <th>Penerima</th>
                            <th>Kelengkapan</th>
                        </tr>
                    </tfoot>
                </table>
            <br>
             </div>
            </div>
        </div>
    </div>
</body>


@endsection 

</html>