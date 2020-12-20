@extends('layout/layout2')

@section('title','Data PKL')

@section('container')


<body>
<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card" style="font-family:Made Tommy;">
            <div class="tbl col-md-11 mt-5 mx-auto">
            <h1 class="my-1">Data Mahasiswa PKL </h1>
                <a class="btn btn-danger mb-4"  href="/PKL/InputPKL">Tambah Data</a>
                <a href="/PKL/OlahPKL/export_excel" class="btn btn-success btn-right mb-4 " target="_blank" style="float:right;">Export Excel</a>
                @if (session('Informasi'))
                <div class="alert alert-success col-2">
                    {{ session('Informasi') }}
                </div>
                @endif
                @if (session('sukses'))
                <div class="alert alert-success col-2">
                    {{ session('sukses') }}
                </div>
                @endif
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
                            <th></th>
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
                            <td>
                            <a href="OlahPKL/{{$pkl->id}}/EditPKL" class="btn btn-success btn-sm">Edit</a>
                                    <form action="/PKL/OlahPKL/{{$pkl->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
                </br>
                </div>
                <div class="panel">
                    <div id="container"></div>
                </div> 
            </div>
        </div>
    </div>
</body>

@endsection 

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    var datas =  {!!json_encode($datas) !!}
    console.log(datas)
    Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Data Mahasiswa PKL Per-Jurusan Periode 2020'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
            }
        }
    },
    series: [{
        name: 'Jumlah',
        colorByPoint: true,
        data: datas
    }]
});
    </script>
@endsection
</html>
