<x-app-layout>
    <div class="min-h-screen bg-blue-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session()->has('success'))
            <div id="alert-success" class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-lg shadow-sm flex justify-between items-center">
                <p class="font-medium">✅ {{ session('success') }}</p>
                <button 
                    onclick="closeAlert('alert-success')"
                    class="text-green-600 hover:text-green-800 transition-colors"
                    type="button">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <script>
                function closeAlert(elementId) {
                    const alert = document.getElementById(elementId);
                    alert.style.opacity = '0';
                    alert.style.transform = 'translateY(-10px)';
                    alert.style.transition = 'opacity 0.3s, transform 0.3s';
                    setTimeout(() => {
                        alert.style.display = 'none';
                    }, 300);
                }
                </script>
            @endif
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
                <div class="mb-4 md:mb-0">
                    <h1 class="text-3xl font-bold text-gray-900">List Guru</h1>
                </div>
            
                <!-- Desktop View -->
                <div class="hidden md:flex items-center gap-4">
                    <form class="flex-1" action="{{ route('gurus.index') }}" method="GET">
                        <div class="relative rounded-lg shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input type="text" name="search" value="{{ $search ?? '' }}" 
                                   class="block w-full pl-10 pr-12 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   placeholder="Cari produk...">
                        </div>
                    </form>
                    <button 
                        class="flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg shadow-lg hover:shadow-xl transition-all"
                        data-bs-toggle="modal" 
                        data-bs-target="#addGuruModal">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Tambah Guru
                    </button>
                </div>
                <div class="block md:hidden w-full">
                    <div x-data="{ open: false }" class="relative">
                        <button 
                            @click="open = !open"
                            class="w-full flex items-center justify-between px-4 py-2.5 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg shadow-lg hover:shadow-xl transition-all" >
                            <span>Menu Produk</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                        </button>
            
                        <div 
                            x-show="open" 
                            @click.away="open = false"
                            class="absolute z-10 mt-2 w-full rounded-lg shadow-lg bg-white border border-gray-200 overflow-hidden">
                            <div class="p-4 space-y-3">
                                <form action="{{ route('gurus.index') }}" method="GET" class="mb-3">
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </div>
                                        <input type="text" name="search" value="{{ $search ?? '' }}" 
                                               class="block w-full pl-10 pr-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                               placeholder="Cari produk...">
                                    </div>
                                </form>
            
                                <button 
                                    class="w-full flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#addGuruModal">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                    </svg>
                                    Tambah Guru
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($gurus as $guru)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 relative">
                        <img 
                            src="{{ $guru->foto ? url('storage/' . $guru->foto) : asset('default-avatar.jpg') }}" 
                            class="w-full h-full object-cover"
                            alt="{{ $guru->namaguru }}"
                            loading="lazy">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                            <h3 class="text-xl font-bold text-white">{{ $guru->namaguru }}</h3>
                            <p class="text-sm text-blue-200">{{ $guru->nip }}</p>
                        </div>
                    </div>

                    <div class="p-4">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                                {{ $guru->kontak }}
                            </span>
                            <span class="text-sm {{ $guru->jeniskelamin == 'L' ? 'text-blue-600' : 'text-pink-600' }}">
                                {{ $guru->jeniskelamin == 'L' ? '♂ Laki-laki' : '♀ Perempuan' }}
                            </span>
                        </div>
                        <div class="flex gap-2 border-t pt-3">
                            <button 
                                class="flex-1 flex items-center justify-center gap-1 px-3 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm font-medium transition-colors"
                                data-bs-toggle="modal" 
                                data-bs-target="#detailGuruModal{{ $guru->nip }}">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Detail
                            </button>
                            <button 
                                class="flex-1 flex items-center justify-center gap-1 px-3 py-2 bg-red-100 hover:bg-red-200 text-red-600 rounded-lg text-sm font-medium transition-colors"
                                data-bs-toggle="modal" 
                                data-bs-target="#deleteGuruModal{{ $guru->nip }}">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Hapus
                            </button>
                        </div>
                    </div>
                </div>

                <!--ini detail-->
                <div class="modal fade" id="detailGuruModal{{ $guru->nip }}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content rounded-xl overflow-hidden border-0">
                            <div class="modal-header bg-gradient-to-r from-blue-600 to-blue-500 p-6">
                                <h5 class="text-xl font-bold text-white">Detail Guru</h5>
                                <button type="button" class="text-white opacity-75 hover:opacity-100" data-bs-dismiss="modal">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body p-6">
                                <div class="flex flex-col md:flex-row gap-8">
                                    <div class="md:w-1/3">
                                        <div class="rounded-xl overflow-hidden shadow-lg">
                                            <img 
                                                src="{{ $guru->foto ? url('storage/' . $guru->foto) : asset('default-avatar.jpg') }}" 
                                                class="w-full aspect-square object-cover"
                                                alt="{{ $guru->namaguru }}"
                                            >
                                        </div>
                                        <button 
                                            class="w-full mt-4 bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2.5 rounded-lg font-medium transition-colors"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editGuruModal{{ $guru->nip }}">
                                            ✏️ Edit Profil
                                        </button>
                                    </div>
                                    <div class="md:w-2/3 space-y-4">
                                        <div>
                                            <label class="text-sm font-medium text-gray-500">Nama Lengkap</label>
                                            <p class="text-xl font-semibold text-gray-800">{{ $guru->namaguru }}</p>
                                        </div>
                                        
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="text-sm font-medium text-gray-500">NIP</label>
                                                <p class="text-gray-800">{{ $guru->nip }}</p>
                                            </div>
                                            <div>
                                                <label class="text-sm font-medium text-gray-500">NIS</label>
                                                <p class="text-gray-800">{{ $guru->nis }}</p>
                                            </div>
                                            <div>
                                                <label class="text-sm font-medium text-gray-500">Jenis Kelamin</label>
                                                <p class="text-gray-800">
                                                    {{ $guru->jeniskelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                                                </p>
                                            </div>
                                            <div>
                                                <label class="text-sm font-medium text-gray-500">Kontak</label>
                                                <p class="text-gray-800">{{ $guru->kontak }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <!-- Modal Edit -->
                <div class="modal fade" id="editGuruModal{{ $guru->nip }}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content rounded-xl">
                            <div class="modal-header bg-gradient-to-r from-blue-600 to-blue-500 p-6">
                                <h5 class="text-xl font-bold text-white">Edit Data Guru</h5>
                                <button type="button" class="text-white opacity-75 hover:opacity-100" data-bs-dismiss="modal">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <form action="{{ route('gurus.update', $guru->nip) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body p-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <!-- Kolom Kiri - Preview & Upload Foto -->
                                        <div class="md:col-span-1">
                                            <div class="relative group">
                                                <img 
                                                    id="previewFoto{{ $guru->nip }}"
                                                    src="{{ $guru->foto ? url('storage/' . $guru->foto) : asset('default-avatar.jpg') }}"
                                                    class="w-full h-64 object-cover rounded-xl border-2 border-dashed border-gray-200"
                                                    alt="Preview">
                                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity rounded-xl">
                                                    <label class="cursor-pointer text-white">
                                                        <input 
                                                            type="file" 
                                                            name="foto" 
                                                            class="hidden"
                                                            accept="image/*"
                                                            onchange="document.getElementById('previewFoto{{ $guru->nip }}').src = window.URL.createObjectURL(this.files[0])">
                                                        <svg class="w-8 h-8 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                        <span class="text-sm mt-1 block">Ubah Foto</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Kolom Kanan - Form Fields -->
                                        <div class="md:col-span-1 space-y-4">
                                            <!-- NIP & NIS -->
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">NIP</label>
                                                    <input 
                                                        type="text" 
                                                        value="{{ $guru->nip }}"
                                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 bg-gray-100"
                                                        disabled>
                                                    <input type="hidden" name="nip" value="{{ $guru->nip }}">
                                                </div>
                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                                                    <input 
                                                        type="text" 
                                                        value="{{ $guru->nis }}"
                                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 bg-gray-100 cursor-not-allowed"
                                                        disabled>
                                                    <input type="hidden" name="nis" value="{{ $guru->nis }}">
                                                </div>
                                            </div>

                                            <!-- Nama Guru -->
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Guru</label>
                                                <input 
                                                    type="text" 
                                                    name="namaguru" 
                                                    value="{{ $guru->namaguru }}"
                                                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500"
                                                    required>
                                            </div>

                                            <!-- Jenis Kelamin & Kontak -->
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                                                    <select 
                                                        name="jeniskelamin"
                                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500">
                                                        <option value="L" {{ $guru->jeniskelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                                        <option value="P" {{ $guru->jeniskelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">Kontak</label>
                                                    <input 
                                                        type="text" 
                                                        name="kontak" 
                                                        value="{{ $guru->kontak }}"
                                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer p-6 border-t border-gray-200">
                                    <button type="button" class="px-6 py-2.5 text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 ml-2">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- ini hapus -->
                <div class="modal fade" id="deleteGuruModal{{ $guru->nip }}" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content rounded-xl">
                            <div class="modal-header bg-gradient-to-r from-red-600 to-red-500 p-6">
                                <h5 class="text-xl font-bold text-white">Konfirmasi Hapus</h5>
                                <button type="button" class="text-white opacity-75 hover:opacity-100" data-bs-dismiss="modal">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body p-6">
                                <div class="text-center">
                                    <div class="mx-auto mb-4 flex items-center justify-center h-12 w-12 bg-red-100 rounded-full">
                                        <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-medium text-gray-900 mb-2">Hapus Data Guru?</h3>
                                    <p class="text-gray-500">Data {{ $guru->namaguru }} ({{ $guru->nip }}) akan dihapus permanen.</p>
                                </div>
                            </div>
                            <div class="modal-footer p-6 border-t border-gray-200">
                                <form action="{{ route('gurus.destroy', $guru->nip) }}" method="POST" class="w-full">
                                    @csrf
                                    @method('DELETE')
                                    <div class="flex justify-end gap-3">
                                        <button type="button" class="px-6 py-2.5 text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="px-6 py-2.5 bg-red-600 text-white rounded-lg hover:bg-red-700">Ya, Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if($gurus->hasPages())
            <div class="mt-8">
                {{ $gurus->links() }}
            </div>
            @endif
        </div>
    </div>

    <!-- ini tambah -->
    <div class="modal fade" id="addGuruModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-xl">
                <div class="modal-header bg-gradient-to-r from-blue-600 to-blue-500 p-6">
                    <h5 class="text-xl font-bold text-white">Tambah Guru Baru</h5>
                    <button type="button" class="text-white opacity-75 hover:opacity-100" data-bs-dismiss="modal">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="{{ route('gurus.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                                    <input 
                                        type="text" 
                                        name="nis" 
                                        value="{{ $guru->nis }}"
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">NIP</label>
                                    <input 
                                        type="text" 
                                        name="nip" 
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Guru</label>
                                    <input 
                                        type="text" 
                                        name="namaguru" 
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Kontak</label>
                                    <input 
                                        type="text" 
                                        name="kontak" 
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500"
                                        required>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                                    <select 
                                        name="jeniskelamin"
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500">
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Foto Guru</label>
                                    <input 
                                        type="file" 
                                        name="foto" 
                                        accept="image/*"
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-6 border-t border-gray-200">
                        <button type="button" class="px-6 py-2.5 text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 ml-2">Simpan Guru</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>