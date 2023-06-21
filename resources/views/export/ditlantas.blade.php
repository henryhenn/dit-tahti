<table>
    <thead>
    <tr>
        <th>NO</th>
        <th>DAFTAR BARANG BUKTI</th>
        <th>NOKA/NOSIN</th>
        <th>BLANGKO TILANG</th>
        <th>TEMPAT PENYIMPANAN</th>
        <th>PETUGAS PENYIDIK</th>
        <th>NAMA PEMILIK</th>
        <th>GAMBAR 1</th>
        <th>GAMBAR 2</th>
        <th>GAMBAR 3</th>
        <th>KETERANGAN</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $barang)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$barang->nama_kendaraan}}</td>
            <td>{{$barang->noka_nosin}}</td>
            <td>{{$barang->no_surat_tilang}}</td>
            <td>{{$barang->tempat_penyimpanan}}</td>
            <td>{{$barang->penyidik}}</td>
            <td>{{$barang->nama_pemilik}}</td>
            <td>
                @if($barang->gambar1)
                    <img src="{{public_path('storage/' . $barang->gambar1)}}">
                @else
                @endif
            </td>
            <td>
                @if($barang->gambar2)
                    <img src="{{public_path('storage/' . $barang->gambar2)}}">
                @else
                @endif
            </td>
            <td>
                @if($barang->gambar3)
                    <img src="{{public_path('storage/' . $barang->gambar3)}}">
                @else
                @endif
            </td>
            <td>{!! $barang->keterangan !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
