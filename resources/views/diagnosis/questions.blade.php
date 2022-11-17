@foreach ($questions as $question)
    <div class="col-md-4" id="{{ $question->question_code }}">
        <label class="fw-bold">{{ ++$i }}. {{ $question->name }}</label>
        <br />
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="{{ $question->question_code }}" value="1">
            <label class="form-check-label">Ya</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="{{ $question->question_code }}" value="0">
            <label class="form-check-label">Tidak</label>
        </div>
    </div>
@endforeach
