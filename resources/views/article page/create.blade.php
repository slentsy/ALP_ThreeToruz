
    <div class="container mt-4">
    <h1>Create Article</h1>
    <form action="{{route('article.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul_article">Judul Article:</label>
            <input type="text" class="form-control" id="judul_article" name="judul_article" placeholder="Nama">
        </div>
        <div class="form-group">
            <label for="deskripsi_article">Deskripsi Article:</label>
            <textarea class="form-control" id="deskripsi_article" name="deskripsi_article" rows="4" placeholder="Tuliskan deskripsi article"></textarea>
        </div>
        <div class="form-group">
            <label for="tanggal_publish">Tanggal Publish:</label>
            <input type="date" class="form-control" id="tanggal_publish" name="tanggal_publish" placeholder="Tanggal">
        </div>
        <div class="form-group">
            <label for="gambar">Pilih Gambar:</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>




