<div class="col-6 col-lg-2 col-md-4">
    <div class="card mb-2">
        <div class="card-header bg-secondary">
            <h2 class="text-light">{{ $stock->nama }}</h2>
        </div>
        <div class="card-body row">
            @if($stock->gambar)
                <img loading="lazy" src="{{ asset('storage/' . $stock->gambar) }}" alt="gambar-produk-{{ $stock->slug }}" height="120" class="mb-3">
            @else
                {{-- <div class="mt-5 mb-5 text-center">tidak ada gambar</div> --}}
                <img src="" alt="tidak ada gambar" height="120">
            @endif
            @if ($stock->persediaan == 'habis')
                <span class="btn btn-outline-secondary disabled">stok habis</span>
            @elseif ($stock->persediaan == 'ada')
                <a href="{{ route('showBeli', $stock->slug) }}" class="btn btn-outline-secondary">Beli</a>
            @endif
        </div>
    </div>
</div>
