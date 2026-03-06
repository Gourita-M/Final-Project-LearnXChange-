<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Learner Central Dashboard - Black &amp; Green Theme</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#39FF14", // Neon Green
                        "accent-green": "#39FF14",
                        "dark-bg": "#000000",
                        "sidebar-bg": "#0A0A0A",
                        "card-bg": "#121212",
                        "border-color": "#1F1F1F",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        :root {
            --primary: #39FF14;
        }
        body {
            font-family: 'Lexend', sans-serif;
            background-color: #000000;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .neon-glow {
            box-shadow: 0 0 10px rgba(57, 255, 20, 0.2);
        }
        .neon-border {
            border-color: rgba(57, 255, 20, 0.3);
        }
    </style>
</head>
<body class="bg-dark-bg text-slate-100 antialiased">
<div class="flex min-h-screen">
<aside class="w-64 bg-sidebar-bg border-r border-border-color flex flex-col fixed h-full z-20">
<div class="p-6 flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary border border-primary/30">
<span class="material-symbols-outlined">school</span>
</div>
<span class="text-xl font-bold tracking-tight text-white">L-Central</span>
</div>
<div class="px-4 py-2">
<div class="flex items-center gap-3 p-3 rounded-xl bg-card-bg border border-border-color mb-6">
<div class="size-10 rounded-full bg-cover bg-center border border-primary/20" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDrlUqB34hxzHX1B1qwtPT9VrNvikq0icZWNHsFka5ytzSxC_1tI31QHjzXSzIrhfIXqzE6HGISx_fsSknhavs2h-IwsIZ-Nx9YRePmpJ2aRbp_ZPqmCR-2480UtddxJR2GWLn9LnaeNpc6qKuqTFvf-YKqsEkcxJqnEeTwh9hPT-WtAMA5Dc28Tt6mADblwQtRH43b5YwOOzv1F7H8K9TgHXmAGDyoggbkxR2ImkinIfG8qqsa6TQ-ZyVjmbwjZvnkqaIzYkl-CYZn')"></div>
<div class="flex flex-col">
<span class="text-sm font-semibold text-white">Alex Johnson</span>
<span class="text-xs text-primary font-medium">Learner Profile</span>
</div>
</div>
<nav class="space-y-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary font-medium border border-primary/20" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-400 hover:bg-card-bg hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">book_5</span>
<span>My Courses</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-400 hover:bg-card-bg hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">groups</span>
<span>Mentors</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-400 hover:bg-card-bg hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">calendar_today</span>
<span>Schedule</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-400 hover:bg-card-bg hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">military_tech</span>
<span>Achievements</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-400 hover:bg-card-bg hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span>Settings</span>
</a>
</nav>
</div>
<div class="mt-auto p-4 border-t border-border-color">
<div class="flex items-center justify-between px-3 py-4 bg-card-bg rounded-xl border border-border-color mb-4">
<span class="text-xs font-bold text-slate-300 uppercase tracking-widest">Teacher Mode</span>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox" value=""/>
<div class="w-11 h-6 bg-slate-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<button class="w-full flex items-center justify-center gap-2 bg-primary text-black py-2.5 px-4 rounded-lg font-bold text-sm hover:bg-primary/90 transition-all shadow-[0_0_15px_rgba(57,255,20,0.3)]">
<span class="material-symbols-outlined text-[20px]">swap_horiz</span>
                Switch to Teaching
            </button>
