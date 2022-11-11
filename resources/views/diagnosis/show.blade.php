@extends('layouts.app')

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
                            <a class="btn btn-primary" href="{{ route('diagnoses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $diagnosis->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nama Pasien:</strong>
                            {{ $diagnosis->nama_pasien }}
                        </div>
                        <div class="form-group">
                            <strong>Jenis Kelamin:</strong>
                            {{ $diagnosis->jenis_kelamin }}
                        </div>
                        <div class="form-group">
                            <strong>Alamat:</strong>
                            {{ $diagnosis->alamat }}
                        </div>
                        <div class="form-group">
                            <strong>Tanggal:</strong>
                            {{ $diagnosis->tanggal }}
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
