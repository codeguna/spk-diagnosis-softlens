<div class="col-md-12">
    <label>Nama Petugas</label>
    <input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
    <input class="form-control" type="text" value="{{ Auth::User()->name }}" readonly>
</div>
<div class="col-md-12">
    <label>Nama Pasien</label>
    <input class="form-control" type="text" name="nama_pasien" required>
</div>
<div class="col-md-6">
    <label>Jenis Kelamin</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="1" required>
        <label class="form-check-label">
            Laki-laki
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="0" required>
        <label class="form-check-label">
            Perempuan
        </label>
    </div>
</div>
<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">Alamat Pasien</label>
        <textarea class="form-control" name="alamat" rows="4" required></textarea>
    </div>
</div>
<div class="col-md-12">
    <label>Tanggal Pemeriksaan</label>
    <input type="date" class="form-control" name="tanggal" required>
</div>
<div class="col-md-12 text-center" style="margin-bottom: 1em">
    <hr>
    <h3>Form Gejala</h3>
</div>
@include('diagnosis.questions')
