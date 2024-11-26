<input {{ $attributes->merge(['class' => 'w-full rounded-full border-gray-200 bg-white p-4 text-sm font-medium rounded-tl-none']) }}>
@isset($validation)
    <p class="w-full text-xs text-red-500"> {{ $validation }} </p>
@endisset
