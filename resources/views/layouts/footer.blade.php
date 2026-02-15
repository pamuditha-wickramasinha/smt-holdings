<footer class="w-full border-t border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] mt-auto">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 py-6">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'SMT Holdings') }}. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="{{ url('/') }}" class="hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">Home</a>
                @if (Route::has('login'))
                    @guest
                        <a href="{{ route('login') }}" class="hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">Log in</a>
                    @endguest
                @endif
            </div>
        </div>
    </div>
</footer>
