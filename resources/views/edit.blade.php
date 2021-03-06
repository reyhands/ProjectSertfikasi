<!-- edit.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Book
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
      <form method="post" action="{{ route('item.update', $item->id) }}"  enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Nama Barang:</label>
              <input type="text" class="form-control" name="nama" value="{{$item->nama}}"/>
          </div>
          <div class="form-group">
              <label for="price">Stok :</label>
              <input type="text" class="form-control" name="stok" value="{{$item->stok}}"/>
          </div>

          <div class="form-group">
              <label for="price">Gambar</label>
              <input type="file" name="image" class="form-control" placeholder="image">
          </div>
          
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection