@extends('layouts.app')

@section('template_title')
    Diagnosis
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Diagnosis') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('diagnoses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>User Id</th>
										<th>Nama Pasien</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>Tanggal</th>
										<th>Hasil</th>
										<th>Saran</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diagnoses as $diagnosis)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $diagnosis->user_id }}</td>
											<td>{{ $diagnosis->nama_pasien }}</td>
											<td>{{ $diagnosis->jenis_kelamin }}</td>
											<td>{{ $diagnosis->alamat }}</td>
											<td>{{ $diagnosis->tanggal }}</td>
											<td>{{ $diagnosis->hasil }}</td>
											<td>{{ $diagnosis->saran }}</td>

                                            <td>
                                                <form action="{{ route('diagnoses.destroy',$diagnosis->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('diagnoses.show',$diagnosis->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('diagnoses.edit',$diagnosis->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $diagnoses->links() !!}
            </div>
        </div>
    </div>
@endsection
