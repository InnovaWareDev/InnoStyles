<select {{ $attributes->merge(['class' => 'block cursor-pointer outline-0 w-full p-2 pe-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500']) }}>
    {{ $slot }}
</select>
@isset($validation)
    <p class="w-full text-xs text-red-500"> {{ $validation }} </p>
@endisset
