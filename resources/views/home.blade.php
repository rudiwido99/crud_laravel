@extends('template.front.main')
@section('title', 'Beranda')
@section('content')
{{-- Hero Section --}}
<section class="hero" id="home">
    <main class="content">
        <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum, nihil.</p>
        <a href="#" class="cta">Beli Sekarang</a>
    </main>
</section>
{{-- End Hero Section --}}

{{-- About Section --}}
<section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>
    <div class="row">
        <div class="about-img">
            <img src="image/tentang.jpg" alt="Tentang Kami">
        </div>
        <div class="content">
            <h3>Kenapa memilih kopi kami</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim possimus delectus provident, eum sit similique.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum voluptatibus est totam esse facere similique deserunt vitae atque pariatur maxime.</p>
        </div>
    </div>
</section>
{{-- End About Section --}}

{{-- Menu Section --}}
<section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium pariatur ad officia amet deserunt! Suscipit.</p>
    <div class="menu-row">
        <div class="menu-card">
            <img src="image/menu/1.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="image/menu/1.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="image/menu/1.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="image/menu/1.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="image/menu/1.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
    </div>
</section>
{{-- End Menu Section --}}

{{-- Contact Section --}}
<section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, voluptas.</p>
    <div class="contact-row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253431.78631688675!2d110.27732389848298!3d-7.0243683482742645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Semarang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1674302419840!5m2!1sen!2sid"
         allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        <form action="">
            <div class="input-group">
                <i style="margin-top: 1rem" data-feather="user"></i>
                <input type="text" placeholder="nama">
            </div>
            <div class="input-group">
                <i style="margin-top: 1rem" data-feather="mail"></i>
                <input type="text" placeholder="email">
            </div>
            <div class="input-group">
                <i style="margin-top: 1rem" data-feather="phone"></i>
                <input type="text" placeholder="nomor hp">
            </div>
            <button type="submit" class="btn">Kirim Pesan</button>
        </form>       
    </div>
</section>
{{-- End Contact Section --}}

{{-- Footer --}}
<footer>
    <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
    </div>
    <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
        <a href="#article">Artikel</a>
    </div>
    <div class="credit">
        <p>Created by <a href="">Campus Digital</a> . | &copy; 2023</p>
    </div>
</footer>
{{-- End Footer --}}

@endsection




    {{-- <div class="container">
        <div class="row my-4">
            <h1>Halaman Home</h1>
        </div>
    </div> --}}