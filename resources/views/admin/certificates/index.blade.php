@extends('admin.layout')
@section('title', 'Daftar Sertifikat')

@section('content')
    <div class="admin-toolbar">
        <span class="admin-count">{{ $certificates->count() }} sertifikat</span>
        <a href="{{ route('admin.certificates.create') }}" class="btn btn-submit"><i class="fas fa-plus"></i> Tambah Baru</a>
    </div>

    @if($certificates->isEmpty())
        <div class="alert">Belum ada sertifikat. Klik "Tambah Baru" untuk membuat yang pertama.</div>
    @else
        <div class="admin-card-list">
            @foreach($certificates as $certificate)
                <div class="admin-card">
                    <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title }}">
                    <div class="admin-card-info">
                        <h3>{{ $certificate->title }}</h3>
                        <p>{{ $certificate->description ?? 'Tanpa deskripsi' }}</p>
                        <small>Ditambahkan: {{ $certificate->created_at->format('d M Y') }}</small>
                    </div>
                    <div class="admin-card-actions">
                        <a href="{{ route('admin.certificates.edit', $certificate) }}" class="btn-edit" title="Edit"><i class="fas fa-pen"></i></a>
                        <form method="POST" action="{{ route('admin.certificates.destroy', $certificate) }}" onsubmit="return confirm('Hapus sertifikat ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" title="Hapus"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
