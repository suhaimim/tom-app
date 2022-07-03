<table class="w-full filament-tables-table border-collapse border border-slate-400">
    <thead>
        <tr class="bg-gray-50">
            <th style="text-align: center;" colspan="6">BORANG TAFAKUT</th>
        </tr>
    </thead>
    @foreach ($record->all() as $item)
    <tbody class="divide-y whitespace-nowrap">
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>NAMA (MYKAD):</strong> {{ $item->karkun->kkname}}</td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4"><strong>GELARAN (JIKA ADA):</strong>  {{ $item->karkun_name}} </td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>SABGUZARI:</strong>  </div>
                    <div>{{ $item->mohallah->halqah->induk->markaz->mname}}</div>
                </div>
            </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4"><strong>HALQAH:</strong> {{ $item->mohallah->halqah->hname}}</td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>MOHALLAH:</strong>  </div>
                    <div>{{ $item->mohallah->sname}}</div>
                </div>
            </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4"><strong>ALAMAT RUMAH:</strong> {{ $item->bt_address}} </td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>TEMPOH KELUAR:</strong>  </div>
                    <div>{{ $item->bt_duration}}</div>
                </div>
            </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>UMUR:</strong> - </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>TEL.:</strong> {{ $item->karkun_phone}} </td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>TARIKH KELUAR:</strong>  </div>
                    <div>{{ $item->bt_checkin}}</div>
                </div>
            </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>CUTI:</strong>
                @if ( $item->bt_leaves === 1)
                    &#10004;
                @else

                @endif
            </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>BELANJA:</strong> {{ $item->bt_expenses}} </td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="6"><strong>PENGALAMAN:</strong> {{ $item->bt_experiences}}</td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>TAHUN LEPAS:</strong>  </div>
                    <div>{{ $item->bt_lastyear}}</div>
                </div>
            </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4"><strong>TEMPAT:</strong> {{ $item->bt_lastyroute}}</td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>2 TAHUN LEPAS:</strong>  </div>
                    <div>{{ $item->bt_last2year}}</div>
                </div>
            </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4"><strong>TEMPAT:</strong> {{ $item->bt_last2yroute}}</td>
        </tr>

        <tr class="bg-gray-50">
            <th style="text-align: center;" colspan="6">USAHA TEMPATAN</td>
        </tr>
        <tr>
            <td colspan="6">
                <table class="w-full filament-tables-table">
                    <tr class="bg-white-500/10 filament-tables-selection-indicator">
                        <th class="px-4 py-2 whitespace-nowrap text-sm text-center">FH</th>
                        <th class="px-4 py-2 whitespace-nowrap text-sm text-center">2J½</th>
                        <th class="px-4 py-2 whitespace-nowrap text-sm text-center">TM</th>
                        <th class="px-4 py-2 whitespace-nowrap text-sm text-center">G1</th>
                        <th class="px-4 py-2 whitespace-nowrap text-sm text-center">G2</th>
                        <th class="px-4 py-2 whitespace-nowrap text-sm text-center">3H</th>
                    </tr>
                    <tr class="bg-white-500/10 filament-tables-selection-indicator">
                        <td class="px-4 py-2 whitespace-nowrap text-sm" valign="middle" align="center">
                            @if ( $item->bt_amm_fh === 1)
                                &#10004;
                            @else

                            @endif
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm" valign="middle" align="center">
                            @if ( $item->bt_amm_2j === 1)
                                &#10004;
                            @else

                            @endif
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm" valign="middle" align="center">
                            @if ( $item->bt_amm_tm === 1)
                                &#10004;
                            @else

                            @endif
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm" valign="middle" align="center">
                            @if ( $item->bt_amm_g1 === 1)
                                &#10004;
                            @else

                            @endif
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm" valign="middle" align="center">
                            @if ( $item->bt_amm_g2 === 1)
                                &#10004;
                            @else

                            @endif
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm" valign="middle" align="center">
                            @if ( $item->bt_amm_3h === 1)
                                &#10004;
                            @else

                            @endif
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="bg-gray-50">
            <th style="text-align: center;" colspan="6">JENIS PEKERJAAN</td>
        </tr>
        <tr>
            <td colspan="6">
                <table class="w-full filament-tables-table">
                    <tr class="bg-white-500/10 filament-tables-selection-indicator"">
                        <th class="px-4 py-2 whitespace-nowrap text-sm ">TIADA</th>
                        <th class="px-4 py-2 whitespace-nowrap text-sm ">PESARA</th>
                        <th class="px-4 py-2 whitespace-nowrap text-sm ">SENDIRI</th>
                        <th class="px-4 py-2 whitespace-nowrap text-sm ">KERAJAAN</th>
                        <th class="px-4 py-2 whitespace-nowrap text-sm ">SWASTA</th>
                        <th class="px-4 py-2 whitespace-nowrap text-sm ">PELJAR</th>
                    </tr>
                    <tr class="bg-white-500/10 filament-tables-selection-indicator"">
                        <td class="px-4 py-2 whitespace-nowrap text-sm " valign="middle" align="center">
                            @if ( $item->bt_amm_3h === 'none')
                                &#10004;
                            @else

                            @endif
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm " valign="middle" align="center">
                            @if ( $item->bt_job === 'pension')
                                &#10004;
                            @else

                            @endif
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm "  valign="middle" align="center">
                            @if ( $item->bt_job === 'freelance')
                                &#10004;
                            @else

                            @endif
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm " valign="middle" align="center">
                            @if ( $item->bt_job === 'government')
                                &#10004;
                            @else

                            @endif
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm " valign="middle" align="center">
                            @if ( $item->bt_amm_g1 === 'private')
                                &#10004;
                            @else

                            @endif
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm " valign="middle" align="center">
                            @if ( $item->bt_amm_g2 === 'student')
                                &#10004;
                            @else

                            @endif
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>PASSPORT:</strong> </div>
                    <div>{{ $item->bt_passport}}</div>
                </div>
            </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>NO.KP:</strong>  </div>
                    <div>{{ $item->karkun->kkid}}</div>
                </div>
            </td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>STATUS PERKAHWINAN:</strong>  </div>

                    @if($item->bt_marital === 'married')
                        <div>KAHWIN</div>
                    @elseif($item->bt_marital === 'single')
                        <div>BUJANG </div>
                    @elseif($item->bt_marital === 'widower')
                        <div>DUDA </div>
                    @else
                    @endif
                </div>
            </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>BAHASA:</strong>  </div>
                    <div>{{ $item->bt_language}}</div>
                </div>
            </td>
        </tr>
        <tr class="bg-gray-50">
            <th style="text-align: center;" colspan="6">JEMAAH MASTURAT SAHAJA</td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>PENGALAMAN:</strong> {{ $item->bt_mexp}} </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>TARIKH:</strong> {{ $item->bt_mexp_date}} </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>TEMPAT:</strong> {{ $item->bt_mexp_route}} </td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>MAKLUMAT MASTURAT:</strong> {{ $item->bt_mexp_notes}} </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4">
                <div class="grid grid-cols-2 gap-2">
                    <div><strong>HUBUNGAN:</strong>  </div>
                    <div>{{ $item->bt_mexp_relation}}</div>
                </div>
             </td>
        </tr>
        <tr class="bg-gray-50">
            <th style="text-align: center;" colspan="6">KEPUTUSAN</td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>CADANGAN 1:</strong> {{ $item->bt_appr1_rem}} </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>TARIKH:</strong> {{ $item->bt_appr1_date}} </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>PENCADANG 1:</strong> {{ $item->bt_appr1_name}} </td>
        </tr>
        <tr class="bg-white-500/10 filament-tables-selection-indicator">
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>CADANGAN 2:</strong> {{ $item->bt_appr2_rem}} </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>TARIKH:</strong> {{ $item->bt_appr2_date}} </td>
            <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>PENCADANG 2:</strong> {{ $item->bt_appr2_name}} </td>
        </tr>
        <tr class="bg-white-50" >
            <td class="px-4 py-2"  style="height:200px;vertical-align:top;" colspan="6">
                <strong>NOTA: </strong>
                <p>{{ $item->bt_notes}}</p>
            </td>
        </tr>

    </tbody>
    @endforeach
</table>
