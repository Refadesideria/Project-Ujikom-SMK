@extends('layouts.admin1')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                    Customer
                    @if (Auth::user()->role == 'guest')
                        <a href="{{ route('customer.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>
                   @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Customer</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Tanggal Request</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Request Perbaikan</th>
                                        <th>Deskripsi</th>
                                        @if (Auth::user()->role == 'guest')
                                        <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($customer as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->name}}</td>
                                            <td>{{ $data->email}}</td>
                                            <td>{{ $data->no_telp}}</td>
                                            <td>{{ $data->request_perbaikan}}</td>
                                            <td>{{ $data->tanggal_request}}</td>
                                            <td>{{ $data->tanggal_selesai}}</td>
                                            <td>{{ $data->deskripsi}}</td>
                                            
                                            <td>
                                                @if (Auth::user()->role == 'guest')
                                                <form action="{{ route('customer.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('customer.edit', $data->id) }}"
                                                        class="btn btn-sm btn-success">
                                                        <i class="nav-icon fas fa-edit"></i>

                                                    </a> |
                                                    <a href="{{ route('customer.show', $data->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        <i class="nav-icon fas fa-eye"></i>

                                                    </a>  |
                                                    <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title='Delete' onclick="return confirm('Apakah Anda Yakin?')">
                                                        <i class="nav-icon fas fa-trash-alt"></i>
                                                    </button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection