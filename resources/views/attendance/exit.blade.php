@extends('layouts.app')

@section('content')
  <div class="container">
    <form method="POST" action="/attendance/exit" class="row g-3">
      @csrf

      <div class="col-md-6">
        <label for="code" class="form-label">Kode Absensi (Keluar):</label>
        <input type="text" class="form-control" id="code" name="code" placeholder="Masukkan Kode Absensi">
      </div>

      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </form>
  </div>
@endsection
