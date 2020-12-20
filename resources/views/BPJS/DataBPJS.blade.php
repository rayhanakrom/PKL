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
            <h3 class="my-1">Daftar Kartu BPJS Internal</h3>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Divisi</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bpjss as $bpjs)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</td>
                            <td>{{$bpjs->nama}}</td>
                            <td>{{$bpjs->NIK}}</td>
                            <td>{{$bpjs->divisi}}</td>
                            <td>{{$bpjs->keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Divisi</th>
                            <th>Keterangan</th>
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