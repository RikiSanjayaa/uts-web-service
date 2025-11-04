@extends('layouts.app')

@section('content')
<style>
    .profile-card {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(14px);
        border-radius: 25px;
        box-shadow: 0 0 20px rgba(0,0,0,0.3);
        transition: all 0.3s ease-in-out;
    }
    .profile-card:hover {
        transform: translateY(-8px);
        background: rgba(255,255,255,0.25);
    }
    .profile-card img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: 0 0 15px rgba(0,0,0,0.3);
    }
    .bio-box {
        background: rgba(255,255,255,0.9);
        color: #000;
        border-radius: 15px;
        padding: 10px;
        margin-top: 10px;
    }
    .bio-box h6 {
        font-size: 0.85rem;
        letter-spacing: 1px;
    }
</style>

<div class="text-center text-white mb-5">
    <h3>Halaman ini dibuat oleh: <strong>{{ $pembuat }}</strong></h3>
</div>

<div class="row justify-content-center">
    @foreach ($tim as $anggota)
        <div class="col-md-5 m-3">
            <div class="card text-center text-white profile-card p-4">
                <img src="{{ asset('images/' . $anggota['gambar']) }}" class="mx-auto mb-3" alt="{{ $anggota['nama'] }}">
                <h4 class="fw-bold">{{ $anggota['nama'] }}</h4>
                <p class="text-light mb-2">{{ $anggota['nim'] }}</p>

                <div class="bio-box">
                    <h6 class="text-uppercase fw-bold mb-1">Bio</h6>
                    <p class="mb-0">{{ $anggota['bio'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
