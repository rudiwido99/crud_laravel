@extends('template.front.main')
@section('title', 'Contact')
@section('content')
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
@endsection