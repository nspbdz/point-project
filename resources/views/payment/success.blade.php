<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Berhasil</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        h1 { color: green; }
        p { font-size: 18px; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <h1>✅ Pembayaran Berhasil</h1>
    <p>Transaksi ID: {{ $id }}</p>
    <p>Terima kasih sudah melakukan pembayaran.</p>
    <a href="{{ url('/') }}">Kembali ke Beranda</a>
</body>
</html>
