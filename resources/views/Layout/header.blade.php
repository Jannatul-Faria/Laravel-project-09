<header>
    <div class="row">
        <div class="col-12 col-md-3 col-lg-3">
            <div class="image">
                <a href="#"><img src={{ asset("imges/Screenshot_1-removebg-preview.png") }} alt=""></a>
            </div>
        </div>
        <div class="col-md-9 col-lg-9">
            <div class="menu">
                <ul>
                    <li><a href="{{ Route('home') }}">home</a></li>
                    <li><a href="{{ Route('about') }}">about</a></li>
                    <li><a href="{{ Route('service') }}">service</a></li>
                    <li><a href="{{ Route('portfolio') }}">portfolio</a></li>
                    <li><a href="{{ Route('client') }}">clients</a></li>
                    <li><a href="{{ Route('contact') }}">contact</a></li>
                    <div class="bar">
                       <a href="#"><i class="fa-solid fa-bars"></i></a>
                    </div>
                </ul>
            </div>

        </div>
    </div>
    {{-- <!-- sidebar --> --}}
    <div class="sidebar">
        <div class="sidebar-close">
            <i class="fas fa-times"></i>
        </div>
        <nav class="sidebar-menu">
            <ul>
                <li><a href="#">national</a></li>
                <li><a href="#">international</a></li>
                <li><a href="#">politics</a></li>
                <li><a href="#">sports</a></li>
                <li><a href="#">entertainments</a></li>
            </ul>
        </nav>
    </div>
</header>
 {{-- end header  --}}
