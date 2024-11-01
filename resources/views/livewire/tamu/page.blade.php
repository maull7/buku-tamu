<div>
    <section
        class="relative bg-[url(https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80)] bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
                    Selamat datang {{ session('nama') }}
                    <strong class="block font-extrabold text-sky-950"> SMK MADYA DEPOK </strong>
                </h1>

                <p class="mt-4 max-w-lg text-white sm:text-xl">
                    Semoga anda puas dengan layanan kami kami hanya ingin anda merasa nyaman saat berada di sini,
                    silahkan jika urusan anda sudah selesai jangan lupa mengisi form dengan meng klik tombol dibawah ini
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <button wire:click="toggleForm"
                        class="block w-full rounded bg-sky-800 px-12 py-3 text-sm font-medium text-white shadow-lg hover:bg-sky-900 focus:outline-none focus:ring active:bg-sky-950 sm:w-auto transition-all duration-200 ease-in-out">
                        Pulang
                    </button>

                    <a href="#"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-sky-800 shadow hover:text-sky-700 focus:outline-none focus:ring active:text-sky-500 sm:w-auto transition-all duration-200 ease-in-out">
                        Hubungi kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    @if ($showForm)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
            <form wire:submit="submitForm" class="bg-white rounded-lg shadow-lg p-6 w-80">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Form Pulang</h2>
                <div class="mb-4">
                    <label for="Name" class="block text-sm font-medium text-gray-700">Nama Tamu</label>
                    <input type="text" id="Name" wire:model="nama"
                        class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-sky-500 focus:ring focus:ring-sky-200">
                </div>
                <div class="mb-4">
                    <label for="Nik" class="block text-sm font-medium text-gray-700">NIK / NIP KTP</label>
                    <input type="text" id="Nik" wire:model="nik"
                        class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-sky-500 focus:ring focus:ring-sky-200">
                </div>

                <button type="submit"
                    class="block w-full rounded bg-green-600 px-4 py-2 text-sm font-medium text-white shadow hover:bg-green-700 focus:outline-none focus:ring active:bg-green-800 transition-all duration-200 ease-in-out">
                    Kirim
                </button>
                <button type="button" wire:click="toggleForm"
                    class="mt-2 w-full text-center text-gray-500 underline">Batal</button>
            </form>
        </div>
    @endif
</div>
