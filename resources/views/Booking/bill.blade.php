<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagihan Pembayaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('Reservasi/img2/Photo/wp1846068.jpg')}}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background: rgba(255, 255, 255, 0.85);
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h1 class="h3 mb-0"><i class="fas fa-file-invoice"></i> Tagihan Pembayaran</h1>
                        <h2 class="h5 mb-0">Reservasi ID: {{ $reservation->id }}</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Destinasi:</strong> {{ $reservation->destination }}</p>
                        <p><strong>Check-in:</strong> {{ $reservation->check_in }}</p>
                        <p><strong>Check-out:</strong> {{ $reservation->check_out }}</p>
                        <p><strong>Jumlah Kamar:</strong> {{ $reservation->rooms }}</p>
                        <p><strong>Jumlah Dewasa:</strong> {{ $reservation->adults }}</p>
                        <p><strong>Jumlah Anak-anak:</strong> {{ $reservation->children }}</p>
                        <p><strong>Email:</strong> {{ $reservation->email }}</p>
                        <p><strong>Telepon:</strong> {{ $reservation->phone }}</p>
                        <p><strong>Metode Pembayaran:</strong> {{ $reservation->payment_method }}</p>
                        <hr>
                        <h4 class="text-right"><strong>Total Pembayaran: ${{ number_format($reservation->total_amount, 2) }}</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
