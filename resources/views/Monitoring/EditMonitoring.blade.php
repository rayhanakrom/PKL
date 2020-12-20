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

   
			<h1 class="my-1">Edit Data Monitoring Internal </h1>
            <h4>HUMAN CAPITAL BUSINESS PARTNER</h4>
			<br>
	<form method="post" action="/Monitoring/OlahMonitoring/{{$monitorings->id}}">
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
            <div class="form-row">
					<div class="form-group col-md-6">
					<label for="nama">Masukan Nama</label>
					<input type="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$monitorings->nama}}" id="nama" placeholder="Masukan Nama" name="nama" required>
					@error('nama') <div class="invalid-feedback"> {{ $message }}</div> @enderror
					</div>
					<div class="form-group col-md-6">
					<label for="NIK">NIK</label>
					<input type="NIK" class="form-control @error('NIK') is-invalid @enderror" id="NIK" value="{{$monitorings->NIK}}" placeholder="Masukan NIK Lengkap" name="NIK" required>
					@error('NIK') <div class="invalid-feedback"> {{ $message }}</div> @enderror
					</div>
				</div>
				<div class="form-group">
					<label for="detail_perihal">Detail Perihal</label>

					<select id="detail_perihal" value="{{$monitorings->detail_perihal}}" class="form-control" name="detail_perihal">
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
						<select id="via_laporan" class="form-control" value="{{$monitorings->via_laporan}}" name="via_laporan">
							<option selected>Email</option>
							<option>Whatsapp</option>
							<option>Langsung</option>
						</select>
				</div>
					<div class="form-row">
						<div class="form-group col-md-4">
						<label for="tanggal_lapor">Tanggal Laporan</label>
						<input type="date" class="form-control" value="{{$monitorings->tanggal_lapor}}" id="tanggal_lapor" name="tanggal_lapor">
					</div>
					<div class="form-group col-md-4">
						<label for="penerima">penerima</label>
						<Input id="penerima" value="{{$monitorings->penerima}}" class="form-control @error('penerima') is-invalid @enderror" placeholder="Isi Nama Penerima" name="penerima" required>
						@error('Penerima') <div class="invalid-feedback"> {{ $message }}</div> @enderror
					</div>
				<div class="form-group col-md-4">
				<label for="kelengkapan">Kelengkapan</label>
				<select id="kelengkapan" class="form-control" value="{{$monitorings->kelengkapan}}" name="kelengkapan">
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