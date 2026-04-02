@props([
    'label' => null,
    'value' => 1
])
<div class="form-check form-switch">
    <input {{ $attributes->merge([
        'type' => 'checkbox',
        'value' => $value,
        'class' => 'form-check-input' 
    ]) }} />
    @if(!empty($label))
        <label class="form-check-label" for="{{ $id }}">{!! $label !!}</label>
    @endif
</div>