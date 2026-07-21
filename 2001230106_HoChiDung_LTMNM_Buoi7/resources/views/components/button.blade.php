@props(['type' => 'submit', 'variant' => 'primary'])

@php
$styles = match($variant) {
    'danger' => 'background: #dc2626; color: white; border: none; padding: 8px 16px; border-radius: 6px; cursor: pointer; font-weight: 500; transition: 0.2s;',
    default => 'background: #2563eb; color: white; border: none; padding: 8px 16px; border-radius: 6px; cursor: pointer; font-weight: 500; transition: 0.2s;',
};
@endphp

<button type="{{ $type }}" style="{{ $styles }}" {{ $attributes }}>
    {{ $slot }}
</button>
