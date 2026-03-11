<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Live Mentorship Session Workspace - Black &amp; Green Theme</title>
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
                        "accent-green": "#39FF14",
                        "dark-bg": "#000000",
                        "panel-bg": "#0A0A0A",
                        "border-color": "#1A1A1A",
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
        :root {
            --neon-green: #39FF14;
            --deep-black: #000000;
        }

        body {
            font-family: 'Lexend', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .filled {
            font-variation-settings: 'FILL' 1;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #000000;
        }

        ::-webkit-scrollbar-thumb {
            background: #1A1A1A;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #39FF14;
        }
    </style>
</head>

<body class="bg-dark-bg text-slate-100 antialiased selection:bg-accent-green selection:text-black">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-border-color bg-panel-bg px-6 py-3 sticky top-0 z-50">
            <div class="flex items-center gap-4">
                <div
                    class="flex items-center justify-center size-10 bg-accent-green/10 rounded-lg border border-accent-green/20">
                    <span class="material-symbols-outlined text-accent-green text-2xl">school</span>
                </div>
                <div>
                    <h2 class="text-white text-lg font-bold leading-tight">Advanced System Design</h2>
                    <p class="text-slate-500 text-xs uppercase tracking-widest">Live with Sarah Chen</p>
                </div>
            </div>
            <div
                class="hidden md:flex items-center gap-3 bg-black px-5 py-2 rounded-full border border-accent-green/30 shadow-[0_0_15px_rgba(57,255,20,0.1)]">
                <span
                    class="material-symbols-outlined text-accent-green text-sm animate-pulse filled">fiber_manual_record</span>
                <div class="flex gap-1.5 text-sm font-black font-mono tracking-tighter">
                    <span class="text-accent-green">00</span>
                    <span class="text-slate-700">:</span>
                    <span class="text-accent-green">45</span>
                    <span class="text-slate-700">:</span>
                    <span class="text-accent-green">12</span>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="hidden lg:flex items-center gap-6 mr-4">
                    <a class="text-slate-400 text-sm font-medium hover:text-accent-green transition-colors"
                        href="#">Dashboard</a>
                    <a class="text-accent-green text-sm font-bold border-b-2 border-accent-green py-1"
                        href="#">Session</a>
                    <a class="text-slate-400 text-sm font-medium hover:text-accent-green transition-colors"
                        href="#">Library</a>
                </div>
                <button
                    class="flex min-w-[120px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-accent-green text-black text-sm font-black transition-all hover:scale-105 active:scale-95 shadow-[0_0_20px_rgba(57,255,20,0.3)]">
                    COMPLETE SESSION
                </button>
                <div class="size-10 rounded-full border-2 border-accent-green/50 bg-cover bg-center"
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB88cEp9ZchtdGiaPG1klKhWWHKXij0gY4s0xXE7XiffI4-wrpBz3r_utBNaEXAR6RBp8DxUSg5wllMlJXsb7x4ln9fXCs-kPRmOnWEQRfhHNn9pMHY6yGdufRJH5woj79adb__RMG0js37cS8EQXYnP94AwbJCjLsfriuW2JnsODRj0FNq8vj8UUhgRKpGZ8OabtMg3AyxTP6WzMB3yrF2TyTymJb3WegzTkkOJlRmQ-gx9YWgERqRlYWyT8jJ7svWqhFgDk8Vc9F1')">
                </div>
            </div>
        </header>
        <main class="flex flex-1 overflow-hidden h-[calc(100vh-64px)]">
            <div class="flex flex-col flex-[7] p-4 gap-4 overflow-y-auto bg-black">
                <div
                    class="relative flex-1 bg-[#050505] rounded-2xl overflow-hidden border border-border-color flex items-center justify-center">
                    <img alt="Mentor Sarah Chen" class="w-full h-full object-cover opacity-80"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7rZOMWdKwtIA_fTW8T65ANCxFgQUmFwXfUjTTivzw5LBT8GR7pSIvFs9gHP_Z3vEhoh_7oKlTf2CF9leCXMA18pgAZsRQgDpVcL_NSwKoyx5CwK71fNpL_Wod3wKTqoQlSbCRAAuo5hMcF6nZG_lYdI_O-9IdIFVj46gCSPdjP5jWdyZeN4vc8stIqZ9gg2Od4c4a-ZpXdPGK4LjxuqYSFKwQ2O9LWIDX-NXX3Kwol-Mp3_hvGges7xvplPAziI3xFsXB75dmAsHo" />
                    <div
                        class="absolute top-6 left-6 bg-black/60 backdrop-blur-xl px-4 py-2 rounded-xl border border-white/10">
                        <p class="text-white text-sm font-bold flex items-center gap-2">
                            <span
                                class="material-symbols-outlined text-xs text-accent-green filled">verified_user</span>
                            Sarah Chen (Mentor)
                        </p>
                    </div>
                    <div
                        class="absolute bottom-6 right-6 w-52 aspect-video bg-black rounded-xl border border-accent-green/30 overflow-hidden shadow-2xl group">
                        <img alt="Self View"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPNn6jPvl8omWepyfjeFSsA9CJOAygGgkLoTlZaJFFb_a62evDu1i-F795bkLEwzSdpdhLnXz_9xnm88qE_XS7Q_7H70leNNkv7CQtJpa7as3ARv59VsmKe3qo-4s1JryDcmOK9ny2FT7io-kfcxMXVLxatEz4m_VILhWfCnYIIoQ5k-1EduVDxF3vjz9NTnrfLftbx-A_T3TEDJBhuC08pHpAmxo9iZ3sWGBvm_Es31wIG6JFWy017PWv96f7FVMj7oAnSYLdcC_y" />
                        <div class="absolute inset-0 bg-accent-green/5 group-hover:bg-transparent transition-all"></div>
                        <div
                            class="absolute bottom-2 left-2 text-[10px] text-accent-green font-bold bg-black/80 px-2 py-0.5 rounded-md border border-accent-green/20">
                            YOU</div>
                    </div>
                    <div
                        class="absolute bottom-8 left-1/2 -translate-x-1/2 flex items-center gap-2 bg-black/40 backdrop-blur-2xl p-2 rounded-2xl border border-white/5">
                        <button class="p-3 text-white/90 hover:bg-white/10 rounded-xl transition-all">
                            <span class="material-symbols-outlined">mic</span>
                        </button>
                        <button class="p-3 text-white/90 hover:bg-white/10 rounded-xl transition-all">
                            <span class="material-symbols-outlined">videocam</span>
                        </button>
                        <button class="p-3 text-white/90 hover:bg-white/10 rounded-xl transition-all">
                            <span class="material-symbols-outlined">present_to_all</span>
                        </button>
                        <button class="p-3 text-white/90 hover:bg-white/10 rounded-xl transition-all">
                            <span class="material-symbols-outlined">settings</span>
                        </button>
                        <div class="w-px h-6 bg-white/10 mx-1"></div>
                        <button
                            class="p-3 bg-red-500/80 hover:bg-red-500 text-white rounded-xl transition-all shadow-lg">
                            <span class="material-symbols-outlined">call_end</span>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 h-24">
                    <div
                        class="bg-panel-bg p-4 rounded-xl border border-border-color flex items-center gap-4 group hover:border-accent-green/30 transition-all">
                        <div
                            class="size-10 rounded-full bg-accent-green/10 flex items-center justify-center text-accent-green shadow-[0_0_10px_rgba(57,255,20,0.1)]">
                            <span class="material-symbols-outlined filled">star</span>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">Session XP</p>
                            <p class="text-xl font-black text-white">+450 <span
                                    class="text-[10px] text-accent-green">XP</span></p>
                        </div>
                    </div>
                    <div
                        class="bg-panel-bg p-4 rounded-xl border border-border-color flex items-center gap-4 group hover:border-accent-green/30 transition-all">
                        <div
                            class="size-10 rounded-full bg-accent-green/10 flex items-center justify-center text-accent-green shadow-[0_0_10px_rgba(57,255,20,0.1)]">
                            <span class="material-symbols-outlined">bolt</span>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">Streak</p>
                            <p class="text-xl font-black text-white">12 <span
                                    class="text-[10px] text-accent-green">DAYS</span></p>
                        </div>
                    </div>
                    <div
                        class="bg-panel-bg p-4 rounded-xl border border-border-color flex items-center gap-4 group hover:border-accent-green/30 transition-all">
                        <div
                            class="size-10 rounded-full bg-accent-green/10 flex items-center justify-center text-accent-green shadow-[0_0_10px_rgba(57,255,20,0.1)]">
                            <span class="material-symbols-outlined">menu_book</span>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">Completed</p>
                            <p class="text-xl font-black text-white">3 / 5 <span
                                    class="text-[10px] text-accent-green">GOALS</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-[3] border-l border-border-color bg-panel-bg overflow-hidden">
                <div class="flex border-b border-border-color px-2">
                    <button
                        class="flex-1 py-4 text-xs font-black uppercase tracking-widest text-accent-green border-b-2 border-accent-green">Chat</button>
                    <button
                        class="flex-1 py-4 text-xs font-black uppercase tracking-widest text-slate-500 hover:text-white transition-colors">Resources</button>
                    <button
                        class="flex-1 py-4 text-xs font-black uppercase tracking-widest text-slate-500 hover:text-white transition-colors">Transcript</button>
                </div>
                <div class="flex-1 flex flex-col overflow-hidden">
                    <div class="p-5 bg-accent-green/[0.03] border-b border-border-color">
                        <h3
                            class="text-xs font-black text-white mb-4 flex items-center gap-2 uppercase tracking-widest">
                            <span class="material-symbols-outlined text-accent-green text-lg">verified</span>
                            Session Goals
                        </h3>
                        <div class="space-y-2">
                            <label
                                class="flex items-center gap-3 p-3 bg-black/40 rounded-xl border border-accent-green/20 cursor-pointer hover:bg-black transition-colors group">
                                <input checked=""
                                    class="rounded border-slate-700 bg-black text-accent-green focus:ring-accent-green focus:ring-offset-black h-4 w-4"
                                    type="checkbox" />
                                <span class="text-xs font-medium text-slate-500 line-through">Review horizontal
                                    scaling</span>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 bg-black/40 rounded-xl border border-accent-green/20 cursor-pointer hover:bg-black transition-colors group">
                                <input checked=""
                                    class="rounded border-slate-700 bg-black text-accent-green focus:ring-accent-green focus:ring-offset-black h-4 w-4"
                                    type="checkbox" />
                                <span class="text-xs font-medium text-slate-500 line-through">Database sharding
                                    patterns</span>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 bg-black rounded-xl border border-accent-green ring-1 ring-accent-green/20 cursor-pointer shadow-[0_0_10px_rgba(57,255,20,0.05)]">
                                <input
                                    class="rounded border-accent-green/40 bg-black text-accent-green focus:ring-accent-green focus:ring-offset-black h-4 w-4"
                                    type="checkbox" />
                                <span class="text-xs font-bold text-white">Hands-on: Distributed caching</span>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 bg-black/40 rounded-xl border border-border-color cursor-pointer hover:border-accent-green/20 transition-colors">
                                <input
                                    class="rounded border-slate-700 bg-black text-accent-green focus:ring-accent-green focus:ring-offset-black h-4 w-4"
                                    type="checkbox" />
                                <span class="text-xs font-medium text-slate-400">Consistency models comparison</span>
                            </label>
                        </div>
                    </div>
                    <div class="flex-1 overflow-y-auto p-4 space-y-5">
                        <div class="flex flex-col gap-1.5">
                            <div class="flex items-center gap-2 px-1">
                                <span class="text-[10px] font-black uppercase text-accent-green">Sarah Chen</span>
                                <span class="text-[10px] text-slate-600 font-mono">10:45</span>
                            </div>
                            <div
                                class="bg-white/5 border border-white/5 p-3 rounded-2xl rounded-tl-none text-sm text-slate-300 max-w-[85%] leading-relaxed">
                                I've uploaded the architecture diagram to the resources tab for your reference.
                            </div>
                        </div>
                        <div class="flex flex-col gap-1.5 items-end">
                            <div class="flex items-center gap-2 px-1">
                                <span class="text-[10px] text-slate-600 font-mono">10:47</span>
                                <span class="text-[10px] font-black uppercase text-slate-400">You</span>
                            </div>
                            <div
                                class="bg-accent-green text-black font-medium p-3 rounded-2xl rounded-tr-none text-sm max-w-[85%] shadow-[0_4px_15px_rgba(57,255,20,0.2)]">
                                Thanks! Looking at it now. Should we focus on the cache layer first?
                            </div>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <div class="flex items-center gap-2 px-1">
                                <span class="text-[10px] font-black uppercase text-accent-green">Sarah Chen</span>
                                <span class="text-[10px] text-slate-600 font-mono">10:48</span>
                            </div>
                            <div
                                class="bg-white/5 border border-white/5 p-3 rounded-2xl rounded-tl-none text-sm text-slate-300 max-w-[85%] leading-relaxed">
                                Exactly. Let's discuss Redis eviction policies in this specific context.
                            </div>
                        </div>
                    </div>
                    <div class="p-4 border-t border-border-color bg-black">
                        <div
                            class="flex items-center gap-2 bg-panel-bg border border-border-color p-2 rounded-xl focus-within:border-accent-green/50 transition-all">
                            <button class="p-2 text-slate-600 hover:text-accent-green transition-colors">
                                <span class="material-symbols-outlined">add_circle</span>
                            </button>
                            <input
                                class="flex-1 bg-transparent border-none focus:ring-0 text-sm py-2 placeholder-slate-600 text-white"
                                placeholder="Message Sarah..." type="text" />
                            <button
                                class="size-9 bg-accent-green text-black rounded-lg flex items-center justify-center hover:scale-105 active:scale-95 transition-all shadow-[0_0_10px_rgba(57,255,20,0.2)]">
                                <span class="material-symbols-outlined text-lg font-bold">send</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
