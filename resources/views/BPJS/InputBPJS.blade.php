@extends('layout/layout2')

@section('title','HUMAN CAPITAL BUSINESS PARTNER TELKOM')

@section('container')

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card" style="font-family:Made Tommy;">
            <div class="tbl col-md-11 mt-5 mx-auto">

   
			<h1 class="my-1">Tambah Data BPJS </h1>
            <h4>HUMAN CAPITAL BUSINESS PARTNER</h4>
			<!-- Notifikasi Validasi -->
			@if ($errors->has('csv_file'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('csv_file')}}</strong>
			</span>
			@endif
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importExcel">
			Input File Excel
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
					<form class="form-horizontal" method="POST" action="/BPJS/OlahBPJS/import_excel" enctype="multipart/form-data">
					{{ csrf_field() }}
                            <div class="form-group">
                                <label for="csv_file" class="badge badge-dark col-md-4 control-label">File</label>
                                <div class="col-md-6">
                                <input id="csv_file" type="file" class="form-control" name="csv_file" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
					</div>
				</div>
			</div>
		</div>		
		<!-- Until this -->		
			<br>
	<form method="post" action="/BPJS/OlahBPJS">
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
			<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama" required>
			</div>
			<div class="col">
			<label for="NIK">NIK</label>
			<input type="text" id="NIK" name=" NIK" class="form-control" placeholder="Masukan NIK" required>
			</div>
		</div>
        <div class="row">    
		    <div class="col">
			<label for="divisi">Divisi</label>
			<input type="text" id="divisi" name="divisi" class="form-control" required placeholder="Masukan Divisi">
			</div>
			<div class="col">
			<label for="keterangan">Keterangan</label>
			<input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Masukan Keterangan" required>
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