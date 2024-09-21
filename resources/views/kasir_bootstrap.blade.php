@extends('template_dashboard.template')
@section('main_body')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <div class="row g-4">
                {{-- First Column Start --}}
                <div class="col-12 col-md-7">
                    <h5 class="mb-3">Data Barang</h5>
                    @foreach ($produks as $produk)
                        <div class="container p-1 user-select-none" onclick="addItem('{{ $produk->nama_produk }}', {{ $produk->harga }})">
                            <div class="row bg-white rounded p-2 border border-success mb-2">
                                <div class="col-8 d-flex flex-column justify-content-evenly">
                                    <p class="mb-10 text-dark">{{ $produk->nama_produk }}</p>
                                    <p class="mb-0 text-dark">Harga: {{ $produk->harga }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- First Columnd End --}}
    
                {{-- Second Column Start --}}
                <div class="col-12 col-md-5">
                    <h5 class="mb-3">Transaksi</h5>
                    <div class="container bg-white rounded border border-success p-3">
                        <div id="item-container">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <h6>Jumlah Barang</h6>
                            </div>
                            <div class="col-1">
                                <h6>:</h6>
                            </div>
                            <div class="col">
                                <p class="fw-bold text-dark"><span id="item-total">0</span> item</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Subtotal</h6>
                            </div>
                            <div class="col-1">
                                <h6>:</h6>
                            </div>
                            <div class="col">
                                <p class="fw-bold text-dark">Rp. <span id="subtotal">0</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Total</h6>
                            </div>
                            <div class="col-1">
                                <h6>:</h6>
                            </div>
                            <div class="col">
                                <p class="fw-bold text-dark">Rp. <span id="total">0</span></p>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="button">Cetak & Simpan</button>
                        </div>
                    </div>
                </div>
                {{-- Second Column End --}}
            </div>
        </div>
    </div>
    <!-- Table End -->

    <script>
        let jumlahItem = 0;
        let subtotal = 0;
        let total = 0;

        let itemTotalElement = document.getElementById('item-total');
        let subTotalElement = document.getElementById('subtotal');
        let totalElement = document.getElementById('total');

        const element = document.getElementById('item-container');

        function addItem(itemName, price){
            let itemElement = document.getElementById(`transaksi-${itemName}`);

            if(itemElement == null){
                const newElement = document.createElement('div');
                newElement.innerHTML =  
                `
                    <div class="row bg-white rounded p-2 border border-success m-1" id='transaksi-${itemName}'>
                        <div class="col-8 d-flex flex-column justify-content-evenly">
                            <p class="mb-10 text-dark" value='${itemName}'>${itemName}</p>
                            <div class="row">
                                <div class="col-6">
                                    <p class="mb-0 text-dark" value='${price}'>Harga: <span id='transaksi-harga-${itemName}'>${price}</span></p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-0 text-dark" value='1'>Jumlah: <span id='transaksi-jumlah-${itemName}'>1</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 m-auto d-flex justify-content-center align-items-center">
                            <button class="btn btn-success m-1" onclick="addItem('${itemName}', ${price})"><i class="fa fa-plus me-lg-2"></i></button>
                            <button class="btn btn-danger m-1" onclick="deleteItem('${itemName}')"><i class="fa fa-trash me-lg-2"></i></button>
                            <button class="btn btn-danger m-1" onclick="removeItem('${itemName}', ${price})"><i class="fa fa-minus me-lg-2"></i></button>
                        </div>
                    </div>
                `;
                element.appendChild(newElement);
            } else {
                let itemTotalElement = document.getElementById(`transaksi-jumlah-${itemName}`);
                let hargaTotalElement = document.getElementById(`transaksi-harga-${itemName}`);

                itemTotalElement.innerHTML = parseInt(itemTotalElement.innerText) + 1;
                hargaTotalElement.innerHTML = parseInt(hargaTotalElement.innerText) + price;
            }

            jumlahItem += 1;
            itemTotalElement.innerText = jumlahItem;
            subtotal += price;
            subTotalElement.innerText = subtotal;
            total += price;
            totalElement.innerText = total;
        }

        function removeItem(itemName, price){
            let itemTransaksiElement = document.getElementById(`transaksi-${itemName}`);
            let jumlahTransaksiElement = document.getElementById(`transaksi-jumlah-${itemName}`);

            if(parseInt(jumlahTransaksiElement.innerText) == 1){
                deleteItem(itemName);
            } else {
                let hargaTotalElement = document.getElementById(`transaksi-harga-${itemName}`);

                jumlahTransaksiElement.innerHTML = parseInt(jumlahTransaksiElement.innerHTML) - 1;
                hargaTotalElement.innerHTML = parseInt(hargaTotalElement.innerHTML) - price;


                jumlahItem -= 1;
                itemTotalElement.innerText = jumlahItem;

                subtotal -= price;
                subTotalElement.innerText = subtotal;

                total -= price;
                totalElement.innerText = total;
            }
        }

        function deleteItem(itemName){
            let transaksiElement = document.getElementById(`transaksi-${itemName}`);
            let jumlahItemTransaksiElement = document.getElementById(`transaksi-jumlah-${itemName}`);
            let hargaTransaksiElement = document.getElementById(`transaksi-harga-${itemName}`);

            jumlahItem -= parseInt(jumlahItemTransaksiElement.innerText);
            itemTotalElement.innerText = jumlahItem;
            subtotal -= parseInt(hargaTransaksiElement.innerText);
            subTotalElement.innerText = subtotal;
            total -= parseInt(hargaTransaksiElement.innerText);
            totalElement.innerText = total;

            transaksiElement.remove();
        }

    </script>
@endsection