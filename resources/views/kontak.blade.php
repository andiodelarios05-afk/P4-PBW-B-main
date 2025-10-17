<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak Kami</title>

    <style>
        /* Mengatur tampilan dasar untuk seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        /* Styling untuk container utama */
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            border-radius: 8px;
        }

        /* Styling untuk heading */
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Styling untuk form kontak */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Styling untuk label form */
        .contact-form label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        /* Styling untuk input teks dan textarea */
        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Memastikan padding tidak menambah lebar */
        }

        /* Styling khusus untuk textarea */
        .contact-form textarea {
            resize: vertical; /* Hanya boleh diubah ukurannya secara vertikal */
        }

        /* Styling untuk tombol submit */
        .contact-form button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        /* Efek hover pada tombol submit */
        .contact-form button:hover {
            background-color: #0056b3;
        }

        /* Styling untuk informasi kontak lainnya */
        .contact-info {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .contact-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Hubungi Kami 👋</h1>

        <form class="contact-form" action="#" method="POST">
            <div>
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="subjek">Subjek:</label>
                <input type="text" id="subjek" name="subjek" required>
            </div>
            <div>
                <label for="pesan">Pesan Anda:</label>
                <textarea id="pesan" name="pesan" rows="6" required></textarea>
            </div>
            <button type="submit">Kirim Pesan</button>
        </form>

        <div class="contact-info">
            <h2>Informasi Kontak Lainnya</h2>
            <p>📧 Email: raziy.ibrahim@gmail.com</p>
            <p>📞 Telepon: +62 8982140011</p>
            <p>📍 Alamat: Jl. Pahlawan Revolusi Km.12</p>

            <a href="/">Kembali ke Halaman Utama</a>

        </div>
    </div>


</body>
</html>