@extends('layouts.template')

@section('styles')

<style>

body{
    background:#f8f9fa;
}

.card{
    border:none;
    border-radius:18px;
}

.card-header{
    border-radius:18px 18px 0 0 !important;
}

.description{
    color:#495057;
    text-align:justify;
    line-height:1.8;
}


/* CARD DASHBOARD */

.dashboard-card{
    transition:.3s;
    color:white;
}

.dashboard-card:hover{
    transform:translateY(-8px);
    box-shadow:0 14px 25px rgba(0,0,0,.12);
}

.dashboard-card i{
    font-size:2rem;
    margin-bottom:15px;
}

.stat-title{
    font-size:1rem;
    font-weight:600;
}

.stat-number{
    font-size:3rem;
    font-weight:700;
}


/* WARNA */

.point-card{
    background:
    linear-gradient(
    135deg,
    #4f8cff,
    #246bfd
    );
}

.polyline-card{
    background:
    linear-gradient(
    135deg,
    #37d67a,
    #16a34a
    );
}

.polygon-card{
    background:
    linear-gradient(
    135deg,
    #ffbe0b,
    #f59e0b
    );
}

.user-card{
    background:
    linear-gradient(
    135deg,
    #ff6b6b,
    #dc3545
    );
}

</style>

@endsection



@section('content')

<div class="container mt-4">

    <!-- DESKRIPSI -->
    <div class="card shadow-sm mb-4">

        <div class="card-header bg-primary text-white py-3">

            <h3 class="mb-0">

                <i class="fa-solid fa-globe me-2"></i>

                Aplikasi Geospasial CRUD

            </h3>

        </div>

        <div class="card-body p-4">

            <p class="description mb-0">

                Aplikasi ini dibuat untuk memenuhi tugas besar
                mata kuliah Pemrograman Web Lanjut.

                Aplikasi menampilkan peta interaktif yang
                menunjukkan objek dengan geometri titik,
                garis, dan area yang dapat ditambah,
                ditampilkan, dan dihapus.

                Leaflet.js digunakan untuk visualisasi peta,
                sedangkan Laravel digunakan sebagai backend
                untuk penyimpanan data geometri.

                Selain itu tersedia fitur penyajian data
                dalam bentuk tabel dan pengelolaan data
                secara langsung.

            </p>

        </div>

    </div>



    <!-- STATISTIK -->

    <div class="row g-4">

        <!-- POINT -->

        <div class="col-lg-3 col-md-6">

            <div class="card dashboard-card point-card">

                <div class="card-body text-center py-4">

                    <i class="fa-solid fa-location-dot"></i>

                    <div class="stat-title">

                        Jumlah Point

                    </div>

                    <div class="stat-number">

                        {{ $points_count }}

                    </div>

                </div>

            </div>

        </div>



        <!-- POLYLINE -->

        <div class="col-lg-3 col-md-6">

            <div class="card dashboard-card polyline-card">

                <div class="card-body text-center py-4">

                    <i class="fa-solid fa-share-nodes"></i>

                    <div class="stat-title">

                        Jumlah Polyline

                    </div>

                    <div class="stat-number">

                        {{ $polylines_count }}

                    </div>

                </div>

            </div>

        </div>



        <!-- POLYGON -->

        <div class="col-lg-3 col-md-6">

            <div class="card dashboard-card polygon-card">

                <div class="card-body text-center py-4">

                    <i class="fa-solid fa-draw-polygon"></i>

                    <div class="stat-title">

                        Jumlah Polygon

                    </div>

                    <div class="stat-number">

                        {{ $polygons_count }}

                    </div>

                </div>

            </div>

        </div>



        <!-- USER -->

        <div class="col-lg-3 col-md-6">

            <div class="card dashboard-card user-card">

                <div class="card-body text-center py-4">

                    <i class="fa-solid fa-users"></i>

                    <div class="stat-title">

                        Jumlah User

                    </div>

                    <div class="stat-number">

                        {{ $users_count }}

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
