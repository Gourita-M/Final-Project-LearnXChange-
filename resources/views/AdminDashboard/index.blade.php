<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Platform Overview - Neon Black</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <style type="text/tailwindcss">
        :root {
            --neon-green: #39FF14;
            --neon-green-glow: 0 0 10px rgba(57, 255, 20, 0.5), 0 0 20px rgba(57, 255, 20, 0.3);
            --bg-black: #050505;
            --card-black: #0d0d0d;
            --border-green: rgba(57, 255, 20, 0.15);
        }

        .glow-text {
            text-shadow: var(--neon-green-glow);
        }

        .glow-border:hover {
            box-shadow: 0 0 15px rgba(57, 255, 20, 0.1);
            border-color: rgba(57, 255, 20, 0.4);
        }
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
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-background-dark font-display text-slate-300 antialiased">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-primary/20 bg-card-dark px-10 py-3 sticky top-0 z-50">
                <div class="flex items-center gap-8">
                    <div class="flex items-center gap-4 text-primary">
                        <div
                            class="size-8 flex items-center justify-center bg-primary/10 rounded-lg border border-primary/30">
                            <span class="material-symbols-outlined text-primary">analytics</span>
                        </div>
                        <h2
                            class="text-white text-lg font-bold leading-tight tracking-[-0.015em] uppercase tracking-tighter">
                            Admin <span class="text-primary">Terminal</span></h2>
                    </div>
                    <label class="flex flex-col min-w-40 h-10 max-w-64">
                        <div
                            class="flex w-full flex-1 items-stretch rounded-lg h-full overflow-hidden border border-primary/20">
                            <div class="text-primary flex bg-black items-center justify-center pl-4">
                                <span class="material-symbols-outlined text-sm">search</span>
                            </div>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 border-none bg-black focus:ring-1 focus:ring-primary h-full placeholder:text-slate-600 px-4 text-base font-normal text-primary"
                                placeholder="Search systems..." value="" />
                        </div>
                    </label>
                </div>
                <div class="flex flex-1 justify-end gap-6 items-center">
                    <nav class="flex items-center gap-6">
                        <a class="text-primary text-sm font-bold border-b-2 border-primary py-1 uppercase tracking-wider"
                            href="#">Dashboard</a>
                        <a class="text-slate-400 text-sm font-medium hover:text-primary transition-colors uppercase tracking-wider"
                            href="#">User Hub</a>
                        <a class="text-slate-400 text-sm font-medium hover:text-primary transition-colors uppercase tracking-wider"
                            href="#">Live Sessions</a>
                        <a class="text-slate-400 text-sm font-medium hover:text-primary transition-colors uppercase tracking-wider"
                            href="#">Verifications</a>
                        <a class="text-slate-400 text-sm font-medium hover:text-primary transition-colors uppercase tracking-wider"
                            href="#">Security</a>
                    </nav>
                    <div class="flex gap-2">
                        <button
                            class="flex items-center justify-center rounded-lg h-10 w-10 bg-black border border-primary/20 text-primary hover:bg-primary/10 transition-all">
                            <span class="material-symbols-outlined">notifications</span>
                        </button>
                        <button
                            class="flex items-center justify-center rounded-lg h-10 w-10 bg-black border border-primary/20 text-primary hover:bg-primary/10 transition-all">
                            <span class="material-symbols-outlined">settings</span>
                        </button>
                    </div>
                    <div class="bg-primary/20 p-0.5 rounded-full border border-primary/50">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-9 grayscale brightness-125 border border-primary/30"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAWl-SfDuxwczQuCcOc19VQkb_w1lJsabMVTm8nWbUxp4whEKvMg0nieseFdXDbHST09vA_12fU4bqrKkABMezMqHLZ25OAEJMK1wdXV9JM1UC66duIhHkzPMJCxtv0P6BJV9HViUF4XW5sbzIMu3HdsdFDEbDmyUODxLXrgRAC2a4VV3noE6W6ddrHjgFufEGLbJDh0e3NCRMo4STbfs4zWH78j2V-to4nWFvPK91dAsb4VthcVrGnS3MLO3PhJgcq86mSQBD6VFVo");'>
                        </div>
                    </div>
                </div>
            </header>
            <main class="max-w-[1280px] mx-auto w-full px-10 py-8">
                <div class="flex flex-wrap justify-between items-end gap-3 mb-8">
                    <div class="flex flex-col gap-1">
                        <h1 class="text-white text-3xl font-black tracking-tighter uppercase italic">Platform Overview
                        </h1>
                        <p class="text-primary/60 text-sm font-mono tracking-tight">SYSTEM STATUS: OPTIMAL // MONITORING
                            LEARNER ENGAGEMENT</p>
                    </div>
                    <div class="flex gap-3">
                        <button
                            class="flex items-center gap-2 px-4 py-2 bg-black border border-primary/30 rounded-lg text-sm font-bold text-primary hover:bg-primary/10 transition-colors uppercase tracking-widest">
                            <span class="material-symbols-outlined text-lg">download</span>
                            Export Data
                        </button>
                        <button
                            class="flex items-center gap-2 px-4 py-2 bg-primary text-black rounded-lg text-sm font-black hover:bg-primary/80 transition-all shadow-[0_0_15px_rgba(57,255,20,0.4)] uppercase tracking-widest">
                            <span class="material-symbols-outlined text-lg font-black">add</span>
                            New Broadcast
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div
                        class="flex flex-col gap-3 rounded-xl p-6 bg-card-dark border border-primary/20 glow-border transition-all">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-primary/10 text-primary rounded border border-primary/20">
                                <span class="material-symbols-outlined">group</span>
                            </div>
                            <span
                                class="text-primary text-xs font-bold bg-primary/10 px-2 py-1 rounded border border-primary/30">+12.5%</span>
                        </div>
                        <div>
                            <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Total Users</p>
                            <p class="text-primary text-3xl font-black glow-text">124,500</p>
                        </div>
                        <div class="text-[10px] text-slate-600 font-mono uppercase tracking-tight">Learners: 112k |
                            Teachers: 12.5k</div>
                    </div>
                    <div
                        class="flex flex-col gap-3 rounded-xl p-6 bg-card-dark border border-primary/20 glow-border transition-all">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-primary/10 text-primary rounded border border-primary/20">
                                <span class="material-symbols-outlined">podcasts</span>
                            </div>
                            <span
                                class="text-primary text-xs font-bold bg-primary/10 px-2 py-1 rounded border border-primary/30">+5.2%</span>
                        </div>
                        <div>
                            <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Active Sessions</p>
                            <p class="text-primary text-3xl font-black glow-text">1,240</p>
                        </div>
                        <div class="text-[10px] text-slate-600 font-mono uppercase tracking-tight">Live: 420 |
                            Scheduled: 820</div>
                    </div>
                    <div
                        class="flex flex-col gap-3 rounded-xl p-6 bg-card-dark border border-primary/20 glow-border transition-all">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-primary/10 text-primary rounded border border-primary/20">
                                <span class="material-symbols-outlined">workspace_premium</span>
                            </div>
                            <span
                                class="text-rose-500 text-xs font-bold bg-rose-500/10 px-2 py-1 rounded border border-rose-500/30">-2.1%</span>
                        </div>
                        <div>
                            <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Pending Certs</p>
                            <p class="text-primary text-3xl font-black glow-text">85</p>
                        </div>
                        <div class="text-[10px] text-slate-600 font-mono uppercase tracking-tight">Avg wait: 14 hours
                        </div>
                    </div>
                    <div
                        class="flex flex-col gap-3 rounded-xl p-6 bg-card-dark border border-primary/20 glow-border transition-all">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-primary/10 text-primary rounded border border-primary/20">
                                <span class="material-symbols-outlined">gpp_maybe</span>
                            </div>
                            <span
                                class="text-amber-500 text-xs font-bold bg-amber-500/10 px-2 py-1 rounded border border-amber-500/30">ALERT</span>
                        </div>
                        <div>
                            <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Security Reports</p>
                            <p class="text-primary text-3xl font-black glow-text">12</p>
                        </div>
                        <div class="text-[10px] text-slate-600 font-mono uppercase tracking-tight">8 Content | 4 User
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2 flex flex-col gap-4 rounded-xl p-6 bg-card-dark border border-primary/10">
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="text-white text-xl font-black uppercase tracking-tighter italic">Validation Queue
                            </h2>
                            <a class="text-primary text-xs font-bold uppercase hover:underline" href="#">Open
                                All</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr
                                        class="text-slate-500 text-[10px] uppercase tracking-[0.2em] border-b border-primary/10">
                                        <th class="pb-3 font-black">Entity</th>
                                        <th class="pb-3 font-black">Vector</th>
                                        <th class="pb-3 font-black">Data</th>
                                        <th class="pb-3 font-black text-right">Access</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-primary/5">
                                    <tr class="group hover:bg-primary/5 transition-colors">
                                        <td class="py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-8 rounded bg-slate-800 grayscale border border-primary/20"
                                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAJq1NvxtJM9pZfuHrjBS3f0Jau6c_u4GYQZEwcN_K5R4oRHoIqzcJxJZxeghGkQHMu8bYRqij8ysL0CoUi4thRxDk3scq6EwaYoBJB3r1OYcdCYg3Iw5fNrCvgTLvLlQHmMMKCQHDM7_iSFipJNiuVurJe7gkKuytCAxY_Gixifa7DKTuwbQVHV1kor2tTCST_SJwd87etBTwQPSfmA5Wtxz6Df2EfndV_jadU1bAqxScF6jkxf5V8HCnDFGvyI2MXG-_-FaXQVER4'); background-size: cover;">
                                                </div>
                                                <div>
                                                    <p class="text-sm font-bold text-white uppercase">Sarah Chen</p>
                                                    <p class="text-[10px] font-mono text-primary/60">LVL 49 • 4.9★</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 text-xs font-bold text-slate-300">ADVANCED UI DESIGN</td>
                                        <td class="py-4">
                                            <span
                                                class="text-[10px] bg-primary/10 text-primary border border-primary/30 px-2 py-1 rounded uppercase flex items-center gap-1 w-fit font-bold">
                                                <span class="material-symbols-outlined text-[14px]">attach_file</span>
                                                PORTFOLIO.PDF
                                            </span>
                                        </td>
                                        <td class="py-4 text-right">
                                            <div class="flex justify-end gap-2">
                                                <button
                                                    class="p-1.5 text-primary hover:bg-primary hover:text-black transition-all rounded"><span
                                                        class="material-symbols-outlined">check_circle</span></button>
                                                <button
                                                    class="p-1.5 text-rose-500 hover:bg-rose-500 hover:text-black transition-all rounded"><span
                                                        class="material-symbols-outlined">cancel</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="group hover:bg-primary/5 transition-colors">
                                        <td class="py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-8 rounded bg-slate-800 grayscale border border-primary/20"
                                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCcDBzbEIhxvXnF9a8TvFseGtVqc-nRmfzmK7a0LTkRHU3EZ8Z0LZl27miWN5Dd3oWi5q5QMNkdCdrGGJLg4jR6FSvyjJEZBIEGtM1gSjzi8kFvUDjvGQLhitxgjgKawwj8nMZoMD5dQohJiiI_L0uTym-JBExiPooWCL356gEOJom-AUINIQon_mN10GrWiT_Nsr2ufozfjEsZpDLUytDg-s1WJZ2sZsxlxkZ8LkXqPJlGxf7LWlylyTCYhunDFHS8TRdtzaxUv4AA'); background-size: cover;">
                                                </div>
                                                <div>
                                                    <p class="text-sm font-bold text-white uppercase">Marcus Aurelius
                                                    </p>
                                                    <p class="text-[10px] font-mono text-primary/60">LVL 88 • 4.7★</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 text-xs font-bold text-slate-300">PHILOSOPHY 101</td>
                                        <td class="py-4">
                                            <span
                                                class="text-[10px] bg-primary/10 text-primary border border-primary/30 px-2 py-1 rounded uppercase flex items-center gap-1 w-fit font-bold">
                                                <span class="material-symbols-outlined text-[14px]">videocam</span>
                                                INTRO.MP4
                                            </span>
                                        </td>
                                        <td class="py-4 text-right">
                                            <div class="flex justify-end gap-2">
                                                <button
                                                    class="p-1.5 text-primary hover:bg-primary hover:text-black transition-all rounded"><span
                                                        class="material-symbols-outlined">check_circle</span></button>
                                                <button
                                                    class="p-1.5 text-rose-500 hover:bg-rose-500 hover:text-black transition-all rounded"><span
                                                        class="material-symbols-outlined">cancel</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="group hover:bg-primary/5 transition-colors">
                                        <td class="py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-8 rounded bg-slate-800 grayscale border border-primary/20"
                                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDYaA8zQ3U6jLVcRJ7_LTWNvnW5UFX6BAuOjyckN1rnRWRiPz65Sd3S-d1BSudCc-1RxmZjV2Y3x-nJWWrrlyLi4ybenlcLK5_d42P_M7fJHj7ppoCs4-G7jGfIl66Jt9d9CKvYNDAlrG_gGz6zWiE5R-LzAd6wImn6cVNtR0kdb0g6hVXaNKH87I70mHwDX1rIlyRRE7Dli0w57Cmt19FTBDMcUrXSeUAJ8citnY3BPt2omljlcFfC-fo95sbrsSz8s37VAf56GqvC'); background-size: cover;">
                                                </div>
                                                <div>
                                                    <p class="text-sm font-bold text-white uppercase">Elena Rodriguez
                                                    </p>
                                                    <p class="text-[10px] font-mono text-primary/60">LVL 99 • 5.0★</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 text-xs font-bold text-slate-300">REACT NATIVE FLOW</td>
                                        <td class="py-4">
                                            <span
                                                class="text-[10px] bg-primary/10 text-primary border border-primary/30 px-2 py-1 rounded uppercase flex items-center gap-1 w-fit font-bold">
                                                <span class="material-symbols-outlined text-[14px]">link</span>
                                                GITHUB REPO
                                            </span>
                                        </td>
                                        <td class="py-4 text-right">
                                            <div class="flex justify-end gap-2">
                                                <button
                                                    class="p-1.5 text-primary hover:bg-primary hover:text-black transition-all rounded"><span
                                                        class="material-symbols-outlined">check_circle</span></button>
                                                <button
                                                    class="p-1.5 text-rose-500 hover:bg-rose-500 hover:text-black transition-all rounded"><span
                                                        class="material-symbols-outlined">cancel</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 rounded-xl p-6 bg-card-dark border border-primary/10">
                        <h2 class="text-white text-xl font-black uppercase tracking-tighter italic">Moderation Hub</h2>
                        <div class="flex flex-col gap-4">
                            <div class="p-3 bg-black border border-rose-500/20 rounded-lg">
                                <div class="flex gap-3">
                                    <span class="material-symbols-outlined text-rose-500">report</span>
                                    <div class="flex-1">
                                        <div class="flex justify-between">
                                            <p class="text-xs font-bold text-rose-500 uppercase tracking-widest">
                                                Flagged Content</p>
                                            <span class="text-[9px] text-slate-600 font-mono">2m ago</span>
                                        </div>
                                        <p class="text-[11px] text-slate-400 mt-1 uppercase leading-tight font-medium">
                                            Spam detected in "Python" sector by 3 nodes.</p>
                                        <div class="flex gap-2 mt-3">
                                            <button
                                                class="px-3 py-1 bg-rose-600 text-white text-[9px] font-black uppercase rounded tracking-widest">Purge</button>
                                            <button
                                                class="px-3 py-1 bg-black border border-slate-700 text-slate-400 text-[9px] font-black uppercase rounded tracking-widest">Ignore</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 bg-black border border-amber-500/20 rounded-lg">
                                <div class="flex gap-3">
                                    <span class="material-symbols-outlined text-amber-500">person_off</span>
                                    <div class="flex-1">
                                        <div class="flex justify-between">
                                            <p class="text-xs font-bold text-amber-500 uppercase tracking-widest">
                                                Suspicious Activity</p>
                                            <span class="text-[9px] text-slate-600 font-mono">14m ago</span>
                                        </div>
                                        <p class="text-[11px] text-slate-400 mt-1 uppercase leading-tight font-medium">
                                            Access attempt from unregistered terminal.</p>
                                        <div class="flex gap-2 mt-3">
                                            <button
                                                class="px-3 py-1 bg-amber-600 text-black text-[9px] font-black uppercase rounded tracking-widest">Isolate</button>
                                            <button
                                                class="px-3 py-1 bg-black border border-slate-700 text-slate-400 text-[9px] font-black uppercase rounded tracking-widest">Audit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 rounded-xl p-8 bg-card-dark border border-primary/10">
                    <div class="flex flex-wrap justify-between items-center mb-8">
                        <div>
                            <h2 class="text-white text-xl font-black uppercase tracking-tighter italic">Skill Trends
                            </h2>
                            <p class="text-primary/40 text-[10px] uppercase tracking-widest font-mono">Real-time
                                enrollment frequency metrics</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-primary text-xs font-black uppercase tracking-widest glow-text">+15%
                                GROWTH</span>
                            <div class="flex bg-black border border-primary/20 p-1 rounded">
                                <button
                                    class="px-3 py-1 text-[10px] font-black bg-primary text-black rounded uppercase">30D</button>
                                <button class="px-3 py-1 text-[10px] font-black text-primary/40 uppercase">90D</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-6 items-end justify-between px-4 h-48">
                        <div class="flex-1 flex flex-col items-center gap-3 h-full">
                            <div class="w-full bg-primary/5 rounded-t-sm relative flex flex-col justify-end h-full">
                                <div
                                    class="w-full bg-gradient-to-t from-primary/80 to-primary rounded-t-sm transition-all h-[40%] shadow-[0_0_10px_rgba(57,255,20,0.2)]">
                                </div>
                            </div>
                            <p class="text-primary text-[10px] font-black uppercase tracking-tighter">Python</p>
                        </div>
                        <div class="flex-1 flex flex-col items-center gap-3 h-full">
                            <div class="w-full bg-primary/5 rounded-t-sm relative flex flex-col justify-end h-full">
                                <div
                                    class="w-full bg-gradient-to-t from-primary/80 to-primary rounded-t-sm transition-all h-[95%] shadow-[0_0_10px_rgba(57,255,20,0.2)]">
                                </div>
                            </div>
                            <p class="text-primary text-[10px] font-black uppercase tracking-tighter">UI Design</p>
                        </div>
                        <div class="flex-1 flex flex-col items-center gap-3 h-full">
                            <div class="w-full bg-primary/5 rounded-t-sm relative flex flex-col justify-end h-full">
                                <div
                                    class="w-full bg-gradient-to-t from-primary/80 to-primary rounded-t-sm transition-all h-[65%] shadow-[0_0_10px_rgba(57,255,20,0.2)]">
                                </div>
                            </div>
                            <p class="text-primary text-[10px] font-black uppercase tracking-tighter">Marketing</p>
                        </div>
                        <div class="flex-1 flex flex-col items-center gap-3 h-full">
                            <div class="w-full bg-primary/5 rounded-t-sm relative flex flex-col justify-end h-full">
                                <div
                                    class="w-full bg-gradient-to-t from-primary/80 to-primary rounded-t-sm transition-all h-[75%] shadow-[0_0_10px_rgba(57,255,20,0.2)]">
                                </div>
                            </div>
                            <p class="text-primary text-[10px] font-black uppercase tracking-tighter">Data Sci</p>
                        </div>
                        <div class="flex-1 flex flex-col items-center gap-3 h-full">
                            <div class="w-full bg-primary/5 rounded-t-sm relative flex flex-col justify-end h-full">
                                <div
                                    class="w-full bg-gradient-to-t from-primary/80 to-primary rounded-t-sm transition-all h-[85%] shadow-[0_0_10px_rgba(57,255,20,0.2)]">
                                </div>
                            </div>
                            <p class="text-primary text-[10px] font-black uppercase tracking-tighter">React</p>
                        </div>
                        <div class="flex-1 flex flex-col items-center gap-3 h-full">
                            <div class="w-full bg-primary/5 rounded-t-sm relative flex flex-col justify-end h-full">
                                <div
                                    class="w-full bg-gradient-to-t from-primary/80 to-primary rounded-t-sm transition-all h-[50%] shadow-[0_0_10px_rgba(57,255,20,0.2)]">
                                </div>
                            </div>
                            <p class="text-primary text-[10px] font-black uppercase tracking-tighter">Soft Skills</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
