@extends('layouts.admin1')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      Customer
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Customer</label>
                            <input type="text" class="form-control " name="name" value="{{ $customer->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control " name="email" value="{{ $customer->email }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telepon</label>
                            <input type="text" class="form-control " name="no_telp" value="{{ $customer->no_telp }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Request Perbaikan</label>
                            <input type="text" class="form-control " name="request_perbaikan" value="{{ $customer->request_perbaikan }}" readonly>
                        </div>
                
                        <div class="mb-3">
                            <label class="form-label">Tanggal Request</label>
                            <input type="date" class="form-control " name="request" value="{{ $customer->request }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control " name="selesai" value="{{ $customer->selesai }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control " name="deskripsi" value="{{ $customer->deskripsi }}" readonly>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('customer.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
