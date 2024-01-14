
{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Renn55</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top o">
        <div class="container py-2">
            <a class="navbar-brand px-5" href="/">the<span class="text-title-green">YNTKTS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-5" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link {{ request()->is('abouts') ? 'active' : '' }}"
                            href="/abouts">abouts</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link {{request()->is('posts*') ? 'active' : '' }}" href="/posts">Blog</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link {{request()->is('categories*')  ? 'active' : '' }}" href="/categories">ListCategory</a>
                    </li>
                    <li class="nav-item px-2 rounded bg-success ">
                        <a class="nav-link text-white" href="/login"><i class="bi bi-box-arrow-in-right mx-1 "></i>Login</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>