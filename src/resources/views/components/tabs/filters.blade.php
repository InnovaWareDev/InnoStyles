<div>
    <div class="relative">
        <!-- Bind the selected length to Livewire -->
        <select wire:model="selectedLength" name="length" id="length" class="form-control">
            <option value="">All Lengths</option>
            @foreach ($lengths as $length)
                <option value="{{ $length->length }}">
                    {{ $length->length }}
                </option>
            @endforeach
        </select>
    </div>
</div>
