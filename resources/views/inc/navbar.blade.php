<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-controls="navbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
            
        </div>
        <div id = "navbar" class="collapse navbar-collapse">
            <ul class="navbar-nav" >
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/posts">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>