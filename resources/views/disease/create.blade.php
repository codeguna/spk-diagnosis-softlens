@extends('layouts.admin')

@section('template_title')
    Create Disease
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Disease</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.diseases.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('disease.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
