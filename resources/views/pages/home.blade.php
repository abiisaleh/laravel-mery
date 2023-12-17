@extends('app')

@section('content')
    <x-hero />
    <x-brand />
    <section>
        <div class="px-4 py-16 max-w-screen-xl mx-auto text-center">
            <h1 class="text-md text-gray-500 font-bold mb-2">HOW IT WORKS</h1>
            <h2 class="text-3xl font-bold mb-16">Hanya butuh 3 Langkah Mudah</h2>
            <div class="flex justify-between lg:px-32 gap-4">   
                <div class="px-8">
                    <div class="bg-gray-100 border border-white p-4 shadow-xl rounded-md inline-flex">
                        <svg class="w-6 h-6 text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                        </svg>
                    </div>
                    <h3 class="text-md font-bold mt-8 mb-4">Masukkan kriteria</h3>
                    <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique excepturi esse</p>
                </div>
                <div class="px-8">
                    <div class="bg-primary-500 p-4 shadow-xl shadow-primary-200 rounded-md inline-flex">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                        </svg>
                    </div>
                    <h3 class="text-md font-bold mt-8 mb-4">Masukkan kriteria</h3>
                    <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique excepturi esse</p>
                </div>
                <div class="px-8">
                    <div class="bg-gray-100 border border-white p-4 shadow-xl rounded-md inline-flex">
                        <svg class="w-6 h-6 text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                        </svg>
                    </div>
                    <h3 class="text-md font-bold mt-8 mb-4">Masukkan kriteria</h3>
                    <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique excepturi esse</p>
                </div>
            </div>
        </div>
    </section>
    <x-feature />
    <x-card-list>
        <x-card />
    </x-card-list>

    <section id="cta" class="bg-white">
        <div class="px-4 py-16 mx-auto max-w-screen-xl">
            <div class="bg-primary-700 rounded-xl p-16 grid grid-cols-2">
                <div>
                    <h3 class="text-white text-4xl">Daftar sekarang dan dapatkan mobil impianmu</h3>
                    <p class="text-white mt-4 mb-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="flex gap-2 font-semibold">
                        <a href="#" class="block bg-white rounded px-8 py-4 hover:bg-gray-200">Get started</a>
                        <a href="#" class="block bg-white rounded px-8 py-4 hover:bg-gray-200">Sign In</a>
                    </div>
                </div>
                <img src="" alt="">
            </div>
            
        </div>
    </section>
@endsection