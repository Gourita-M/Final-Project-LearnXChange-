<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Luminary Live Session</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
                        "primary": "#2563eb",
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
                        "2xl": "0.5rem",
                        /* Matching the 8px roundness request */
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
        }

        h1,
        h2,
        h3 {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased overflow-hidden">
    
    <nav
        class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl shadow-sm flex justify-between items-center px-8 h-20">
        <div class="flex items-center gap-8">
            <span class="text-2xl font-extrabold tracking-tighter text-blue-700">Luminary</span>
            <div class="hidden md:flex gap-6 font-manrope text-sm font-medium tracking-tight">
                <a class="text-slate-600 hover:text-blue-500 transition-colors" href="#">Home</a>
                <a class="text-slate-600 hover:text-blue-500 transition-colors" href="#">Marketplace</a>
                <a class="text-blue-600 font-bold border-b-2 border-blue-600 pb-1" href="#">Dashboard</a>
                <a class="text-slate-600 hover:text-blue-500 transition-colors" href="#">Profile</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="flex items-center gap-2 px-4 py-2 bg-tertiary-container/10 text-tertiary rounded-full">
                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">timer</span>
                <span class="font-headline font-bold text-sm">42:15</span>
            </div>
            <button
                class="material-symbols-outlined text-slate-500 hover:bg-slate-50 p-2 rounded-full transition-all">notifications</button>
            <button
                class="material-symbols-outlined text-slate-500 hover:bg-slate-50 p-2 rounded-full transition-all">settings</button>
            <img alt="User profile avatar" class="w-10 h-10 rounded-full object-cover ring-2 ring-white"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA98tlBCwaL1FGVw_5eEobyt05R_IPz78sFtAXQC4P9Jb3U-8evqJM2soRjxE4Sh0serbZdpAKyRSBMa6LHjPg18S2-Ilx26oLQGIqYCo_Nxf7JGTw9fz-V7uwttrceoz2g2GsDrPGtm3MEOTjax4k1ZeqlmOoQeCFalIlixlIrwyGudQ57KlAELV1JoTPVPWNDpa00rN0bjER0FHOMekmqJ9XByDsW4fgtzS0aLUPytecuMHM_S1t5D_jMzLg0GOV5xO5eL6ZrJmw" />
        </div>
    </nav>
    <main class="pt-20 h-screen flex">
       
        <div class="flex-1 flex flex-col p-6 gap-6 bg-surface-container-low border-r border-outline-variant/10">
           
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-extrabold tracking-tight text-on-surface">Advanced UI Architecture</h1>
                    <p class="text-on-surface-variant text-sm">Mentoring Session with Sarah J.</p>
                </div>
                <div class="flex gap-3">
                    <button
                        class="flex items-center gap-2 bg-surface-container-lowest px-4 py-2 rounded-lg text-on-surface-variant font-medium hover:bg-white transition-all shadow-sm border border-outline-variant/10">
                        <span class="material-symbols-outlined">screen_share</span>
                        Report
                    </button>
                    <button
                        class="flex items-center gap-2 bg-error text-on-error px-6 py-2 rounded-lg font-bold hover:opacity-90 transition-all shadow-sm">
                        End Session
                    </button>
                </div>
            </div>
         
            <div
                class="flex-1 bg-surface-container-lowest rounded-lg shadow-sm border border-outline-variant/10 flex flex-col overflow-hidden">
                <div class="p-4 border-b border-outline-variant/10 flex justify-between items-center">
                    <h2 class="font-headline font-bold text-lg text-on-surface">Session Chat</h2>
                    <div class="flex gap-2">
                        <span
                            class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">Live</span>
                    </div>
                </div>
                <div class="flex-1 overflow-y-auto p-6 space-y-6">
                
                    <div class="text-center">
                        <span
                            class="text-[11px] font-medium text-on-surface-variant bg-surface-container-high px-3 py-1 rounded-full">Session
                            started at 10:00 AM</span>
                    </div>
                
                    <div class="flex gap-3">
                        <img alt="Sarah J. avatar" class="w-10 h-10 rounded-full"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1XqqC5loizzJ3uY22atLgXSzJwzA_sMAySNFGWOz_2KnnhUHrlcqtRhGzpwjtqXuA6-jH2ddGntU64lPN7uHgX8pJmMLY8njU6xl_9v9Ab3mYskmM-S3G6Gv8YWz43RtGpH0Buu02MHxdspNQVtI37lv_gJUpCB9r62_zbWxDrxAprL7vAX_7tbr9gWME_-wSz_BOWW6op5mxaVjq8k7NYktJnVuUFeaFQqU3w0eP4-6sZ8fPB8DrVuK7HHHSuG_T3WFKHkXIPgY" />
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold text-on-surface">Sarah J.</span>
                                <span class="text-[10px] text-on-surface-variant">10:05 AM</span>
                            </div>
                            <div
                                class="bg-surface-container-low p-4 rounded-lg rounded-tl-none text-sm text-on-surface leading-relaxed max-w-xl">
                                Hi! Let's start by looking at the component hierarchy you sent over. Did you have any
                                specific questions about the state management?
                            </div>
                        </div>
                    </div>
                
                    <div class="flex flex-row-reverse gap-3">
                        <div class="space-y-1 text-right">
                            <div class="flex flex-row-reverse items-center gap-2">
                                <span class="text-xs font-bold text-on-surface">You</span>
                                <span class="text-[10px] text-on-surface-variant">10:07 AM</span>
                            </div>
                            <div
                                class="bg-primary text-on-primary p-4 rounded-lg rounded-tr-none text-sm leading-relaxed text-left max-w-xl">
                                I'm mostly struggling with how the props are drilling down into the leaf components.
                            </div>
                        </div>
                    </div>
                 
                    <div class="flex gap-3">
                        <img alt="Sarah J. avatar" class="w-10 h-10 rounded-full"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1XqqC5loizzJ3uY22atLgXSzJwzA_sMAySNFGWOz_2KnnhUHrlcqtRhGzpwjtqXuA6-jH2ddGntU64lPN7uHgX8pJmMLY8njU6xl_9v9Ab3mYskmM-S3G6Gv8YWz43RtGpH0Buu02MHxdspNQVtI37lv_gJUpCB9r62_zbWxDrxAprL7vAX_7tbr9gWME_-wSz_BOWW6op5mxaVjq8k7NYktJnVuUFeaFQqU3w0eP4-6sZ8fPB8DrVuK7HHHSuG_T3WFKHkXIPgY" />
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold text-on-surface">Sarah J.</span>
                                <span class="text-[10px] text-on-surface-variant">10:08 AM</span>
                            </div>
                            <div
                                class="bg-surface-container-low p-4 rounded-lg rounded-tl-none text-sm text-on-surface leading-relaxed max-w-xl">
                                That's a classic bottleneck! We'll explore the Context API approach today. I've just
                                shared a link to the docs in the resources tab.
                            </div>
                        </div>
                    </div>
                </div>
          
                <div class="p-6 bg-white border-t border-outline-variant/10">
                    <div class="relative flex items-center">
                        <input
                            class="w-full bg-surface-container-low border-none rounded-lg py-4 pl-4 pr-24 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-on-surface-variant"
                            placeholder="Type your message..." type="text" />
                        <div class="absolute right-2 flex gap-1">
                            <button class="p-2 text-on-surface-variant hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">sentiment_satisfied</span>
                            </button>
                            <button
                                class="p-2 bg-primary text-on-primary rounded-lg shadow-sm hover:opacity-90 transition-all">
                                <span class="material-symbols-outlined text-sm">send</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <aside class="w-96 bg-surface flex flex-col">
         
            <div class="p-6 border-b border-outline-variant/10">
                <div class="flex gap-2">
                    <button
                        class="flex-1 py-2 text-xs font-bold bg-primary text-on-primary rounded-lg">Resources</button>
                    <button
                        class="flex-1 py-2 text-xs font-bold text-on-surface-variant hover:bg-surface-container-low rounded-lg transition-colors">Participants</button>
                </div>
            </div>
         
            <div class="flex-1 overflow-y-auto p-6 space-y-6">
                <h3 class="text-xs font-bold text-on-surface-variant uppercase tracking-widest">Shared Resources</h3>
                <div class="space-y-3">
                    <div
                        class="flex items-center gap-3 p-4 bg-surface-container-low rounded-lg border border-outline-variant/10 group cursor-pointer hover:border-primary/50 transition-colors">
                        <span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">link</span>
                        <div class="flex-1 overflow-hidden">
                            <span class="block font-bold text-sm text-on-surface truncate">React Context Docs</span>
                            <span
                                class="text-xs text-on-surface-variant truncate block">react.dev/learn/passing-data...</span>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-3 p-4 bg-surface-container-low rounded-lg border border-outline-variant/10 group cursor-pointer hover:border-primary/50 transition-colors">
                        <span
                            class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">description</span>
                        <div class="flex-1 overflow-hidden">
                            <span class="block font-bold text-sm text-on-surface truncate">Architecture
                                Diagram.pdf</span>
                            <span class="text-xs text-on-surface-variant truncate block">2.4 MB • Shared by Sarah
                                J.</span>
                        </div>
                    </div>
                </div>
                <h3 class="text-xs font-bold text-on-surface-variant uppercase tracking-widest pt-4">Participants (2)
                </h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <img alt="Sarah J." class="w-10 h-10 rounded-full"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1XqqC5loizzJ3uY22atLgXSzJwzA_sMAySNFGWOz_2KnnhUHrlcqtRhGzpwjtqXuA6-jH2ddGntU64lPN7uHgX8pJmMLY8njU6xl_9v9Ab3mYskmM-S3G6Gv8YWz43RtGpH0Buu02MHxdspNQVtI37lv_gJUpCB9r62_zbWxDrxAprL7vAX_7tbr9gWME_-wSz_BOWW6op5mxaVjq8k7NYktJnVuUFeaFQqU3w0eP4-6sZ8fPB8DrVuK7HHHSuG_T3WFKHkXIPgY" />
                                <div
                                    class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Sarah J.</p>
                                <p class="text-[10px] text-on-surface-variant">Mentor • Presenting</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-on-surface-variant text-lg">mic</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <img alt="You" class="w-10 h-10 rounded-full"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA98tlBCwaL1FGVw_5eEobyt05R_IPz78sFtAXQC4P9Jb3U-8evqJM2soRjxE4Sh0serbZdpAKyRSBMa6LHjPg18S2-Ilx26oLQGIqYCo_Nxf7JGTw9fz-V7uwttrceoz2g2GsDrPGtm3MEOTjax4k1ZeqlmOoQeCFalIlixlIrwyGudQ57KlAELV1JoTPVPWNDpa00rN0bjER0FHOMekmqJ9XByDsW4fgtzS0aLUPytecuMHM_S1t5D_jMzLg0GOV5xO5eL6ZrJmw" />
                                <div
                                    class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                            <div>
                                <p class="text-sm font-bold">You</p>
                                <p class="text-[10px] text-on-surface-variant">Student</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-on-surface-variant text-lg">mic</span>
                    </div>
                </div>
            </div>
           
            <div class="p-6 bg-surface-container-low border-t border-outline-variant/10">
                <button
                    class="w-full flex items-center justify-center gap-2 py-3 bg-surface-container-lowest text-primary font-bold rounded-lg border border-primary/20 hover:bg-primary/5 transition-colors">
                    <span class="material-symbols-outlined">add</span>
                    Add Resource
                </button>
            </div>
        </aside>
    </main>
</body>

</html>
