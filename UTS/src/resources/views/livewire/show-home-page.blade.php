@php
  use App\Models\PageConfig;
  $config = PageConfig::first();
@endphp

@php
  use App\Models\Produk;
  $produk = Produk::orderBy('id')->get();
@endphp
<main>
<section class="banner bg-tertiary position-relative overflow-hidden">
  <div class="container">   
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="block text-center text-lg-start pe-0 pe-xl-5">
          <h1 class="text-capitalize mb-4">{{ $config->title ?? ''}}</h1>
          <p class="mb-4">{{ $config->description ?? ''}}</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ps-lg-5 text-center">   
          <img loading="lazy" decoding="async"
            src="{{ asset('storage/' . $config->image) }}"
            alt="banner image" 
            class="img-fluid rounded shadow-lg w-75"
            style="max-height: 400px; object-fit: cover;">
        </div>
      </div>
    </div>
  </div>
  <div class="has-shapes">
    <svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none" xmlns="http://www.w3.org/2000/svg">
    </svg>
    <svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none" xmlns="http://www.w3.org/2000/svg">
    </svg>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="section-title pt-4">
          <p class="text-primary text-uppercase fw-bold mb-3">Produk</p>
          <h1>Semua Produk</h1>
          <p>Jelajahi semua produk yang ada disini, lihat sesuai kesukaan anda kapanpun dan dimanapun</p>
        </div>
      </div>
    </div>
    
    <div class="row mt-4">
      @foreach ($produk as $index => $item)
        <div class="col-lg-4 col-md-6 mb-4">
          <a class="text-black text-decoration-none" href="#">
            <div class="product-card position-relative">

              <span class="position-absolute colored-box text-center h5 mb-0 badge bg-primary rounded-circle d-flex align-items-center justify-content-center" 
                    style="width: 40px; height: 40px; top: 10px; left: 10px; z-index: 1;">
                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
              </span>
              
              <h3 class="text-center mb-3">{{ $item->nama }}</h3>
              
              @if ($item->image)
                <div class="overflow-hidden rounded-lg shadow-lg" style="height: 250px;">
                  <img
                    loading="lazy"
                    decoding="async"
                    src="{{ asset('storage/' . $item->image) }}"
                    alt="{{ $item->nama }}"
                    class="img-fluid w-100 transition-transform duration-300 ease-in-out"
                    style="object-fit: cover; height: 100%;"
                    onmouseover="this.style.transform='scale(1.05)'"
                    onmouseout="this.style.transform='scale(1)'">
                </div>
              @endif
              
              <div class="product-details mt-3">
                <p class="mb-2 text-center"><strong>{{ $item->deskripsi }}</strong></p>
                <p class="mt-2 fw-bold text-primary text-center">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>
</main>