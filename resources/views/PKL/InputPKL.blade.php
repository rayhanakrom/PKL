@extends('layout/layout2')

@section('title','Data Mahasiswa PKL')

@section('container')



<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card" style="font-family:Made Tommy;">
            <div class="tbl col-md-11 mt-5 mx-auto">

   
			<h1 class="my-1">Tambah Data Mahasiswa PKL </h1>
            <h4>HUMAN CAPITAL BUSINESS PARTNER
			</h4>

			<!-- Notifikasi Validasi -->
			 @if ($errors->has('csv_file'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('csv_file')}}</strong>
			</span>
			@endif
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importExcel">
			Input File XML
			</button>
			<!-- Modal -->
			<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Masukan file</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<!-- File Input -->
					<form class="form-horizontal" method="POST" action="/PKL/OlahPKL/import_excel" enctype="multipart/form-data">
					{{ csrf_field() }}
                            <div class="form-group">
                                <label for="csv_file" class="badge badge-dark col-md-4 control-label">File</label>
                                <div class="col-md-6">
                                <input id="csv_file" type="file" class="form-control" name="csv_file" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
			<!-- Until this -->		
					</div>
				</div>
			  </div>
			</div>
			<br>
	<form method="post" action="/PKL/OlahPKL">
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
			<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama" required>
			</div>
		</div>
		<div class="row my-1">
			<div class="col">
			<label for="NIM">NIM</label>
			<input type="text" id="NIM" name=" NIM" class="form-control" placeholder="Masukan NIM" required>
			</div>
		<div class="col">
			<label for="email">Email</label>
			<input type="text" id="email" name="email" class="form-control" required placeholder="Masukan Email">
			</div>
		</div>
        <div class="row my-1">
			<div class="col-6">
			<label for="asal">Asal</label>
			<input type="text" id="asal" name="asal" class="form-control" placeholder="Masukan Asal" required>
			</div>
        <div class="col">
            <label for="universitas">Universitas</label>
            <input type="text" id="universitas" name="universitas" class="form-control" placeholder="Masukan Universitas" required>
        </div>
        </div>
        <div class="row my-1">
			<div class="col-6">
			<label for="jurusan">Jurusan</label>
			<input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Masukan Jurusan" required>
			</div>
        <div class="col">
            <label for="no_telefon">No Telepon</label>
            <input type="text" id="no_telefon" name="no_telefon" class="form-control" placeholder="Masukan No Telepon" required>
        </div>
        </div>
		
		<div class="form-group mt-3">
			<div class="row">
			<legend class="col-form-label col-sm-3 pt-0">Status</legend>
			<div class="col-sm-10">
				<div class="form-check">
				<input class="form-check-input" type="radio" name="status" id="status" value="option" checked>
				<label class="form-check-label" for="status">
					Aktif
				</label>
				</div>
				<div class="form-check">
				<input class="form-check-input" type="radio" name="status" id="status" value="option">
				<label class="form-check-label" for="status">
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