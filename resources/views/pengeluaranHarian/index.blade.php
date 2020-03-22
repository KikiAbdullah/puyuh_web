
<p>{{\Session::get('success')}}</p>
<a href="{{action('PengeluaranHarianController@add')}}">ADD</a>
<table>
    <thead>
        <th>no kandang</th>
        <th>Tanggal</th>
        <th>Nama</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Tools</th>
    </thead>
    <tbody>
        @foreach($data_pengeluaranHarian as $pengeluarans)

        <tr>
            <td>{{$index++}}</td>
            <td>{{$pengeluarans['tanggal']}}</td>
            <td>{{$pengeluarans['nama']}}</td>
            <td>{{$pengeluarans['jumlah']}}</td>
            <td>{{$pengeluarans['satuan']}}</td>
            <td>{{$pengeluarans['harga']}}</td>
            <td>{{$pengeluarans['total']}}</td>
            <td><button><a href="{{action('PengeluaranHarianController@edit',$pengeluarans['id'])}}">Edit</a></button></td>
            <td>
                <form action="{{action('PengeluaranHarianController@delete',$pengeluarans['id'])}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>