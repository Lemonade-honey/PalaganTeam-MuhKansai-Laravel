@extends('layout.app', ['page' => 'home'])

@section('style')
<style>
    .min-width{
        min-width: 19rem;
        max-width: 19rem;
    }
</style>
@endsection

@section('body')
    @include('components.hero-carousel')

    <main class="mx-4 sm:mx-20">
        <section class="flex justify-center items-center flex-wrap my-4" id="profile">
            <div class="content max-w-xl">
                <img src="/image/home-judul.png" alt="">
            </div>
            <div class="content max-w-md">
                <h1 class="text-2xl sm:text-4xl sm:text-left text-center font-bold text-emerald-600 mb-3">Muhammadiyah Kansai</h1>
                <p class="text-justify mb-4">Musilmah Muhammadiyah Organization For The Public Affiliated In Kansai, Japan</p>
                <p class="text-justify">This website is an information and communication center for the Muhammadiyah community in the Kansai region, Japan. On this website you will find various information about activities, events and programs held by Muhammadiyah Kansai.</p>
            </div>
        </section>
        <hr>

        <section class="mt-10 my-4" id="misi-visi">
            <div class="content w-full">
                <h1 class="text-2xl sm:text-4xl text-center font-bold text-emerald-600 mb-3">Vision and Mission</h1>

                <div class="w-full flex sm:justify-around flex-wrap gap-5">

                    <div class="card rounded-xl w-full md:w-96 bg-base-100 shadow-xl">
                        <div class="p-4">
                            <h2 class="font-bold text-lg md:text-2xl text-center text-emerald-600">Vision</h2>
                            <p class="text-justify">Participate In Creating A Real Islamic Society That Can Lead To The Gates Of Heaven "Jannatun Na'im" With The Pleasure Of Allah, The Rahman And Rahim.</p>
                        </div>
                    </div>

                    <div class="card rounded-xl w-full md:w-96 bg-base-100 shadow-xl">
                        <div class="p-4">
                            <h2 class="font-bold text-lg md:text-2xl text-center text-emerald-600">Mission</h2>
                            <p class="text-justify">Participate In Implementing Progressive Islam Which Is Manifested In The Form Of Business In The Form Of Charitable Efforts, Programs And Activities In All Areas Of Life.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <hr class="mt-16">

    </main>
    
    @include('components.activity-carousel')

    @include('components.news-carousel')

    @include('components.location')
@endsection


{{-- @section('body')
    @include('pages.blog-news.blog-home')
    @include('pages.blog-news.blog-page')
@endsection --}}
