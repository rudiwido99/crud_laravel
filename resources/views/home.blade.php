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
    </div>
</section>
{{-- End Menu Section --}}

@endsection




    {{-- <div class="container">
        <div class="row my-4">
            <h1>Halaman Home</h1>
        </div>
    </div> --}}