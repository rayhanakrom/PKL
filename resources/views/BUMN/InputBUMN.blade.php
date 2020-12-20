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

   
			<h1 class="my-1">Tambah Data Kartu BUMN </h1>
			<h4>HUMAN CAPITAL BUSINESS PARTNER</h4>
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
					<form class="form-horizontal" method="POST" action="/BUMN/OlahBUMN/import_excel" enctype="multipart/form-data">
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
	<form method="post" action="/BUMN/OlahBUMN">
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
			<label for="nama_karyawan">Masukan Nama Lengkap</label>
			<input type="text" id="nama_karyawan" name="nama_karyawan" class="form-control" placeholder="Masukan Nama Lengkap" required>
			</div>
			<div class="col">
			<label for="nama_panggilan">Masukan Nama Panggilan</label>
			<input type="text" id="nama_panggilan" name=" nama_panggilan" class="form-control" placeholder="Masukan Panggilan" required>
			</div>
		</div>
        <div class="row">    
		    <div class="col">
			<label for="NIK">NIK</label>
			<input type="text" id="NIK" name="NIK" class="form-control" required placeholder="Masukan NIK">
			</div>	
			<div class="col">
			<label for="bank">Nama Bank</label>
			<select id="bank" class="form-control" name="bank">
							<option selected>Mandiri</option>
							<option>Mandiri Syariah</option>
							<option>BNI</option>
							<option>BNI Syariah</option>
							<option>BRI</option>
							<option>BRI Syariah</option>
							<option>BTN</option>
						</select></div>
			<div class="col">
			<label for="no_rekening">Masukan No Rekening</label>
			<input type="text" id="no_rekening" name="no_rekening" class="form-control" placeholder="Masukan No Rekening" required>
			</div>
		</div>

			<div class="row">
			<div class="col-4 my-2">
			<label for="status_kartu">Status Kartu</label>
			<select id="status_kartu" class="form-control" name="status_kartu">
							<option selected>Cetak Baru</option>
							<option>Tidak Cetak Baru</option>
			</select>
		</div>
			<div class="col-4 my-2">
			<label for="keterangan">Keterangan</label>
			<select id="keterangan" class="form-control" name="keterangan">
							<option selected>Chip Rusak</option>
							<option>Foto Ganti</option>
							<option>Foto Salah</option>
							<option>Kartu Rusak</option>
							<option>Nama Salah</option>
			</select>
		</div>
		<div class="col-4 my-2">
			<label for="keterangan">Status</label>
			<select id="keterangan" class="form-control" name="keterangan">
							<option selected>Siap Diambil</option>
							<option>Belum</option>
			</select>
		</div>
		<button type="sumbit" class="btn btn-info btn-sm mt-4"> Tambah Data</buton>			
        </hr>
        </hr>
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