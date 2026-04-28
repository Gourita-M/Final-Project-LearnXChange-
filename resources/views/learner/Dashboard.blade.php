<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LearnXChange | Learner Dashboard</title>
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

        /* Brand color */
        .bg-primary-brand {
            background-color: #004ac6;
        }

        .text-primary-brand {
            color: #004ac6;
        }

        .hover-primary-brand:hover {
            color: #004ac6;
        }

        .text-white {
            color: #ffffff;
        }
    </style>
</head>

<body class="bg-slate-50 text-gray-900 antialiased">
    @include('layouts.navbar')
    @include('layouts.notification')
    @include('layouts.notificationError')
    
    <main class="md:ml-64 pt-24 px-8 pb-12 min-h-screen">
        <div class="max-w-7xl mx-auto space-y-12">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <section class="lg:col-span-8 bg-white rounded-3xl p-8 shadow-sm border border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-blue-100 flex items-center justify-center rounded-2xl">
                                <span class="material-symbols-outlined text-teal-600 text-3xl"
                                    style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold">Progress Overview</h2>
                                <span class="bg-blue-50 text-blue-800 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                                    {{ $badge->name }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="grid grid-cols-2 gap-4 pt-6">
                            <div class="bg-gray-50 p-4 rounded-2xl text-center border border-gray-100">
                                <p class="text-xs font-semibold text-gray-600 uppercase mb-1">Sessions</p>
                                <p class="text-xl font-bold">{{ $totalsessions }}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-2xl text-center border border-gray-100">
                                <p class="text-xs font-semibold text-gray-600 uppercase mb-1">Hours</p>
                                <p class="text-xl font-bold">{{ $totalHours }}</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="lg:col-span-12 space-y-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-2xl font-bold tracking-tight">Active Sessions</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        @if ($ActiveSessions->isEmpty())
                            <div class="flex flex-col items-center justify-center text-center py-16 px-6 bg-white rounded-3xl border border-gray-200 shadow-sm">

                                <div class="w-20 h-20 flex items-center justify-center rounded-2xl mb-4" style="background-color: rgba(0, 74, 198, 0.1); color: #004ac6;">
                                    <span class="material-symbols-outlined text-4xl">event_busy</span>
                                </div>

                                <h2 class="text-xl font-bold text-gray-900 mb-2">
                                    No Active Sessions
                                </h2>

                                <p class="text-sm text-gray-600 max-w-md mb-6">
                                    You don't have any active sessions right now. Wait for Teachers To Accept Your Requests.
                                </p>
                                <a href="skills"
                                    class="px-6 py-3 rounded-xl bg-primary-brand text-white font-semibold hover:opacity-90 transition">
                                    Request Learning
                                </a>

                            </div>
                        @else
                        @foreach ($ActiveSessions as $ActiveSession)
                            <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-200 group hover:shadow-md transition-all">
                                <div class="flex justify-between items-start mb-6">
                                    <img alt="Instructor Sarah"
                                        class="w-14 h-14 rounded-2xl object-cover ring-4 ring-gray-100"
                                        data-alt="Close up of a professional woman with glasses and dark hair, smiling confidently against a soft blurred background"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeLD5Kc5awsOkq0sUEuK_4cJmCfHQfOHdTZyE32s_i3oRZV_PQSa9J-u_kg6a248lyaDrSwJ7VWeLO7nN8K1gDngzWgIZdzbP6mSkPKQpMlK0uZ6pkKRngdb6yCYMzsorXfpqAWYoEkL3IV-grE2Q2K9Ui0tpo_XXk351BtA_GR15SzbYPrb9szrIWibyMC0lW4OOYqeKa2lSaGADxFwqukfMzIy3uWxeKmfKApZ8idi2BtLRlddIYCT9hOVxvfRU9vCvitaKFPZg" />
                                    <span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-widest">
                                        {{ $ActiveSession->start_time }}</span>
                                </div>
                                <h3 class="text-lg font-bold mb-1">{{ $ActiveSession->name }}</h3>
                                <p class="text-gray-600 text-sm mb-6">with {{ $ActiveSession->firstname }}
                                    {{ $ActiveSession->lastname }}</p>
                                <div class="flex items-center gap-4 py-4 border-t border-gray-100">
                                    <div class="flex items-center gap-2 text-gray-600">
                                        <span class="material-symbols-outlined text-sm">schedule</span>
                                        <span class="text-xs font-medium">{{ $ActiveSession->duration }} Hours</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-gray-600">
                                        <span class="material-symbols-outlined text-sm">videocam</span>
                                        <span class="text-xs font-medium">{{ $ActiveSession->session_type }}</span>
                                    </div>
                                </div>
                                @if($ActiveSession->canJoin)
                                    <a href="messages/{{ $ActiveSession->id }}"
                                        class="block w-full mt-4 py-3 text-center bg-primary-brand text-white font-bold rounded-xl hover:opacity-90 transition-all">
                                        Join Room
                                    </a>
                                @else
                                    <button disabled
                                        class="block w-full mt-4 py-3 text-center bg-gray-300 text-gray-600 font-bold rounded-xl cursor-not-allowed">
                                        Available 10 min before
                                    </button>
                                @endif
                            </div>
                        @endforeach
                        @endif                    
                    </div>
                </section>
                <section class="lg:col-span-12">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-2xl font-bold tracking-tight">Recommended for You</h2>
                            <p class="text-gray-600 text-sm">Based on your interests</p>
                        </div>
                        <a href="skills"
                            class="px-6 py-2 rounded-full border border-gray-300 text-sm font-bold hover:bg-gray-50 transition-colors">Explore All</a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($recommended as $recommend)
                        <a href="skills" class="group relative overflow-hidden rounded-3xl h-64 bg-slate-900 cursor-pointer">
                            <img alt="Skill 1"
                                class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 transition-transform duration-700"
                                data-alt="Vibrant abstract representation of digital design concepts with flowing lines and glowing nodes on a dark background"
                                src="{{$recommend->icon_url}}" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent">
                            </div>
                            <div class="absolute bottom-6 left-6 right-6">
                                <span class="px-3 py-1 rounded-full text-[10px] font-extrabold uppercase mb-3 inline-block text-white" style="background-color: rgba(0, 74, 198, 0.9);">{{$recommend->category_name}}</span>
                                <h4 class="text-white text-xl font-bold leading-tight">{{$recommend->name}}</h4>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </main>

</body>

</html>