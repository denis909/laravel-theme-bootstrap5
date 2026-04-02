@use('Illuminate\View\ComponentAttributeBag')
@props([
    'label' => null,
    'labelAttributes' => new ComponentAttributeBag($labelAttributes ?? []),
    'error' => null,
    'errorAttributes' => new ComponentAttributeBag($errorAttributes ?? []),
    'labelFor' => null,
])
@if($label)
    <label {!! $labelAttributes->merge(['class' => 'form-label', 'for' => $labelFor]) !!}>{!! $label !!}</label>
@endif
<div class="input-group mb-3">
    {{ $slot }}
    @if($error)
        <span {{ $errorAttributes->merge(['class' => 'invalid-feedback', 'role' => 'alert']) }}>
            <strong>{{ $error }}</strong>
        </span>
    @endif
</div>