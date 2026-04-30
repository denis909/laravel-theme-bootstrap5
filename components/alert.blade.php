@props([
    'message' => null,
    'type' => 'info'
])
<div class="alert alert-{{ $type }}">{{ $message ?? $slot }}</div>