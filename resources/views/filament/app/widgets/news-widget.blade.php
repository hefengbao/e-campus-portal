<x-filament-widgets::widget>
    <x-filament::section>
        {{-- Widget content --}}
        <ul>
            @foreach($news as $item)
            <li :key="{{ $item->id }}">
                <a href="">{{ $item->title }}</a>
            </li>
            @endforeach
        </ul>
    </x-filament::section>
</x-filament-widgets::widget>
