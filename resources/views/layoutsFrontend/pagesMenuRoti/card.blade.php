
<div class="container" style="display: flex; flex-wrap: wrap;">
@foreach ($menu as $d)
<div class="container-card mt-5 mb-5" style="margin-left: 20px;">
    <a href="{{ route('invoice.menu' , $d->id_roti) }}">
        <div class="card-content">
            <img src="{{ asset('gallery/' . $d->gambar) }}" height="100px" width="100%" alt="{{ $d->roti }}">
            <div class="p-3">
                <p style="font-size: 12px;">{{ $d->roti }}</p>
                <strong style="color: red; top:10px; position:relative;">Rp{{ $d->harga }}</strong>
            </div>
        </div>
    </a>
</div>
@endforeach
</div>