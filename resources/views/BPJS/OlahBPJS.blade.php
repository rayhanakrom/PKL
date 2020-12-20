@extends('layout/layout2')

@section('title','Daftar Kartu BUMN')

@section('container')


<body>
<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card" style="font-family:Made Tommy;">
            <div class="tbl col-md-11 mt-5 mx-auto">
            <h1 class="my-1">Daftar Kartu BPJS Internal </h1>
            <a class="btn btn-danger mb-4"  href="/BPJS/InputBPJS">Tambah Data</a>
            <a href="/BPJS/OlahBPJS/export_excel" class="btn btn-success btn-right mb-4 " target="_blank" style="float:right;">Export Excel</a>
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
                            <th>NIK</th>
                            <th>Divisi</th>
                            <th>keterangan</th>
                            <th></th>
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
                            <td>
                            <a href="OlahBPJS/{{$bpjs->id}}/EditBPJS" class="btn btn-success btn-sm">Edit</a>
                                    <form action="/BPJS/OlahBPJS/{{$bpjs->id}}" method="post" class="d-inline">
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
                            <th>NIK</th>
                            <th>Divisi</th>
                            <th>keterangan</th>
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
        text: 'Data Kartu BPJS Periode 2020'
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
