<input {{ $attributes }} class="block outline-0 w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 @isset($validation) border-red-500  @endisset">
@isset($validation)
    <p class="w-full text-xs text-red-500"> {{ $validation }} </p>
@endisset
