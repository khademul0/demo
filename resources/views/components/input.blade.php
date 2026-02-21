<div class="mb-3">
    @if($label)
    <label class="form-label">{{ $label }}</label>
    @endif

    <input type="{{ $type }}" name="{{ $name }}" class="form-control" value="{{ old($name) }}">
</div>