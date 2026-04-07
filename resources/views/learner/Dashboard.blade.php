<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Luminary | Learner Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
                        "surface-bright": "#f7f9fb",
                        "background": "#f7f9fb",
                        "tertiary-fixed-dim": "#89ceff",
                        "secondary-fixed-dim": "#b9c7df",
                        "tertiary-fixed": "#c9e6ff",
                        "tertiary-container": "#0074a6",
                        "surface-container-high": "#e6e8ea",
                        "on-tertiary-container": "#e4f2ff",
                        "tertiary": "#005a82",
                        "error-container": "#ffdad6",
                        "on-primary-fixed": "#00174b",
                        "surface": "#f7f9fb",
                        "surface-container-low": "#f2f4f6",
                        "on-secondary-fixed-variant": "#3a485b",
                        "on-secondary-container": "#57657a",
                        "inverse-on-surface": "#eff1f3",
                        "outline": "#737686",
                        "secondary-fixed": "#d5e3fc",
                        "on-tertiary-fixed": "#001e2f",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#434655",
                        "on-background": "#191c1e",
                        "on-primary-fixed-variant": "#003ea8",
                        "surface-container-highest": "#e0e3e5",
                        "primary-container": "#2563eb",
                        "primary-fixed-dim": "#b4c5ff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "secondary": "#515f74",
                        "surface-variant": "#e0e3e5",
                        "surface-container": "#eceef0",
                        "on-tertiary": "#ffffff",
                        "inverse-primary": "#b4c5ff",
                        "surface-dim": "#d8dadc",
                        "on-error": "#ffffff",
                        "on-error-container": "#93000a",
                        "secondary-container": "#d5e3fc",
                        "primary": "#004ac6",
                        "error": "#ba1a1a",
                        "outline-variant": "#c3c6d7",
                        "on-primary": "#ffffff",
                        "surface-tint": "#0053db",
                        "primary-fixed": "#dbe1ff",
                        "inverse-surface": "#2d3133",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed": "#0d1c2e",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-container": "#eeefff"
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
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-headline {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased">
    @include('layouts.navbar')
    <main class="md:ml-64 pt-24 px-8 pb-12 min-h-screen">
        <div class="max-w-7xl mx-auto space-y-12">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <section
                    class="lg:col-span-8 bg-surface-container-lowest rounded-3xl p-8 shadow-[0_20px_50px_rgba(25,28,30,0.04)]">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-tertiary-fixed flex items-center justify-center rounded-2xl">
                                <span class="material-symbols-outlined text-tertiary text-3xl"
                                    style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
                            </div>
                            <div>
                                
                                <h2 class="text-2xl font-bold">Progress Overview</h2>
                                <span
                                    class="bg-secondary-fixed text-on-secondary-fixed px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Intermediate
                                    Explorer</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="text-4xl font-extrabold text-primary">{{$learner->xp}}</span>
                            <span class="text-on-surface-variant font-medium ml-1">XP Total</span>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-sm font-semibold text-on-surface-variant">Level {{$learner->current_level}}</span>
                            <span class="text-sm font-semibold text-primary">850 XP to Level 15</span>
                        </div>
                        <div class="h-4 bg-primary-fixed rounded-full overflow-hidden">
                            <div
                                class="h-full w-[78%] bg-gradient-to-r from-primary to-tertiary rounded-full shadow-[0_0_12px_rgba(0,74,198,0.3)]">
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-4 pt-6">
                            <div class="bg-surface-container-low p-4 rounded-2xl text-center">
                                <p class="text-xs font-semibold text-on-surface-variant uppercase mb-1">Sessions</p>
                                <p class="text-xl font-bold">{{$totalsessions}}</p>
                            </div>
                            <div class="bg-surface-container-low p-4 rounded-2xl text-center">
                                <p class="text-xs font-semibold text-on-surface-variant uppercase mb-1">Hours</p>
                                <p class="text-xl font-bold">{{$totalHours}}</p>
                            </div>
                            <div class="bg-surface-container-low p-4 rounded-2xl text-center">
                                <p class="text-xs font-semibold text-on-surface-variant uppercase mb-1">Rank</p>
                                <p class="text-xl font-bold">#12</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="lg:col-span-12 space-y-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-2xl font-bold tracking-tight">Active Sessions</h2>
                        <button class="text-on-surface-variant font-semibold hover:text-primary transition-colors">See
                            Calendar</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    @foreach($ActiveSessions as $ActiveSession)
                        <div
                            class="bg-surface-container-lowest p-6 rounded-3xl shadow-[0_15px_40px_rgba(25,28,30,0.03)] group hover:shadow-lg transition-all">
                            <div class="flex justify-between items-start mb-6">
                                <img alt="Instructor Sarah"
                                    class="w-14 h-14 rounded-2xl object-cover ring-4 ring-surface-container-low"
                                    data-alt="Close up of a professional woman with glasses and dark hair, smiling confidently against a soft blurred background"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeLD5Kc5awsOkq0sUEuK_4cJmCfHQfOHdTZyE32s_i3oRZV_PQSa9J-u_kg6a248lyaDrSwJ7VWeLO7nN8K1gDngzWgIZdzbP6mSkPKQpMlK0uZ6pkKRngdb6yCYMzsorXfpqAWYoEkL3IV-grE2Q2K9Ui0tpo_XXk351BtA_GR15SzbYPrb9szrIWibyMC0lW4OOYqeKa2lSaGADxFwqukfMzIy3uWxeKmfKApZ8idi2BtLRlddIYCT9hOVxvfRU9vCvitaKFPZg" />
                                <span
                                    class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-widest">
                                    {{$ActiveSession->start_time}}</span>
                            </div>
                            <h3 class="text-lg font-bold mb-1">{{$ActiveSession->name}}</h3>
                            <p class="text-on-surface-variant text-sm mb-6">with {{$ActiveSession->firstname}} {{$ActiveSession->lastname}}</p>
                            <div class="flex items-center gap-4 py-4 border-t border-outline-variant/10">
                                <div class="flex items-center gap-2 text-on-surface-variant">
                                    <span class="material-symbols-outlined text-sm">schedule</span>
                                    <span class="text-xs font-medium">{{$ActiveSession->duration}} Hours</span>
                                </div>
                                <div class="flex items-center gap-2 text-on-surface-variant">
                                    <span class="material-symbols-outlined text-sm">videocam</span>
                                    <span class="text-xs font-medium">{{$ActiveSession->session_type}}</span>
                                </div>
                            </div>
                            <a href="messages"
                            class="block w-full mt-4 py-3 text-center bg-surface-container-high text-on-surface font-bold rounded-xl hover:bg-primary hover:text-on-primary transition-all">
                                Join Room
                            </a>
                        </div>
                    @endforeach
                        
                    </div>
                </section>
       
                <section class="lg:col-span-12">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-2xl font-bold tracking-tight">Recommended for You</h2>
                            <p class="text-on-surface-variant text-sm">Based on your interest in <span
                                    class="text-primary font-bold">Product Design</span></p>
                        </div>
                        <button
                            class="px-6 py-2 rounded-full border border-outline-variant/40 text-sm font-bold hover:bg-surface-container-low transition-colors">Explore
                            All</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="group relative overflow-hidden rounded-3xl h-64 bg-slate-900 cursor-pointer">
                            <img alt="Skill 1"
                                class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 transition-transform duration-700"
                                data-alt="Vibrant abstract representation of digital design concepts with flowing lines and glowing nodes on a dark background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5jMn6SuiX_wlS4LIpieeYKOFsWmn36LnwgfOLBFlTBEKbIpzEAfctVuVB6NUzffRxdhVqzhFHfTR_L4rfiSBtid_LD6f5WzifeI6AeU0GXfew2xRas_zm0The6HxpMdVjBa1IB2bK3lwXrGkLSDepf7MVKfk7rBKZIM_OF5dAfwehN6aMNQW9P6QzmnJ5NK64N6k0RnWB1wMBFwr4ISMhOfP15dfPEsnIQug6yw_lRwrHxRSxhP66rXdhY_SBf1CoYPOG6pO9uJ8" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent">
                            </div>
                            <div class="absolute bottom-6 left-6 right-6">
                                <span
                                    class="bg-primary/90 text-on-primary px-3 py-1 rounded-full text-[10px] font-extrabold uppercase mb-3 inline-block">Design</span>
                                <h4 class="text-white text-xl font-bold leading-tight">Interaction Prototyping</h4>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-3xl h-64 bg-slate-900 cursor-pointer">
                            <img alt="Skill 2"
                                class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 transition-transform duration-700"
                                data-alt="Sleek analytical dashboard on a high-resolution screen with neon accent colors in a dimly lit studio"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtfqYvhsittAI2X5OBkujR1dNy6IbRNZrzyJFr7LS6vVfA4x15zcOT-Io2zmT30fFuVU3jqpyYEqeIoB7JI5o39hEctXj4_3d_tPboqKAfJ9PfpdNGVawSkzMrqlO9S2ImLWUVeIY0grDX8sPs0f8t_DGR5gde7EnA2DHc-9Ce4Ix9kIbTduEY1si2k7I5N26jChUZJ1u2undSf6K8EbtxIr7_-ZeRZnsY8QEGSnq3iu6l5xg7qyShso72yETlDr0zXdYZQCEFD60" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent">
                            </div>
                            <div class="absolute bottom-6 left-6 right-6">
                                <span
                                    class="bg-tertiary/90 text-on-tertiary px-3 py-1 rounded-full text-[10px] font-extrabold uppercase mb-3 inline-block">Business</span>
                                <h4 class="text-white text-xl font-bold leading-tight">Data Storytelling</h4>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-3xl h-64 bg-slate-900 cursor-pointer">
                            <img alt="Skill 3"
                                class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 transition-transform duration-700"
                                data-alt="A person's hands typing on a glowing laptop keyboard in a dark room with blurred light reflections"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGzVeYBSqKeh1j8pFUT5E_bPLNb0xdrqGKZDnmTQ-eURMdkGE4ETykRnl9H9B9zUvjie-QR4pNQpNXY2Y_Z_4BbQZioY6nnW3B7G4m5DvqMFmAz-A5vU8RjPGCAntNp704Tf4rLYKHtVa9-5suLW2BISs9BsqqPLhDVaCFuQdw6MahTQn0qN5J2MNwWnbSSNjfZtlZM5U1x-XMxoX4iFqLLX4huLLWh-fShpZLvE8ACa8qRHx_GGP1mnvYJpiqDU0tojAOACiXgKw" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent">
                            </div>
                            <div class="absolute bottom-6 left-6 right-6">
                                <span
                                    class="bg-amber-500/90 text-white px-3 py-1 rounded-full text-[10px] font-extrabold uppercase mb-3 inline-block">Code</span>
                                <h4 class="text-white text-xl font-bold leading-tight">Modern CSS Layouts</h4>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-3xl h-64 bg-slate-900 cursor-pointer">
                            <img alt="Skill 4"
                                class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 transition-transform duration-700"
                                data-alt="Abstract imagery of people silhouettes around a circular glowing table representing collaboration and leadership"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-P57_zITC8GXj1ol0Y09aBvwA33K8fyWHmHVUYcFnQZcMP3zDDGNV625OThlbVorVvPt35sZ34hc3CNyqvZc-x6Ri9k9WUzwAyR7XK9YeT6aeSFvenSqRfd6XGZEfBvPuqP3mE08HaeQP7Kb6F8-Ly909-mVQY-LbSB9i-LZgmu_B6z7iu72pueEa6De131rOFT-AUszPYbelaCI7-_fPhImGPePV3S4_m1f51_NyWGPjQCkSa-jHKrH5vbkXXpD8e3in5zrAd4E" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent">
                            </div>
                            <div class="absolute bottom-6 left-6 right-6">
                                <span
                                    class="bg-rose-500/90 text-white px-3 py-1 rounded-full text-[10px] font-extrabold uppercase mb-3 inline-block">Soft
                                    Skills</span>
                                <h4 class="text-white text-xl font-bold leading-tight">Effective Feedback</h4>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
  
</body>

</html>
