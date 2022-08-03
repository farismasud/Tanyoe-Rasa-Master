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
                    <a href="#" aria-label="current-page">Coffee Beans</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- END: Breadcrumb -->

<!-- START : Beans CATALOG-->
<section class="px-8 py-16 bg-gray-100">
    <div class="container mx-auto">
        <div class="flex justify-center mb-4 text-center flex-start" data-aos-duration="1000">
            <h3 class="text-3xl font-semibold capitalize ">
                Coffee Beans
            </h3>
        </div>
        <div class="flex flex-wrap mb-4 -mx-3 overflow-x-auto">
            <!--START:item 1-->
            <div class="w-full px-3 mb-8 md:w-3/12">
                <div class="relative p-4 pb-8 bg-white rounded-xl">
                    <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                        <img src="/frontend/src/images/content/catalog2.jpg" alt=""
                            class="object-cover object-center w-full h-full">
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Arabica Beans</h5>
                    <span>IDR 90.000</span>
                    <a href="details/Arabica-beans" class="stretched-link"></a>
                </div>
            </div>
            <!--END:item 1-->
            <!--START:item 2-->
            <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                data-aos-duration="1000">
                <div class="relative p-4 pb-8 bg-white rounded-xl">
                    <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                        <img src="/frontend/src/images/content/beans1.jpg" alt=""
                            class="object-cover object-center w-full h-full">
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Robusta Beans</h5>
                    <span>IDR 90.000</span>
                    <a href="details/robusta-beans" class="stretched-link"></a>
                </div>
            </div>
            <!--END:item 2-->
            <!--START:item 3-->
            <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                data-aos-duration="1000">
                <div class="relative p-4 pb-8 bg-white rounded-xl">
                    <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                        <img src="/frontend/src/images/content/beans2.jpg" alt=""
                            class="object-cover object-center w-full h-full">
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Liberika Rangsang Meranti Beans</h5>
                    <span>IDR 99.000</span>
                    <a href="details/liberika-rangsang-meranti-beans" class="stretched-link"></a>
                </div>
            </div>
            <!--END:item 3-->
            <!--START:item 4-->
            <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                data-aos-duration="1000">
                <div class="relative p-4 pb-8 bg-white rounded-xl">
                    <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                        <img src="/frontend/src/images/content/beans3.jpg" alt=""
                            class="object-cover object-center w-full h-full">
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Gayo Wine Beans</h5>
                    <span>IDR 99.000</span>
                    <a href="details/gayo-wine-beans" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END : Beans CATALOG-->

@endsection