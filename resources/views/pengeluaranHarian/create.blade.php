
<form action="{{action('PengeluaranHarianController@create')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="POST">
    <label for="nama">Nama</label><input type="text" name="nama"><br>
    <label for="nama">Jumlah</label><input type="text" name="jumlah"><br>
    <label for="nama">Satuan</label><input type="text" name="satuan"><br>
    <label for="nama">Harga</label><input type="text" name="harga"><br>
    <button type="submit">Simpan</button>
    <a href="{{URL::previous()}}">Cancel</a>
</form>