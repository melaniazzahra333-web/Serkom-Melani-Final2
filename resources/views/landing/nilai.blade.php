
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Nilai - SMA Lentera Bangsa</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
</head>
<body>

    @include('landing.navbar')

    <section style="background:#f5f8fb;padding:40px 15px 60px;min-height:70vh;">
        <div class="container">
            <div class="text-center mb-4">
                <span style="font-size:13px;color:#e58b00;">FORM PENILAIAN</span>
                <h2 style="color:#0866b3;font-weight:bold;">Cek Rata-rata Nilai</h2>
                <p style="color:#666;">Masukkan dua nilai untuk mengetahui rata-rata dan status kelulusan.</p>
                <hr style="width:150px;height:4px;background:#e58b00;border:0;margin:15px auto;">
            </div>

            <div class="card mx-auto shadow-sm" style="max-width:550px;border:0;border-radius:16px;">
                <div class="card-body p-4 p-md-5">
                    <form action="{{ route('nilai.hitung') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nilai1" class="form-label fw-bold">Nilai 1</label>
                            <input type="number" name="nilai1" id="nilai1" class="form-control" value="{{ old('nilai1', $nilai1 ?? '') }}"
                                   min="0" max="100" step="any" placeholder="Masukkan nilai pertama" required>

                            @error('nilai1')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nilai2" class="form-label fw-bold">Nilai 2</label>

                            <input type="number" name="nilai2" id="nilai2" class="form-control" value="{{ old('nilai2', $nilai2 ?? '') }}"
                                   min="0" max="100" step="any" placeholder="Masukkan nilai kedua" required>
                            @error('nilai2')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100" style="padding:12px;border-radius:10px;">
                            <i class="fa-solid fa-calculator me-2"></i>Hitung Rata-rata
                        </button>
                    </form>

                    <!-- HASIL PERHITUNGAN -->
                    @if(isset($rataRata) && isset($status))
                        <div class="mt-4 p-3 rounded text-center"
                             style="background:#f5f8fb;">
                            <h5>Hasil Perhitungan</h5>

                            <p class="mb-2">Nilai 1: <strong>{{ $nilai1 }}</strong></p>

                            <p class="mb-2">Nilai 2: <strong>{{ $nilai2 }}</strong></p>

                            <p class="mb-2">Rata-rata:
                                <strong>
                                    {{ number_format($rataRata, 2, ',', '.') }}
                                </strong>
                            </p>

                            <h4 class="mb-0" style="color:{{ $status == 'LULUS' ? '#198754' : '#dc3545' }};">
                                {{ $status }}
                            </h4>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

    @include('landing.footer')

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
