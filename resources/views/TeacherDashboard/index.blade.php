<html lang="en"><head></head><body class="font-display">```html


<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Teacher Management Console - Neon Edition</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style type="text/tailwindcss">
        :root {
            --neon-green: #39FF14;
            --neon-green-dim: #1a4d1a;
            --neon-green-muted: #0f2b0f;
            --bg-black: #050505;
            --card-black: #0d0d0d;
            --border-green: #22c55e33;
        }
        @layer base {
            body {
                @apply bg-[var(--bg-black)] text-slate-100;
            }
        }
        .neon-glow {
            text-shadow: 0 0 10px rgba(57, 255, 20, 0.5);
        }
        .neon-border {
            border: 1px solid var(--neon-green);
            box-shadow: 0 0 5px rgba(57, 255, 20, 0.2);
        }
        .chart-bar-1 { height: 40%; background: #39FF14; }
        .chart-bar-2 { height: 70%; background: #32e012; }
        .chart-bar-3 { height: 55%; background: #29b80f; }
        .chart-bar-4 { height: 90%; background: #39FF14; }
        .chart-bar-5 { height: 65%; background: #1f8a0b; }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#39FF14",
                        "background-dark": "#050505",
                        "card-dark": "#0d0d0d",
                    },
                    fontFamily: {
                        "display": ["Lexend"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>


<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<header class="flex items-center justify-between whitespace-nowrap border-b border-[var(--border-green)] bg-[var(--bg-black)] px-4 lg:px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-8">
<div class="flex items-center gap-4 text-primary">
<div class="size-6 flex items-center justify-center">
<span class="material-symbols-outlined text-3xl neon-glow">school</span>
</div>
<h2 class="text-slate-100 text-lg font-bold leading-tight tracking-[-0.015em] neon-glow">EduMaster Pro</h2>
</div>
<nav class="hidden md:flex items-center gap-9">
<a class="text-primary text-sm font-semibold leading-normal border-b-2 border-primary pb-1" href="#">Dashboard</a>
<a class="text-slate-400 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Sessions</a>
<a class="text-slate-400 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Curriculum</a>
<a class="text-slate-400 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Students</a>
</nav>
</div>
<div class="flex flex-1 justify-end gap-6 items-center">
<label class="hidden sm:flex flex-col min-w-40 !h-10 max-w-64">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full border border-[var(--border-green)]">
<div class="text-slate-400 flex border-none bg-slate-900 items-center justify-center pl-4 rounded-l-lg">
<span class="material-symbols-outlined text-xl">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 border-none bg-slate-900 text-slate-100 focus:ring-0 h-full placeholder:text-slate-500 px-4 rounded-r-lg pl-2 text-sm font-normal" placeholder="Search resources..." value=""/>
</div>
</label>
<button class="flex min-w-[140px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 border border-primary text-primary text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/10 transition-colors">
<span class="material-symbols-outlined mr-2 text-lg">swap_horiz</span>
<span class="truncate">Switch to Learner</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/40" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCzKSUdX4EEKmbTyIXbncXnMsK0cNMMc1kVUBrBONmrxcd7IVaf3t8JXXuyBZabkg8Ua59UJ3uJQvsrRd074eUmWQLYltBNWQ3Udzd2TfxEKfMdyXSqL8BckuoAwQLPp0SZPxXYFjlOnp4EFA4GpLVIoUyjrKhxynopqR2f4mkfh43Y_FFwC9Pap1bMU16ajvF6OXQCZ6KblX7Mm5bXYkO2CR2JzUqI5nMNvv6pE8ymdJ6U120oLxJLKhAVxZhV-HwXfGouJwvJewWY");'></div>
</div>
</header>
<div class="flex flex-1 flex-col lg:flex-row">
<aside class="w-full lg:w-64 border-r border-[var(--border-green)] bg-[var(--card-black)] p-4 shrink-0">
<div class="flex flex-col gap-4">
<div class="flex flex-col px-3 py-2">
<h1 class="text-slate-100 text-base font-bold">Teacher Console</h1>
<p class="text-primary/70 text-xs font-normal">Level 24 Master Educator</p>
</div>
<nav class="flex flex-col gap-1">
<div class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary border border-primary/20">
<span class="material-symbols-outlined">dashboard</span>
<p class="text-sm font-semibold">Overview</p>
</div>
<div class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:bg-white/5 rounded-lg cursor-pointer transition-colors group">
<span class="material-symbols-outlined group-hover:text-primary">person_add</span>
<p class="text-sm font-medium group-hover:text-primary">Pending Requests</p>
<span class="ml-auto bg-primary text-black text-[10px] font-bold px-1.5 rounded-full">3</span>
</div>
<div class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:bg-white/5 rounded-lg cursor-pointer transition-colors group">
<span class="material-symbols-outlined group-hover:text-primary">analytics</span>
<p class="text-sm font-medium group-hover:text-primary">Analytics</p>
</div>
<div class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:bg-white/5 rounded-lg cursor-pointer transition-colors group">
<span class="material-symbols-outlined group-hover:text-primary">psychology</span>
<p class="text-sm font-medium group-hover:text-primary">Manage Skills</p>
</div>
<div class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:bg-white/5 rounded-lg cursor-pointer transition-colors group">
<span class="material-symbols-outlined group-hover:text-primary">verified</span>
<p class="text-sm font-medium group-hover:text-primary">Certificates</p>
</div>
<div class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:bg-white/5 rounded-lg cursor-pointer transition-colors group mt-10">
<span class="material-symbols-outlined group-hover:text-primary">settings</span>
<p class="text-sm font-medium group-hover:text-primary">Settings</p>
</div>
</nav>
</div>
</aside>
<main class="flex-1 p-4 lg:p-8 overflow-y-auto">
<div class="max-w-6xl mx-auto flex flex-col gap-8">
<div class="flex flex-wrap items-center justify-between gap-4">
<div class="flex flex-col gap-1">
<p class="text-slate-100 text-3xl font-black leading-tight tracking-[-0.033em]">Welcome Back, Prof. Sarah</p>
<p class="text-slate-400 text-base font-normal">You have <span class="text-primary font-bold">3 new student requests</span> and 1 pending certificate approval.</p>
</div>
<div class="flex gap-2">
<button class="bg-primary/10 text-primary border border-primary/30 px-4 py-2 rounded-lg font-bold text-sm hover:bg-primary/20 transition-all">View Schedule</button>
<button class="bg-primary text-black px-6 py-2 rounded-lg font-bold text-sm shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-all">Go Live Now</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-[var(--card-black)] p-6 rounded-xl border border-[var(--border-green)] flex flex-col gap-4">
<div class="flex items-center justify-between">
<span class="text-slate-400 text-sm font-medium">Total Hours Taught</span>
<span class="material-symbols-outlined text-primary">schedule</span>
</div>
<div class="flex items-end gap-4 h-16">
<div class="flex-1 flex flex-col justify-end items-center gap-1 h-full">
<div class="w-full bg-primary/20 rounded-t-sm chart-bar-1"></div>
</div>
<div class="flex-1 flex flex-col justify-end items-center gap-1 h-full">
<div class="w-full bg-primary/40 rounded-t-sm chart-bar-2"></div>
</div>
<div class="flex-1 flex flex-col justify-end items-center gap-1 h-full">
<div class="w-full bg-primary/60 rounded-t-sm chart-bar-3"></div>
</div>
<div class="flex-1 flex flex-col justify-end items-center gap-1 h-full">
<div class="w-full bg-primary rounded-t-sm chart-bar-4"></div>
</div>
<div class="flex-1 flex flex-col justify-end items-center gap-1 h-full">
<div class="w-full bg-primary/50 rounded-t-sm chart-bar-5"></div>
</div>
</div>
<div class="flex items-center justify-between">
<p class="text-2xl font-black text-primary">124.5</p>
<p class="text-primary text-xs font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">trending_up</span> +12%
                                </p>
</div>
</div>
<div class="bg-[var(--card-black)] p-6 rounded-xl border border-[var(--border-green)] flex flex-col gap-2">
<div class="flex items-center justify-between">
<span class="text-slate-400 text-sm font-medium">XP Earned (Oct)</span>
<span class="material-symbols-outlined text-primary neon-glow">military_tech</span>
</div>
<div class="mt-4 flex flex-col gap-2">
<p class="text-2xl font-black text-slate-100">8,450 XP</p>
<div class="w-full bg-primary/10 rounded-full h-3 border border-primary/20 overflow-hidden">
<div class="bg-primary h-full rounded-full w-3/4 shadow-[0_0_10px_rgba(57,255,20,0.5)]"></div>
</div>
<p class="text-xs text-primary/70 font-medium">1,550 XP to Level 25</p>
</div>
</div>
<div class="bg-[var(--card-black)] p-6 rounded-xl border border-[var(--border-green)] flex flex-col gap-2 relative overflow-hidden">
<div class="flex items-center justify-between">
<span class="text-slate-400 text-sm font-medium">Avg Student Rating</span>
<span class="material-symbols-outlined text-primary">star</span>
</div>
<p class="text-2xl font-black text-slate-100">4.92 / 5.0</p>
<p class="text-slate-500 text-xs font-medium">Based on 84 reviews</p>
<div class="absolute bottom-0 left-0 w-full h-12 opacity-20 pointer-events-none">
<svg class="w-full h-full preserve-aspect-none" preserveAspectRatio="none" viewBox="0 0 100 20">
<path d="M0,20 L10,15 L20,18 L30,12 L40,14 L50,8 L60,10 L70,5 L80,7 L90,2 L100,4 V20 H0" fill="var(--neon-green)"></path>
</svg>
</div>
</div>
</div>
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
<div class="xl:col-span-2 bg-[var(--card-black)] rounded-xl border border-[var(--border-green)] overflow-hidden flex flex-col">
<div class="p-5 border-b border-[var(--border-green)] flex justify-between items-center">
<h2 class="text-lg font-bold text-primary neon-glow uppercase tracking-wider">Pending Requests</h2>
<a class="text-primary text-sm font-semibold hover:underline" href="#">View All</a>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-primary/5">
<tr>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-primary/60">Student</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-primary/60">Subject</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-primary/60">Date &amp; Time</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-primary/60 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-white/5">
<tr>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full border border-primary/30 bg-primary/10 flex items-center justify-center font-bold text-primary text-xs">AJ</div>
<span class="text-sm font-semibold">Alex Johnson</span>
</div>
</td>
<td class="px-6 py-4 text-sm">Advanced Physics</td>
<td class="px-6 py-4 text-sm text-slate-400">Today, 4:00 PM</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-3">
<button class="px-3 py-1 bg-primary text-black rounded font-bold text-xs uppercase hover:brightness-110 transition-all">
                                                    Accept
                                                </button>
<button class="px-3 py-1 border border-primary text-primary rounded font-bold text-xs uppercase hover:bg-primary/10 transition-all">
                                                    Decline
                                                </button>
</div>
</td>
</tr>
<tr>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full border border-primary/30 bg-primary/10 flex items-center justify-center font-bold text-primary text-xs">MG</div>
<span class="text-sm font-semibold">Maria Garcia</span>
</div>
</td>
<td class="px-6 py-4 text-sm">Calculus II</td>
<td class="px-6 py-4 text-sm text-slate-400">Tomorrow, 10:00 AM</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-3">
<button class="px-3 py-1 bg-primary text-black rounded font-bold text-xs uppercase hover:brightness-110 transition-all">
                                                    Accept
                                                </button>
<button class="px-3 py-1 border border-primary text-primary rounded font-bold text-xs uppercase hover:bg-primary/10 transition-all">
                                                    Decline
                                                </button>
</div>
</td>
</tr>
<tr>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full border border-primary/30 bg-primary/10 flex items-center justify-center font-bold text-primary text-xs">SL</div>
<span class="text-sm font-semibold">Sam Lee</span>
</div>
</td>
<td class="px-6 py-4 text-sm">Quantum Mechanics</td>
<td class="px-6 py-4 text-sm text-slate-400">Oct 25, 2:00 PM</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-3">
<button class="px-3 py-1 bg-primary text-black rounded font-bold text-xs uppercase hover:brightness-110 transition-all">
                                                    Accept
                                                </button>
<button class="px-3 py-1 border border-primary text-primary rounded font-bold text-xs uppercase hover:bg-primary/10 transition-all">
                                                    Decline
                                                </button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="bg-[var(--card-black)] rounded-xl border border-[var(--border-green)] p-6 flex flex-col gap-6">
<div class="flex items-center justify-between">
<h2 class="text-lg font-bold text-primary neon-glow uppercase tracking-wider">My Skills</h2>
<button class="text-primary hover:bg-primary/10 p-1 rounded border border-primary/30 transition-colors">
<span class="material-symbols-outlined">add</span>
</button>
</div>
<div class="flex flex-col gap-5">
<div class="flex flex-col gap-2">
<div class="flex justify-between text-[10px] font-bold uppercase text-slate-400 tracking-widest">
<span>Physics</span>
<span class="text-primary">Expert</span>
</div>
<div class="w-full bg-white/5 rounded-full h-1.5 border border-white/5 overflow-hidden">
<div class="bg-primary h-full rounded-full w-[95%] shadow-[0_0_8px_var(--neon-green)]"></div>
</div>
</div>
<div class="flex flex-col gap-2">
<div class="flex justify-between text-[10px] font-bold uppercase text-slate-400 tracking-widest">
<span>Applied Math</span>
<span class="text-primary">Advanced</span>
</div>
<div class="w-full bg-white/5 rounded-full h-1.5 border border-white/5 overflow-hidden">
<div class="bg-primary/70 h-full rounded-full w-[80%]"></div>
</div>
</div>
<div class="flex flex-col gap-2">
<div class="flex justify-between text-[10px] font-bold uppercase text-slate-400 tracking-widest">
<span>Python</span>
<span class="text-primary">Intermediate</span>
</div>
<div class="w-full bg-white/5 rounded-full h-1.5 border border-white/5 overflow-hidden">
<div class="bg-primary/50 h-full rounded-full w-[60%]"></div>
</div>
</div>
</div>
<div class="mt-auto pt-4 border-t border-white/10">
<p class="text-[10px] text-slate-500 italic mb-4">Adding new skills might require certificate verification.</p>
<button class="w-full bg-primary/10 border border-primary/30 text-primary py-2 rounded-lg text-sm font-bold hover:bg-primary/20 transition-all uppercase tracking-tighter">Add New Competency</button>
</div>
</div>
</div>
<div class="bg-[var(--card-black)] rounded-xl border border-[var(--border-green)] overflow-hidden">
<div class="p-5 border-b border-[var(--border-green)] flex items-center gap-3">
<span class="material-symbols-outlined text-primary neon-glow">verified_user</span>
<h2 class="text-lg font-bold text-slate-100 uppercase tracking-wider">Certificates</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
<div class="flex items-center gap-4 p-4 rounded-xl border border-primary/20 bg-primary/5 hover:bg-primary/10 transition-colors cursor-pointer">
<div class="size-12 rounded-lg bg-primary/20 border border-primary/30 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-2xl">workspace_premium</span>
</div>
<div class="flex flex-col">
<span class="text-sm font-bold text-slate-100">Senior Physics Educator</span>
<span class="text-[10px] text-primary font-bold uppercase">Approved • Dec 2023</span>
</div>
</div>
<div class="flex items-center gap-4 p-4 rounded-xl border border-white/10 bg-white/5 opacity-80">
<div class="size-12 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400">
<span class="material-symbols-outlined text-2xl">pending</span>
</div>
<div class="flex flex-col">
<span class="text-sm font-bold text-slate-300">Data Science Mentor</span>
<span class="text-[10px] text-slate-500 font-bold uppercase tracking-widest">Under Review</span>
</div>
</div>
<div class="flex items-center gap-4 p-4 rounded-xl border-2 border-dashed border-primary/20 hover:border-primary/50 cursor-pointer group transition-all">
<div class="size-12 rounded-lg bg-white/5 flex items-center justify-center text-slate-500 group-hover:text-primary transition-colors">
<span class="material-symbols-outlined text-2xl">add_circle</span>
</div>
<div class="flex flex-col">
<span class="text-sm font-bold group-hover:text-primary transition-colors">Upload Certificate</span>
<span class="text-xs text-slate-500">PDF, JPG up to 5MB</span>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
</div>

```</body></html>