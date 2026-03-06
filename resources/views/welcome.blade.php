<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style type="text/tailwindcss">
        :root {
            --primary: #39FF14;
            --background: #000000;
            --surface: #0a0a0a;
            --surface-accent: #111111;
            --neon-glow: 0 0 15px rgba(57, 255, 20, 0.4);
            --neon-glow-intense: 0 0 25px rgba(57, 255, 20, 0.6);
        }
        @theme {
            --color-neon-green: var(--primary);
        }
        .neon-border {
            border-color: rgba(57, 255, 20, 0.3);
            box-shadow: 0 0 10px rgba(57, 255, 20, 0.1);
        }
        .neon-border:hover {
            border-color: var(--primary);
            box-shadow: var(--neon-glow);
        }
        .neon-text-glow {
            text-shadow: 0 0 8px rgba(57, 255, 20, 0.5);
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary": "#39FF14",
                "background-dark": "#000000",
                "surface": "#0a0a0a",
              },
              fontFamily: {
                "display": ["Lexend", "sans-serif"]
              },
              borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
            },
          },
        }
    </script>
<title>SkillShare Hub | Dark Edition</title>
</head>
<body class="font-display bg-background-dark text-white antialiased">
<header class="sticky top-0 z-50 bg-black/90 backdrop-blur-md border-b border-white/10">
<div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
<div class="flex items-center gap-10">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-3xl neon-text-glow">database</span>
<h1 class="text-xl font-bold tracking-tight text-white uppercase tracking-widest">SkillShare Hub</h1>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-sm font-medium text-slate-400 hover:text-primary transition-colors" href="#">Browse</a>
<a class="text-sm font-medium text-slate-400 hover:text-primary transition-colors" href="#">Teach</a>
<a class="text-sm font-medium text-slate-400 hover:text-primary transition-colors" href="#">How it Works</a>
<a class="text-sm font-medium text-slate-400 hover:text-primary transition-colors" href="#">Pricing</a>
</nav>
</div>
<div class="flex items-center gap-6">
<div class="hidden lg:flex items-center bg-white/5 rounded-lg px-3 py-1.5 border border-white/10 focus-within:border-primary transition-colors">
<span class="material-symbols-outlined text-slate-500 text-sm">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm w-48 placeholder:text-slate-600 text-white" placeholder="Search skills..." type="text"/>
</div>
<div class="flex items-center gap-3">
<button class="px-5 py-2 text-sm font-semibold text-slate-300 hover:text-primary transition-colors">Log In</button>
<button class="px-6 py-2 bg-primary text-black text-sm font-black rounded-lg hover:scale-105 transition-all shadow-[0_0_15px_rgba(57,255,20,0.4)]">Sign Up</button>
</div>
</div>
</div>
</header>
<main>
<section class="max-w-7xl mx-auto px-6 py-20 lg:py-32 overflow-hidden">
<div class="grid lg:grid-cols-2 gap-16 items-center">
<div class="flex flex-col gap-8">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold uppercase tracking-widest w-fit">
<span class="material-symbols-outlined text-sm">auto_awesome</span>
                        Live Interactive Learning
                    </div>
<h1 class="text-6xl lg:text-8xl font-black leading-tight text-white tracking-tighter">
                        Master Skills <br/>
<span class="text-primary italic neon-text-glow">Share Mastery</span>
</h1>
<p class="text-xl text-slate-400 max-w-xl leading-relaxed">
                        Join the elite circle of digital artisans. Experience real-time high-fidelity sessions, earn XP, and climb the leaderboard through gamified mastery paths.
                    </p>
<div class="flex flex-wrap gap-4">
<button class="px-10 py-5 bg-primary text-black font-black rounded-xl shadow-[0_0_25px_rgba(57,255,20,0.5)] hover:scale-105 active:scale-95 transition-all flex items-center gap-2 uppercase tracking-wider">
                            Start Learning <span class="material-symbols-outlined">trending_flat</span>
