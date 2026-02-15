<header class="w-full border-b border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615]">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 py-4">
        <nav class="flex items-center justify-between">
            <a href="{{ url('/') }}" class="text-lg font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:opacity-80 transition-opacity">
                {{ config('app.name', 'SMT Holdings') }}
            </a>
            <div class="flex items-center gap-4 text-sm">
                <a href="{{ url('/') }}" class="text-[#1b1b18] dark:text-[#EDEDEC] hover:underline underline-offset-4">Home</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm hover:border-black dark:hover:border-white transition-colors">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-[#1b1b18] dark:text-[#EDEDEC] hover:underline underline-offset-4">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm hover:border-black dark:hover:border-white transition-colors">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>
    </div>
</header>
