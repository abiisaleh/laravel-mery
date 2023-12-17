<section class="bg-white">
    <div class="max-w-screen-xl px-4 py-16 mx-auto">
        <h3 class="text-md font-bold text-gray-500 mb-4 text-center">DAFTAR MOBIL</h3>
        <h1 class="text-3xl font-bold text-center mb-8">Temukan Mobil Bekas Berkualitas</h1>

        <div class="mb-8">
            <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-4" role="presentation">
                    <button class="inline-block bg-gray-100 py-2 px-6 rounded-lg hover:border-gray-300 aria-selected:text-white aria-selected:bg-primary-500 aria-selected:hover:text-primary-100 aria-selected:shadow-lg aria-selected:shadow-primary-200" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                </li>
                <li class="me-4" role="presentation">
                    <button class="inline-block py-2 px-6 rounded-lg bg-gray-100 hover:text-gray-600 hover:border-gray-300 aria-selected:text-white aria-selected:bg-primary-500 aria-selected:hover:text-primary-100 aria-selected:shadow-lg aria-selected:shadow-primary-200" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                </li>
                <li class="me-4" role="presentation">
                    <button class="inline-block py-2 px-6 rounded-lg bg-gray-100 hover:text-gray-600 hover:border-gray-300 aria-selected:text-white aria-selected:bg-primary-500 aria-selected:hover:text-primary-100 aria-selected:shadow-lg aria-selected:shadow-primary-200" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                </li>
                <li role="presentation">
                    <button class="inline-block py-2 px-6 rounded-lg bg-gray-100 hover:text-gray-600 hover:border-gray-300 aria-selected:text-white aria-selected:bg-primary-500 aria-selected:hover:text-primary-100 aria-selected:shadow-lg aria-selected:shadow-primary-200" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg flex flex-wrap gap-8 grid sm:grid-cols-2 lg:grid-cols-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                @for ($i = 0; $i < 4; $i++)
                    {{ $slot }}
                @endfor
            </div>
            <div class="hidden p-4 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
        </div>
    </div>
</section>