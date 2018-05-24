@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Table Kontak</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif


                    <div class="row">
                        <form action="{{ url()->current() }}">
                            <div class="col-md-10">
                                <input type="text" name="keyword" class="form-control" placeholder="Cari nama produk,ID dan Tanggal..." value="{{ request('keyword') }}">
                            </div>
                            <div class="col-md-2 text-right">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
            <hr>
            <table class="table table-bordered table-responsive table-hover">
                <thead>
                <tr>
             
                    <th>Nama Product</th>
                    <th>Deskripsi</th>
                    <th>Currency</th>
                    <th>Ukuran</th>
                    <th>Warna</th>
                    <th>Type</th>
                    <th>Stok</th>
                    <th>Harga Normal</th>
                    <th>Harga Diskon</th>
                    <th>Tanggal Pembuatan</th>
                    <th>Aksi</th>
                 
                </tr>
                </thead>
                <tbody>
               
                @foreach($product as $produk)
                    <tr>
                        
                        <td>{{ $produk->namaproduct }}</td>
                        <td>{{ $produk->descriptionproduct }}</td>
                        <td>{{ $produk->currency }}</td>
                        <td>{{ $produk->ukuran }}</td>
                        <td>{{ $produk->warna }}</td>
                        <td>{{ $produk->type }}</td>
                        <td>{{ $produk->stock }}</td>
                        <td>{{ $produk->harganormal }}</td>
                        <td>{{ $produk->hargadiskon }}</td>
                        <td>{{ $produk->tanggaldibuat }}</td>
                        <td>
                            <form action="{{ action('ProductController@destroy', $produk->id) }}" method="Delete">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ url('kontak_edit',$produk->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $product->links() }}
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection