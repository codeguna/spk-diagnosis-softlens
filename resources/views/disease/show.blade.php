@extends('layouts.admin')

@section('template_title')
    {{ $disease->name ?? 'Show Disease' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Disease</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.diseases.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $disease->name }}
                        </div>
                        <div class="form-group">
                            <strong>Diseases Code:</strong>
                            {{ $disease->diseases_code }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
