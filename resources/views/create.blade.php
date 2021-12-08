<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambah Item
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('item.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="name">Nama Barang:</label>
              <input type="text" class="form-control" name="nama"/>
          </div>
          <div class="form-group">
              <label for="price">Jumlah Stok :</label>
              <input type="text" class="form-control" name="stok"/>
          </div>

          <div class="form-group">
              <label for="price">Gambar</label>
              <input type="file" name="image" class="form-control" placeholder="image">
          </div>
        
          <button type="submit" class="btn btn-primary">Input</button>
      </form>
  </div>
</div>
@endsection