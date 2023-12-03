@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-gray-500 focus:ring-gray-500']) !!}></textarea>
