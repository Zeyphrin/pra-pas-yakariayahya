@extends('layouts.main')

@section('content')
<div class="container">
    <div class="pb-3">
        <a href='{{ url('international') }}' class="btn btn-danger"> Kembali </a> 
    </div>
    <h1 class="display-4 mb-4">Detail Perusahaan</h1>

    <div class="form-group p-3" data-aos="fade-up">
        <label for="nama">Nama Perusahaan</label>
        <input type="nama" id="nama" name="nama" value="{{ $inter->nama }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3" data-aos="fade-up">
        <label for="nilai_aset">Nilai Asset</label>
        <input type="nilai_aset" id="nilai_aset" name="nilai_aset" value="{{ $inter->nilai_aset }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3" data-aos="fade-up">
        <label for="pencipta">Pencipta</label>
        <input type="pencipta" id="pencipta" name="pencipta" value="{{ $inter->pencipta }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3" data-aos="fade-up">
        <label for="bidang">Bidang</label>
        <input type="bidang" id="bidang" name="bidang" value="{{ $inter->bidang }}" class="form-control" readonly>
    </div>

    <div class="form-group p-3" data-aos="fade-up">
        <label for="tgl_berdiri">Tanggal Berdiri</label>
        <input type="tgl_berdiri" id="tgl_berdiri" name="tgl_berdiri" value="{{ $inter->tgl_berdiri }}" class="form-control" readonly>
    </div>

</div>
@endsection