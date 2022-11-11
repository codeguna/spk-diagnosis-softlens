@extends('layouts.app')

@section('template_title')
    Answer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Answer') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('answers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Diagnosis</th>
										<th>G001</th>
										<th>G002</th>
										<th>G003</th>
										<th>G004</th>
										<th>G005</th>
										<th>G006</th>
										<th>G007</th>
										<th>G008</th>
										<th>G009</th>
										<th>G010</th>
										<th>G011</th>
										<th>G012</th>
										<th>G013</th>
										<th>G014</th>
										<th>G015</th>
										<th>G016</th>
										<th>G017</th>
										<th>G018</th>
										<th>G019</th>
										<th>G020</th>
										<th>G021</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($answers as $answer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $answer->id_diagnosis }}</td>
											<td>{{ $answer->g001 }}</td>
											<td>{{ $answer->g002 }}</td>
											<td>{{ $answer->g003 }}</td>
											<td>{{ $answer->g004 }}</td>
											<td>{{ $answer->g005 }}</td>
											<td>{{ $answer->g006 }}</td>
											<td>{{ $answer->g007 }}</td>
											<td>{{ $answer->g008 }}</td>
											<td>{{ $answer->g009 }}</td>
											<td>{{ $answer->g010 }}</td>
											<td>{{ $answer->g011 }}</td>
											<td>{{ $answer->g012 }}</td>
											<td>{{ $answer->g013 }}</td>
											<td>{{ $answer->g014 }}</td>
											<td>{{ $answer->g015 }}</td>
											<td>{{ $answer->g016 }}</td>
											<td>{{ $answer->g017 }}</td>
											<td>{{ $answer->g018 }}</td>
											<td>{{ $answer->g019 }}</td>
											<td>{{ $answer->g020 }}</td>
											<td>{{ $answer->g021 }}</td>

                                            <td>
                                                <form action="{{ route('answers.destroy',$answer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('answers.show',$answer->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('answers.edit',$answer->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $answers->links() !!}
            </div>
        </div>
    </div>
@endsection
