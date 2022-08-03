@extends('layouts.frontend')

@section('content')

        <!-- START: Breadcrumb -->
        <section class="px-4 py-8 bg-gray-100">
            <div class="container mx-auto">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route ('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="#" aria-label="current-page">About Us</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- END: Breadcrumb -->
    
        <!-- START: Details -->
        <section class="container mx-auto">
            <div class="flex-wrap my-4 md:my-12">
                <div class="w-full px-4 md:hidden">
                    <h2 class="text-5xl font-semibold text-center">AREVA TAILOR</h2>
                </div>
                <div class="preview">
                    <div class="w-full overflow-hidden rounded-lg item">
                        <img src="/frontend/src/images/content/tanyoerasa1.png" alt="" class="object-cover w-full h-full rounded-lg" />
                    </div>
                </div>
            </div>
            <div class="flex-1 px-4 md:p-6">
                <div class="hidden md:block">
                    <h2 class="justify-center text-5xl font-semibold text-center">AREVA TAILOR</h2>
                </div>
                <hr class="my-6" />
                <p class="mb-6 text-xl leading-7">
                    Didirikan pada 2020. Tanyoe Rasa merupakan sebuah startup kopi retail yang ingin menyajikan kopi berkualitas tinggi untuk para pelanggan. Nama Tanyoe Rasa diambil dari Bahasa Aceh yaitu Tanya Rasa. Kami berharap dengan adanya Coffee Shop Tanyoe Rasa akan membuat standar baru kopi yang berkualitas untuk konsumen. 
                    <br> <br>
                    Berdasarkan pengalaman dan jaringan kami, kami menggunakan teknologi mutakhir dengan kualitas biji kopi terpilih dan racikan kopi terbaik. Mengutamakan konsistensi dan inovasi layanan dalam berbagai aspek, termasuk produk dan aplikasi yang mendukung layanan bagi konsumen.
                    <br><br>
                    Tanyoe Rasa menghadirkan yang terbaik di setiap cangkir yang disajikan. Kopi tidak selalu kental dan pahit. Jadi, semua orang dengan berbagai kalangan dapat menikmati varian kopi yang kami sajikan. Produk yang kami tawarkan tidak hanya dalam bentuk minuman tetapi kami juga menawarkan varian biji kopi sehingga anda bisa nikmati kopi kami dimanapun anda berada saat tidak menemukan outlet Tanyoe Rasa dan kami juga menawarkan varian pastry untuk menemani anda dalam menikmati kopi.
                </p>
            </div>
            </div>
        </section>
        <!-- END: Details -->

@endsection