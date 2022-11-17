@extends('layouts.admin')

@section('template_title')
    Diagnosis
@endsection

@section('content')
    <a href="{{ route('admin.diagnoses.create') }}" class="float btn-success" title="Create Proposal"
        style="height: 60px; width:60px">
        <i class="fa fa-plus my-float" style="margin-top: 20px"></i>
    </a>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Diagnosa Pasien</h3>
                    </div>
                </div>
            </div>

            @foreach ($diagnoses as $diagnosis)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            {{ ++$i }}. {{ $diagnosis->nama_pasien }}
                            <br />
                            @if ($diagnosis->jenis_kelamin == 0)
                                <i class="fas fa-female"></i> Perempuan
                            @else
                                <i class="fas fa-male"></i> Laki-laki
                            @endif
                            <div class="float-right">
                                <form action="{{ route('admin.diagnoses.destroy', $diagnosis->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-danger">{{ $diagnosis->hasil }}</h5>
                            <p class="card-text fst-italic text-muted"><i class="fas fa-home"></i> Alamat:
                                {{ $diagnosis->alamat }}</p>
                            <a href="{{ route('admin.diagnoses.show', $diagnosis->id) }}" class="btn btn-primary"><i
                                    class="fas fa-book"></i> Hasil Diagnosa</a>
                        </div>
                        <div class="card-footer text-muted">
                            <i class="fas fa-clock"></i> Diagnosis Created {{ $diagnosis->created_at }}
                        </div>
                    </div>
                </div>
            @endforeach
            {!! $diagnoses->links() !!}
        </div>
    @endsection
