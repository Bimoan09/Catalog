@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Tambah Kontak</h1>
            <hr>
            <form action="{{ route('kontak.store') }}" method="post">
                {{ csrf_field() }}
               
                <div class="form-group">
                    <label for="email">Nama Product:</label>
                    <input type="text" class="form-control" id="namaproduct" name="namaproduct" required>
                </div>
                <div class="form-group">
		                  <label for="descriptionproduct" class="col-sm-2 control-label">Deskripsi</label>
		                  <div class="col-sm-10">
		                    <textarea id="descriptionproduct" name="descriptionproduct" rows="10" cols="80" required></textarea>
		            </div>
		        </div>

<div class="form-group">
    <label for="currency">Currency</label>
    <select class="form-control" id="currency" name= "currency" required>
      <option>Rp</option>
      <option>USD</option>
      <option>EUR</option>
      
    </select>
                <div class="form-group">
                    <label for="nohp">Ukuran:</label>
                    <input type="text" class="form-control" id="ukuran" name="ukuran" required>
                </div>
                <div class="form-group">
                    <label for="nohp">Warna:</label>
                    <input type="text" class="form-control" id="warna" name="warna" required>
                </div>
                <div class="form-group">
                    <label for="nohp">Type:</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>
                <div class="form-group">
                    <label for="nohp">Stok:</label>
                    <input type="text" class="form-control" id="stock" name="stock" required>
                </div>
                <div class="form-group">
                    <label for="nohp">Harga Normal:</label>
                    <input type="text" class="form-control" id="harganormal" name="harganormal" required>
                </div>
                <div class="form-group">
                    <label for="nohp">Harga Diskon:</label>
                    <input type="text" class="form-control" id="hargadiskon" name="hargadiskon" required>
                </div>
                <div class="form-group">
                    <label for="nohp">Tanggal Pembuatan:</label>
                    <input type="date" class="form-control" id="tanggaldibuat" name="tanggaldibuat" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
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