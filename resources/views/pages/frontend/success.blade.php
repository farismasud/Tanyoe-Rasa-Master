@extends('layouts.frontend')

@section('content')

<!-- START: Breadcrumb -->
<section class="px-4 py-8 bg-gray-100">
<div class="container mx-auto">
    <ul class="breadcrumb">
    <li>
        <a href="{{ route('index') }}">Home</a>
    </li>
    <li>
        <a href="#" aria-label="current-page">Shopping Cart</a>
    </li>
    </ul>
</div>
</section>
<!-- END: Breadcrumb -->

<!-- START: Congrats -->
<section class="py-4 md:py-16">
<div class="container min-h-screen px-4 mx-auto">
    <div class="flex flex-col items-center justify-center">
    <div class="w-full text-center md:w-4/12">
        <img src="/frontend/src/images/content/SuccessSaly-45.png" alt="illustration success" />
        <h2 class="mb-6 text-3xl font-semibold">Yay ! Order Success</h2>
        <p class="mb-12 text-lg">
        Barang yang anda pesan akan kami kirimkan secepatnya
        so now please sit tight and be ready for it
        </p>
        <a href="{{ route('index') }}"
        class="w-full px-8 py-3 text-lg text-gray-900 transition duration-200 bg-yellow-400 rounded-full focus:outline-none focus:text-black">Back
        to Shop</a>
    </div>
    </div>
</div>
</section>
<!-- END: Congrats -->
@endsection