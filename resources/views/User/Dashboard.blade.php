<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Luminary Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary-fixed": "#0d1c2e",
                        "surface-container-low": "#f2f4f6",
                        "on-secondary-container": "#57657a",
                        "on-primary-fixed-variant": "#003ea8",
                        "primary-container": "#2563eb",
                        "tertiary-fixed-dim": "#89ceff",
                        "surface-bright": "#f7f9fb",
                        "surface": "#f7f9fb",
                        "error": "#ba1a1a",
                        "error-container": "#ffdad6",
                        "inverse-surface": "#2d3133",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#d8dadc",
                        "secondary-fixed-dim": "#b9c7df",
                        "surface-container-highest": "#e0e3e5",
                        "outline-variant": "#c3c6d7",
                        "secondary-fixed": "#d5e3fc",
                        "on-primary-fixed": "#00174b",
                        "on-primary-container": "#eeefff",
                        "secondary": "#515f74",
                        "primary-fixed-dim": "#b4c5ff",
                        "on-secondary-fixed-variant": "#3a485b",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#001e2f",
                        "on-background": "#191c1e",
                        "secondary-container": "#d5e3fc",
                        "surface-container-lowest": "#ffffff",
                        "on-surface-variant": "#434655",
                        "surface-variant": "#e0e3e5",
                        "on-secondary": "#ffffff",
                        "inverse-on-surface": "#eff1f3",
                        "tertiary-fixed": "#c9e6ff",
                        "background": "#f7f9fb",
                        "on-error": "#ffffff",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#b4c5ff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "surface-tint": "#0053db",
                        "primary": "#004ac6",
                        "on-surface": "#191c1e",
                        "primary-fixed": "#dbe1ff",
                        "surface-container-high": "#e6e8ea",
                        "outline": "#737686",
                        "tertiary-container": "#0074a6",
                        "on-tertiary-container": "#e4f2ff",
                        "tertiary": "#005a82",
                        "surface-container": "#eceef0"
                    },
                    fontFamily: {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fb;
        }

        h1,
        h2,
        h3,
        .brand-logo {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="text-on-surface">
    <!-- Top Navigation Bar -->
    <header
        class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl shadow-sm h-20 flex justify-between items-center px-8">
        <div class="flex items-center gap-12">
            <span class="text-2xl font-extrabold tracking-tighter text-blue-700">Luminary</span>
            <nav class="hidden md:flex gap-8 font-manrope text-sm font-medium tracking-tight">
                <a class="text-slate-600 hover:text-blue-500 transition-colors" href="#">Home</a>
                <a class="text-slate-600 hover:text-blue-500 transition-colors" href="#">Marketplace</a>
                <a class="text-blue-600 font-bold border-b-2 border-blue-600 pb-1" href="#">Dashboard</a>
                <a class="text-slate-600 hover:text-blue-500 transition-colors" href="profile">Profile</a>
            </nav>
        </div>
        <div class="flex items-center gap-6">
            <div class="hidden md:flex items-center bg-surface-container-high rounded-full px-4 py-2 gap-2">
                <span class="material-symbols-outlined text-slate-500">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-sm w-48" placeholder="Search courses..."
                    type="text" />
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-slate-600 hover:bg-slate-50 rounded-full transition-all">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <img alt="User profile avatar" class="w-10 h-10 rounded-full object-cover"
                    data-alt="portrait of a professional young man with a friendly smile, clean studio background, soft lighting"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5WLvaw868r2KvRowm04DgSUuYX7jTOxvS0C4L7-eOhPIEUK5tcCKT5BZB_ZkilfaeOyxeghzIeNpe6mHk9n-qn1IcOW-dQrgmSurvYHT3PbmL7x4HFl4UDn3LsXRwwmLc8J808hx1v6cJzOWgAM4XM2Oe0vtmpQhRgB2Gz7OXVkzEHUa5HzgF-MKq3LFt_wwKNUZFOmFqq1m7CBCgTBgB1Dtn42EeXVckTnPLEbfmVKspN5kGMxQpErLRcNNajVFF9wzlY9K3fSk" />
            </div>
        </div>
    </header>
    <div class="flex pt-20">
        <!-- Sidebar Navigation -->
        <aside
            class="h-[calc(100vh-5rem)] w-64 fixed left-0 top-20 bg-slate-50 flex flex-col gap-2 p-6 overflow-y-auto">
            <div class="mb-8 px-4">
                <h2 class="text-lg font-bold text-on-surface">Dashboard</h2>
                <p class="text-xs text-slate-500">Learning Progress</p>
            </div>
            <nav class="flex flex-col gap-2 flex-grow">
                <a class="flex items-center gap-3 bg-white text-blue-600 rounded-xl px-4 py-3 shadow-sm font-manrope text-base translate-x-1 transition-transform duration-200"
                    href="#">
                    <span class="material-symbols-outlined">calendar_today</span>
                    <span>My Sessions</span>
                </a>
                <a class="flex items-center gap-3 text-slate-500 px-4 py-3 font-manrope text-base hover:bg-white/50 hover:text-blue-500 transition-all"
                    href="#">
                    <span class="material-symbols-outlined">insights</span>
                    <span>XP Progress</span>
                </a>
                <a class="flex items-center gap-3 text-slate-500 px-4 py-3 font-manrope text-base hover:bg-white/50 hover:text-blue-500 transition-all"
                    href="#">
                    <span class="material-symbols-outlined">military_tech</span>
                    <span>Badges</span>
                </a>
            </nav>
            <div class="pt-6 border-t border-slate-200/50 flex flex-col gap-2">
                <a class="flex items-center gap-3 text-slate-500 px-4 py-3 font-manrope text-base hover:bg-white/50 transition-all"
                    href="#">
                    <span class="material-symbols-outlined">help_outline</span>
                    <span>Support</span>
                </a>
                <a class="flex items-center gap-3 text-slate-500 px-4 py-3 font-manrope text-base hover:bg-white/50 transition-all"
                    href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <span>Sign Out</span>
                </a>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="ml-64 flex-1 min-h-screen p-8 lg:p-12">
            <!-- Hero Header Section -->
            <div class="mb-12">
                <h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">Welcome back, Alex.</h1>
                <p class="text-slate-500 text-lg">You've completed 85% of your weekly goals. Keep the momentum!</p>
            </div>
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- XP Progress Card (Spans 2 columns) -->
                <div
                    class="lg:col-span-2 bg-surface-container-lowest rounded-3xl p-8 shadow-[0_20px_50px_rgba(25,28,30,0.04)] relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="flex justify-between items-end mb-8">
                            <div>
                                <h3 class="text-sm font-bold uppercase tracking-widest text-primary mb-1">Current XP
                                </h3>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-5xl font-extrabold tracking-tighter">12,450</span>
                                    <span class="text-slate-400 font-medium">/ 15,000 XP</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-sm font-bold text-tertiary">Level 24</span>
                                <p class="text-xs text-slate-400">Pathfinder Elite</p>
                            </div>
                        </div>
                        <!-- Custom Progress Bar -->
                        <div class="w-full h-4 bg-primary-fixed rounded-full overflow-hidden mb-4">
                            <div class="h-full w-[83%] bg-gradient-to-r from-primary to-tertiary rounded-full"></div>
                        </div>
                        <div class="flex justify-between text-sm font-medium text-slate-500">
                            <span>Next Reward: Advanced UI Masterclass</span>
                            <span>2,550 XP to go</span>
                        </div>
                    </div>
                    <!-- Decorative Background Element -->
                    <div class="absolute -right-12 -bottom-12 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
                </div>
                <!-- Badges Card -->
                <div class="bg-surface-container-lowest rounded-3xl p-8 shadow-[0_20px_50px_rgba(25,28,30,0.04)]">
                    <h3 class="text-xl font-bold mb-6">Recent Badges</h3>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 group cursor-default">
                            <div
                                class="w-12 h-12 flex items-center justify-center bg-yellow-50 rounded-2xl text-yellow-600 transition-transform group-hover:scale-110">
                                <span class="material-symbols-outlined text-3xl"
                                    style="font-variation-settings: 'FILL' 1;">military_tech</span>
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">Gold Catalyst</p>
                                <p class="text-xs text-slate-400">10 consecutive lessons</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group cursor-default">
                            <div
                                class="w-12 h-12 flex items-center justify-center bg-slate-100 rounded-2xl text-slate-400 transition-transform group-hover:scale-110">
                                <span class="material-symbols-outlined text-3xl"
                                    style="font-variation-settings: 'FILL' 1;">military_tech</span>
                            </div>
                            <div>
                                <p class="font-bold text-on-surface text-slate-400">Silver Architect</p>
                                <p class="text-xs text-slate-400">Project submission milestone</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group cursor-default">
                            <div
                                class="w-12 h-12 flex items-center justify-center bg-orange-50 rounded-2xl text-orange-700 transition-transform group-hover:scale-110">
                                <span class="material-symbols-outlined text-3xl"
                                    style="font-variation-settings: 'FILL' 1;">military_tech</span>
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">Bronze Pioneer</p>
                                <p class="text-xs text-slate-400">First mentor session</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="w-full mt-8 py-3 text-sm font-bold text-primary hover:bg-surface-container-high rounded-xl transition-colors">
                        View all achievements
                    </button>
                </div>
                <!-- Active Sessions -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex justify-between items-center">
                        <h3 class="text-2xl font-bold tracking-tight">Active Sessions</h3>
                        <span class="text-sm font-bold text-primary px-3 py-1 bg-primary/5 rounded-full">2 Live
                            Now</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Session Card 1 -->
                        <div
                            class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                            <div class="h-32 bg-slate-200 relative">
                                <img alt="Session background" class="w-full h-full object-cover"
                                    data-alt="Modern workspace with multiple monitors displaying code and design software, soft natural light"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKoGOQWc39p4wZE7cXqpD_v3iDaCCRQO-6Dxrt6YQa_kZbqc9gYFWsPkFTqy7_RbcStD3hmC7YQJhcCn0ugrXrrRmFTuoDSfdlWrMTK5GdFrZqGKSlsq1J8f-73RCdRAtDMZva8rPnGbKnAgEnZSG2UKVHCg8i31co7OtZbpU7AL0skC_lLhNlmWThYpv-Rbp0VMb54K5RBq7blhflin1QT7ETNWb9Xr9HGCjMSto9p3ueUqmZ7MBETrzoeWmNx53-1cjwKCaMT0I" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-4 left-4">
                                    <span
                                        class="px-2 py-1 bg-tertiary text-white text-[10px] font-bold uppercase rounded-md">Learning</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">Advanced
                                    Design Systems</h4>
                                <p class="text-sm text-slate-500 mb-4 line-clamp-1">Mastering tokens, components, and
                                    handoff.</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex -space-x-2">
                                        <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                                            data-alt="close-up portrait of a woman mentor with glasses"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCl2ZEvQoq-YfvNEff5iH9Tb9SB6NTpfk045kK-JI7UZeoA4597rfb5nwPB9-Xa1-TPFhX9WV8VpfgEOBlOm9IBgBwYV1uRAv5PiHqIMTfrT2YF6OkdLVNm3S-iCIQ4Qjfr-ivEorgGUJOcQcydetjcyMoVtkB-Qg3aC-0Uw4-1d-vpdQTdOZ5z9j11cpSPtauCzFijcnhBAtF0imay-NW4bECCy8O2DkszognQBq_kRMfIHTD4xUhSwT0r9V0QwQYHNCpWaRsCPQ4" />
                                        <div
                                            class="w-8 h-8 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-[10px] font-bold">
                                            +12</div>
                                    </div>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-bold hover:scale-95 active:opacity-80 transition-all">Join
                                        Room</button>
                                </div>
                            </div>
                        </div>
                        <!-- Session Card 2 -->
                        <div
                            class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                            <div class="h-32 bg-slate-200 relative">
                                <img alt="Session background" class="w-full h-full object-cover"
                                    data-alt="people collaborating around a table with laptops and sketches, creative office environment"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDl8thNkTS7tgnedW9bjh2KmqInpKHhZxmc0I8hW87MBoeZNNd2hV_aFNIJNLRv6r_31XSbmKyjiuLeAIGeXTICAoRbcXaKgaLx44W3VgCQ9RjrulgWrQZz0uh3GCVBmxB-2FfGbqLYbU57Gqas4YgQ0ljEpnGAM-j26vc5VSNz__I21AAke7nf7BcYqvQlwEdCbCzLBKkFydrgUCVjPJrJ3UVNl7oMW_8y0kGzvt5apiZIK2nCXHHEZfrQausw5YV8uCSBZG8w488" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-4 left-4">
                                    <span
                                        class="px-2 py-1 bg-primary text-white text-[10px] font-bold uppercase rounded-md">Teaching</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">Beginner
                                    Typography</h4>
                                <p class="text-sm text-slate-500 mb-4 line-clamp-1">Fundamentals for 1st year students.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex -space-x-2">
                                        <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                                            data-alt="portrait of a man with a beard smiling"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuADg7IMeMdloj0Dv5x0pPakjrfCfto42rt_fg2FpB4DA801F8FWgf03QTBQb3cXTfFn_GDnA8BXAgrpe9gj07C0JILpa2snGu7jKHg-DnpHoysrB27LvTeF0wpbmUVL89LF-WBn77BouNy9zpULIqWTr2q0a3oAJP7TR7g0KKrh56kB2WznG95eLk5IGTJQwrAf43BO2zwFhJlPDKFCcsEwpNVkYkGgm6NMJtF7MOsp3VSUfDxFDIDRzpTH1Gy93opsfO3RFo9orqM" />
                                        <div
                                            class="w-8 h-8 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-[10px] font-bold">
                                            +4</div>
                                    </div>
                                    <button
                                        class="bg-primary-container text-white px-4 py-2 rounded-lg text-sm font-bold hover:scale-95 active:opacity-80 transition-all">Enter
                                        Studio</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recommended For You -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold tracking-tight">Recommended</h3>
                    <div class="space-y-4">
                        <div
                            class="p-4 bg-white rounded-2xl hover:bg-slate-50 transition-colors cursor-pointer border border-transparent hover:border-slate-200">
                            <div class="flex gap-4">
                                <div
                                    class="w-16 h-16 rounded-xl bg-blue-100 flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-blue-600">psychology</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-sm">Cognitive UX Research</h5>
                                    <p class="text-xs text-slate-500 mt-1">4.8 ★ • 12 hours total</p>
                                    <div class="mt-2 flex gap-2">
                                        <span
                                            class="px-2 py-0.5 bg-secondary-fixed text-[10px] font-bold rounded-full">Intermediate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-4 bg-white rounded-2xl hover:bg-slate-50 transition-colors cursor-pointer border border-transparent hover:border-slate-200">
                            <div class="flex gap-4">
                                <div
                                    class="w-16 h-16 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-emerald-600">code</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-sm">Motion UI Essentials</h5>
                                    <p class="text-xs text-slate-500 mt-1">4.9 ★ • 6 hours total</p>
                                    <div class="mt-2 flex gap-2">
                                        <span
                                            class="px-2 py-0.5 bg-secondary-fixed text-[10px] font-bold rounded-full">Advanced</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-4 bg-white rounded-2xl hover:bg-slate-50 transition-colors cursor-pointer border border-transparent hover:border-slate-200">
                            <div class="flex gap-4">
                                <div
                                    class="w-16 h-16 rounded-xl bg-orange-100 flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-orange-600">brush</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-sm">Composition Principles</h5>
                                    <p class="text-xs text-slate-500 mt-1">4.5 ★ • 8 hours total</p>
                                    <div class="mt-2 flex gap-2">
                                        <span
                                            class="px-2 py-0.5 bg-secondary-fixed text-[10px] font-bold rounded-full">Beginner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- Floating Action Button - Only on appropriate screens -->
    <button
        class="fixed bottom-8 right-8 w-16 h-16 bg-primary text-white rounded-full shadow-2xl flex items-center justify-center hover:scale-110 active:scale-95 transition-transform z-[60]">
        <span class="material-symbols-outlined text-3xl">add</span>
    </button>
</body>

</html>
