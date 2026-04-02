@props([
    'name' => null,
    'value' => '',
    'rows' => 3
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
<textarea name="{{ $name }}" rows="{{ $rows }}" {{ $attributes->merge([
    'class' => 'form-control'
]) }} />{{ $value }}</textarea>