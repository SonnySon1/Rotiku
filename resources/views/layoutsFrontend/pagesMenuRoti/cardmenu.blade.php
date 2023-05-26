<h2 class="judulMenu">Berbagai Pilihan Menu</h2>
                <div class="containerCard">
                    @foreach ($menu as $d)
                        
                        <a href="{{ route('invoice.menu', $d->id_roti) }}">
                            <div class="card">
                                <div class="cardimage">
                                    <img class="imageProduct"
                                    src="{{ asset('gallery/' . $d->gambar) }}" width="186"
                                        height="189" class="img-responsive">
                                </div>
                                <div class="subText">
                                    <p class="subtitleProduct">
                                        {{$d->roti}}
                                    </p>
                                    <h2 class="hargaProduct">
                                        Rp{{number_format($d->harga,0, ',','.')}}
                                        <div class="line-harga"></div>
                                    </h2>
                                    <p class="tersediaProduct">Tersedia {{ $d->stok }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>