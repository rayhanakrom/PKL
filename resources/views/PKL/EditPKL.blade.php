@extends('layout.layout2')

@section('title','HUMAN CAPITAL BUSINESS PARTNER TELKOM')

@section('container')



<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card" style="font-family:Made Tommy;">
            <div class="tbl col-md-11 mt-5 mx-auto">

   
			<h1 class="my-1">Edit Data Mahasiswa PKL </h1>
            <h4>HUMAN CAPITAL BUSINESS PARTNER</h4>
			<br>
	<form method="post" action="/PKL/OlahPKL/{{$pkls->id}}">
    @method('patch')
	@csrf
		<div class="row">
			@if ($errors->any())
			<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
			</ul>
			</div>
			@endif
			<div class="col">
			<label for="nama">Masukan Nama</label>
			<input type="text" id="nama" name="nama" class="form-control" value="{{$pkls->nama}}" placeholder="Masukan Nama" required>
			</div>
		</div>
		<div class="row my-1">
			<div class="col">
			<label for="NIM">NIM</label>
			<input type="text" id="NIM" name=" NIM" class="form-control" value="{{$pkls->NIM}}"  placeholder="Masukan NIM" required>
			</div>
		<div class="col">
			<label for="email">Email</label>
			<input type="text" id="email" name="email" class="form-control" value="{{$pkls->email}}" required placeholder="Masukan Email">
			</div>
		</div>
        <div class="row my-1">
			<div class="col-6">
			<label for="asal">Asal</label>
			<input type="text" id="asal" name="asal" class="form-control" value="{{$pkls->asal}}"  placeholder="Masukan Asal" required>
			</div>
        <div class="col">
            <label for="universitas">Universitas</label>
            <input type="text" id="universitas" name="universitas" class="form-control" value="{{$pkls->universitas}}" placeholder="Masukan Universitas" required>
        </div>
        </div>
        <div class="row my-1">
			<div class="col-6">
			<label for="jurusan">Jurusan</label>
			<input type="text" id="jurusan" name="jurusan" class="form-control" value="{{$pkls->jurusan}}" placeholder="Masukan Jurusan" required>
			</div>
        <div class="col">
            <label for="no_telefon">No Telepon</label>
            <input type="text" id="no_telefon" name="no_telefon" class="form-control" value="{{$pkls->no_telefon}}" placeholder="Masukan No Telepon" required>
        </div>
        </div>
		
		<div class="form-group mt-3">
			<div class="row">
			<label class="col-form-label col-sm-3 pt-0" For="Status" id="Status" value="{{$pkls->Status}}">Status</label>
			<div class="col-sm-10">
				<div class="form-check">
				<input class="form-check-input" type="radio" name="Status" id="Status" checked>
				<label class="form-check-label" for="Status">
					Aktif
				</label>
				</div>
				<div class="form-check">
				<input class="form-check-input" type="radio" name="Status" id="Status" checked>
				<label class="form-check-label" for="Status">
					Tidak Aktif
				</label>
				</div>
		<button type="sumbit" class="btn btn-info mt-2"> Tambah Data</buton>			
		</div>
		</div>
	</form>
</div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection