@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>edit Catalog</h1>
            <hr>
            @foreach($product as $produk)
            <form action="{{ action('ProductController@update',$produk->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama Product:</label>
                    <input type="text" class="form-control" id="namaproduct" name="namaproduct" value="{{ $produk->namaproduct }}">
                </div>
                <div class="form-group">
		                  <label for="content" class="col-sm-2 control-label">Deskripsi</label>
		                  <div class="col-sm-10">
		                    <textarea id="descriptionproduct" name="descriptionproduct"  rows="10" cols="80">{{ $produk->descriptionproduct }}</textarea>
		                  </div>
		                </div>
                <div class="form-group">
                    <label for="nohp">Currency:</label>
                    <input type="text" class="form-control" id="currency" name="currency" value="{{ $produk->currency }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Ukuran:</label>
                    <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{ $produk->ukuran }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Warna:</label>
                    <input type="text" class="form-control" id="warna" name="warna" value="{{ $produk->warna }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Type:</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $produk->type }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Stok:</label>
                    <input type="text" class="form-control" id="stock" name="stock" value="{{ $produk->stock }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Harga Normal:</label>
                    <input type="text" class="form-control" id="harganormal" name="harganormal" value="{{ $produk->harganormal }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Harga Diskon:</label>
                    <input type="text" class="form-control" id="hargadiskon" name="hargadiskon" value="{{ $produk->hargadiskon }}">
                </div>
                <div class="form-group">
                    <label for="nohp">Tanggal Pembuatan:</label>
                    <input type="date" class="form-control" id="tanggaldibuat" name="tanggaldibuat" value="{{ $produk->tanggaldibuat }}" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->



    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script>
   var konten = document.getElementById("descriptionproduct");
     CKEDITOR.replace(descriptionproduct,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endsection