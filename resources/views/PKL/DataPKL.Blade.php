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
            <h3 class="my-1">Data PKL Mahasiswa</h3>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Email</th>
                            <th>Asal</th>
                            <th>Universitas</th>
                            <th>Jurusan</th>
                            <th>No Telefon</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pkls as $pkl)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</td>
                            <td>{{$pkl->nama}}</td>
                            <td>{{$pkl->NIM}}</td>
                            <td>{{$pkl->email}}</td>
                            <td>{{$pkl->asal}}</td>
                            <td>{{$pkl->universitas}}</td>
                            <td>{{$pkl->jurusan}}</td>
                            <td>{{$pkl->no_telefon}}</td>
                            <td>{{$pkl->Status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Email</th>
                            <th>Asal</th>
                            <th>Universitas</th>
                            <th>Jurusan</th>
                            <th>No Telefon</th>
                            <th>Status</th>
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