</button>
<button class="px-10 py-5 bg-transparent border-2 border-white/20 text-white font-bold rounded-xl hover:bg-white/5 hover:border-white/40 transition-all uppercase tracking-wider">
                            Become a Teacher
                        </button>
</div>
<div class="flex items-center gap-4 pt-4">
<div class="flex -space-x-3">
<div class="w-10 h-10 rounded-full border-2 border-black bg-slate-800 overflow-hidden">
<img alt="Avatar" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6dMRCZlJpkwAQfH9jLo1v4HycXNC60bRTzTE8qHg0o4njLbka-7tYNQzjbQ48hOw-y5G9PnKTKYBfUa7g96YlCMWCQoWTAaEcM2Ktmd3uGgVdwVxJjQXS6KQ0nGlrMtQ2fesv9J0tHG08HIsuGrv8lTm9L7SMzuWap7asp1-b9CKalbFO2XCT1zMM3uVt4m9PfIRwi2FPf_u8cW0AnOtecYnC8bqvEaWAcKHHmS0GaeI_oIKHcEy1RvHQEpaAE64HXRA7-KZDwALt"/>
</div>
<div class="w-10 h-10 rounded-full border-2 border-black bg-slate-800 overflow-hidden">
<img alt="Avatar" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4KT4DO0hldHvotyE_qxew_dnQTtYzthlZSmXXn-x8s1ET1N7ivfvu7g8NqTs--nl_JSM1WahcSmmPD_FEo-ysU9To9g7wEYJkc5NybB_B72yY6udHWUltB86Jb81VfFZuYQmhgXwldxOSX_jSze5HTPkoxbf9k-jdr23iXNRUiXhEoo3zieiaZwczk_UQ4YJaLuQF0weJ11-bOBUc640VlCsQiMnAlSb5XllMrRdtkUVg3SGWIxGD4y1WJBP37Yc_QgGibgw63zuC"/>
</div>
<div class="w-10 h-10 rounded-full border-2 border-black bg-slate-800 overflow-hidden">
<img alt="Avatar" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAfkOFWNbncRYfXA2pmlJ2vLI-L0g64cKO0X1SPyJVOqw0H1RhjCSV_yeLssA0SzYxsqSPbwgdSrVFuepqKV37elQyZGz-M4azgCM2t27IcDbwhjodUe6eVVOJZaOREwsvX6SI29OJjv-zWpdlYTRfwyhCgZrcQJ8LVUD1g_vREoUFfVlUGWGLD4wGkf870KfIdZ8H2tzDiVQv5dC7U87RwdVGFFoFMOa5PtymqZAxZQEVpmJgp5Xk6F_cGb7KdfOOmp02vMz103cP"/>
</div>
</div>
<p class="text-sm font-medium text-slate-500"><span class="text-primary font-bold">12k+</span> legends active now</p>
</div>
</div>
<div class="relative">
<div class="absolute -inset-10 bg-primary/20 blur-[100px] rounded-full"></div>
<div class="relative bg-surface p-4 rounded-3xl shadow-2xl border border-white/10 aspect-video overflow-hidden group">
<img alt="Digital Classroom" class="w-full h-full object-cover rounded-2xl opacity-80 group-hover:opacity-100 transition-opacity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6WOhQH8-imMYVMawJ47AEAbGQEN6GqKjxw-IhXeR4nO_wCHk_zzJpNhAmBgAcpQERNBSbl0_qMbjU-CSaEx4qFSaXrWQvJJdX9RST5nEpPVG4EUdJpwGMEMnxgFVgNRH-1I89sTL7jSYECYzZxHFg5eYTMQJJ0zdK-CWB8t8wk54J5YXaC_koRHDfMZiQxBIkTWN1Ro2wU2Een06I98b_Vfb9ebIskrSY9VBLzs4sk0IgWbOo-1id3dqNmYPXFn0J0m3nxlYMYjGQ"/>
<div class="absolute bottom-8 left-8 right-8 p-6 bg-black/80 backdrop-blur-xl rounded-2xl border border-primary/30 shadow-[0_0_30px_rgba(57,255,20,0.15)]">
<div class="flex items-center justify-between mb-4">
<div class="flex items-center gap-3">
<div class="w-2.5 h-2.5 rounded-full bg-primary shadow-[0_0_10px_#39FF14] animate-pulse"></div>
<span class="text-xs font-black uppercase tracking-widest text-white">Live: Neural Interface Design</span>
</div>
<span class="px-2 py-1 bg-primary/20 text-primary text-[10px] font-black rounded border border-primary/30">+500 XP</span>
</div>
<div class="flex items-center gap-4">
<div class="flex-1 h-2.5 bg-white/10 rounded-full overflow-hidden">
<div class="w-3/4 h-full bg-primary shadow-[0_0_15px_#39FF14]"></div>
</div>
<span class="text-[10px] font-black text-primary">75% LVL UP</span>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="bg-surface py-32 border-y border-white/5">
<div class="max-w-7xl mx-auto px-6">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
<div class="flex flex-col gap-3">
<h2 class="text-4xl font-black tracking-tight text-white uppercase italic">Popular Sectors</h2>
<p class="text-slate-500 font-medium tracking-wide">Select your primary mastery path</p>
</div>
<button class="text-primary font-black flex items-center gap-2 text-sm uppercase tracking-widest group hover:neon-text-glow transition-all">
                        Access all sectors <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
