<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $diagnosis->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nama_pasien') }}
            {{ Form::text('nama_pasien', $diagnosis->nama_pasien, ['class' => 'form-control' . ($errors->has('nama_pasien') ? ' is-invalid' : ''), 'placeholder' => 'Nama Pasien']) }}
            {!! $errors->first('nama_pasien', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('jenis_kelamin') }}
            {{ Form::text('jenis_kelamin', $diagnosis->jenis_kelamin, ['class' => 'form-control' . ($errors->has('jenis_kelamin') ? ' is-invalid' : ''), 'placeholder' => 'Jenis Kelamin']) }}
            {!! $errors->first('jenis_kelamin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alamat') }}
            {{ Form::text('alamat', $diagnosis->alamat, ['class' => 'form-control' . ($errors->has('alamat') ? ' is-invalid' : ''), 'placeholder' => 'Alamat']) }}
            {!! $errors->first('alamat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tanggal') }}
            {{ Form::text('tanggal', $diagnosis->tanggal, ['class' => 'form-control' . ($errors->has('tanggal') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal']) }}
            {!! $errors->first('tanggal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hasil') }}
            {{ Form::text('hasil', $diagnosis->hasil, ['class' => 'form-control' . ($errors->has('hasil') ? ' is-invalid' : ''), 'placeholder' => 'Hasil']) }}
            {!! $errors->first('hasil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('saran') }}
            {{ Form::text('saran', $diagnosis->saran, ['class' => 'form-control' . ($errors->has('saran') ? ' is-invalid' : ''), 'placeholder' => 'Saran']) }}
            {!! $errors->first('saran', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>