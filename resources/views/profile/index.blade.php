<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .biodata-container {
            background-image: url('{{ asset('Reservasi/img2/Photo/Interior-Material-Combinations.jpg') }}'); /* Ganti dengan path gambar yang ingin digunakan */
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center;
            background-color: #1e3a5f; /* Warna biru dongker */
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            position: relative;
        }
        .biodata-container::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(30, 58, 95, 0.7); /* Warna biru dongker dengan transparansi */
            border-radius: 10px;
            z-index: 1;
        }
        .biodata-content {
            position: relative;
            z-index: 2;
        }
        .biodata-container:hover {
            transform: scale(1.05);
        }
        .biodata-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .biodata-item {
            margin-bottom: 10px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s forwards;
        }
        .biodata-photo {
            text-align: center;
            margin-bottom: 20px;
        }
        .biodata-photo img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .biodata-photo img:hover {
            transform: scale(1.1);
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="biodata-container">
                    <div class="biodata-content">
                    <div class="biodata-header">
                        <h2>Biodata</h2>
                    </div>
                    @forelse ($profiles as $profile)
                    <div class="biodata-photo">
                        <img src="{{ asset('/storage/Reservasi/'.$profile->image) }}" alt="Foto">
                    </div>
                    <div class="biodata-item" style="animation-delay: 0.1s;">
                        <strong>NAME         </strong><br>{{ $profile->name }}
                    </div>
                     <div class="biodata-item" style="animation-delay: 0.1s;">
                        <strong>EMAIL        :</strong><br> {{ $profile->email }}
                    </div>
                     <div class="biodata-item" style="animation-delay: 0.1s;">
                        <strong>JENIS KELAMIN</strong><br> {{ $profile->gender }}
                    </div>
                    <div class="biodata-item" style="animation-delay: 0.2s;">
                        <strong>TANGGAL LAHIR</strong><br> {{ $profile->birth }}
                    </div>
                    <div class="biodata-item" style="animation-delay: 0.4s;">
                        <strong>ALAMAT       :</strong> <br>{{ $profile->address }}
                    </div>
                    <div class="biodata-item" style="animation-delay: 0.6s;">
                        <strong>TELEPON      :</strong> <br>{{ $profile->phone }}
                    </div>
                    
                    <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-sm btn-primary">EDIT</a>

                    @empty
                        <div class="alert alert-danger">
                            Biodata Belum dilengkapi
                        </div>
                    @endforelse

                     {{ $profiles->links() }}
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
