<table>
    <thead>
    <tr>
        <th>#</th>
        <th>DAFTAR BARANG BUKTI</th>
        <th>NO. LAP POL</th>
        <th>NO. SP SITA</th>
        <th>PENETAPAN PENGADILAN</th>
        <th>PENYIDIK</th>
        <th>TEMPAT PENYIMPANAN</th>
        <th>NAMA PEMILIK</th>
        <th>GAMBAR 1</th>
        <th>GAMBAR 2</th>
        <th>GAMBAR 3</th>
        <th>KET</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $data)
        <tr>
            <th>{{$key+1}}</th>
            <td>{{$data->nama_barang_bukti}}</td>
            <td>{{$data->no_laporan_polisi}}</td>
            <td>{{$data->no_sp_sita}}</td>
            <td>{{$data->penetapan_pengadilan}}</td>
            <td>{{$data->penyidik}}</td>
            <td>{{$data->tempat_penyimpanan}}</td>
            <td>{{$data->nama_pemilik}}</td>
            <td>
                @if($data->gambar1)
                    <img src="{{ public_path('storage/' . $data->gambar1)}}">
                @else
                @endif
            </td>
            <td>
                @if($data->gambar2)
                    <img src="{{ public_path('storage/' . $data->gambar2)}}">
                @else
                @endif
            </td>
            <td>
                @if($data->gambar3)
                    <img src="{{ public_path('storage/' . $data->gambar3)}}">
                @else
                @endif
            </td>
            <td>{!! $data->keterangan !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
