@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-md-12">
                <h2>Halaman User</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $v)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $v->name }}</td>
                                <td>{{ $v->email }}</td>
                                <td>{{ $v->alamat }}</td>
                                <td>
                                    <a href="{{ route('showUser', $v->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection


