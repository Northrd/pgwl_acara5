@extends('layouts.template')

@section('styles')

<link rel="stylesheet"
href="https://cdn.datatables.net/2.3.8/css/dataTables.dataTables.css">

<style>

body{
    background-color:#f8fafc;
}

.table img{
    border-radius:12px;
    object-fit:cover;
}

.card{
    border:none;
    border-radius:16px;
}

.card-header{
    border-radius:16px 16px 0 0 !important;
}

</style>

@endsection


@section('content')

<div class="container mt-4">

    <!-- POINT -->
    <div class="card shadow-lg mb-4">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                <i class="fa-solid fa-location-dot me-2"></i>
                Tabel Data Point
            </h4>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table
                    id="tabledatapoints"
                    class="table table-hover align-middle">

                    <thead class="table-light text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Tanggal Dibuat</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($points as $p)

                    <tr>

                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>

                        <td class="fw-semibold">
                            {{ $p->name }}
                        </td>

                        <td>
                            {{ $p->description }}
                        </td>

                        <td class="text-center">
                            <img
                            src="{{ asset('storage/images/' . $p->image) }}"
                            width="180"
                            class="shadow-sm">
                        </td>

                        <td class="text-center text-muted">
                            {{ $p->created_at->format('d M Y') }}
                        </td>

                    </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <!-- POLYLINE -->
    <div class="card shadow-lg mb-4">

        <div class="card-header bg-success text-white">
            <h4 class="mb-0">
                <i class="fa-solid fa-share-nodes me-2"></i>
                Tabel Data Polyline
            </h4>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table
                id="tabledatapolyline"
                class="table table-hover align-middle">

                    <thead class="table-light text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Tanggal Dibuat</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($polylines as $p)

                    <tr>

                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>

                        <td class="fw-semibold">
                            {{ $p->name }}
                        </td>

                        <td>
                            {{ $p->description }}
                        </td>

                        <td class="text-center">
                            <img
                            src="{{ asset('storage/images/' . $p->image) }}"
                            width="180"
                            class="shadow-sm">
                        </td>

                        <td class="text-center text-muted">
                            {{ $p->created_at->format('d M Y') }}
                        </td>

                    </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <!-- POLYGON -->
    <div class="card shadow-lg">

        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">
                <i class="fa-solid fa-draw-polygon me-2"></i>
                Tabel Data Polygon
            </h4>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table
                id="tabledatapolygon"
                class="table table-hover align-middle">

                    <thead class="table-light text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Tanggal Dibuat</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($polygons as $p)

                    <tr>

                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>

                        <td class="fw-semibold">
                            {{ $p->name }}
                        </td>

                        <td>
                            {{ $p->description }}
                        </td>

                        <td class="text-center">
                            <img
                            src="{{ asset('storage/images/' . $p->image) }}"
                            width="180"
                            class="shadow-sm">
                        </td>

                        <td class="text-center text-muted">
                            {{ $p->created_at->format('d M Y') }}
                        </td>

                    </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection


@section('scripts')

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.8/js/dataTables.js"></script>

<script>

new DataTable('#tabledatapoints');
new DataTable('#tabledatapolyline');
new DataTable('#tabledatapolygon');

</script>

@endsection
