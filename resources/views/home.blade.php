@extends('layouts.app')

@section('content')

<article>
      <section class="hero" id="home">
        <div class="container">
            
        <div class="hero-content">
      <h3 class="h2 hero-title fade-in-top">
        <span id="hero-text">
           Digitalkan <br>
          <span id="dynamic-text">Masa Depan</span><br> 
          <span id="second-line"> Sekarang!</span>
        </span>
      </h3>
      <a href="{{ route('services') }}">
        <button class="btn fade-in-bottom">Klik untuk memulai!</button>
      </a>
    </div>
          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png"  loading="lazy" alt="hero-banner"
              class="w-100 banner-animation">
          </figure>

        </div>
      </section>

      <section class="section about" id="about">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="700" height="532" loading="lazy" alt="about banner"
              class="w-100 banner-animation">
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title underline fade-in-bottom">Kenapa Harus Kami?</h2>

            <p class="about-text fade-in-bottom">
            Di <strong>Vello Technology Digital</strong>, kami memahami bahwa <strong>setiap bisnis unik</strong> dan memiliki tantangan tersendiri dalam <strong>menghadapi era digital</strong>. Dengan pendekatan personal dan solusi yang disesuaikan, kami membantu usaha Anda <strong>meraih potensi penuh</strong> melalui <strong>digitalisasi</strong>. Tim kami terdiri dari para ahli berpengalaman di bidang teknologi, siap memberikan inovasi terkini untuk meningkatkan efisiensi, memperkuat keamanan data, dan memaksimalkan pertumbuhan bisnis Anda. Kami hadir sebagai <strong>mitra transformasi digital</strong> yang andal, memastikan kesuksesan di masa depan.<strong> Digitalkan Masa Depanmu Bersama Kami!</strong>
            </p>

          </div>

        </div>
      </section>

      <section class="section service" id="services">
        <div class="container">

          <h2 class="h2 section-title underline fade-in-top">Layanan Kami</h2>

          <ul class="service-list">

            <li>
              <div class="service-card fade-in-bottom">

                <div class="card-icon">
                  <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Digital Transformation Consulting</h3>

                <p class="text">
                Membantu bisnis beralih ke platform digital dengan solusi teknologi yang tepat.
                </p>


              </div>
            </li>

            <li>
              <div class="service-card fade-in-bottom">

                <div class="card-icon">
                  <ion-icon name="dice-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Product Digitalization</h3>

                <p class="text">
                Mengubah produk fisik menjadi layanan atau produk digital, seperti e-commerce, aplikasi, atau platform SaaS (Software as a Service).
                </p>

              </div>
            </li>

            <li>
              <div class="service-card fade-in-bottom">

                <div class="card-icon">
                  <ion-icon name="construct-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Custom Software Development</h3>

                <p class="text">
                Pengembangan software atau aplikasi yang disesuaikan dengan kebutuhan bisnis.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card fade-in-bottom">

                <div class="card-icon">
                  <ion-icon name="logo-instagram"></ion-icon>
                </div>

                <h3 class="h3 title">Social Media Strategist</h3>

                <p class="text">
                Membantu mengembangkan strategi media sosial yang kreatif dan berbasis data untuk meningkatkan branding dan interaksi dengan audiens.
                </p>

              </div>
            </li>

          </ul>
          <h2 class="h2 section-title  fade-in-bottom">
            <a href="{{ route('services') }}">
              <button class="btn">Mulai Sekarang !</button>
            </a>
          </h2>

          
        </div>
      </section>

      <section class="section features" id="features">
        <div class="container">

          <h2 class="h2 section-title underline fade-in-bottom">Fitur Kami</h2>

          <ul class="features-list">

            <li>
              <div class="features-card fade-in-top">

                <div class="icon">
                  <ion-icon name="bulb-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Evaluasi Kebutuhan</h3>

                  <p class="text">
                  Analisis proses bisnis yang ada dan identifikasi area yang membutuhkan otomatisasi atau perbaikan teknologi.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="features-card fade-in-bottom">

                <div class="icon">
                  <ion-icon name="cog-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Integrasi Teknologi Baru</h3>

                  <p class="text">
                  Kami memanfaatkan teknologi baru untuk meningkatkan efisiensi operasional bisnis dan interaksi di media sosial.
                  </p>
                </div>

              </div>
            </li>

          </ul>

          <figure class="features-banner">
            <img src="./assets/images/feautres-banner.png" width="369" height="318" loading="lazy" alt="Features Banner"
              class="w-100 banner-animation">
          </figure>

          <ul class="features-list">

            <li>
              <div class="features-card fade-in-top">

                <div class="icon">
                  <ion-icon name="code-slash-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Pengembangan Digital</h3>

                  <p class="text">
                  Digitalisasi melalui platform e-commerce, aplikasi, atau media sosial untuk meningkatkan branding dan interaksi pelanggan.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="features-card fade-in-bottom">

                <div class="icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Evaluasi dan Optimalisasi</h3>

                  <p class="text">
                  Pastikan keamanan siber dan lakukan pemeliharaan teknologi secara rutin.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="section testimonials" id="testimonials">
        <div class="container">
          <h2 class="h2 section-title underline fade-in-bottom">Apa Kata Mereka?</h2>
        </div>
        <div class="slider">
          <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav" id="slider1"/>
          <input type="radio" name="slider" title="slide2" class="slider__nav" id="slider2"/>
          <input type="radio" name="slider" title="slide3" class="slider__nav"id="slider3" />
          <input type="radio" name="slider" title="slide4" class="slider__nav" id="slider4"/>
          <div class="slider__inner">
            <div class="slider__contents">
              <img src="./assets/images/kombes.jpg" class="sliderimage">
              <i class="slider__image fa fa-codepen">B.M Marthin</i>
              <h2 class="slider__caption">Komisaris Polisi Polda Metrojaya</h2>
              <p class="slider__txt">"Vello sebagai Developer dapat beradaptasi dan memahami kebutuhan client dengan cepat dan tanggap"</p>
            </div>
            <div class="slider__contents">
              <img src="./assets/images/arizz.jpg" class="sliderimage">
              <i class="slider__image fa fa-newspaper-o">Achmad Rizky</i>
              <h2 class="slider__caption">Anak Pemilik PO New Shantika</h2>
              <p class="slider__txt">"Bersama Tim dan rekan-rekan di vello kami mampu membuat aplikasi yang sesuai dengan kebutuhan dengan tepat dan responsif"</p>
            </div>
            <div class="slider__contents">
              <img src="./assets/images/omar.jpg" class="sliderimage">
              <i class="slider__image fa fa-television">Omar Dhani</i>
              <h2 class="slider__caption">CEO PT. Nusa Tech Solution</h2>
              <p class="slider__txt">"Menjalin kerjasama dengan vello semudah membalikkan telapak tangan, asli semudah itu!"</p>
            </div>
            <div class="slider__contents">
              <img src="./assets/images/reza.jpg" class="sliderimage">
              <i class="slider__image fa fa-diamond">Reza D Putra</i>
              <h2 class="slider__caption">Mahasiswa peserta lomba P2MW</h2>
              <p class="slider__txt">"Mimpi saya untuk mengikuti lomba dan mengimpelementasikan ide saya sangat terbantu dengan kehadiran Vello"</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section portfolio" id="portfolio">
    <div class="container">
        <h2 class="h2 section-title underline fade-in-bottom">Portofolio</h2>
        <ul class="blog-list">
            @foreach ($featuredBlogs as $blog)
            <li>
                <div class="blog-card fade-in-top">
                    <figure class="banner">
                        <a href="{{ route('blog.show', $blog['slug']) }}">
                            <!-- Mengambil gambar dari folder public/assets/images/blog -->
                            <img src="{{ asset('assets/images/blog/' . $blog['image']) }}" width="750" height="350" loading="lazy" alt="{{ $blog['title'] }}" class="img-cover">
                        </a>
                    </figure>
                    <div class="content">
                        <h3 class="h3 title">
                            <a href="{{ route('blog.show', $blog['slug']) }}">
                                {{ $blog['title'] }}
                            </a>
                        </h3>
                        <p class="text">
                            {{ $blog['description'] }}
                        </p>
                        <div class="meta">
                            <div class="publish-date">
                                <ion-icon name="time-outline"></ion-icon>
                                <time datetime="{{ $blog['date'] }}">{{ \Carbon\Carbon::parse($blog['date'])->format('d M, Y') }}</time>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    
    <h2 class="h2 section-title  fade-in-bottom">
            <a href="{{ route('blog.index') }}">
                <button class="btn" style="margin-top: 10px;">Lihat Lebih Banyak !</button>
            </a>
        </h2>
</section>



    </article>
    <script>
const words = ["Brandmu","Perusahaanmu","UMKM-mu", "Bisnismu", "Portofoliomu", "Undanganmu ", "Organisasimu", "Masa Depanmu"];
let currentIndex = 0;

const dynamicText = document.getElementById('dynamic-text');

function changeWord() {
  // Change the text to the next word in the array
  dynamicText.textContent = words[currentIndex];
  
  // Increment the index for the next cycle
  currentIndex++;

  // Stop the loop when the last word ("Masa Depan") is reached
  if (currentIndex >= words.length) {
    clearInterval(wordInterval); // Stop the interval when done
  }
}

// Change the word every 0.5 seconds (500ms)
const wordInterval = setInterval(changeWord, 700);
    </script>
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    let currentIndex = 1;
    const totalSlides = 4;

    setInterval(() => {
      const slider = document.getElementById(`slider${currentIndex}`);
      if (slider) {
        slider.checked = true;
        currentIndex = currentIndex === totalSlides ? 1 : currentIndex + 1;
      } else {
        console.error(`Element with ID slider${currentIndex} not found.`);
      }
    }, 4000);
  });
</script>
    
@endsection