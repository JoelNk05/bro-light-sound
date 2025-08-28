<div class="form-group form-floating">
    <select name="{{$name}}" id="{{$id}}" {{ @$multiple == 'true' ? 'multiple' : null }} data-live-search="true" data-selected-text-format="count > 2" class="form-select select-customized">
        <option value="" disabled selected>{{ $placeholder ?? 'Bitte wählen' }}</option>

{{--        @foreach($primaryModel as $model)--}}
{{--            @if($model instanceof UnitEnum)--}}
{{--                <option value="{{ $model->value }}" {{ @$multiple == 'true' ? (in_array($model->value, @old($name) ?? []) ? 'selected' : null) : (@old($name) == $model->value ? 'selected' : null) }}>{{ $model->label() }}</option>--}}
{{--            @else--}}
{{--                <option value="{{ $model->id }}" {{ @$multiple == 'true' ? (in_array($model->id, @old($name) ?? []) ? 'selected' : null) : (@old($name) == $model->id ? 'selected' : null) }}>{{ $model->$fieldname }}</option>--}}
{{--            @endif--}}
{{--        @endforeach--}}
    </select>
    <label for="{{$id}}">{{$label}} </label>
</div>
