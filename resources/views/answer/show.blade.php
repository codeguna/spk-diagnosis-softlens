@extends('layouts.app')

@section('template_title')
    {{ $answer->name ?? 'Show Answer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Answer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('answers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Diagnosis:</strong>
                            {{ $answer->id_diagnosis }}
                        </div>
                        <div class="form-group">
                            <strong>G001:</strong>
                            {{ $answer->g001 }}
                        </div>
                        <div class="form-group">
                            <strong>G002:</strong>
                            {{ $answer->g002 }}
                        </div>
                        <div class="form-group">
                            <strong>G003:</strong>
                            {{ $answer->g003 }}
                        </div>
                        <div class="form-group">
                            <strong>G004:</strong>
                            {{ $answer->g004 }}
                        </div>
                        <div class="form-group">
                            <strong>G005:</strong>
                            {{ $answer->g005 }}
                        </div>
                        <div class="form-group">
                            <strong>G006:</strong>
                            {{ $answer->g006 }}
                        </div>
                        <div class="form-group">
                            <strong>G007:</strong>
                            {{ $answer->g007 }}
                        </div>
                        <div class="form-group">
                            <strong>G008:</strong>
                            {{ $answer->g008 }}
                        </div>
                        <div class="form-group">
                            <strong>G009:</strong>
                            {{ $answer->g009 }}
                        </div>
                        <div class="form-group">
                            <strong>G010:</strong>
                            {{ $answer->g010 }}
                        </div>
                        <div class="form-group">
                            <strong>G011:</strong>
                            {{ $answer->g011 }}
                        </div>
                        <div class="form-group">
                            <strong>G012:</strong>
                            {{ $answer->g012 }}
                        </div>
                        <div class="form-group">
                            <strong>G013:</strong>
                            {{ $answer->g013 }}
                        </div>
                        <div class="form-group">
                            <strong>G014:</strong>
                            {{ $answer->g014 }}
                        </div>
                        <div class="form-group">
                            <strong>G015:</strong>
                            {{ $answer->g015 }}
                        </div>
                        <div class="form-group">
                            <strong>G016:</strong>
                            {{ $answer->g016 }}
                        </div>
                        <div class="form-group">
                            <strong>G017:</strong>
                            {{ $answer->g017 }}
                        </div>
                        <div class="form-group">
                            <strong>G018:</strong>
                            {{ $answer->g018 }}
                        </div>
                        <div class="form-group">
                            <strong>G019:</strong>
                            {{ $answer->g019 }}
                        </div>
                        <div class="form-group">
                            <strong>G020:</strong>
                            {{ $answer->g020 }}
                        </div>
                        <div class="form-group">
                            <strong>G021:</strong>
                            {{ $answer->g021 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
