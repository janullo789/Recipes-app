<div>
    <section class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-start p-6 text-xl">
                    <div class="flex-1">
                        <label>
                            <select wire:model.live="timePeriod">
                                <option value="3">Ostatnie 3 dni</option>
                                <option value="7">Ostatnie 7 dni</option>
                                <option value="30">Ostatnie 30 dni</option>
                            </select>
                        </label>

                        <div>Spożyto kalorii: {{ $calories }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
