@props([
    'name' => null,
    'placeholder' => null,
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
    @if($placeholder)
        <option>{{ $placeholder }}</option>
    @endif
    @foreach($options as $key => $label)
        @php
            $selected = ($key == $value);

            if (is_array($value))
            {
                $selected = (array_search($key, $value) !== false);
            }
        @endphp
        <option value="{{ $key }}" @selected($selected)>{{ $label }}</option>
    @endforeach
</select>  