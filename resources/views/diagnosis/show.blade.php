@extends('layouts.admin')

@section('template_title')
    {{ $diagnosis->name ?? 'Show Diagnosis' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="card mb-3" style="max-width: 1200px;border-radius: 10px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/5407205/pexels-photo-5407205.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-header">
                        <h5 class="card-title">{{ $diagnosis->nama_pasien }} - @if ($diagnosis->jenis_kelamin == 0)
                                Perempuan
                            @else
                                Laki-laki
                            @endif
                        </h5>
                    </div>
                    <div class="card-body">
                        <h6>Hipotesa awal: {{ $diagnosis->hipotesa_awal }}</h6>
                        <h6>Hipotesa akhir: {{ $diagnosis->hasil }}</h6>
                        <p class="card-text"><strong>Saran:</strong> {{ $diagnosis->saran }}</p>

                    </div>
                    <div class="card-footer">
                        <p class="card-text text-muted">
                            <i class="fa fa-calendar"> Tanggal Pemeriksaan: {{ $diagnosis->tanggal }}</i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
