<h1>Create Article</h1>

<form action="/article/store" method="POST">
    @csrf
    <input type="text" name="judul_article" placeholder="Nama"><br>
    <textarea name="deskripsi_article" id="" cols="30" rows="10" placeholder="Tuliskan deskripsi article"></textarea><br>
    <input type="date" name="tanggal_publish" placeholder="Tanggal"><br>
    <input type="submit" name="submit" value="save">

</form>