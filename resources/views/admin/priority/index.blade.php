@extends('layouts.admin1')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                      Priority
                        <a href="{{ route('priority.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Priority</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($priority as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->name}}</td>
                                            <td>
                                                <form action="{{ route('priority.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('priority.edit', $data->id) }}"
                                                        class="btn btn-sm btn-success">
                                                        <i class="nav-icon fas fa-edit"></i>

                                                    </a> |
                                                    <a href="{{ route('priority.show', $data->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        <i class="nav-icon fas fa-eye"></i>

                                                    </a>  |
                                                    <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title='Delete' onclick="return confirm('Apakah Anda Yakin?')">
                                                        <i class="nav-icon fas fa-trash-alt"></i>
                                                    </button>
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
