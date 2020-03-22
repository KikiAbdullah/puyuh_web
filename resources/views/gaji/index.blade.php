
<p>{{\Session::get('success')}}</p>
<table>
    <thead>
        <th>No</th>
        <th>Bulan</th>
        <th>Gaji</th>
        <th>Tools</th>
    </thead>
    <tbody>
        @foreach($data_gaji as $gajis)

        <tr>
            <td>{{$index++}}</td>
            <td>{{$gajis['tanggal']}}</td>
            <td>{{$gajis['jumlah_gaji']}}</td>
            <td><button><a href="{{action('GajiController@edit',$gajis['id'])}}">Edit</a></button></td>
            <td>
                <form action="{{action('GajiController@delete',$gajis['id'])}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>