@extends('layouts.admin')

@section('template_title')
    Create Diagnosis
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Diagnosis</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.diagnoses.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row" style="margin-bottom: 1em">
                                @include('diagnosis.form')
                            </div>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-check"></i> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
