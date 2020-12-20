@extends('layout/layout2')

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
            <h1 class="my-1">Daftar Rekening Karyawan PT.Telkom</h1>
            <a class="btn btn-danger mb-4"  href="/BUMN/InputBUMN">Tambah Data</a>
            <a href="/BUMN/OlahBUMN/export_excel" class="btn btn-success btn-right mb-4 " target="_blank" style="float:right;">Export Excel</a>    
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
                            <th>Nama Karyawan</th>
                            <th>Nama Panggilan</th>
                            <th>NIK</th>
                            <th>Bank</th>
                            <th>No Rekening</th>
                            <th>Status Kartu</th>
                            <th>Keterangan</th>
                            <th>Kondisi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bumns as $bumn)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</td>
                            <td>{{$bumn->nama_karyawan}}</td>
                            <td>{{$bumn->nama_panggilan}}</td>
                            <td>{{$bumn->NIK}}</td>
                            <td>{{$bumn->bank}}</td>
                            <td>{{$bumn->no_rekening}}</td>
                            <td>{{$bumn->status_kartu}}</td>
                            <td>{{$bumn->keterangan}}</td>
                            <td>{{$bumn->Ket}}</td>
                            <td>
                            <a href="OlahBUMN/{{$bumn->id}}/EditBUMN" class="btn btn-success btn-sm">Edit</a>
                                    <form action="/BUMN/OlahBUMN/{{$bumn->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>Nama Panggilan</th>
                            <th>NIK</th>
                            <th>Bank</th>
                            <th>No Rekening</th>
                            <th>Status Kartu</th>
                            <th>Keterangan</th>
                            <th>Kondisi</th>
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
    var datas = {{json_encode($datas)}}
    Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Data BUMN Internal Per - Periode 2020'
        },
        
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:px">{point.key}</span><table>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jumlah',
            data: datas

        }]
    });
    </script>

    @endsection
</html>
