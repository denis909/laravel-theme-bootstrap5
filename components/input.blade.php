@props([
    'name' => null,
    'type' => 'text'
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
<input type="{{ $type }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'form-control']) }} />  