<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a  class="text-right" href="/item/create">Tambah</a>
  <table class="table table-striped shadow p-3 mb-5 bg-white rounded" >
    <thead>
        <tr>
          <td>ID</td>
          <td>Nama Barang</td>
          <td>Stok</td>
          <td>Gambar</td>
          <td colspan="2">Action</td>

        </tr>
    </thead>
    <tbody>
        @foreach($item as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->nama}}</td>
            <td>{{$book->stok}}</td>
            <td><img src="/images/{{ $book->image }}" width="100px"></td>
           
            <td><a href="{{ route('item.edit',$book->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{ route('item.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection