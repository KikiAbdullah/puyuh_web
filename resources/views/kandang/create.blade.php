
<form action="{{action('KandangController@create')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="POST">
    <label for="jumlah_ternak">Jumlah ternak</label><input type="text" name="jumlah_ternak"><br>
    <button type="submit">Simpan</button>
    <a href="{{URL::previous()}}">Cancel</a>
</form>