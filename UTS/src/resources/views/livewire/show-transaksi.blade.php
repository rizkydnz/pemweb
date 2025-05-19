@php
  use App\Models\Transaksi;
  $transaksis = Transaksi::with('pelanggan', 'produk')->orderBy('id')->get();
@endphp

<main>
  <section class="section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
          <h1 class="mb-4">Data Transaksi</h1>
          <p class="text-muted">Berikut adalah daftar transaksi pelanggan yang membeli produk.</p>
        </div>
      </div>

      <div class="row">
        @forelse ($transaksis as $index => $transaksi)
          <div class="col-lg-6 mb-4">
            <div class="card shadow-sm border-0 rounded-4 h-100">
              <div class="card-body">
                <h5 class="card-title mb-2">Riwayat Transaksi #{{ str_pad($transaksi->id, 3, '0', STR_PAD_LEFT) }}</h5>
                <img src="{{ asset('storage/' . $transaksi->produk->image) }}" alt="Foto Produk" style="max-width: 150px; max-height: 150px;">
                <p class="mb-1"><strong>Nama Pelanggan:</strong> {{ $transaksi->pelanggan->nama ?? '-' }}</p>
                <p class="mb-1"><strong>Email:</strong> {{ $transaksi->pelanggan->email ?? '-' }}</p>
                <p class="mb-1"><strong>Kontak:</strong> {{ $transaksi->pelanggan->kontak ?? '-' }}</p>
                <hr>
                <p class="mb-1"><strong>Produk:</strong> {{ $transaksi->produk->nama ?? '-' }}</p>
                <p class="mb-1"><strong>Harga:</strong> Rp {{ number_format($transaksi->produk->harga, 0, ',', '.') }}</p>
                <p class="mb-1"><strong>Jumlah:</strong> {{ $transaksi->Jumlah }}</p>
                <p class="fw-bold text-primary mt-2"><strong>Total:</strong> Rp {{ number_format($transaksi->Total_Harga, 0, ',', '.') }}</p>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center">
            <p class="text-muted">Belum ada transaksi.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>
</main>