<div class="group p-8 rounded-2xl bg-black border border-white/10 hover:border-primary/50 transition-all cursor-pointer neon-border">
<div class="w-16 h-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-8 border border-primary/20 group-hover:scale-110 transition-transform shadow-[0_0_15px_rgba(57,255,20,0.1)]">
<span class="material-symbols-outlined text-4xl">code</span>
</div>
<h3 class="text-2xl font-black mb-3 uppercase italic">Coding</h3>
<p class="text-sm text-slate-500 leading-relaxed mb-6">Neural Networks, Blockchain, Full-Stack Architecture.</p>
<div class="flex items-center justify-between mt-auto">
<span class="text-[10px] font-black px-2 py-1 bg-white/5 text-white rounded uppercase tracking-widest border border-white/10">2.4k Missions</span>
<span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">bolt</span>
</div>
</div>
<div class="group p-8 rounded-2xl bg-black border border-white/10 hover:border-primary/50 transition-all cursor-pointer neon-border">
<div class="w-16 h-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-8 border border-primary/20 group-hover:scale-110 transition-transform shadow-[0_0_15px_rgba(57,255,20,0.1)]">
<span class="material-symbols-outlined text-4xl">palette</span>
</div>
<h3 class="text-2xl font-black mb-3 uppercase italic">Design</h3>
<p class="text-sm text-slate-500 leading-relaxed mb-6">Generative Art, VR Interfaces, Motion Systems.</p>
<div class="flex items-center justify-between mt-auto">
<span class="text-[10px] font-black px-2 py-1 bg-white/5 text-white rounded uppercase tracking-widest border border-white/10">1.8k Missions</span>
<span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">bolt</span>
</div>
</div>
<div class="group p-8 rounded-2xl bg-black border border-white/10 hover:border-primary/50 transition-all cursor-pointer neon-border">
<div class="w-16 h-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-8 border border-primary/20 group-hover:scale-110 transition-transform shadow-[0_0_15px_rgba(57,255,20,0.1)]">
<span class="material-symbols-outlined text-4xl">translate</span>
</div>
<h3 class="text-2xl font-black mb-3 uppercase italic">Languages</h3>
<p class="text-sm text-slate-500 leading-relaxed mb-6">Global Communication, Technical Translation.</p>
<div class="flex items-center justify-between mt-auto">
<span class="text-[10px] font-black px-2 py-1 bg-white/5 text-white rounded uppercase tracking-widest border border-white/10">950 Missions</span>
<span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">bolt</span>
</div>
</div>
<div class="group p-8 rounded-2xl bg-black border border-white/10 hover:border-primary/50 transition-all cursor-pointer neon-border">
<div class="w-16 h-16 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-8 border border-primary/20 group-hover:scale-110 transition-transform shadow-[0_0_15px_rgba(57,255,20,0.1)]">
<span class="material-symbols-outlined text-4xl">trending_up</span>
</div>
<h3 class="text-2xl font-black mb-3 uppercase italic">Growth</h3>
<p class="text-sm text-slate-500 leading-relaxed mb-6">Algorithm Strategy, Viral Scaling, Data Analytics.</p>
<div class="flex items-center justify-between mt-auto">
<span class="text-[10px] font-black px-2 py-1 bg-white/5 text-white rounded uppercase tracking-widest border border-white/10">1.2k Missions</span>
<span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">bolt</span>
</div>
</div>
</div>
</div>
</section>
<section class="py-32 max-w-7xl mx-auto px-6 relative overflow-hidden">
<div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-full bg-gradient-to-b from-primary/20 via-primary/5 to-transparent -z-10"></div>
<div class="text-center max-w-2xl mx-auto mb-24">
<h2 class="text-5xl font-black mb-6 tracking-tighter uppercase">The Protocol</h2>
<p class="text-slate-500 text-lg font-medium">A systematic approach to total skill acquisition and prestige ranking.</p>
</div>
<div class="grid md:grid-cols-3 gap-16">
<div class="flex flex-col items-center text-center gap-8 group">
<div class="w-24 h-24 rounded-full bg-black border-2 border-primary text-primary flex items-center justify-center shadow-[0_0_20px_rgba(57,255,20,0.3)] relative overflow-hidden transition-all group-hover:scale-110 group-hover:shadow-[0_0_40px_rgba(57,255,20,0.5)]">
<span class="material-symbols-outlined text-4xl">person_search</span>
<div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
</div>
<div>
<h3 class="text-2xl font-black mb-3 uppercase italic tracking-wider">Sync with Mentors</h3>
<p class="text-slate-500 text-sm leading-relaxed max-w-[280px] mx-auto">Calibrate your learning by connecting with top-tier industry veterans and certified masters.</p>
</div>
</div>
<div class="flex flex-col items-center text-center gap-8 group">
<div class="w-24 h-24 rounded-full bg-primary text-black flex items-center justify-center shadow-[0_0_30px_rgba(57,255,20,0.4)] relative overflow-hidden transition-all group-hover:scale-110">
<span class="material-symbols-outlined text-4xl font-bold">terminal</span>
<div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
</div>
<div>
<h3 class="text-2xl font-black mb-3 uppercase italic tracking-wider">High-Op Sessions</h3>
<p class="text-slate-500 text-sm leading-relaxed max-w-[280px] mx-auto">Execute real-time tasks, participate in live raids, and receive immediate tactical feedback.</p>
</div>
</div>
<div class="flex flex-col items-center text-center gap-8 group">
<div class="w-24 h-24 rounded-full bg-black border-2 border-primary text-primary flex items-center justify-center shadow-[0_0_20px_rgba(57,255,20,0.3)] relative overflow-hidden transition-all group-hover:scale-110 group-hover:shadow-[0_0_40px_rgba(57,255,20,0.5)]">
<span class="material-symbols-outlined text-4xl">workspace_premium</span>
<div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
</div>
<div>
<h3 class="text-2xl font-black mb-3 uppercase italic tracking-wider">Prestige &amp; NFTS</h3>
<p class="text-slate-500 text-sm leading-relaxed max-w-[280px] mx-auto">Mint your achievements, stack XP, and claim verified credentials recognized by global tech hubs.</p>
</div>
</div>
</div>
</section>
<section class="max-w-7xl mx-auto px-6 mb-32">
<div class="relative rounded-[2.5rem] overflow-hidden bg-black border border-primary/40 p-12 lg:p-24 shadow-[0_0_50px_rgba(57,255,20,0.1)]">
<div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-primary/10 rounded-full blur-[100px]"></div>
<div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-primary/5 rounded-full blur-[100px]"></div>
<div class="relative z-10 grid lg:grid-cols-2 gap-16 items-center">
<div class="flex flex-col gap-8">
<h2 class="text-5xl lg:text-7xl font-black tracking-tighter leading-none uppercase italic">Initiate <br/><span class="text-primary neon-text-glow">Level Up</span></h2>
<p class="text-xl text-slate-400 leading-relaxed font-medium">Join 500k+ operators scaling their impact. The next cycle begins in 04:12:00. Secure your slot.</p>
<div class="flex flex-wrap gap-5 pt-4">
<button class="px-10 py-5 bg-primary text-black font-black rounded-xl hover:scale-105 transition-all shadow-[0_0_30px_rgba(57,255,20,0.4)] uppercase tracking-widest">Join the Network</button>
<button class="px-10 py-5 bg-white/5 border border-white/10 text-white font-bold rounded-xl hover:bg-white/10 transition-all uppercase tracking-widest">View Rankings</button>
</div>
</div>
<div class="hidden lg:grid grid-cols-2 gap-6">
<div class="bg-white/5 backdrop-blur-md p-8 rounded-2xl border border-white/10 hover:border-primary/50 transition-colors group">
<div class="flex items-center gap-4 mb-6">
<span class="material-symbols-outlined text-primary neon-text-glow">emoji_events</span>
<span class="text-xs font-black uppercase tracking-widest text-slate-400">Weekly Tier</span>
</div>
<p class="text-3xl font-black text-white italic">ELITE 1%</p>
</div>
<div class="bg-white/5 backdrop-blur-md p-8 rounded-2xl border border-white/10 mt-12 hover:border-primary/50 transition-colors group">
<div class="flex items-center gap-4 mb-6">
<span class="material-symbols-outlined text-primary neon-text-glow">verified</span>
<span class="text-xs font-black uppercase tracking-widest text-slate-400">Inventory</span>
</div>
<p class="text-3xl font-black text-white italic">12 LEGACIES</p>
</div>
</div>
</div>
</div>
</section>
</main>
<footer class="bg-black border-t border-white/10 py-24">
<div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-16">
<div class="col-span-1 md:col-span-1">
<div class="flex items-center gap-2 mb-8">
<span class="material-symbols-outlined text-primary text-3xl neon-text-glow">database</span>
<h1 class="text-xl font-black tracking-widest text-white uppercase italic">SkillShare Hub</h1>
</div>
<p class="text-sm text-slate-500 leading-relaxed font-medium">Decentralizing expertise. Empowering the next generation of high-value creators through low-latency mentorship.</p>
</div>
<div>
<h4 class="font-black text-white uppercase tracking-widest mb-8 italic">Matrix</h4>
<ul class="flex flex-col gap-5 text-sm font-medium text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">Mission Catalog</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Find Operatives</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Transmission Guide</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Enterprise Protocol</a></li>
</ul>
</div>
<div>
<h4 class="font-black text-white uppercase tracking-widest mb-8 italic">Support</h4>
<ul class="flex flex-col gap-5 text-sm font-medium text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">Comms Center</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Rules of Engagement</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Terms of Service</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Data Shield</a></li>
</ul>
</div>
<div>
<h4 class="font-black text-white uppercase tracking-widest mb-8 italic">Telemetry</h4>
<p class="text-sm text-slate-500 mb-6 font-medium">Subscribe for immediate intel on new drops.</p>
<div class="flex gap-2">
<input class="flex-1 bg-white/5 border-white/10 rounded-lg px-4 text-sm focus:ring-primary focus:border-primary text-white" placeholder="your@email.com" type="email"/>
<button class="p-3 bg-primary text-black rounded-lg hover:scale-105 transition-transform">
<span class="material-symbols-outlined font-bold">send</span>
</button>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto px-6 mt-24 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
<p class="text-[10px] font-black uppercase tracking-widest text-slate-600">© 2024 SKILLSHARE HUB // PROTOCOL v4.0.2</p>
<div class="flex items-center gap-8">
<a class="text-slate-600 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
<a class="text-slate-600 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
<a class="text-slate-600 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">share</span></a>
</div>
</div>
</footer>

</body></html>