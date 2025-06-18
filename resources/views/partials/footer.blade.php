
<footer class="text-white pt-5 pb-4" style="background: linear-gradient(120deg, #1e293b 0%, #0f172a 100%);">
    <div class="container text-center text-md-start">
        <div class="row">
            <!-- Logo/Brand -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <h4 class="fw-bold mb-3">BookNest</h4>
                <p class="text-white-50">Read. Discover. Connect. Dive into a world of stories with BookNest.</p>
            </div>
            <!-- Useful Links -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Links</h6>
                <p><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Home</a></p>
                <p><a href="{{ route('account.book_index') }}" class="text-white-50 text-decoration-none">Library</a></p>
                <p><a href="{{ route('about') }}" class="text-white-50 text-decoration-none">About</a></p>
                <p><a href="{{ route('contact') }}" class="text-white-50 text-decoration-none">Contact</a></p>
            </div>
            <!-- Legal -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Legal</h6>
                <p><a href="{{ route('legal.privacy') }}" class="text-white-50 text-decoration-none">Privacy Policy</a></p>
                <p><a href="{{ route('legal.terms') }}" class="text-white-50 text-decoration-none">Terms of Service</a></p>
            </div>
            <!-- Contact -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p class="text-white-50"><i class="fas fa-envelope me-2"></i> chunchoeurn99@gmail.com</p>
                <p class="text-white-50"><i class="fas fa-phone me-2"></i> +855 70 229 710</p>
                <div class="mt-3">
                    <a href="#" class="text-white-50 fs-5 me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white-50 fs-5 me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white-50 fs-5 me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white-50 fs-5"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <hr class="text-white-50 my-4">
        <div class="row">
            <div class="col text-center">
                <p class="mb-0 text-white-50">&copy; {{ date('Y') }} Chun Choeurn. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

