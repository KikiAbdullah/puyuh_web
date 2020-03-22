
<p>{{\Session::get('success')}}</p>
<form action="{{action('PengeluaranHarianController@update',$id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <p>ID PengeluaranHarian {{$pengeluaranHarian->id}}</p>
    <p>Tanggal {{$pengeluaranHarian->tanggal}}</p>
    <input type="hidden" name="id_user" value="{{$pengeluaranHarian->id}}">
    <input type="hidden" name="tanggal" value="{{$pengeluaranHarian->tanggal}}">
    <label for="nama">Nama</label><input type="text" name="nama"  value="{{$pengeluaranHarian->nama}}"><br>
    <label for="jumlah">Jumlah</label><input type="text" name="jumlah"  value="{{$pengeluaranHarian->jumlah}}"><br>
    <label for="satuan">Satuan</label><input type="text" name="satuan" value="{{$pengeluaranHarian->satuan}}"><br>
    <label for="harga">Harga</label><input type="text" name="harga" value="{{$pengeluaranHarian->harga}}"><br>
    <label for="total">Total</label><input type="text" name="total" value="{{$pengeluaranHarian->total}}"><br>
    <button type="submit">Simpan</button>
    <a href="{{URL::previous()}}">Cancel</a>
</form>