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
                    <div class="w-24 h-24 md:w-32 md:h-32 rounded-full overflow-hidden border-4 border-white shadow-xl">

                        @if ($user->profilepic)
                            <img src="{{ $user->profilepic }}" alt="profile">
                            <img alt="" class="w-full h-full object-cover" src="{{ $user->profilepic }}" />
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
                    <h1 class="text-3xl font-extrabold font-headline tracking-tight text-on-surface">
                        {{ $user->firstname }} {{ $user->lastname }}
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
                        <form method="POST" action="{{ Route('edit.info') }}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                                <div class="flex flex-col gap-1.5">
                                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wide">First
                                        Name</label>
                                    <input name="firstname"
                                        class="w-full bg-slate-50 border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                        type="text" value="{{ $user->firstname }}" />
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wide">Last
                                        Name</label>
                                    <input name="lastname"
                                        class="w-full bg-slate-50 border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                        type="text" value="{{ $user->lastname }}" />
                                </div>

                                <div class="flex flex-col gap-1.5 md:col-span-2">
                                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wide">Bio</label>
                                    <textarea name="bio"
                                        class="w-full bg-slate-50 border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"
                                        rows="4">{{ $user->Bio }}</textarea>
                                </div>

                            </div>

                            <!-- 🔥 Edit Button -->
                            <div class="mt-6 flex justify-end">
                                <button type="submit"
                                    class="px-6 py-2.5 bg-primary text-white text-sm font-bold rounded-lg shadow-sm hover:opacity-90 transition-all">
                                    Edit Profile
                                </button>
                            </div>
                        </form>
                    </section>

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
                                        <span class="material-symbols-outlined" data-icon="lock_reset">lock_reset</span>
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

                <div class="space-y-8">
                    @role('learner')
                        <div class="bg-surface p-6 rounded-xl shadow-sm border border-slate-200 space-y-4">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold font-headline text-on-surface text-sm uppercase tracking-wide">
                                    Skills Learning</h4>
                                <a href="skills"
                                    class="text-primary hover:bg-primary/10 p-1 rounded-full transition-colors">
                                    <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[11px] font-bold flex items-center gap-2 border border-blue-100">
                                    UI Design
                                    <span class="material-symbols-outlined text-[14px] cursor-pointer hover:text-blue-800"
                                        data-icon="close">close</span>
                                </span>
                                <span
                                    class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[11px] font-bold flex items-center gap-2 border border-blue-100">
                                    React
                                    <span class="material-symbols-outlined text-[14px] cursor-pointer hover:text-blue-800"
                                        data-icon="close">close</span>
                                </span>
                                <span
                                    class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[11px] font-bold flex items-center gap-2 border border-blue-100">
                                    Framer
                                    <span class="material-symbols-outlined text-[14px] cursor-pointer hover:text-blue-800"
                                        data-icon="close">close</span>
                                </span>
                            </div>
                        </div>
                    @endrole
                    @role('teacher')
                        <div
                            class="bg-surface p-6 rounded-xl shadow-sm border-t-4 border-t-cyan-500 border-x border-b border-slate-200 space-y-4">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold font-headline text-on-surface text-sm uppercase tracking-wide">
                                    Skills Teaching</h4>
                                <button id="popupbtn"
                                    class="text-cyan-600 hover:bg-cyan-50 p-1 rounded-full transition-colors">
                                    <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                                </button>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($userskills as $userskill)
                                    <form method="POST" action="{{ Route('remove.skill') }}">
                                        @csrf
                                        <input name="skillid" type="hidden" value="{{ $userskill->skillid }}">
                                        <span
                                            class="px-3 py-1 bg-cyan-50 text-cyan-700 rounded-full text-[11px] font-bold flex items-center gap-2 border border-cyan-100">
                                            {{ $userskill->name }}

                                            <button type="submit"
                                                class="material-symbols-outlined text-[14px] cursor-pointer hover:text-cyan-900"
                                                data-icon="close">close</button>

                                        </span>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    @endrole

                </div>
            </div>

        </div>
    </main>
    </div>
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

    <div id="skillpopup"
        class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden flex items-center justify-center z-50">

        <div class="bg-white w-full max-w-lg rounded-3xl p-8 shadow-xl relative">
            <button class="closepopup absolute top-4 right-4 text-outline hover:text-error cursor-pointer">
                ✕
            </button>

            <h2 class="text-2xl font-extrabold font-headline mb-2">
                Add New Skill
            </h2>
            <p class="text-sm text-on-surface-variant mb-6">
                Let learners discover what you can teach
            </p>

            <form method="POST" action="{{ Route('create.skill') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-medium mb-1">Skill Name</label>
                    <input name="name" type="text"
                        class="w-full rounded-xl border border-outline-variant bg-surface px-4 py-2 focus:ring-2 focus:ring-primary/40 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Category</label>
                    <select name="categories_id" required
                        class="w-full rounded-xl border border-outline-variant bg-surface px-4 py-2 focus:ring-2 focus:ring-primary/40 outline-none">
                        <option value="" disabled selected>Select</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Level</label>
                    <select name="level"
                        class="w-full rounded-xl border border-outline-variant bg-surface px-4 py-2 focus:ring-2 focus:ring-primary/40 outline-none">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Years of Experiance</label>
                    <input name="years" type="number"
                        class="w-full rounded-xl border border-outline-variant bg-surface px-4 py-2 focus:ring-2 focus:ring-primary/40 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Description</label>
                    <textarea name="description" rows="3"
                        class="w-full rounded-xl border border-outline-variant bg-surface px-4 py-2 focus:ring-2 focus:ring-primary/40 outline-none"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Skill Icon</label>
                    <input name="icon_url" type="text"
                        class="w-full rounded-xl border border-outline-variant bg-surface px-4 py-2 focus:ring-2 focus:ring-primary/40 outline-none">
                </div>

                <div class="flex gap-3 pt-4">
                    <button type="button"
                        class="closepopup flex-1 py-3 rounded-xl bg-surface-container-high text-on-surface-variant font-bold text-center cursor-pointer">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 py-3 rounded-xl bg-primary text-on-primary font-bold">
                        Save Skill
                    </button>
                </div>

            </form>
        </div>
    </div>

    @if (session('success'))
        <div id="success-popup"
            class="fixed top-6 left-1/2 -translate-x-1/2 z-50 
           glass-card bg-surface-container-lowest 
           px-6 py-4 rounded-2xl 
           shadow-[0_16px_40px_-8px_rgba(0,74,198,0.2)] 
           flex items-center gap-3 
           opacity-0 translate-y-[-10px] 
           transition-all duration-500">

            <span class="material-symbols-outlined text-primary text-[22px]">
                check_circle
            </span>

            <p class="text-sm font-semibold text-on-surface">
                {{ session('success') }}
            </p>
        </div>

        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const popup = document.getElementById('success-popup');

                popup.classList.remove('opacity-0');
                popup.classList.add('opacity-100');

                setTimeout(() => {
                    popup.classList.remove('opacity-100');
                    popup.classList.add('opacity-0');
                }, 10000);
            });
        </script>
    @endif

    <script>
        const skillpopup = document.getElementById('skillpopup');
        const popupbtn = document.getElementById('popupbtn');
        const closepopup = document.querySelectorAll('.closepopup');

        popupbtn.addEventListener('click', () => {
            skillpopup.classList.remove('hidden');
        })

        closepopup.forEach(btn => {
            btn.addEventListener('click', () => {
                skillpopup.classList.add('hidden');
            })
        })
    </script>
</body>

</html>
