<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Find a Skill Mentor | Mentor Marketplace</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap"
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
                        "primary": "#39FF14", // Neon Green
                        "primary-dark": "#2ccb10",
                        "background-black": "#000000",
                        "surface-dark": "#0a0a0a",
                        "border-green": "rgba(57, 255, 20, 0.2)",
                    },
                    fontFamily: {
                        "display": ["Lexend"]
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
    <style type="text/tailwindcss">
        body {
            font-family: 'Lexend', sans-serif;
            background-color: #000000;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .fill-primary {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>

<body class="bg-background-black text-slate-100 antialiased">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <header
            class="sticky top-0 z-50 flex items-center justify-between border-b border-white/10 bg-black/80 backdrop-blur-md px-6 lg:px-20 py-3">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-3">
                    <div
                        class="bg-primary text-black p-1.5 rounded-lg flex items-center justify-center shadow-[0_0_15px_rgba(57,255,20,0.4)]">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <h2 class="text-xl font-bold leading-tight tracking-tight text-white">SkillMentor</h2>
                </div>
                <div class="hidden md:flex items-center gap-6">
                    <a class="text-primary font-semibold text-sm hover:opacity-80 transition-opacity"
                        href="#">Find Mentors</a>
                    <a class="text-slate-400 font-medium text-sm hover:text-primary transition-colors" href="#">My
                        Learning</a>
                    <a class="text-slate-400 font-medium text-sm hover:text-primary transition-colors"
                        href="#">Teaching Dashboard</a>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div class="hidden sm:flex items-center gap-4">
                    <button class="p-2 text-slate-400 hover:bg-white/10 rounded-full relative">
                        <span class="material-symbols-outlined">mail</span>
                        <span class="absolute top-2 right-2 flex h-2 w-2 rounded-full bg-primary"></span>
                    </button>
                    <button class="p-2 text-slate-400 hover:bg-white/10 rounded-full">
                        <span class="material-symbols-outlined">notifications</span>
                    </button>
                </div>
                <button
                    class="flex min-w-[140px] items-center justify-center gap-2 rounded-lg bg-primary py-2 px-4 text-black text-sm font-bold shadow-[0_0_20px_rgba(57,255,20,0.2)] hover:shadow-[0_0_25px_rgba(57,255,20,0.4)] transition-all">
                    <span class="material-symbols-outlined text-[18px]">cached</span>
                    <span class="truncate">Switch to Teacher</span>
                </button>
                <div class="h-10 w-10 overflow-hidden rounded-full border-2 border-white/20 bg-slate-800">
                    <img class="h-full w-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfFWK6mVe2Q-L4bX-b-2ZgJmuCaOuVEhTy3rmz64Jls8tKKjXDHZhEpB6lNT96xKtabMHk2XNK0rnITfLtO1uTL0ldRt9vxT7TKO_5Cu25IOFLwR7lSM817omqAqZD9KTf4m9PYXQAKQuLjF81c39VEQjov2e3TcfI4AB5tHVo6bcZPhWLYUB47GzbfChCxE_iyrUeQ5Dzz5-ZDIQaiqsw1fEZrNuf01sWNxxcNjGRNYwpOOL_dED2JIMOqBDcQzTkqINoza2p2A3w" />
                </div>
            </div>
        </header>
        <main class="mx-auto flex w-full max-w-[1440px] flex-1 flex-col gap-6 p-6 lg:p-10 lg:flex-row">
            <aside class="flex w-full flex-col gap-6 lg:w-72 lg:shrink-0">
                <div class="rounded-xl bg-surface-dark p-6 shadow-sm border border-white/5">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-lg font-bold text-white">Filters</h1>
                        <button class="text-primary text-xs font-semibold hover:underline">Clear all</button>
                    </div>
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-2 text-slate-500">
                                <span class="material-symbols-outlined text-sm">sell</span>
                                <p class="text-sm font-semibold uppercase tracking-wider">Skill Category</p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <div
                                        class="flex h-5 w-5 items-center justify-center rounded border border-primary/40 bg-black group-hover:border-primary">
                                        <div class="h-3 w-3 rounded-sm bg-primary opacity-100"></div>
                                    </div>
                                    <span class="text-sm text-slate-300">Design &amp; Creative</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <div
                                        class="flex h-5 w-5 items-center justify-center rounded border border-white/20 bg-black group-hover:border-primary">
                                    </div>
                                    <span class="text-sm text-slate-300">Coding &amp; Tech</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <div
                                        class="flex h-5 w-5 items-center justify-center rounded border border-white/20 bg-black group-hover:border-primary">
                                    </div>
                                    <span class="text-sm text-slate-300">Business &amp; Marketing</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-2 text-slate-500">
                                <span class="material-symbols-outlined text-sm">workspace_premium</span>
                                <p class="text-sm font-semibold uppercase tracking-wider">Teacher Level</p>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <button
                                    class="rounded-lg border border-primary bg-primary/10 py-2 text-xs font-bold text-primary">Master</button>
                                <button
                                    class="rounded-lg border border-white/10 py-2 text-xs font-bold text-slate-400 hover:border-primary hover:text-primary">Expert</button>
                                <button
                                    class="rounded-lg border border-white/10 py-2 text-xs font-bold text-slate-400 hover:border-primary hover:text-primary">Senior</button>
                                <button
                                    class="rounded-lg border border-white/10 py-2 text-xs font-bold text-slate-400 hover:border-primary hover:text-primary">Pro</button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-2 text-slate-500">
                                <span class="material-symbols-outlined text-sm">star</span>
                                <p class="text-sm font-semibold uppercase tracking-wider">Minimum Rating</p>
                            </div>
                            <div class="flex items-center gap-2 bg-white/5 p-2 rounded-lg">
                                <span class="text-sm font-bold text-primary">4.0+ Stars</span>
                                <div class="flex flex-1 gap-1">
                                    <div class="h-1.5 flex-1 rounded-full bg-primary"></div>
                                    <div class="h-1.5 flex-1 rounded-full bg-white/10"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-2 text-slate-500">
                                <span class="material-symbols-outlined text-sm">calendar_month</span>
                                <p class="text-sm font-semibold uppercase tracking-wider">Availability</p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="flex items-center justify-between text-sm text-slate-300">
                                    <span>Available Today</span>
                                    <div class="relative inline-flex h-6 w-11 items-center rounded-full bg-primary/20">
                                        <div
                                            class="h-4 w-4 translate-x-6 rounded-full bg-primary transition shadow-[0_0_8px_#39FF14]">
                                        </div>
                                    </div>
                                </label>
                                <label class="flex items-center justify-between text-sm text-slate-300">
                                    <span>Instant Session</span>
                                    <div class="relative inline-flex h-6 w-11 items-center rounded-full bg-white/10">
                                        <div class="h-4 w-4 translate-x-1 rounded-full bg-white/40 transition"></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl bg-gradient-to-br from-primary/20 to-black p-6 text-white shadow-lg border border-primary/20">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="material-symbols-outlined text-3xl text-primary">bolt</span>
                        <h3 class="font-bold">Next Milestone</h3>
                    </div>
                    <p class="text-sm text-slate-300 mb-4">Complete 2 more sessions to reach XP Level 15!</p>
                    <div class="w-full bg-white/10 h-2 rounded-full mb-2">
                        <div class="w-3/4 bg-primary h-full rounded-full shadow-[0_0_10px_#39FF14]"></div>
                    </div>
                    <p class="text-right text-[10px] font-bold uppercase tracking-widest opacity-80 text-primary">750 /
                        1000 XP</p>
                </div>
            </aside>
            <div class="flex flex-1 flex-col gap-6">
                <div class="flex flex-col gap-4">
                    <div class="relative w-full">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary/60">search</span>
                        <input
                            class="w-full rounded-xl border-none bg-surface-dark py-4 pl-12 pr-4 text-base shadow-sm ring-1 ring-white/10 focus:ring-2 focus:ring-primary/50 text-white placeholder-slate-500 transition-all"
                            placeholder="Search for skills, teachers, or specific subjects like 'React' or 'Figma'..."
                            type="text" />
                        <div
                            class="absolute right-3 top-1/2 -translate-y-1/2 hidden md:flex items-center gap-2 px-3 py-1.5 rounded-lg bg-black text-xs font-bold text-slate-500 border border-white/10">
                            <span>⌘</span><span>K</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mr-2">Top Skills:</p>
                        <button
                            class="flex items-center gap-1.5 rounded-full bg-surface-dark px-4 py-1.5 text-xs font-semibold shadow-sm ring-1 ring-white/10 hover:ring-primary text-slate-300">UI
                            Design <span class="material-symbols-outlined text-[14px]">close</span></button>
                        <button
                            class="flex items-center gap-1.5 rounded-full bg-surface-dark px-4 py-1.5 text-xs font-semibold shadow-sm ring-1 ring-white/10 hover:ring-primary text-slate-300">TypeScript
                            <span class="material-symbols-outlined text-[14px]">close</span></button>
                        <button
                            class="flex items-center gap-1.5 rounded-full bg-surface-dark px-4 py-1.5 text-xs font-semibold shadow-sm ring-1 ring-white/10 hover:ring-primary text-slate-300">Marketing
                            <span class="material-symbols-outlined text-[14px]">close</span></button>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-2">
                    <div
                        class="group relative flex flex-col rounded-xl bg-surface-dark p-6 shadow-sm border border-border-green hover:border-primary/50 hover:shadow-[0_0_30px_rgba(57,255,20,0.05)] transition-all duration-300">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-4">
                                <div class="relative">
                                    <div class="h-20 w-20 overflow-hidden rounded-xl border-2 border-primary/20 p-0.5">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC23-R5FleFC86Qvl4oSRWTI_XKxBUsnT91uo2IfEV0-hB4RMQ5I-SKtFdaL1p_I4AUXYqTPAteqnKWpWdNUnv_PB1vWqi02qa4FqWSsi0wvyLg2384dJNp1wMkzDe9CsbJIpiXnSJtJWnbaNHL0wY4XQdAfGFGuE-yPhosJlOy3hYP8GbSJpoN7UXQ-bTPyl9UGUsHCOn-L_MK23zC6hDr6YoDT_j0kGQgx5zsYywMyGubc8m1vEbiTLU9Hu1O1HlgPFsnyJA9rqMm" />
                                    </div>
                                    <div
                                        class="absolute -bottom-2 -right-2 flex h-8 w-8 items-center justify-center rounded-full bg-primary text-black text-[10px] font-bold shadow-md">
                                        LVL 42</div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <h3
                                            class="text-lg font-bold group-hover:text-primary transition-colors text-white">
                                            Alex Rivers</h3>
                                        <span
                                            class="material-symbols-outlined text-primary text-lg fill-primary">verified</span>
                                    </div>
                                    <p class="text-sm text-slate-400 font-medium">Senior Product Designer @ DesignFlow
                                    </p>
                                    <div class="mt-1 flex items-center gap-1 text-primary">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-bold">4.9</span>
                                        <span class="text-[10px] text-slate-500 font-medium ml-1">(124 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1 items-end">
                                <span
                                    class="bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded border border-primary/20">MASTER</span>
                                <span
                                    class="bg-primary/5 text-primary text-[10px] font-bold px-2 py-1 rounded flex items-center gap-1 border border-primary/10">
                                    <span class="h-1.5 w-1.5 rounded-full bg-primary shadow-[0_0_5px_#39FF14]"></span>
                                    Online
                                </span>
                            </div>
                        </div>
                        <div class="my-6 border-t border-white/5 pt-4">
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Teaching Focus:
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="rounded-lg bg-black px-3 py-1.5 text-xs font-medium text-slate-300 border border-white/5">Figma
                                    Mastery <span class="text-primary ml-1 text-[10px] font-bold">ADV</span></span>
                                <span
                                    class="rounded-lg bg-black px-3 py-1.5 text-xs font-medium text-slate-300 border border-white/5">Design
                                    Systems <span class="text-primary ml-1 text-[10px] font-bold">INT</span></span>
                            </div>
                        </div>
                        <div class="mt-auto grid grid-cols-2 gap-3">
                            <button
                                class="w-full rounded-lg border border-white/10 py-3 text-sm font-bold text-slate-300 hover:bg-white/5 transition-colors">View
                                Profile</button>
                            <button
                                class="w-full rounded-lg bg-primary py-3 text-sm font-bold text-black shadow-md shadow-primary/10 hover:bg-primary-dark transition-all">Request
                                Session</button>
                        </div>
                    </div>
                    <div
                        class="group relative flex flex-col rounded-xl bg-surface-dark p-6 shadow-sm border border-border-green hover:border-primary/50 transition-all duration-300">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-4">
                                <div class="relative">
                                    <div class="h-20 w-20 overflow-hidden rounded-xl border-2 border-primary/20 p-0.5">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPCWPEt_HVbBNIbNHkaU7mVWUpwi88n6jGdzCsGrQwnP2NbqzEcrAczEnc5GXOwmO-sA005tWKp0vEUUfvdaUkhhWeuETAhZRWPG_UeJ8iv1nV7MZFRI0HAvmHwiTDqO_8JFBTGghBEQA8FxrvRqOipyEx7T43yxhF9hVbz7us5s2DGlnReJqK-H6ICYEAcKLNfKjKcgxyXzXHJhVIvLJGDNRuV64W-zqremmeNTi6bT8_3q6s21CM5gOtY9saqvsUoIVr4mPH4sv5" />
                                    </div>
                                    <div
                                        class="absolute -bottom-2 -right-2 flex h-8 w-8 items-center justify-center rounded-full bg-primary text-black text-[10px] font-bold shadow-md">
                                        LVL 38</div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <h3
                                            class="text-lg font-bold group-hover:text-primary transition-colors text-white">
                                            Elena Chen</h3>
                                        <span
                                            class="material-symbols-outlined text-primary text-lg fill-primary">verified</span>
                                    </div>
                                    <p class="text-sm text-slate-400 font-medium">Full Stack Dev @ TechWave</p>
                                    <div class="mt-1 flex items-center gap-1 text-primary">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-bold">5.0</span>
                                        <span class="text-[10px] text-slate-500 font-medium ml-1">(89 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1 items-end">
                                <span
                                    class="bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded border border-primary/20">EXPERT</span>
                                <span
                                    class="bg-amber-500/5 text-amber-500 text-[10px] font-bold px-2 py-1 rounded flex items-center gap-1 border border-amber-500/10">
                                    <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span> Busy
                                </span>
                            </div>
                        </div>
                        <div class="my-6 border-t border-white/5 pt-4">
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Teaching Focus:
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="rounded-lg bg-black px-3 py-1.5 text-xs font-medium text-slate-300 border border-white/5">React
                                    / Next.js <span class="text-primary ml-1 text-[10px] font-bold">ADV</span></span>
                                <span
                                    class="rounded-lg bg-black px-3 py-1.5 text-xs font-medium text-slate-300 border border-white/5">Node.js
                                    API <span class="text-primary ml-1 text-[10px] font-bold">ADV</span></span>
                            </div>
                        </div>
                        <div class="mt-auto grid grid-cols-2 gap-3">
                            <button
                                class="w-full rounded-lg border border-white/10 py-3 text-sm font-bold text-slate-300 hover:bg-white/5 transition-colors">View
                                Profile</button>
                            <button
                                class="w-full rounded-lg bg-primary py-3 text-sm font-bold text-black shadow-md shadow-primary/10 hover:bg-primary-dark transition-all">Request
                                Session</button>
                        </div>
                    </div>
                    <div
                        class="group relative flex flex-col rounded-xl bg-surface-dark p-6 shadow-sm border border-border-green hover:border-primary/50 transition-all duration-300">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-4">
                                <div class="relative">
                                    <div class="h-20 w-20 overflow-hidden rounded-xl border-2 border-primary/20 p-0.5">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9qah03umOBHriLFCdEQC6TlXdhdRtPe94OVj25fxJ4oKe9AGvb9d64TCVdC0f7EeFYwfyiokA4DV4b7HduUasDEkYEaAkVQZHSkAv2Gi4VZKgr09S5C11EY7DQAi6gdGVN78kqJCgmeiMXG1SPLN812FhGhk_m7IRBJFlqPF7vbKikgM_XgF96oTJfR0-WdtuvoYwBr28YCwXdfgxK853UvkgfBg0FXK7jjCGscMs90H48q-TXG_dBf2saU4jxl2RTi2VPx9oTfiP" />
                                    </div>
                                    <div
                                        class="absolute -bottom-2 -right-2 flex h-8 w-8 items-center justify-center rounded-full bg-primary text-black text-[10px] font-bold shadow-md">
                                        LVL 55</div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <h3
                                            class="text-lg font-bold group-hover:text-primary transition-colors text-white">
                                            Marcus Thorne</h3>
                                        <span
                                            class="material-symbols-outlined text-primary text-lg fill-primary">verified</span>
                                    </div>
                                    <p class="text-sm text-slate-400 font-medium">Growth Strategist @ ScaleUp</p>
                                    <div class="mt-1 flex items-center gap-1 text-primary">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-bold">4.8</span>
                                        <span class="text-[10px] text-slate-500 font-medium ml-1">(210 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1 items-end">
                                <span
                                    class="bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded border border-primary/20">MASTER</span>
                                <span
                                    class="bg-slate-500/10 text-slate-500 text-[10px] font-bold px-2 py-1 rounded flex items-center gap-1 border border-slate-500/10">
                                    <span class="h-1.5 w-1.5 rounded-full bg-slate-500"></span> Offline
                                </span>
                            </div>
                        </div>
                        <div class="my-6 border-t border-white/5 pt-4">
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Teaching Focus:
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="rounded-lg bg-black px-3 py-1.5 text-xs font-medium text-slate-300 border border-white/5">Startup
                                    Growth <span class="text-primary ml-1 text-[10px] font-bold">ADV</span></span>
                            </div>
                        </div>
                        <div class="mt-auto grid grid-cols-2 gap-3">
                            <button
                                class="w-full rounded-lg border border-white/10 py-3 text-sm font-bold text-slate-300 hover:bg-white/5 transition-colors">View
                                Profile</button>
                            <button
                                class="w-full rounded-lg bg-primary py-3 text-sm font-bold text-black shadow-md shadow-primary/10 hover:bg-primary-dark transition-all">Request
                                Session</button>
                        </div>
                    </div>
                    <div
                        class="group relative flex flex-col rounded-xl bg-surface-dark p-6 shadow-sm border border-border-green hover:border-primary/50 transition-all duration-300">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-4">
                                <div class="relative">
                                    <div class="h-20 w-20 overflow-hidden rounded-xl border-2 border-primary/20 p-0.5">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4dX-Wd2i5xApCvj_g6IVajEDR7ZOvApAqZakbtQ0ae-3SUtRm4si1R-Yh4HDMjpDCnc1vf4hJo9tNYAiSJOrwgXakCBzpM80aaj21nbIPtDhWNj4aKQoLHfknnfWV7iI0N0zb38b5Gic9HFhntecN8NEQjaSmH6NkJipWnkkIrKdFZzJi5SL3jAWF2Q85Vj-WlxaJ_DFqZi6YmpRRz0JPvjDn9zV1YrSCtDZlLgjpD0FqHH3Z5bfJQz2NqZy2cAe1h9CE7hgtRFrq" />
                                    </div>
                                    <div
                                        class="absolute -bottom-2 -right-2 flex h-8 w-8 items-center justify-center rounded-full bg-primary text-black text-[10px] font-bold shadow-md">
                                        LVL 29</div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <h3
                                            class="text-lg font-bold group-hover:text-primary transition-colors text-white">
                                            Sarah Jenkins</h3>
                                        <span class="material-symbols-outlined text-primary text-lg">verified</span>
                                    </div>
                                    <p class="text-sm text-slate-400 font-medium">Digital Illustrator &amp; Animator
                                    </p>
                                    <div class="mt-1 flex items-center gap-1 text-primary">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-bold">4.7</span>
                                        <span class="text-[10px] text-slate-500 font-medium ml-1">(45 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1 items-end">
                                <span
                                    class="bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded border border-primary/20">PRO</span>
                                <span
                                    class="bg-primary/5 text-primary text-[10px] font-bold px-2 py-1 rounded flex items-center gap-1 border border-primary/10">
                                    <span class="h-1.5 w-1.5 rounded-full bg-primary"></span> Online
                                </span>
                            </div>
                        </div>
                        <div class="my-6 border-t border-white/5 pt-4">
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Teaching Focus:
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="rounded-lg bg-black px-3 py-1.5 text-xs font-medium text-slate-300 border border-white/5">Procreate
                                    Art <span class="text-primary ml-1 text-[10px] font-bold">INT</span></span>
                            </div>
                        </div>
                        <div class="mt-auto grid grid-cols-2 gap-3">
                            <button
                                class="w-full rounded-lg border border-white/10 py-3 text-sm font-bold text-slate-300 hover:bg-white/5 transition-colors">View
                                Profile</button>
                            <button
                                class="w-full rounded-lg bg-primary py-3 text-sm font-bold text-black shadow-md shadow-primary/10 hover:bg-primary-dark transition-all">Request
                                Session</button>
                        </div>
                    </div>
                </div>
                <div class="mt-8 flex items-center justify-between border-t border-white/10 pt-6">
                    <p class="text-sm text-slate-500">Showing 4 of 248 Mentors</p>
                    <div class="flex items-center gap-2">
                        <button
                            class="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 disabled:opacity-30"
                            disabled="">
                            <span class="material-symbols-outlined text-slate-400">chevron_left</span>
                        </button>
                        <button
                            class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-black font-bold shadow-[0_0_10px_rgba(57,255,20,0.3)]">1</button>
                        <button
                            class="flex h-10 w-10 items-center justify-center rounded-lg hover:bg-white/5 font-bold text-slate-400">2</button>
                        <button
                            class="flex h-10 w-10 items-center justify-center rounded-lg hover:bg-white/5 font-bold text-slate-400">3</button>
                        <span class="px-2 text-slate-600">...</span>
                        <button
                            class="flex h-10 w-10 items-center justify-center rounded-lg hover:bg-white/5 font-bold text-slate-400">24</button>
                        <button
                            class="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 text-slate-400">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mt-10 border-t border-white/10 bg-surface-dark px-6 py-4">
            <div class="mx-auto flex max-w-[1440px] items-center justify-between">
                <div class="flex items-center gap-8">
                    <div class="flex items-center gap-2 text-sm">
                        <span class="material-symbols-outlined text-primary">groups</span>
                        <span class="font-semibold text-slate-400">12,402 Mentors Active</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <span class="material-symbols-outlined text-primary">auto_awesome</span>
                        <span class="font-semibold text-slate-400">89,201 Skills Taught</span>
                    </div>
                </div>
                <div class="hidden sm:flex items-center gap-4 text-xs font-medium text-slate-500">
                    <a class="hover:text-primary transition-colors" href="#">Help Center</a>
                    <span class="h-1 w-1 rounded-full bg-slate-700"></span>
                    <a class="hover:text-primary transition-colors" href="#">Community Guidelines</a>
                    <span class="h-1 w-1 rounded-full bg-slate-700"></span>
                    <a class="hover:text-primary transition-colors" href="#">Safety &amp; Trust</a>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
