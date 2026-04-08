@use('Illuminate\View\ComponentAttributeBag')

@props([
    'label' => null,
    'labelAttributes' => [],
    'error' => null,
    'errorAttributes' => [],
    'labelFor' => null
])

@php

$labelAttributes = new ComponentAttributeBag($labelAttributes);

$errorAttributes = new ComponentAttributeBag($errorAttributes);

@endphp

@if($label)
    <label {!! $labelAttributes->merge(['class' => 'form-label', 'for' => $labelFor]) !!}>{!! $label !!}</label>
@endif
<div {{ $attributes->merge(['class' => 'mb-3']) }}>
    {{ $slot }}
    @if($error)
        <span {{ $errorAttributes->merge(['class' => 'invalid-feedback', 'role' => 'alert']) }}>
            <strong>{{ $error }}</strong>
        </span>
    @endif
</div>