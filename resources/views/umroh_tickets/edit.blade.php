@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Tiket Umroh</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('umroh-tickets.update', $umrohTicket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $umrohTicket->name }}" required>
        </div>
        <div class="form-group">
            <label for="passport_number">No. Paspor</label>
            <input type="text" name="passport_number" id="passport_number" class="form-control" value="{{ $umrohTicket->passport_number }}" required>
        </div>
        <div class="form-group">
            <label for="package">Paket</label>
            <input type="text" name="package" id="package" class="form-control" value="{{ $umrohTicket->package }}" required>
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $umrohTicket->price }}" required>
        </div>
        <div class="form-group">
            <label for="departure_date">Tanggal Keberangkatan</label>
            <input type="date" name="departure_date" id="departure_date" class="form-control" value="{{ $umrohTicket->departure_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
        <a href="{{ route('umroh-tickets.index') }}" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>
@endsection
