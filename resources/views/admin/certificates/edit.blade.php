@extends('admin.layout')
@section('title', 'Edit Sertifikat')

@section('content')
    <form class="Contact-form" method="POST" action="{{ route('admin.certificates.update', $certificate) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul Sertifikat</label>
            <input type="text" id="title" name="title" value="{{ old('title', $certificate->title) }}" required>
        </div>
        <div class="form-group">
            <label>Gambar Saat Ini</label>
            <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title }}" class="edit-preview">
        </div>
        <div class="form-group">
            <label for="image">Ganti Gambar (opsional)</label>
            <input type="file" id="image" name="image" accept="image/jpeg,image/png,image/jpg,image/webp">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi (opsional)</label>
            <textarea id="description" name="description" rows="3">{{ old('description', $certificate->description) }}</textarea>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-submit">Perbarui <i class="fas fa-save"></i></button>
            <a href="{{ route('admin.certificates.index') }}" class="btn-cancel">Batal</a>
        </div>
    </form>
@endsection
