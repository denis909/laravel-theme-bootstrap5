@props([
    'label' => null,
    'value' => 1,
    'id' => $id ?? ($name . '-checkbox')
])
@aware(['error' => null])
<div class="form-check">
    <input {{ $attributes->merge([
        'class' => $error ? 'is-invalid form-check-input' : 'form-check-input',
        'type' => 'checkbox',
        'value' => $value,
        'id' => $id 
    ]) }} />
    @if(!empty($label))
        <label class="form-check-label" for="{{ $id }}">{!! $label !!}</label>
    @endif
</div>