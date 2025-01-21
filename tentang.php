<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Order Delivery dengan Peta</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/svgs/solid/map-marker-alt.svg" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #eaeaea;
            padding-top: 30px;
            padding-bottom: 80px;
            /* Tambahkan padding bawah */
        }

        .container {
            margin-top: 30px;
        }

        h1 {
            color: #00e6e6;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .section-title {
            font-weight: 600;
            font-size: 1.5rem;
            margin-top: 20px;
            color: #00e6e6;
        }

        p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .card {
            background-color: #1e1e1e;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .card-body {
            padding: 30px;
        }

        .btn-primary {
            background-color: #00e6e6;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #00b3b3;
            transform: scale(1.05);
        }

        .mt-3 {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="text-center">Tentang Order Delivery dengan Peta</h1>

        <div class="card">
            <div class="card-body">
                <h2 class="section-title">Apa itu Order Delivery dengan Peta?</h2>
                <p>
                    Order Delivery dengan Peta adalah sistem yang memanfaatkan teknologi peta untuk mempermudah proses pemesanan dan pengiriman makanan atau barang. Sistem ini memungkinkan pelanggan untuk menentukan lokasi mereka secara langsung di peta, menghitung jarak dari restoran atau toko, dan menghitung ongkos kirim secara otomatis.
                </p>

                <h2 class="section-title">Fitur Utama</h2>
                <ul>
                    <li><strong>Menentukan Lokasi Pelanggan:</strong> Pelanggan dapat memasukkan koordinat atau memilih lokasi mereka langsung dari peta untuk menentukan tempat pengantaran.</li>
                    <li><strong>Perhitungan Jarak:</strong> Sistem menghitung jarak antara restoran/toko dan lokasi pelanggan dengan akurasi yang tinggi menggunakan teknologi GPS.</li>
                    <li><strong>Perhitungan Ongkir:</strong> Berdasarkan jarak yang dihitung, sistem secara otomatis menghitung biaya pengiriman atau ongkir yang harus dibayar oleh pelanggan.</li>
                    <li><strong>Integrasi WhatsApp:</strong> Setelah pemesanan, pelanggan dapat mengirimkan informasi pesanan mereka langsung ke restoran atau toko via WhatsApp untuk konfirmasi lebih lanjut.</li>
                    <li><strong>Integrasi Google Maps:</strong> Pelanggan dapat membuka Google Maps untuk melihat rute atau menyalin koordinat mereka untuk keperluan lain.</li>
                </ul>

                <h2 class="section-title">Manfaat</h2>
                <p>
                    Dengan menggunakan sistem ini, baik pelanggan maupun penyedia layanan mendapatkan beberapa keuntungan, di antaranya:
                </p>
                <ul>
                    <li><strong>Mudah dan Cepat:</strong> Pelanggan dapat dengan mudah memilih lokasi dan melakukan pemesanan tanpa perlu repot mencari alamat secara manual.</li>
                    <li><strong>Akurasi Pengiriman:</strong> Sistem ini memungkinkan perhitungan jarak dan ongkir yang lebih akurat dan efisien, memastikan pengiriman tepat waktu.</li>
                    <li><strong>Kenyamanan:</strong> Pengguna dapat langsung mengirimkan informasi pesanan melalui WhatsApp, mengurangi kemungkinan kesalahan komunikasi.</li>
                    <li><strong>Fleksibilitas:</strong> Sistem memungkinkan pelanggan untuk memilih berbagai metode komunikasi dan informasi pengantaran, baik melalui peta atau koordinat manual.</li>
                </ul>
                <h2 class="section-title">Bagaimana Cara Kerjanya?</h2>
                <p>
                    1. Pelanggan memasukkan koordinat lokasi mereka atau memilih lokasi langsung pada peta.
                    <br> 2. Sistem menghitung jarak antara lokasi pelanggan dan restoran atau toko.
                    <br> 3. Ongkir dihitung berdasarkan jarak dan ditampilkan kepada pelanggan.
                    <br> 4. Pelanggan dapat mengirimkan informasi pesanan mereka ke restoran via WhatsApp untuk konfirmasi.
                    <br> 5. Google Maps akan terbuka untuk melihat rute atau menyalin koordinat.
                </p>
            </div>
        </div>
    </div>

    <!-- Tombol Coba Order -->
    <div class="mt-3 d-flex justify-content-center">
        <button class="btn btn-primary btn-lg" style="position: fixed; bottom: 30px; z-index: 1000;"
            onclick="window.location.href='index.php'">
            Coba Order Delivery Sekarang!
        </button>
    </div>

</body>

</html>