</div>
</aside>
<main class="ml-64 flex-1 p-8 min-h-screen bg-dark-bg">
<div class="flex justify-between items-end mb-8">
<div>
<h1 class="text-3xl font-black tracking-tight text-white">Welcome back, <span class="text-primary">Alex!</span></h1>
<p class="text-slate-400 mt-1">You're making great progress. Keep it up!</p>
</div>
<div class="flex items-center gap-4 bg-sidebar-bg p-3 rounded-xl border border-border-color">
<div class="flex items-center gap-2 px-3 py-1 bg-primary/10 text-primary rounded-full font-bold border border-primary/20">
<span class="material-symbols-outlined text-[20px]">potted_plant</span>
<span>Level 14</span>
</div>
<div class="h-6 w-px bg-border-color"></div>
<div class="flex items-center gap-2 px-3 py-1 bg-primary/20 text-primary rounded-full font-bold border border-primary/40">
<span class="material-symbols-outlined text-[20px]">bolt</span>
<span>2,450 XP</span>
</div>
</div>
</div>
<div class="grid grid-cols-12 gap-8">
<div class="col-span-8 space-y-8">
<section class="bg-sidebar-bg rounded-xl p-6 border border-border-color">
<div class="flex items-center justify-between mb-6">
<h2 class="text-xl font-bold text-white">My Learning Progress</h2>
<a class="text-sm text-primary font-semibold hover:underline" href="#">View All</a>
</div>
<div class="space-y-6">
<div class="group">
<div class="flex justify-between items-center mb-2">
<span class="font-medium text-slate-300">UI/UX Design Masterclass</span>
<span class="text-sm font-bold text-primary">75%</span>
</div>
<div class="w-full bg-slate-900 h-2.5 rounded-full overflow-hidden border border-border-color">
<div class="bg-primary h-full transition-all shadow-[0_0_8px_rgba(57,255,20,0.5)]" style="width: 75%;"></div>
</div>
<p class="text-xs text-slate-500 mt-2">12 of 16 modules completed</p>
</div>
<div class="group">
<div class="flex justify-between items-center mb-2">
<span class="font-medium text-slate-300">Advanced React Patterns</span>
<span class="text-sm font-bold text-primary">40%</span>
</div>
<div class="w-full bg-slate-900 h-2.5 rounded-full overflow-hidden border border-border-color">
<div class="bg-primary h-full transition-all shadow-[0_0_8px_rgba(57,255,20,0.5)]" style="width: 40%;"></div>
</div>
<p class="text-xs text-slate-500 mt-2">4 of 10 modules completed</p>
</div>
<div class="group">
<div class="flex justify-between items-center mb-2">
<span class="font-medium text-slate-300">Product Management Fundamentals</span>
<span class="text-sm font-bold text-primary">90%</span>
</div>
<div class="w-full bg-slate-900 h-2.5 rounded-full overflow-hidden border border-border-color">
<div class="bg-primary h-full transition-all shadow-[0_0_8px_rgba(57,255,20,0.5)]" style="width: 90%;"></div>
</div>
<p class="text-xs text-slate-500 mt-2">18 of 20 modules completed</p>
</div>
</div>
</section>
<section class="bg-sidebar-bg rounded-xl p-6 border border-border-color">
<div class="flex items-center justify-between mb-6">
<h2 class="text-xl font-bold text-white">Upcoming Sessions</h2>
<button class="text-sm text-primary font-semibold flex items-center gap-1 hover:brightness-110">
<span class="material-symbols-outlined text-[18px]">add</span>
                            Schedule New
                        </button>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="p-4 rounded-xl border border-border-color bg-card-bg/50 flex flex-col gap-4 hover:border-primary/30 transition-all">
