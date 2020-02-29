<table>
    <thead>
        <th>no kandang</th>
        <th>jumlah ternak</th>
    </thead>
    <tbody>
        @foreach($data_kandang as $kandangs)
        <tr>
            <td>{{$kandangs['id']}}</td>
            <td>{{$kandangs['jumlah_ternak']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>