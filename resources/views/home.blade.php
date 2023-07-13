@extends('layouts.app')

@section('content')
@if(Auth::user()->level == 1 )

<div class="container">
    <div class="row mt-3">
        <div class="col-6 my-auto">
            <h5>Manajemen product</h5>
        </div>
        <div class="col-6 text-right mx-auto">
            <a href="/product" type="button" class="btn btn-success float-end">Tambah</a>
        </div>
    </div>
<div class="table-responsive">
<table class="table table-dark table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col" width="50%">Gambar</th>
      <th scope="col">Harga</th>
      <th scope="col"><div class="text-center">Aksi</div></th>
    </tr>
  </thead>
  <tbody>
  @forelse ($product as $data)

    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$data->nama}}</td>
      <td><img src="img/{{$data->gambar}}" class="" style="width:120px"></td>
      <td>{{$data->harga}}</td>
      <td>
      <div>
        <a class="btn btn-warning text-white btn-sm float-end m-1" href="{{ route('product.edit',$data->id) }}">Edit</a>
        <a class="btn btn-danger text-white btn-sm float-end m-1" href="{{ route('product.hapus',$data->id) }}">Hapus</a>
     </div>

      </td>
    </tr>
    @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
  @endforelse
  </tbody>
  
</table>
{{$product->links('pagination::bootstrap-4')}}

</div>
</div>
@endif
<div class="text-center">
  <h5>Login Berhasil, silahkan menuju <a href="/">beranda</a></h5>
</div>
@endsection
