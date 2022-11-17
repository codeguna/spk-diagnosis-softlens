<div class="col-md-12">
    <label>Nama Petugas</label>
    <input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
    <input class="form-control" type="text" value="{{ Auth::User()->name }}" readonly>
</div>
<div class="col-md-12">
    <label>Nama Pasien</label>
    <input class="form-control" type="text" name="nama_pasien" required>
</div>
<div class="col-md-2">
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
<div class="col-md-10">
    <div class="mb-3">
        <label class="form-label">Alamat Pasien</label>
        <textarea class="form-control" name="alamat" rows="4" required></textarea>
    </div>
</div>
<div class="col-md-12">
    <label>Tanggal Pemeriksaan</label>
    <input type="date" class="form-control" name="tanggal" required>
</div>
<div class="col-md-12" style="margin-top: 1em">
    <label>Hipotesa Awal</label><br />
    @foreach ($diseases as $value => $key)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hipotesa_awal" id="{{ $value }}"
                value="{{ $key }}" onclick="{{ strtolower($value) }}()">
            <label class="form-check-label">{{ $key }} ({{ $value }})</label>
        </div>
    @endforeach
</div>
<div class="col-md-12">

</div>
<div class="col-md-12 text-center" style="margin-bottom: 1em">
    <hr>
    <h3>Form Gejala</h3>
</div>
@include('diagnosis.questions')