<div class="flex justify-between items-start">
<div class="px-2 py-1 rounded bg-primary/10 border border-primary/20 text-primary text-[10px] font-bold uppercase tracking-wider">Group Session</div>
<span class="text-xs font-medium text-slate-500">Today, 4:00 PM</span>
</div>
<div>
<h3 class="font-bold text-white">Design Systems Workshop</h3>
<p class="text-sm text-slate-400">Instructor: Sarah Miller</p>
</div>
<div class="flex items-center justify-between mt-2">
<div class="flex -space-x-2">
<div class="size-7 rounded-full border-2 border-sidebar-bg bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA3LKmHV7yeN3JZlOp7gPoZ-AkhPBw98mP4NrpjEfD4IlLv-5gvd-shIhuWyVc82otge5KVhEu8aX6xgzN2eJMfyoRScT8sMXGzjfooqZHwFPfhp4C4uvKPz5etcW5N4AJmAgA3vHrWk1rvCFc_rArMNtXniTSmVgu-jmXp6QDdgV-WBbC4uSB2ihQIidPLEYr-xzBehgQGfH9SAySFkwlpM-uoYczbiI6Gu7veKJURkRbQ8pMYsCxzYVTf__6POUUJiY7C6UmntnQ_')"></div>
<div class="size-7 rounded-full border-2 border-sidebar-bg bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDcr3OVmpThzzNwxPCPNoxiREU1kXL8nJLOTKKj5vIK6bRj3iLLITtQftEUvBlNSJ3wpLx7W6xeBHsGlkpsSQYibT51A5gyCBmufWpM4yaCIdGiKBTN9y5_5w9vEBMtNanA6zXYBX9pEVc75Q_azqidT-ELTVXspucXXD5dtSgOYCqzcJFV99Co3Z6OdJsj_HFdsCjXuEI0BdcfffsCkjldgO35ur9CnjapijUaz-vEw9dhVo72mcUp-1eBvsMJKy9LEnSJje_qV14-')"></div>
<div class="size-7 rounded-full border-2 border-sidebar-bg bg-slate-800 flex items-center justify-center text-[10px] font-bold text-primary">+5</div>
</div>
<button class="bg-primary text-black text-xs px-4 py-1.5 rounded-lg font-bold hover:brightness-110">Join Live</button>
</div>
</div>
<div class="p-4 rounded-xl border border-border-color bg-card-bg/50 flex flex-col gap-4 hover:border-primary/30 transition-all">
<div class="flex justify-between items-start">
<div class="px-2 py-1 rounded bg-slate-800 border border-border-color text-slate-300 text-[10px] font-bold uppercase tracking-wider">1-on-1 Mentorship</div>
<span class="text-xs font-medium text-slate-500">Tomorrow, 10:00 AM</span>
</div>
<div>
<h3 class="font-bold text-white">Career Path Review</h3>
<p class="text-sm text-slate-400">Instructor: David Chen</p>
</div>
<div class="flex items-center justify-between mt-2">
<div class="flex items-center gap-2">
<div class="size-7 rounded-full border-2 border-sidebar-bg bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDEAtAFEL44EvPcfmxWUhl-LUdplM-vii4_7eJWnPex6ot4Q_AtrhQS704T5Oy3cVrNrLNQ61V--NR_oZgxw9v0ESkVWKyNmenJBbpoCdbgJ9CfbS8HvQykcBpJR-pUjyZmpe1oJAP3Gi1FzM6Thhfk6YMKvB9ChbdxX0P3hs1pMcyWWOlu_nWJ8O77B7YsenBkoaPabxgffzQbZvXcLkW3-lMt-BPMmLglfYX2frWBmKftiUbEcm6TG1uyvMTXbQPtdNMxLn2rMjRg')"></div>
<span class="text-xs font-medium text-slate-400">David C.</span>
</div>
<button class="border border-primary text-primary text-xs px-4 py-1.5 rounded-lg font-bold hover:bg-primary/10 transition-all">Details</button>
</div>
</div>
</div>
</section>
</div>
<div class="col-span-4 space-y-8">
<section class="bg-sidebar-bg rounded-xl p-6 border border-border-color overflow-hidden relative">
<div class="absolute -top-12 -right-12 w-32 h-32 bg-primary/5 rounded-full blur-2xl"></div>
<h2 class="text-xl font-bold mb-4 relative z-10 text-white">Recent Badges</h2>
<div class="grid grid-cols-3 gap-3 relative z-10">
<div class="flex flex-col items-center gap-2">
<div class="size-14 rounded-xl bg-primary/10 flex items-center justify-center text-primary border border-primary/20">
<span class="material-symbols-outlined text-3xl">workspace_premium</span>
</div>
<span class="text-[10px] font-bold text-center leading-tight text-slate-300">Fast Learner</span>
</div>
<div class="flex flex-col items-center gap-2">
<div class="size-14 rounded-xl bg-primary/10 flex items-center justify-center text-primary border border-primary/20">
<span class="material-symbols-outlined text-3xl">local_fire_department</span>
</div>
<span class="text-[10px] font-bold text-center leading-tight text-slate-300">7 Day Streak</span>
</div>
<div class="flex flex-col items-center gap-2">
<div class="size-14 rounded-xl bg-primary/10 flex items-center justify-center text-primary border border-primary/20">
<span class="material-symbols-outlined text-3xl">psychology</span>
</div>
<span class="text-[10px] font-bold text-center leading-tight text-slate-300">Problem Solver</span>
</div>
</div>
<button class="w-full mt-6 py-2 border border-border-color rounded-lg text-sm font-semibold text-slate-400 hover:text-primary hover:border-primary/30 transition-all">
                        View Trophy Room
                    </button>
