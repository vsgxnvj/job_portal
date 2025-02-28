@props([
    'height' => 100,       // Default height if not provided
    'width' => '100px',    // Default width with explicit unit
    'source' => '',        // Default empty source
    'alt' => ''            // Add alt text for accessibility
])
<div>
  <img
    {{ $attributes->merge(['style' => "height: {$height}px; width: {$width}; object-fit: cover;"]) }}
    src="{{ $source }}"
    alt="{{ $alt }}"
  >
</div>
