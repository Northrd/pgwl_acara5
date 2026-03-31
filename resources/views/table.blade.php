@extends('layouts.template')
@section('styles')
<style>
        /* full height map container */
        body, html {
            height: 100%;
            margin: 0;
        }
    </style>
@endsection
    
@section('content')
<div class="container mt-3">
    <div class="card"></div>
    <div class="card-header">
        <h3>Tabel Data</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bundaran UGM</td>
                    <td>Jalan Pancasila</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Monumen Jogja</td>
                    <td>Jl. Kemerdekaan No. 456</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Stasiun Tugu</td>
                    <td>Jl. Stasiun No. 789</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Keraton Yogyakarta</td>
                    <td>Jl. Rotowijayan No. 1</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Malioboro</td>
                    <td>Jl. Malioboro No. 123</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