</section>
<section class="bg-sidebar-bg rounded-xl p-6 border border-border-color">
<h2 class="text-xl font-bold mb-4 text-white">Recommended Mentors</h2>
<div class="space-y-4">
<div class="flex items-center gap-4 group cursor-pointer p-2 rounded-lg hover:bg-card-bg transition-all">
<div class="relative">
<div class="size-12 rounded-lg bg-cover bg-center border border-border-color" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBfkKqky0Q63syr1biaFHzjoMIRiHE_9hEx6kIGR5orXmypI4jSQnHlrejxQWoq5372VdMBEe-JYuH5uAL-Lf-GKj2pluqS5R_Y-scPt-rVi6gyxvYW2CCZ-e6ZBLWyRNInLO5vKDz-Fo1-mBQGBylrMRkQUa-T8CS3TMM33WOgiuM3vRe5C2K9uS1ydIq04Qu6zhBwy0NSc4A6w0ZnLnptmepEz_YnO32gCDkYirej_zc_5m_3PV8uad5iq4M4XAVI6SH_pYy8o5Jc')"></div>
<div class="absolute -bottom-1 -right-1 size-3 bg-primary rounded-full border-2 border-sidebar-bg"></div>
</div>
<div class="flex-1">
<h4 class="font-bold text-sm text-white group-hover:text-primary transition-colors">Emily Watson</h4>
<p class="text-xs text-slate-500">Senior UX Researcher</p>
</div>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-sm fill-current">star</span>
<span class="text-xs font-bold">4.9</span>
</div>
</div>
<div class="flex items-center gap-4 group cursor-pointer p-2 rounded-lg hover:bg-card-bg transition-all">
<div class="relative">
<div class="size-12 rounded-lg bg-cover bg-center border border-border-color" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB6JipQNUwuyFX7NZ97i8qIihVAldUUAsgqBECDv_P9SeXzrX35rbWfTkPStWUDvMTsEiGSm2Pxe5XTZlCvWT391GwKY_Z10ra6OAWDRFN1lPpOw0q4cOHvzCM_exP8iEoWtdyxC2m7DC8vjLV4OLgPJQhYIhY4oJrJ8UJ-eW4GXYltXQYnrRIIPCjVafvufPRaogdrwIyiaQFrElHEKROIbImWRvUNlVelpa7ZkEqmmh6c_y7ovY7_BxUgHLaAqlElQJQhy8kfd--1')"></div>
<div class="absolute -bottom-1 -right-1 size-3 bg-slate-600 rounded-full border-2 border-sidebar-bg"></div>
</div>
<div class="flex-1">
<h4 class="font-bold text-sm text-white group-hover:text-primary transition-colors">Marcus Thorne</h4>
<p class="text-xs text-slate-500">Full Stack Architect</p>
</div>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-sm fill-current">star</span>
<span class="text-xs font-bold">5.0</span>
</div>
</div>
<div class="flex items-center gap-4 group cursor-pointer p-2 rounded-lg hover:bg-card-bg transition-all">
<div class="relative">
<div class="size-12 rounded-lg bg-cover bg-center border border-border-color" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCKffIEaUMufRdNgEfUhFzXkFczTd3WSmX04GS_9VM7rzbNflulYCPrUFj4zEjrJGRG2xVbhWgxOMzqnTxCk6D8u9fK29t3I3SAKZMr3wH5Duc02Q9qsGfd-MB6lxoKTgNGagEYicR4aBOrzXLCygGPTHOSwclH1H1fdLDIlHBDI4XWouE9YXy6baX23RYMnyHoUzAUbkZs7GTXh3KWWx00pgnyPaR92YwZ4ifVyhhX54Bglk1lPiu7gEU_hvuApNl-sfR1kWS3Um1i')"></div>
<div class="absolute -bottom-1 -right-1 size-3 bg-primary rounded-full border-2 border-sidebar-bg"></div>
</div>
<div class="flex-1">
<h4 class="font-bold text-sm text-white group-hover:text-primary transition-colors">Sofia Rodriguez</h4>
<p class="text-xs text-slate-500">Lead PM @ TechFlow</p>
</div>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-sm fill-current">star</span>
<span class="text-xs font-bold">4.8</span>
</div>
</div>
</div>
<button class="w-full mt-6 py-2 bg-primary text-black rounded-lg text-sm font-bold hover:brightness-110 transition-all shadow-[0_0_10px_rgba(57,255,20,0.2)]">
                        Browse Mentors
                    </button>
</section>
</div>
</div>
</main>
</div>

</body></html>