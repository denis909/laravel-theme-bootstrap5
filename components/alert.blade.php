@props([
    'message' => null
])
<div class="alert alert-{{ $type }}">{{ $message ?? $slot }}</div>