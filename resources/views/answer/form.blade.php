<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_diagnosis') }}
            {{ Form::text('id_diagnosis', $answer->id_diagnosis, ['class' => 'form-control' . ($errors->has('id_diagnosis') ? ' is-invalid' : ''), 'placeholder' => 'Id Diagnosis']) }}
            {!! $errors->first('id_diagnosis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g001') }}
            {{ Form::text('g001', $answer->g001, ['class' => 'form-control' . ($errors->has('g001') ? ' is-invalid' : ''), 'placeholder' => 'G001']) }}
            {!! $errors->first('g001', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g002') }}
            {{ Form::text('g002', $answer->g002, ['class' => 'form-control' . ($errors->has('g002') ? ' is-invalid' : ''), 'placeholder' => 'G002']) }}
            {!! $errors->first('g002', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g003') }}
            {{ Form::text('g003', $answer->g003, ['class' => 'form-control' . ($errors->has('g003') ? ' is-invalid' : ''), 'placeholder' => 'G003']) }}
            {!! $errors->first('g003', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g004') }}
            {{ Form::text('g004', $answer->g004, ['class' => 'form-control' . ($errors->has('g004') ? ' is-invalid' : ''), 'placeholder' => 'G004']) }}
            {!! $errors->first('g004', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g005') }}
            {{ Form::text('g005', $answer->g005, ['class' => 'form-control' . ($errors->has('g005') ? ' is-invalid' : ''), 'placeholder' => 'G005']) }}
            {!! $errors->first('g005', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g006') }}
            {{ Form::text('g006', $answer->g006, ['class' => 'form-control' . ($errors->has('g006') ? ' is-invalid' : ''), 'placeholder' => 'G006']) }}
            {!! $errors->first('g006', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g007') }}
            {{ Form::text('g007', $answer->g007, ['class' => 'form-control' . ($errors->has('g007') ? ' is-invalid' : ''), 'placeholder' => 'G007']) }}
            {!! $errors->first('g007', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g008') }}
            {{ Form::text('g008', $answer->g008, ['class' => 'form-control' . ($errors->has('g008') ? ' is-invalid' : ''), 'placeholder' => 'G008']) }}
            {!! $errors->first('g008', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g009') }}
            {{ Form::text('g009', $answer->g009, ['class' => 'form-control' . ($errors->has('g009') ? ' is-invalid' : ''), 'placeholder' => 'G009']) }}
            {!! $errors->first('g009', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g010') }}
            {{ Form::text('g010', $answer->g010, ['class' => 'form-control' . ($errors->has('g010') ? ' is-invalid' : ''), 'placeholder' => 'G010']) }}
            {!! $errors->first('g010', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g011') }}
            {{ Form::text('g011', $answer->g011, ['class' => 'form-control' . ($errors->has('g011') ? ' is-invalid' : ''), 'placeholder' => 'G011']) }}
            {!! $errors->first('g011', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g012') }}
            {{ Form::text('g012', $answer->g012, ['class' => 'form-control' . ($errors->has('g012') ? ' is-invalid' : ''), 'placeholder' => 'G012']) }}
            {!! $errors->first('g012', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g013') }}
            {{ Form::text('g013', $answer->g013, ['class' => 'form-control' . ($errors->has('g013') ? ' is-invalid' : ''), 'placeholder' => 'G013']) }}
            {!! $errors->first('g013', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g014') }}
            {{ Form::text('g014', $answer->g014, ['class' => 'form-control' . ($errors->has('g014') ? ' is-invalid' : ''), 'placeholder' => 'G014']) }}
            {!! $errors->first('g014', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g015') }}
            {{ Form::text('g015', $answer->g015, ['class' => 'form-control' . ($errors->has('g015') ? ' is-invalid' : ''), 'placeholder' => 'G015']) }}
            {!! $errors->first('g015', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g016') }}
            {{ Form::text('g016', $answer->g016, ['class' => 'form-control' . ($errors->has('g016') ? ' is-invalid' : ''), 'placeholder' => 'G016']) }}
            {!! $errors->first('g016', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g017') }}
            {{ Form::text('g017', $answer->g017, ['class' => 'form-control' . ($errors->has('g017') ? ' is-invalid' : ''), 'placeholder' => 'G017']) }}
            {!! $errors->first('g017', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g018') }}
            {{ Form::text('g018', $answer->g018, ['class' => 'form-control' . ($errors->has('g018') ? ' is-invalid' : ''), 'placeholder' => 'G018']) }}
            {!! $errors->first('g018', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g019') }}
            {{ Form::text('g019', $answer->g019, ['class' => 'form-control' . ($errors->has('g019') ? ' is-invalid' : ''), 'placeholder' => 'G019']) }}
            {!! $errors->first('g019', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g020') }}
            {{ Form::text('g020', $answer->g020, ['class' => 'form-control' . ($errors->has('g020') ? ' is-invalid' : ''), 'placeholder' => 'G020']) }}
            {!! $errors->first('g020', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('g021') }}
            {{ Form::text('g021', $answer->g021, ['class' => 'form-control' . ($errors->has('g021') ? ' is-invalid' : ''), 'placeholder' => 'G021']) }}
            {!! $errors->first('g021', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>