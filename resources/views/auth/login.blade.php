<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center px-4 py-8">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-2xl rounded-xl overflow-hidden">
                <div class="bg-gradient-to-r from-blue-600 to-blue-500 p-6 text-center">
                    <h2 class="text-3xl font-bold text-white">Login</h2>
                    <p class="text-blue-100 mt-2">Halo, Login dulu untuk melanjutkan</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4 p-4 bg-red-100 text-red-700" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="p-6 space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <x-text-input 
                                id="email" 
                                class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                required 
                                autofocus 
                                autocomplete="username" 
                                placeholder="email@gmail.com"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <x-text-input 
                                id="password" 
                                class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" 
                                type="password"
                                name="password"
                                required 
                                autocomplete="current-password" 
                                placeholder="********"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input 
                                id="remember_me" 
                                type="checkbox" 
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                name="remember"
                            >
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                Ingat Aku
                            </label>
                        </div>

                        @if (Route::has('password.request'))
                            <div>
                                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-500">
                                    Lupa PAsword?
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <x-primary-button class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                    <!-- Registration Link -->
                    <div class="text-center mt-4">
                        <p class="text-sm text-gray-600">
                            belum Punya Akun? Daftar Lah. 
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">
                                    Daftar Akun
                                </a>
                                <br>
                                <a href="{{ route ('home') }}" class="font-medium text-blue-600 hover:text-blue-500">Kembali ke Home</a>
                            @endif
                        </p>
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <div class="mt-6 text-center text-sm text-gray-500">
                &copy; {{ date('Y') }} ntesseract 
            </div>
        </div>
    </div>
</x-guest-layout>