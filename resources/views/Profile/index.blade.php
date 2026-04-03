<?php
    print_r($user);
?>
<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Settings - LearnXChange</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
                        "primary": "#2563EB",
                        "on-primary": "#ffffff",
                        "primary-container": "#dbe1ff",
                        "on-primary-container": "#00174b",
                        "secondary": "#515f74",
                        "on-secondary": "#ffffff",
                        "tertiary": "#005a82",
                        "on-tertiary": "#ffffff",
                        "background": "#f8fafc",
                        "on-background": "#0f172a",
                        "surface": "#ffffff",
                        "on-surface": "#0f172a",
                        "surface-variant": "#e2e8f0",
                        "on-surface-variant": "#475569",
                        "outline": "#cbd5e1",
                        "outline-variant": "#e2e8f0",
                        "surface-container-low": "#f1f5f9",
                        "surface-container": "#f8fafc",
                        "surface-container-high": "#e2e8f0",
                        "surface-container-highest": "#cbd5e1",
                    },
                    fontFamily: {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "manrope": ["Manrope"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
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

        .tonal-layering {
            background: linear-gradient(to bottom, #f8fafc, #f1f5f9);
        }
    </style>
</head>

<body class="bg-background font-body text-on-background antialiased">
    @include('layouts.navbar')
        <main class="flex-1 md:ml-64 bg-background p-6 md:p-10 lg:p-12">
            <div class="max-w-4xl mx-auto space-y-8">
       
                <div class="flex flex-col md:flex-row items-start md:items-center gap-6 pb-8 border-b border-slate-200">
                    <div class="relative">
                        <div
                            class="w-24 h-24 md:w-32 md:h-32 rounded-full overflow-hidden border-4 border-white shadow-xl">
                            
                            @if($user->profilepic)
                                <img src="{{ $user->profilepic }}" alt="profile">
                            <img alt="" class="w-full h-full object-cover"
                                src="{{$user->profilepic}}" />
                                @else
                                <div class="avatar">
                                    {{ strtoupper(substr($user->firstname, 0, 1)) }}
                                </div>
                            @endif

                        </div>
                        <button
                            class="absolute bottom-0 right-0 bg-primary text-on-primary p-2 rounded-full shadow-lg hover:bg-blue-700 transition-all active:scale-90 flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm" data-icon="photo_camera">photo_camera</span>
                        </button>
                    </div>
                    <div class="space-y-1">
                        <h1 class="text-3xl font-extrabold font-headline tracking-tight text-on-surface">{{$user->firstname}} {{$user->lastname}}
                        </h1>
                        <p class="text-on-surface-variant font-medium">Senior UI Designer &amp; Mentor</p>
                        <div class="flex gap-2 mt-3">
                            <span
                                class="px-3 py-1 bg-blue-100 text-blue-700 text-[10px] font-bold uppercase tracking-wider rounded-full">Pro
                                Member</span>
                            <span
                                class="px-3 py-1 bg-cyan-100 text-cyan-700 text-[10px] font-bold uppercase tracking-wider rounded-full">Top
                                Instructor</span>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
               
                    <div class="lg:col-span-2 space-y-8">

                        <section class="bg-surface p-6 rounded-xl shadow-sm border border-slate-200 space-y-6">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary" data-icon="badge">badge</span>
                                <h3 class="text-xl font-bold font-headline text-on-surface">Personal Information</h3>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="flex flex-col gap-1.5">
                                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wide">Full
                                        Name</label>
                                    <input
                                        class="w-full bg-slate-50 border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                        type="text" value="{{$user->firstname}} {{$user->lastname}}" />
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wide">Email
                                        Address</label>
                                    <input
                                        class="w-full bg-slate-50 border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                        type="email" value="{{$user->email}}" />
                                </div>
                                
                                <div class="flex flex-col gap-1.5 md:col-span-2">
                                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wide">Bio</label>
                                    <textarea
                                        class="w-full bg-slate-50 border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"
                                        rows="4">{{$user->Bio}}
                                    </textarea>
                                </div>
                            </div>
                        </section>
                        <!-- Account Settings -->
                        <section class="bg-surface p-6 rounded-xl shadow-sm border border-slate-200 space-y-6">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary"
                                    data-icon="settings_account_box">settings_account_box</span>
                                <h3 class="text-xl font-bold font-headline text-on-surface">Account Settings</h3>
                            </div>
                            <div class="space-y-4">
                                <div
                                    class="flex items-center justify-between p-4 bg-slate-50 rounded-lg border border-slate-100">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined"
                                                data-icon="lock_reset">lock_reset</span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-sm text-on-surface">Change Password</p>
                                            <p class="text-[11px] text-slate-500">Update your security credentials</p>
                                        </div>
                                    </div>
                                    <button
                                        class="text-primary font-bold text-xs hover:underline uppercase tracking-wider">Manage</button>
                                </div>
                                <div
                                    class="flex items-center justify-between p-4 bg-slate-50 rounded-lg border border-slate-100">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-10 h-10 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600">
                                            <span class="material-symbols-outlined"
                                                data-icon="verified_user">verified_user</span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-sm text-on-surface">Two-Factor Authentication</p>
                                            <p class="text-[11px] text-slate-500">Add an extra layer of security</p>
                                        </div>
                                    </div>
                                    <div class="relative inline-flex items-center cursor-pointer">
                                        <input checked="" class="sr-only peer" type="checkbox" />
                                        <div
                                            class="w-11 h-6 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:bg-primary after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Side Widgets (Skills & Stats) -->
                    <div class="space-y-8">
                        <!-- Skills I'm Learning -->
                        <div class="bg-surface p-6 rounded-xl shadow-sm border border-slate-200 space-y-4">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold font-headline text-on-surface text-sm uppercase tracking-wide">
                                    Skills Learning</h4>
                                <button class="text-primary hover:bg-primary/10 p-1 rounded-full transition-colors">
                                    <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                                </button>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[11px] font-bold flex items-center gap-2 border border-blue-100">
                                    UI Design
                                    <span
                                        class="material-symbols-outlined text-[14px] cursor-pointer hover:text-blue-800"
                                        data-icon="close">close</span>
                                </span>
                                <span
                                    class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[11px] font-bold flex items-center gap-2 border border-blue-100">
                                    React
                                    <span
                                        class="material-symbols-outlined text-[14px] cursor-pointer hover:text-blue-800"
                                        data-icon="close">close</span>
                                </span>
                                <span
                                    class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[11px] font-bold flex items-center gap-2 border border-blue-100">
                                    Framer
                                    <span
                                        class="material-symbols-outlined text-[14px] cursor-pointer hover:text-blue-800"
                                        data-icon="close">close</span>
                                </span>
                            </div>
                        </div>
                        <!-- Skills I'm Teaching -->
                        <div
                            class="bg-surface p-6 rounded-xl shadow-sm border-t-4 border-t-cyan-500 border-x border-b border-slate-200 space-y-4">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold font-headline text-on-surface text-sm uppercase tracking-wide">
                                    Skills Teaching</h4>
                                <button class="text-cyan-600 hover:bg-cyan-50 p-1 rounded-full transition-colors">
                                    <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                                </button>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-700 rounded-full text-[11px] font-bold flex items-center gap-2 border border-cyan-100">
                                    Typography
                                    <span
                                        class="material-symbols-outlined text-[14px] cursor-pointer hover:text-cyan-900"
                                        data-icon="close">close</span>
                                </span>
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-700 rounded-full text-[11px] font-bold flex items-center gap-2 border border-cyan-100">
                                    Visual Branding
                                    <span
                                        class="material-symbols-outlined text-[14px] cursor-pointer hover:text-cyan-900"
                                        data-icon="close">close</span>
                                </span>
                            </div>
                        </div>
                        <!-- Stats Widget -->
                        <div
                            class="bg-primary text-on-primary p-6 rounded-xl shadow-lg relative overflow-hidden group">
                            <div
                                class="absolute -right-6 -bottom-6 opacity-10 group-hover:scale-110 transition-transform duration-700">
                                <span class="material-symbols-outlined text-[160px]"
                                    data-icon="auto_awesome">auto_awesome</span>
                            </div>
                            <h4 class="text-[10px] font-black uppercase tracking-[0.2em] mb-4 opacity-70">Learning
                                Streak</h4>
                            <div class="flex items-baseline gap-2">
                                <span class="text-5xl font-black">24</span>
                                <span class="text-lg font-bold opacity-80">Days</span>
                            </div>
                            <div class="mt-8 space-y-2">
                                <div class="flex justify-between text-[11px] font-bold">
                                    <span class="opacity-80">Weekly Goal Progress</span>
                                    <span>85%</span>
                                </div>
                                <div class="w-full bg-white/20 h-2 rounded-full overflow-hidden">
                                    <div
                                        class="bg-white h-full w-[85%] rounded-full shadow-[0_0_12px_rgba(255,255,255,0.6)] transition-all duration-1000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Actions -->
                <div
                    class="flex flex-col sm:flex-row items-center justify-end gap-4 pt-10 pb-20 border-t border-slate-200">
                    <button
                        class="w-full sm:w-auto px-6 py-3 text-slate-500 font-bold text-sm hover:text-slate-700 transition-colors uppercase tracking-wider">
                        Cancel Changes
                    </button>
                    <button
                        class="w-full sm:w-auto px-10 py-3 bg-primary text-on-primary font-bold rounded-lg shadow-lg hover:shadow-xl hover:bg-blue-700 transition-all active:scale-95 flex items-center justify-center gap-2 uppercase tracking-widest text-xs">
                        <span class="material-symbols-outlined text-[18px]" data-icon="save">save</span>
                        Save Profile
                    </button>
                </div>
            </div>
        </main>
    </div>
    <!-- Mobile Bottom Navigation -->
    <div
        class="md:hidden fixed bottom-0 left-0 w-full bg-white/95 backdrop-blur-xl flex justify-around items-center py-3 px-6 z-50 border-t border-slate-200">
        <button class="flex flex-col items-center gap-1 text-slate-400">
            <span class="material-symbols-outlined" data-icon="home">home</span>
            <span class="text-[9px] font-bold uppercase tracking-tight">Home</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-slate-400">
            <span class="material-symbols-outlined" data-icon="explore">explore</span>
            <span class="text-[9px] font-bold uppercase tracking-tight">Explore</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-blue-600">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="text-[9px] font-bold uppercase tracking-tight">Profile</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-slate-400">
            <span class="material-symbols-outlined" data-icon="school">school</span>
            <span class="text-[9px] font-bold uppercase tracking-tight">Learning</span>
        </button>
    </div>
</body>

</html>
