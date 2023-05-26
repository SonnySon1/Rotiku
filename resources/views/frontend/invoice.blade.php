@include('layoutsFrontend.head')

@include('layoutsFrontend.pagesMenuRoti.navbarmenu')
<div class="container container-invoice">
    <div class="rowinvoice">
            <div class="image">
                <img class="main-image" src="{{ asset('gallery/' . $invoice->gambar) }}" alt="{{ $invoice->roti }}">
            </div>
            <div class="description-infoice">
                <h1 class="title">{{ $invoice->roti }}</h1>
                <p class="stok">Stok {{ $invoice->stok }}</p>
                <div class="harga-invoice">Rp <span id="harga"><input type="number" value="{{ $invoice->harga }}"
                            style="border: none;" disabled></span></div>
                <div class="detail">
                    <div class="class rincian">
                        <hr style="position: relative; top:20px;">
                        <p class="detail-text">Detail</p>
                        <hr style="position: relative; bottom:10px;">
                        Berat Satuan: 800 g <br>
                        Kategori: {{ $kategori->kategori }} <br>
                        Etalase: ROTI BREAD <br>
                        Grandpas VEGAN TOAST BREAD WHOLEMEAL - ROTI TAWAR GANDUM <br>
                    </div>

                    <div class="description-text">
                        {{ $invoice->description }}
                    </div>
                </div>
            </div>
            <div class="container-interaction">
                <div class="cardnyam button" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <div class="nyam-text">
                        Rotiku NYAM!
                    </div>
                </div>
                <div class="card-jumlah-dan-catatan">
                    <div class="contet-interaction-invoice">
                        <h6 class="atur-jumlah-text">Atur jumlah dan catatan</h6>
                        <p class="kemasan">Whole Utuh</p>
                        <hr>
                        <div class="container-btn-t-k-stok">
                            <div class="jumlah-beli-Container-invoice">
                                <button type="button" id="kurang" class="tambah-dan-kurang">-</button>
                                <input id="jumlah" type="number" class="jumlah jumlah-input" value="1"
                                    disabled>
                                <button type="button" id="tambah" class="tambah-dan-kurang tambah">+</button>
                            </div>
                            <div class="stok-in-interaction">
                                Stok: <span style="font-weight: bold;">{{ $invoice->stok }}</span>
                            </div>
                        </div>
                        <p class="min-pembelian">Address</p>
                        <div class="tambahcatatan-container">

                            <input class="catatan-input" type="text" name="catatan" id="catatan"
                                placeholder="Contoh: SMKN 3 kelas 12 RPL">

                        </div>
                        <p class="subtotal-text">
                            Sub Total: <span
                                style="font-weight: bold; position: absolute; right:0; margin-right:20px;">Rp <span
                                    id="subtotal"><input type="number" value="{{ $invoice->harga }}"
                                        class="input-intrac-style" disabled></span></span>
                        </p>
                        <ul>
                            <li><a href="#" class="btn-beli-dan-keranjang btn-tambah-keranjang"
                                    style="text-align: center;" type="submit">&#43;
                                    Keranjang</a></li>
                            <li><a href="{{ route('beli') }}" class="btn-beli-dan-keranjang btn-beli-menu"
                                    type="submit">Beli Langsung</a></li>
                        </ul>
    </div>
</div>

<script>
    // Ambil setiap elemen berdasarkan id
    var kurang = document.getElementById('kurang');
    var jumlah = document.getElementById('jumlah');
    var tambah = document.getElementById('tambah');
    var harga = document.getElementById('harga');
    var subtotal = document.getElementById('subtotal');

    var angka = 1;

    // Buat sebuah aksi atau event ketika tombol tambah di klik, maka angka +1
    tambah.addEventListener('click', function() {
        angka += 1;
        jumlah.value = angka.toString();

        // Jika penambahan berhasil, maka harga dalam subtotal akan berubah
        var hargaValue = parseInt(harga.firstChild.value);
        var jumlahValue = parseInt(jumlah.value);

        subtotal.firstChild.value = (hargaValue * jumlahValue).toString();
    });

    // Buat sebuah aksi atau event ketika tombol kurang di klik, maka angka -1
    kurang.addEventListener('click', function() {
        // Cek jika angka lebih dari 1, maka angka dapat dikurangi
        if (angka > 1) {
            angka -= 1;
            jumlah.value = angka.toString();

            // Jika pengurangan berhasil, maka harga dalam subtotal akan berubah
            var hargaValue = parseInt(harga.firstChild.value);
            var jumlahValue = parseInt(jumlah.value);

            subtotal.firstChild.value = hargaValue * jumlahValue;
        }
    });
</script>




























{{-- <div class="bodyContent">
<div class="container mt-5 mb-5" style="background: #eaeaea; border-radius:10px;">
    <div class="content d-flex flex-wrap p-5">
        <div class="imageWrapper">
            <img src="{{asset('gallery/' . $invoice->gambar )}}" alt="{{ $invoice->roti }}" style="width: 400px; height:390px; border-radius:10px;" max-width="500" max-height="500"> 
        </div>
        <div class="contetIsnteraction" style="margin-left: 30px">
            <h3 style="font-weight: bold; color:#7B7B7B;">{{ $invoice->roti }}</h3> --}}
{{-- <h5 style="font-weight: bold; color:#7B7B7B;">{{ $invoice->kategori }}</h5> --}}
{{-- <h2 class="mt-5" style="font-weight: bold;">Rp{{ $invoice->harga }}</h1>
            <button   type="button" class="btn btn-primary button" style="width: 30%; top:5px;" data-toggle="modal" data-target=".bd-example-modal-lg">
                <span class="">Pesan</span>
            </button>
            <p style="width:550px; margin-top:50px;">{{ $invoice->description }}</p>
        </div>
    </div>
</div>
</div> --}}
{{-- @includeIf('layoutsFrontend.footer') --}}
