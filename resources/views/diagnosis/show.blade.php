@extends('layouts.admin')

@section('template_title')
    {{ $diagnosis->name ?? 'Show Diagnosis' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Diagnosis</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.diagnoses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Nama Pasien:</strong>
                                    {{ $diagnosis->nama_pasien }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Jenis Kelamin:</strong>
                                    @if ($diagnosis->jenis_kelamin == 0)
                                        Perempuan
                                    @else
                                        Laki-laki
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Alamat:</strong>
                                    {{ $diagnosis->alamat }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Tanggal:</strong>
                                    {{ $diagnosis->tanggal }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Hipotesa Awal:</strong>
                            {{ $diagnosis->hipotesa_awal }}
                        </div>
                        <div class="form-group">
                            <strong>Hasil:</strong>
                            {{ $diagnosis->hasil }}
                        </div>
                        <div class="form-group">
                            <strong>Saran:</strong>
                            {{ $diagnosis->saran }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
