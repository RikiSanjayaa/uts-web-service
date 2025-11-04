@extends('layouts.app')

@section('content')
<style>

    .about-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 15px;
    }


    .profile-row {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 30px;
    }


    .profile-card-wrapper {
        flex: 1 1 45%;
        max-width: 45%;
        margin-bottom: 30px;
    }

    /* CSS Kartu Asli */
    .profile-card {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(14px);
        border-radius: 25px;
        box-shadow: 0 0 20px rgba(0,0,0,0.3);
        transition: all 0.3s ease-in-out;
        height: 100%;
        padding: 24px; 
        text-align: center; 
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
        margin: 0 auto 12px auto; 
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


    @media (max-width: 768px) {
        .profile-row {
            flex-direction: column;
            align-items: center;
        }
        .profile-card-wrapper {
            max-width: 90%;
            flex: 1 1 90%; 
        }
    }
</style>

<div class="text-center text-white mb-5" style="margin-bottom: 3rem;">
    <h3>Halaman ini dibuat oleh: <strong>{{ $pembuat }}</strong></h3>
</div>

<div class="about-container"> 
    <div class="profile-row"> 
        @foreach ($tim as $anggota)
            <div class="profile-card-wrapper"> 
                <div class="profile-card text-white"> 
                    <img src="{{ asset('images/' . $anggota['gambar']) }}" alt="{{ $anggota['nama'] }}">
                    <h4 class="fw-bold" style="margin-top: 10px;">{{ $anggota['nama'] }}</h4>
                    <p class="text-light" style="margin-bottom: 8px;">{{ $anggota['nim'] }}</p>

                    <div class="bio-box">
                        <h6 class="text-uppercase fw-bold mb-1">Bio</h6>
                        <p class="mb-0">{{ $anggota['bio'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
