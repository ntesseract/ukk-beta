<x-app-layout>
    <div class="min-h-screen bg-blue-50 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4">
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
                <div class="p-6 md:p-10 bg-gradient-to-l from-sky-500 to-sky-800">
                    <div class="flex flex-col md:flex-row items-center justify-between">
                        <div>
                            <h2 class="text-2xl md:text-3xl font-bold text-white">
                                Dashboard
                            </h2>
                            <p class="text-blue-100 mt-2">
                                Welcome, {{ $user->name }} ( Anda login sebagai: {{ ucfirst($user->level) }} )
                            </p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <div class="bg-white/20 rounded-lg px-4 py-2 text-white">
                                <span class="text-sm">{{ now()->format('F d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-6 mt-4">
                <!-- Quick Links -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden w-full md:w-1/3">
                    <div class="p-6 md:p-10">
                        <h4 class="text-xl font-semibold text-gray-800 mb-6">Quick Links</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <a href="{{ route('products.index') }}" 
                               class="bg-blue-50 border border-blue-100 rounded-xl p-4 flex items-center justify-between hover:bg-blue-100 transition-all group">
                                <span class="text-blue-800 font-medium">Products</span>
                                <svg class="w-6 h-6 text-blue-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                </svg>
                            </a>
            
                            @if(in_array($user->level, ['admin', 'guru']))
                            <a href="{{ route('siswas.index') }}" 
                               class="bg-green-50 border border-green-100 rounded-xl p-4 flex items-center justify-between hover:bg-green-100 transition-all group">
                                <span class="text-green-800 font-medium">Siswa</span>
                                <svg class="w-6 h-6 text-green-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                </svg>
                            </a>
                            @endif
            
                            @if($user->level === 'admin')
                            <a href="{{ route('gurus.index') }}" 
                               class="bg-yellow-50 border border-yellow-100 rounded-xl p-4 flex items-center justify-between hover:bg-yellow-100 transition-all group">
                                <span class="text-yellow-800 font-medium">Guru</span>
                                <svg class="w-6 h-6 text-yellow-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                </svg>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            
                <!-- Data Count -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden w-full md:w-2/3">
                    <div class="p-6 md:p-10">
                        <h4 class="text-xl font-semibold text-gray-800 mb-6">Data Count</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 h-full">
                            @if(isset($data['products_count']))
                            <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 transform transition-all hover:scale-105 hover:shadow-lg h-full flex flex-col justify-between">
                                <div>
                                    <h4 class="text-sm font-medium text-blue-600 uppercase tracking-wider">Products</h4>
                                    <p class="text-3xl font-bold text-blue-800 mt-2">{{ $data['products_count'] }}</p>
                                </div>
                                <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            @endif
                
                            @if(isset($data['guru_count']))
                            <div class="bg-green-50 border border-green-100 rounded-xl p-6 transform transition-all hover:scale-105 hover:shadow-lg h-full flex flex-col justify-between">
                                <div>
                                    <h4 class="text-sm font-medium text-green-600 uppercase tracking-wider">Guru</h4>
                                    <p class="text-3xl font-bold text-green-800 mt-2">{{ $data['guru_count'] }}</p>
                                </div>
                                <svg class="w-12 h-12 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            @endif
                
                            @if(isset($data['siswa_count']))
                            <div class="bg-yellow-50 border border-yellow-100 rounded-xl p-6 transform transition-all hover:scale-105 hover:shadow-lg h-full flex flex-col justify-between">
                                <div>
                                    <h4 class="text-sm font-medium text-yellow-600 uppercase tracking-wider">Siswa</h4>
                                    <p class="text-3xl font-bold text-yellow-800 mt-2">{{ $data['siswa_count'] }}</p>
                                </div>
                                <svg class="w-12 h-12 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden mt-4">
                <div class="p-6 md:p-10">
                    <div class="mt-10">
                        <h4 class="text-xl font-semibold text-gray-800 mb-6">Export Laporan</h4>
                        <div class="bg-white border border-gray-200 rounded-xl p-6">
                            <form action="{{ route('laporan.export-pdf') }}" method="GET" class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="block text-sm font-medium text-gray-700">Masukkan Tanggal</label>
                                        <input 
                                        type="date" 
                                        name="start_date" 
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required
                                        oninvalid="this.setCustomValidity('Tanggal awal harus diisi')"
                                        oninput="this.setCustomValidity('')"
                                    >
                                </div>
                                <div class="space-y-2">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Masukkan Tanggal<span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="date" 
                                        name="end_date" 
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required
                                        oninvalid="this.setCustomValidity('Tanggal akhir harus diisi')"
                                        oninput="this.setCustomValidity('')"
                                    >
                                    </div>
                                </div>
                    
                                <div class="flex justify-end">
                                    <button type="submit" 
                                        class="px-6 py-2.5 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors flex items-center gap-2 shadow-sm hover:shadow-md">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                        Export Laporan PDF
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.getElementById('exportForm').addEventListener('submit', function(e) {
                    const startDate = new Date(this.start_date.value);
                    const endDate = new Date(this.end_date.value);
                    
                    if (endDate < startDate) {
                        e.preventDefault();
                        alert('Tanggal akhir tidak boleh lebih kecil dari tanggal awal');
                        return false;
                    }
                });
                </script>
        </div>
    </div>
</x-app-layout>