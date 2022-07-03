<x-filament::card>
{{$this->record}}
<hr>
    {{-- <x-filament::widget> --}}
        <table class="w-full text-left rtl:text-right divide-y table-auto filament-tables-table">
            <tr class="bg-gray-50">
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            @foreach ($record->all() as $item)
            <tr class="bg-primary-500/10 filament-tables-selection-indicator" x-show="selectedRecords.length">
                <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="3">Halqah: {{ $item->mohallah->halqah->hname}}</td>
                <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="3">Sabguzari: {{ $item->mohallah->halqah->induk->markaz->mname}}</td>
            </tr>
            @endforeach 
        
        </table>
        
    {{-- </x-filament::widget> --}}


</x-filament::card>
