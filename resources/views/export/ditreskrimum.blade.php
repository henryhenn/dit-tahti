<table>
    <thead>
    <tr>
        <th>
            #
        </th>
        <th>
            DAFTAR BARANG BUKTI
        </th>
        <th>
            NO. LAP POL
        </th>
        <th>
            NO. SP SITA
        </th>
        <th>
            PENETAPAN PENGADILAN
        </th>
        <th>
            PENYIDIK
        </th>
        <th>
            TEMPAT PENYIMPANAN
        </th>
        <th>
            NAMA PEMILIK
        </th>
        <th>
            FOTO BB
        </th>
        <th>
            FOTO BB
        </th>
        <th>
            FOTO BB
        </th>
        <th>
            KET
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($ditreskrimum as $key => $ditreskrimum)
        <tr>
            <th>
                {{$key+1}}
            </th>
            <td>
                {{$ditreskrimum->nama_barang_bukti}}
            </td>
            <td>
                {{$ditreskrimum->no_laporan_polisi}}
            </td>
            <td>
                {{$ditreskrimum->no_sp_sita}}
            </td>
            <td>
                {{$ditreskrimum->penetapan_pengadilan}}
            </td>
            <td>
                {{$ditreskrimum->penyidik}}
            </td>
            <td>
                {{$ditreskrimum->tempat_penyimpanan}}
            </td>
            <td>
                {{$ditreskrimum->nama_pemilik}}
            </td>
            <td>
                <img src="{{public_path('storage/' . $ditreskrimum->gambar1)}}" style="width: 300px" alt="">
            </td>
            <td>
                <img src="{{public_path('storage/' . $ditreskrimum->gambar3)}}" style="width: 300px" alt="">
            </td>
            <td>
                <img src="{{public_path('storage/' . $ditreskrimum->gambar3)}}" style="width: 300px" alt="">
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

