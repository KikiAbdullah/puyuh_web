@if(\Session::has('success'))
<p>{{\Session::get('success')}}</p>
@endif
<form action="{{action('KandangController@update',$id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <p>ID Kandang {{$kandang->id}}</p><br>
    <label for="jumlah_ternak">Jumlah ternak</label><input type="text" name="jumlah_ternak" value="{{$kandang->jumlah_ternak}}"><br>
    <button type="submit">Simpan</button>
    <a href="{{URL::previous()}}">Cancel</a>
</form>