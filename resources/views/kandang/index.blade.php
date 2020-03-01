@if(\Session::has('success'))
<p>{{\Session::get('success')}}</p>
@endif

<a href="{{action('KandangController@add')}}">ADD</a>
<table>
    <thead>
        <th>no kandang</th>
        <th>jumlah ternak</th>
        <th>Tools</th>
    </thead>
    <tbody>
        @foreach($data_kandang as $kandangs)
        <tr>
            <td>{{$kandangs['id']}}</td>
            <td>{{$kandangs['jumlah_ternak']}}</td>
            <td><button><a href="{{action('KandangController@edit',$kandangs['id'])}}">Edit</a></button></td>
            <td>
                <form action="{{action('KandangController@delete',$kandangs['id'])}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>