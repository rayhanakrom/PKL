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
            <h3 class="my-1">Daftar Rekening Karyawan PT.Telkom</h3>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>Nama Panggilan</th>
                            <th>NIK</th>
                            <th>Status Kartu</th>
                            <th>Keterangan</th>
                            <th>Kondisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bumns as $bumn)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</td>
                            <td>{{$bumn->nama_karyawan}}</td>
                            <td>{{$bumn->nama_panggilan}}</td>
                            <td>{{$bumn->NIK}}</td>
                            <td>{{$bumn->status_kartu}}</td>
                            <td>{{$bumn->keterangan}}</td>
                            <td>{{$bumn->Ket}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>Nama Panggilan</th>
                            <th>NIK</th>
                            <th>Status Kartu</th>
                            <th>Keterangan</th>
                            <th>Kondisi</th>
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