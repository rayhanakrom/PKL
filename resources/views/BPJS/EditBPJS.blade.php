@extends('layout/layout2')

@section('title','Edit Data Kartu BPJS')

@section('container')

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card" style="font-family:Made Tommy;">
            <div class="tbl col-md-11 mt-5 mx-auto">

   
			<h1 class="my-1">Edit Data Kartu BPJS </h1>
            <h4>HUMAN CAPITAL BUSINESS PARTNER</h4>
			<br>
	<form method="post" action="/BPJS/OlahBPJS/{{$bpjss->id}}">
    @method('patch')
	@csrf
		<div class="row-6">
			@if ($errors->any())
			<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
			</ul>
			</div>
			@endif
        <div class="row">
			<div class="col">
			<label for="nama">Masukan Nama</label>
			<input type="text" id="nama" name="nama" class="form-control" value="{{$bpjss->nama}}" placeholder="Masukan Nama" required>
			</div>
			<div class="col">
			<label for="NIK">NIK</label>
			<input type="text" id="NIK" name=" NIK" class="form-control" value="{{$bpjss->NIK}}" placeholder="Masukan NIK" required>
			</div>
		</div>
        <div class="row">    
		    <div class="col">
			<label for="divisi">Divisi</label>
			<input type="text" id="divisi" name="divisi" class="form-control" value="{{$bpjss->divisi}}" required placeholder="Masukan Divisi">
			</div>
			<div class="col">
			<label for="keterangan">Keterangan</label>
			<input type="text" id="keterangan" name="keterangan" class="form-control" value="{{$bpjss->keterangan}}" placeholder="Masukan Keterangan" required>
			</div>
		</div>
        </hr>
        </hr>
		<button type="sumbit" class="btn btn-info mt-2"> Tambah Data</buton>			
		
	</form>
</div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection