
        <table class="w-full filament-tables-table border-collapse border border-slate-400">
            <thead>
                <tr class="bg-gray-50" style="background-color:#d8e4bc;">
                    <th style="text-align: center;" colspan="6">BORANG TAFAKUT</th>
                </tr>                    
            </thead>
            @foreach ($record->all() as $item)
            <tbody class="divide-y whitespace-nowrap">
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>NAMA (MYKAD):</strong>  </span>
                            <span>{{ $item->karkun->kkname}}</span>
                        </div>  
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>GELARAN (JIKA ADA):</strong>  </span>
                            <span>{{ $item->karkun_name}}</span>
                        </div> 
                    </td>
                </tr>
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>SABGUZARI:</strong>  </span>
                            <span>{{ $item->mohallah->halqah->induk->markaz->mname}}</span>
                        </div>  
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>HALQAH:</strong>  </span>
                            <span>{{ $item->mohallah->halqah->hname}}</span>
                        </div> 
                    </td>
                </tr>
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>MOHALLAH:</strong>  </span>
                            <span>{{ $item->mohallah->sname}}</span>
                        </div> 
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>ALAMAT RUMAH:</strong>  </span>
                            <span>{{ $item->bt_address}}</span>
                        </div> 
                    </td>
                </tr>
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>TEMPOH KELUAR:</strong>  </span>
                            <span>{{ $item->bt_duration}}</span>
                        </div>  
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>UMUR:</strong>  </span>
                            <span>
                            {{
                                date('Y') - (1900 + substr($item->karkun->kkid,0,2))
                            }}
                            </span>
                        </div>  
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>TEL.:</strong> {{ $item->karkun_phone}} </td>
                </tr>
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>TARIKH KELUAR:</strong>  </span>
                            <span>{{ $item->bt_checkin}}</span>
                        </div>  
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"> 
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>CUTI:</strong>  </span>
                            <span>
                                @if ( $item->bt_leaves === 1)
                                    &#10004;
                                @else
                                @endif   
                            </span>
                        </div>                                          
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>BELANJA:</strong> {{ $item->bt_expenses}} </td>
                </tr>
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="6"><strong>PENGALAMAN:</strong> {{ $item->bt_experiences}}</td>
                </tr>
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>TAHUN LEPAS:</strong>  </span>
                            <span>{{ $item->bt_lastyear}}</span>
                        </div>                            
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>TEMPAT:</strong>  </span>
                            <span>{{ $item->bt_lastyroute}}</span>
                        </div> 
                    </td>
                </tr>
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>2 TAHUN LEPAS:</strong>  </span>
                            <span>{{ $item->bt_last2year}}</span>
                        </div>   
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>TEMPAT:</strong>  </span>
                            <span>{{ $item->bt_last2yroute}}</span>
                        </div>  
                    </td>
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
                                    <span style="font-size:24px;"> <strong>&radic;</strong> </span>
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
                                <th class="px-4 py-2 whitespace-nowrap text-sm ">PELAJAR</th>
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
                            <span><strong>PASSPORT:</strong> </span>
                            <span>{{ $item->bt_pasport}}</span>
                        </div>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>NO.KP:</strong>  </span>
                            <span>{{ $item->karkun->kkid}}</span>
                        </div>                    
                    </td>
                </tr>
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>STATUS PERKAHWINAN:</strong>  </span>
                           
                            @if($item->bt_marital === 'married')
                                <span>KAHWIN</span>
                            @elseif($item->bt_marital === 'single')
                                <span>BUJANG </span>
                            @elseif($item->bt_marital === 'widower')
                                <span>DUDA </span>
                            @else     
                            @endif                            
                        </div>                           
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>BAHASA:</strong>  </span>
                            <span>{{ $item->bt_language}}</span>
                        </div>   
                    </td>
                </tr>
                <tr class="bg-gray-50" style="background-color:#b2b6bb;">
                    <th style="text-align: center;" colspan="6">JEMAAH MASTURAT SAHAJA</td>
                </tr>
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>PENGALAMAN:</strong> {{ $item->bt_mexp}} </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>TARIKH:</strong> {{ $item->bt_mexp_date}} </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>TEMPAT:</strong> {{ $item->bt_mexp_route}} </td> 
                </tr>                
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="4"><strong>MAKLUMAT MASTURAT:</strong> {{ $item->bt_mexp_notes}} </td> 
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <span><strong>HUBUNGAN:</strong>  </span>
                            <span>{{ $item->bt_mexp_relation}}</span>
                        </div> 
                     </td>
                </tr>                
                <tr  style="background-color:black;">
                    <th style="text-align: center;color:white;" colspan="6">KEPUTUSAN</td>
                </tr>
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>CADANGAN 1:</strong> {{ $item->bt_appr1_rem}} </td> 
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <div><strong>PENCADANG 1:</strong>  </div>
                            <div>{{ $item->bt_appr1_name}}</div>
                        </div> 
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>TARIKH:</strong> {{ $item->bt_appr1_date}} </td>
                </tr>                
                <tr class="bg-white-500/10 filament-tables-selection-indicator">
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>CADANGAN 2:</strong> {{ $item->bt_appr2_rem}} </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2">
                        <div class="grid grid-cols-2 gap-2">
                            <div><strong>PENCADANG 2:</strong>  </div>
                            <div>{{ $item->bt_appr2_name}}</div>
                        </div> 
                    </td> 
                    <td class="px-4 py-2 whitespace-nowrap text-sm" colspan="2"><strong>TARIKH:</strong> {{ $item->bt_appr2_date}} </td>
                </tr>                
                <tr class="bg-white-50" >
                    <td class="px-4 py-2"  style="height:150px;vertical-align:top;" colspan="6">
                        <strong>NOTA: </strong> 
                        <p>{{ $item->bt_notes}}</p>
                    </td>
                </tr>
                
            </tbody>
            @endforeach 
        
        </table>
        

