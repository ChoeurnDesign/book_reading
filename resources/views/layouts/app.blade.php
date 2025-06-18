<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Book Review App</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .font-size {
            font-size: 1.15rem;
        }


        @media (max-width: 991.98px) {
            .navbar .navbar-collapse {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80vw;
                max-width: 340px;
                height: 100%;
                background: #212529;
                z-index: 1050;
                transition: right 0.33s cubic-bezier(.77, 0, .18, 1);
                box-shadow: -2px 0 18px 0 #0002;
                padding-top: 60px;
            }

            .navbar .navbar-collapse.show {
                right: 0;
            }

            .navbar-nav {
                flex-direction: column;
                align-items: flex-start;
                text-align: left;
                width: 100%;
            }

            .navbar-toggler {
                z-index: 1060;
            }

            body.offcanvas-backdrop {
                overflow: hidden;
            }
        }
    </style>
</head>

<body class="bg-light">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container p-1 font-size position-relative">
            <a class="navbar-brand fw-bold d-flex align-items-center position-relative" href="{{ route('home') }}">
                <img src="{{ asset('img_style/logo1.png') }}" alt="Logo" class="me-2 position-absolute"
                    style="height:55px; left:0; top:50%; transform:translateY(-50%);">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav bg-dark nav-pills ms-auto mb-lg-0 gap-3">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">
                            <i class="fa fa-home fa-fw me-2"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('account.book_index') }}">
                            <i class="fa fa-book fa-fw me-2"></i>
                            Books
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('account.categories_index') }}">
                            <i class="fa fa-list fa-fw me-2"></i>
                            Categories
                        </a>
                    </li>
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('account.profile') }}">
                            <i class="fa fa-user fa-fw me-2"></i>
                            My Account
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('account.login') }}">
                            <i class="fa fa-sign-in-alt fa-fw me-2"></i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('account.register') }}">
                            <i class="fa fa-user-plus fa-fw me-2"></i>
                            Register
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('main')
    @include('partials.footer')
    @yield('script')
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    @yield('script')
</body>
</html>
