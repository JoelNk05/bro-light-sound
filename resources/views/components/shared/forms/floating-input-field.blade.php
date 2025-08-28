<div class="form-floating {{ !empty(@$titleTooltip) ?? 'tooltip-wrapper mb-0 position-relative' }}">
    <input type="{{$type}}" class="form-control {{ $errors->has($name) ? 'is-invalid' : null }}" id="{{$id}}" name="{{$name}}" placeholder="{{$label}}" value="{{ old($name) }}"{{ @$required == 'true' ? 'required' : null }}>
    <label for="{{$id}}">{{$label}}</label>
    @if (!empty(@$titleTooltip))
        <button
            type="button"
            class="info-icon btn text-black btn-link p-0 position-absolute"
            style="top: 50%; right: 12px; transform: translateY(-50%); z-index: 2;"
            data-bs-toggle="tooltip"
            data-bs-placement="auto"
            title="{!! $titleTooltip !!}",
            aria-label="{{$titleTooltip}}">
            <i class="fas fa-info-circle" aria-hidden="true"></i>
        </button>
    @endif
    @if (!empty($errors))
{{--        <x-shared.forms.invalid-feedback :errors="$errors" column="{{$name}}" />--}}
    @endif
</div>
