@props([
    'name',
    'value', 
    'options', 
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
<div class="form-check">
    @foreach($options as $k => $v)
        <div>
            <label class="form-check-label">
                <input 
                    type="checkbox" 
                    name="{{ $name }}"
                    value="{{ $k }}"
                    {{ $attributes->merge([
                        'class' => 'form-check-input',
                        'checked' => array_search($k, $value ?? []) !== false ? true : false
                    ]) }}/>
                {{ $v }}
            </label>
        </div>
    @endforeach
</div>