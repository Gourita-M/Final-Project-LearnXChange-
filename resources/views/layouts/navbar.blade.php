<header class="fixed top-0 left-0 right-0 z-40 backdrop-blur-md bg-white/70 dark:bg-slate-900/70 border-b border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between px-6">

        <!-- LEFT: Logo -->
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-white shadow-sm">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">school</span>
            </div>
            <div class="leading-tight">
                <h1 class="text-sm font-bold text-slate-900 dark:text-white">LearnXChange</h1>
                <p class="text-[11px] text-primary font-medium">Expert Tier</p>
            </div>
        </div>

        <!-- CENTER: Search -->
        <div class="hidden md:flex flex-1 justify-center px-6">
            <div class="relative w-full max-w-md">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 text-sm">
                    search
                </span>
                <input
                    type="text"
                    placeholder="Search..."
                    class="w-full pl-10 pr-4 py-2 rounded-full bg-slate-100 dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/40 transition"
                />
            </div>
        </div>

        <!-- RIGHT: Nav + Actions -->
        <div class="flex items-center gap-4">

            <!-- Nav -->
            <nav class="hidden md:flex items-center gap-6">
                <a href="#" class="text-primary font-semibold text-sm border-b-2 border-primary pb-1">
                    Dashboard
                </a>
                <a href="#" class="text-slate-500 hover:text-primary text-sm transition">
                    Schedule
                </a>
                <a href="#" class="text-slate-500 hover:text-primary text-sm transition">
                    Earnings
                </a>
            </nav>

            <div class="flex items-center gap-2">
                <button class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition">
                    <span class="material-symbols-outlined text-slate-600 dark:text-slate-300">notifications</span>
                </button>
            </div>
            <div class="relative">
    <button onclick="toggleMenu()" class="flex items-center gap-3 pl-3 border-l border-slate-200 dark:border-slate-700">
        <img
            class="w-9 h-9 rounded-full object-cover"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKVuK58toQHnq39AaKz_NbYtQC8ZcNqSdUM5BPouTP6qit72mt3WD6qB4YTWNvbIKf-w-eM-1Uib70lSH2P4istxlgY5Ty2OLMIgf9jiQNuF-JxwbGuxzsqG5RTq-GsWZ_3aMN9iH00-ffXPXud1zTh8DpeTiSXMgn6gTfLJKwdN7K49M96rrTUYHZy0XF2aXwelkWwTLHJkkL9XfNbpd7e3GVJeDWJanlFywXTNZGmAU_xr9Abr_CF46XSwY22oD_yIkKRIvqN-c"
            alt="Profile"
        />
    </button>
    <div id="profileMenu"
        class="hidden absolute right-0 mt-3 w-56 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl shadow-lg overflow-hidden">
        <div class="px-4 py-3 border-b border-slate-200 dark:border-slate-700">
            <p class="text-sm font-semibold text-slate-800 dark:text-white">Mouad Gourita</p>
            <p class="text-xs text-slate-500">you@example.com</p>
        </div>
        <a href="/profile"
           class="flex items-center gap-2 px-4 py-2 text-sm hover:bg-slate-100 dark:hover:bg-slate-800 transition">
            <span class="material-symbols-outlined text-[18px]">person</span>
            Profile
        </a>
        <a href="/settings"
           class="flex items-center gap-2 px-4 py-2 text-sm hover:bg-slate-100 dark:hover:bg-slate-800 transition">
            <span class="material-symbols-outlined text-[18px]">settings</span>
            Settings
        </a>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit"
                class="w-full text-left flex items-center gap-2 px-4 py-2 text-sm text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 transition">
                <span class="material-symbols-outlined text-[18px]">logout</span>
                Logout
            </button>
        </form>
    </div>
</div>

        </div>
    </div>
</header>
<script>
function toggleMenu() {
    document.getElementById('profileMenu').classList.toggle('hidden');
}
</script>