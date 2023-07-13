@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4">
            <div class="card-title">
                <h5>Edit product</h5>
            </div>
            <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" name="nama" class="form-control" value="{{$product->nama }}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gambar Produk</label><br>
                    <input type="file" class="form-control-file" id="berkas" name="berkas">
                    @error('berkas')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link product</label>
                    <input type="number" name="harga" class="form-control" value="{{$product->harga }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection