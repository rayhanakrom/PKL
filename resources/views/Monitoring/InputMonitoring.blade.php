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

   
			<h1 class="my-1">Tambah Data Monitoring Internal </h1>
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
					<form class="form-horizontal" method="POST" action="/Monitoring/OlahMonitoring/import_excel" enctype="multipart/form-data">
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
	<form method="post" action="/Monitoring/OlahMonitoring">
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
            <div class="form-row">
					<div class="form-group col-md-6">
					<label for="nama">Masukan Nama</label>
					<input type="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" required>
					@error('nama') <div class="invalid-feedback"> {{ $message }}</div> @enderror
					</div>
					<div class="form-group col-md-6">
					<label for="NIK">NIK</label>
					<input type="NIK" class="form-control @error('NIK') is-invalid @enderror" id="NIK" placeholder="Masukan NIK Lengkap" name="NIK" required>
					@error('NIK') <div class="invalid-feedback"> {{ $message }}</div> @enderror
					</div>
				</div>
				<div class="form-group">
					<label for="detail_perihal">Detail Perihal</label>

					<select id="detail_perihal" class="form-control" name="detail_perihal">
						<option selected>Update Fasilitas Kesehatan</option>
						<option>BPJS</option>
						<option>Laporan Alih Faskes</option>
						<option>Laporan Kelahiran</option>
						<option>Laporan Kematian</option>
						<option>Laporan Pindah Titik Pelayanan</option>
						<option>Mutasi Data</option>
						<option>Pernikahan</option>
						<option>Perubahan Rekening Karyawan</option>
						<option>Smart Card</option>
						<option>Update Fasilitas Kesehatan</option>
						<option></option>
					</select>
				</div>
				<div class="form-group">
					<label for="via_laporan">Via Laporan</label>
						<select id="via_laporan" class="form-control" name="via_laporan">
							<option selected>Email</option>
							<option>Whatsapp</option>
							<option>Langsung</option>
						</select>
				</div>
					<div class="form-row">
						<div class="form-group col-md-4">
						<label for="tanggal_lapor">Tanggal Laporan</label>
						<input type="date" class="form-control" id="tanggal_lapor" name="tanggal_lapor">
					</div>
					<div class="form-group col-md-4">
						<label for="penerima">penerima</label>
						<Input id="penerima" class="form-control @error('penerima') is-invalid @enderror" placeholder="Isi Nama Penerima" name="penerima" required>
						@error('Penerima') <div class="invalid-feedback"> {{ $message }}</div> @enderror
					</div>
				<div class="form-group col-md-4">
				<label for="kelengkapan">Kelengkapan</label>
				<select id="kelengkapan" class="form-control" name="kelengkapan">
					<option selected>Lengkap</option>
					<option>Tidak Lengkap</option>
				</select>
			</div>
			
		<button type="submit" class="btn btn-info">Tambah</button>
		</form>
		</div>
	</div>
</div>



@endsection