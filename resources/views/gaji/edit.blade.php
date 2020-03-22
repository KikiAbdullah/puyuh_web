
<p>{{\Session::get('success')}}</p>
<form action="{{action('GajiController@update',$id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <label for="tanggal">Tanggal</label><input type="date" name="tanggal" value="{{$gaji->tanggal}}"><br>
    <label for="jumlah_gaji">Jumlah Gaji (Rp.)</label><input type="text" name="jumlah_gaji" value="{{$gaji->jumlah_gaji}}"><br>
    <button type="submit">Simpan</button>
    <a href="{{URL::previous()}}">Cancel</a>
</form>