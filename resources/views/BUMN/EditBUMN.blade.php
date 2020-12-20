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
			<br>
	<form method="post" action="/BUMN/OlahBUMN/{{$bumns->id}}">
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
			<label for="nama_karyawan">Masukan Nama Lengkap</label>
			<input type="text" id="nama_karyawan" value="{{$bumns->nama_karyawan}}" name="nama_karyawan" class="form-control" placeholder="Masukan Nama Lengkap" required>
			</div>
			<div class="col">
			<label for="nama_panggilan">Masukan Nama Panggilan</label>
			<input type="text" id="nama_panggilan" value="{{$bumns->nama_panggilan}}" name=" nama_panggilan" class="form-control" placeholder="Masukan Panggilan" required>
			</div>
		</div>
        <div class="row">    
		    <div class="col">
			<label for="NIK">NIK</label>
			<input type="text" id="NIK" name="NIK" value="{{$bumns->NIK}}" class="form-control" required placeholder="Masukan NIK">
			</div>	
			<div class="col">
			<label for="bank">Nama Bank</label>
			<select id="bank" class="form-control" value="{{$bumns->bank}}" name="bank">
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
			<input type="text" id="no_rekening" name="no_rekening" class="form-control" value="{{$bumns->no_rekening}}" placeholder="Masukan No Rekening" required>
			</div>
		</div>

			<div class="row">
			<div class="col-4 my-2">
			<label for="status_kartu">Status Kartu</label>
			<select id="status_kartu" class="form-control" value="{{$bumns->status_kartu}}" name="status_kartu">
							<option selected>Cetak Baru</option>
							<option>Tidak Cetak Baru</option>
			</select>
		</div>
			<div class="col-4 my-2">
			<label for="keterangan">Keterangan</label>
			<select id="keterangan" class="form-control" value="{{$bumns->keterangan}}" name="keterangan">
							<option selected>Chip Rusak</option>
							<option>Foto Ganti</option>
							<option>Foto Salah</option>
							<option>Kartu Rusak</option>
							<option>Karpeg Hilang</option>
							<option>Nama Salah</option>
			</select>
		</div>
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