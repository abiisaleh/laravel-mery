<section id="feature" class="bg-white">
    <div class="mx-auto grid lg:grid-cols-2 px-4 py-16 mx-auto max-w-screen-xl">
        <!-- main Atropos container (required), add your custom class here -->
        <div class="atropos car-2-atropos">
            <!-- scale container (required) -->
            <div class="atropos-scale">
                <!-- rotate container (required) -->
                <div class="atropos-rotate">
                    <!-- inner container (required) -->
                    <div class="atropos-inner">
                        <img src="assets/images/car-2.png" alt="mobil">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h3 class="font-bold text-md text-gray-500 mb-2">BEST SERVICE</h3>
            <h1 class="font-bold text-3xl">Dapatkan pengalaman terbaik dengan pelayanan kami</h1>
            <hr class="bg-primary-400 my-8 w-12 h-1">
            <ul>
                @for ($i = 0; $i < 3; $i++)
                    
                <li class="flex gap-4 mb-2">
                    <div>
                        <div class="bg-gray-100 p-4 rounded border border-white shadow-2xl">
                            <svg class="w-6 h-6 text-primary-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h5 class="text-lg font-bold mb-2">Deals fo every budget</h5>
                        <p class="text-gray-500 text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat officia harum facilis ducimus aliquam alias corrupti quae rerum impedit eligendi id.</p>
                    </div>
                </li>

                @endfor

            </ul>
        </div>

    </div>
</section>