@props([
    'name' => null,
    'prompt' => null,
    'options' => [],
    'value' => null
])
@aware(['error' => null])
@php
if ($error)
{
    $attributes = $attributes->merge([
        'class' => 'is-invalid'
    ]);
}
@endphp
<select name="{{ $name }}" {{ $attributes->merge(['class' => 'form-select']) }}>
    @if($prompt)
        <option>{{ $prompt }}</option>
    @endif
    @foreach($options as $key => $label)
        <option value="{{ $key }}" {{ ($value == $key) ? ' selected' : '' }}>{{ $label }}</option>
    @endforeach
</select>  