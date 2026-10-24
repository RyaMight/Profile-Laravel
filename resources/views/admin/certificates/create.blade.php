@extends('admin.layout')
@section('title', 'Tambah Sertifikat')

@section('content')
    <form class="Contact-form" method="POST" action="{{ route('admin.certificates.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul Sertifikat</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="cth: Cyber Breaker Development" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar Sertifikat (JPG, PNG, WEBP - maks 2MB)</label>
            <input type="file" id="image" name="image" accept="image/jpeg,image/png,image/jpg,image/webp" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi (opsional)</label>
            <textarea id="description" name="description" rows="3" placeholder="Deskripsi singkat sertifikat...">{{ old('description') }}</textarea>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-submit">Simpan <i class="fas fa-save"></i></button>
            <a href="{{ route('admin.certificates.index') }}" class="btn-cancel">Batal</a>
        </div>
    </form>
@endsection
