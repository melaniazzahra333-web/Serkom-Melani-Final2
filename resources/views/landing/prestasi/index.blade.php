<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi - SMK YPC Tasikmalaya</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

</head>

<body>

    @include('landing.navbar')

    <section style="padding:50px 0 60px;background:#f5f8fb;">
        <div class="container">

            <!-- Breadcrumb -->
            <div style="padding-bottom:18px;border-bottom:1px solid #eee;margin-bottom:30px;">
                <a href="{{ url('/') }}" style="text-decoration:none;color:#333;font-size:14px;">Beranda</a>
                <span style="color:#777;font-size:14px;"> » Prestasi Siswa</span>
            </div>

            <div>
                <span style="font-size:13px;color:#e99b00;">PRESTASI SEKOLAH</span>
                <h2 style="font-size:25px; font-weight:bold; color:#005eab;"> Prestasi Siswa</h2>
                <hr style="width:190px;height:4px;background:#e58b00;">
            </div>

            

            <div class="row g-4" data-aos="fade-up">

                
            @forelse($prestasis as $prestasi)

                <div class="col-lg-4 col-md-6">

                    <a href="{{ route('prestasi.detail', $prestasi->id_prestasi) }}"
                    style="display:block;height:100%;text-decoration:none;color:inherit;">

                        <div class="card h-100" style="border:1px solid #e5e7eb;border-radius:16px;overflow:hidden;transition:transform .3s,box-shadow .3s;">

                            @if($prestasi->foto)
                                <img src="{{ asset('storage/'.$prestasi->foto) }}"
                                    alt="Foto prestasi siswa"
                                    style="width:100%;height:260px;object-fit:cover;display:block;">
                            @endif

                        </div>

                    </a>

                </div>

            @empty

                <div class="col-12 text-center">
                    <p style="color:#777;">Belum ada data prestasi.</p>
                </div>

            @endforelse


            </div>

        </div>
    </section>

    @include('landing.footer')

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({duration:800,once:true});
</script>
</body>
</html>