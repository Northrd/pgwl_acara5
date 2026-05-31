<style>

.navbar-custom{
    background: white;
    box-shadow: 0 2px 12px rgba(0,0,0,.08);
}

.navbar-brand{
    color:#0d6efd !important;
    font-weight:700;
    font-size:1.3rem;
}

.nav-link{
    color:#495057 !important;
    font-weight:500;
    padding:10px 16px !important;
    border-radius:10px;
    transition:.25s;
}

.nav-link:hover{
    background:#eef4ff;
    color:#0d6efd !important;
}

.btn-login{
    background:#0d6efd;
    color:white !important;
    border-radius:10px;
}

.btn-login:hover{
    background:#0b5ed7;
}

.btn-logout{
    background:#dc3545;
    color:white;
    border:none;
    border-radius:10px;
    padding:10px 16px;
}

.btn-logout:hover{
    background:#bb2d3b;
}

</style>



<nav class="navbar navbar-expand-lg navbar-custom">

<div class="container-fluid px-4">

    <!-- Logo -->
    <a class="navbar-brand" href="#">
        <i class="fa-solid fa-globe"></i>
        {{ $title }}
    </a>

    <!-- Toggle -->
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">

        <span class="navbar-toggler-icon"></span>

    </button>


    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav w-100 align-items-center">

            <li class="nav-item">
                <a class="nav-link active"
                href="{{ route('home') }}">
                    <i class="fa-solid fa-house"></i>
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"
                href="{{ route('peta') }}">
                    <i class="fa-solid fa-location-dot"></i>
                    Peta
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"
                href="{{ route('tabel') }}">
                    <i class="fa-solid fa-table-list"></i>
                    Tabel
                </a>
            </li>


            <!-- kanan -->
            <li class="nav-item ms-auto">

                @guest

                <a
                class="nav-link btn-login px-4"
                href="{{ route('login') }}">

                    <i class="fa-solid fa-user"></i>
                    Login

                </a>

                @endguest


                @auth

                <form
                action="{{ route('logout') }}"
                method="POST">

                    @csrf

                    <button
                    type="submit"
                    class="btn-logout">

                        <i class="fa-solid fa-sign-out-alt"></i>
                        Logout

                    </button>

                </form>

                @endauth

            </li>

        </ul>

    </div>

</div>

</nav>
