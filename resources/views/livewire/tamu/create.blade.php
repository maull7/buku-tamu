<div>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">HOME</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <section>
                <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                    <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                        <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                            <img alt="" src="{{ asset('assets/img-sekolah/gedung.jpeg') }}"
                                class="absolute inset-0 h-full w-full object-cover" />
                        </div>

                        <div class="lg:py-24">
                            <h2 class="text-3xl font-bold sm:text-4xl font-inter">HALLO SELAMAT DATANG
                                DIHALAMAN
                                BUKU
                                TAMU
                                SMK MADYA DEPOK</h2>

                            <p class="mt-4 text-gray-600">
                                Hai semoga hari mu menyenangkan silahkan untuk mengisi formulir terlebih dahulu
                                klik
                                button
                                dibawah ini
                            </p>

                            <a href="#"
                                class="mt-8 inline-block rounded bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                                KLIK
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-gray-100" id="forms">
                <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                        <div class="lg:col-span-2 lg:py-0">
                            <div class="rounded-lg sm:flex hidden h-96 bg-gray-900 bg-contain bg-center bg-cover"
                                style="background-image: url('assets/img/forms.png');">

                            </div>
                            <div class="mt-8">
                                <h3 class="text-2xl text-center font-bold text-sky-900">SMK MADYA DEPOK</h3>

                                <p class="max-w-xl text-lg font-sans-serif mt-2">
                                    Kami menghargai pendapat Anda dan ingin mendengar tentang pengalaman Anda di
                                    sekolah ini. Masukan Anda sangat penting untuk membantu kami memperbaiki dan
                                    menangani setiap masalah yang ada. Jangan ragu untuk menyampaikan kritik
                                    atau saran, karena ini akan membantu kami menciptakan lingkungan belajar
                                    yang lebih baik bagi semua.


                                </p>
                            </div>



                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                            <form wire:submit="save">

                                <div>
                                    <label for="Nama">NAMA ANDA :</label>
                                    <input wire:model="nama"
                                        class="w-full rounded-lg ring-2 ring-sky-800 p-3 text-sm focus:ring-border-sky-950 text-gray-600"
                                        type="text" id="Nama" />
                                    @error('nama')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                                    <label for="No">NOMER TELEPON</label>
                                    <input wire:model="no_tel"
                                        class="w-full rounded-lg ring-2 ring-sky-800 p-3 text-sm focus:ring-border-sky-950 text-gray-600"
                                        type="text" id="No" />
                                    @error('no_tel')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="tujuan">TUJUAN</label>
                                    <select id="tujuan" wire:model="tujuan"
                                        class="w-full rounded-lg ring-2 ring-sky-800 p-3 text-sm focus:ring-border-sky-950 text-gray-600">
                                        <option value="">PILIH</option>
                                        <option value="Silahturahmi">Silahturahmi</option>
                                        <option value="Urusan Sekolah">Urusan Sekolah</option>
                                        <option value="masalah anak">masalah anak</option>
                                        <option value="Terkait pembelajaran">Terkait pembelajaran</option>
                                        <option value="DLL">DLL</option>
                                    </select>
                                    @error('tujuan')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <button type="submit"
                                        class="inline-block w-full rounded-lg bg-sky-950 hover:bg-black hover:border-2 hover:border-gray-300 border-2 border-teal-600 px-5 py-3 font-medium text-white sm:w-auto">
                                        Kirim
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>
</div>
