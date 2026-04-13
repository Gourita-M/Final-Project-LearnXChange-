<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Instructor Dashboard | Guided Luminary</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
                        "surface-dim": "#d8dadc",
                        "on-secondary-container": "#57657a",
                        "on-primary": "#ffffff",
                        "tertiary-fixed-dim": "#89ceff",
                        "surface-container-low": "#f2f4f6",
                        "error-container": "#ffdad6",
                        "primary-container": "#2563eb",
                        "on-background": "#191c1e",
                        "on-primary-container": "#eeefff",
                        "surface": "#f7f9fb",
                        "on-error": "#ffffff",
                        "on-primary-fixed-variant": "#003ea8",
                        "primary-fixed-dim": "#b4c5ff",
                        "primary-fixed": "#dbe1ff",
                        "primary": "#004ac6",
                        "surface-bright": "#f7f9fb",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#d5e3fc",
                        "error": "#ba1a1a",
                        "outline-variant": "#c3c6d7",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "on-primary-fixed": "#00174b",
                        "on-surface": "#191c1e",
                        "outline": "#737686",
                        "background": "#f7f9fb",
                        "tertiary-fixed": "#c9e6ff",
                        "surface-tint": "#0053db",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-container": "#e4f2ff",
                        "inverse-primary": "#b4c5ff",
                        "on-surface-variant": "#434655",
                        "secondary-fixed-dim": "#b9c7df",
                        "on-tertiary-fixed": "#001e2f",
                        "surface-container": "#eceef0",
                        "on-error-container": "#93000a",
                        "on-secondary": "#ffffff",
                        "surface-container-high": "#e6e8ea",
                        "tertiary": "#005a82",
                        "on-secondary-fixed": "#0d1c2e",
                        "secondary": "#515f74",
                        "inverse-on-surface": "#eff1f3",
                        "surface-variant": "#e0e3e5",
                        "secondary-fixed": "#d5e3fc",
                        "tertiary-container": "#0074a6",
                        "on-secondary-fixed-variant": "#3a485b",
                        "inverse-surface": "#2d3133",
                        "surface-container-highest": "#e0e3e5"
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
            vertical-align: middle;
        }

        .glass-effect {
            background: rgba(247, 249, 251, 0.8);
            backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen">
    @include('layouts.navbar')

    <main class="ml-64 p-8 min-h-screen">

        <div class="mt-20 space-y-8">
            <button id="popupbtn">(add Skill Button) Style It later or move it to teacher Profile</button>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div
                    class="lg:col-span-2 bg-primary rounded-3xl p-8 text-on-primary relative overflow-hidden flex flex-col justify-between shadow-xl">
                    <div class="relative z-10">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-primary-fixed text-sm font-medium mb-1">Total Balance</p>
                                <h2 class="text-4xl font-extrabold font-headline tracking-tight">$12,480.00</h2>
                            </div>
                            <div class="bg-primary-container/30 px-4 py-2 rounded-full backdrop-blur-md">
                                <span class="text-xs font-bold uppercase tracking-wider">Expert Status: 82%</span>
                            </div>
                        </div>
                        <div class="mt-12 space-y-4">
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-primary-fixed text-xs mb-1">Next Tier: Master Luminary</p>
                                    <p class="text-xl font-bold font-headline">2,450 XP <span
                                            class="text-sm font-normal text-primary-fixed/80">/ 3,000 XP</span></p>
                                </div>
                                <span
                                    class="material-symbols-outlined text-4xl text-primary-fixed/30">auto_awesome</span>
                            </div>
                            <div class="w-full h-3 bg-white/20 rounded-full overflow-hidden">
                                <div
                                    class="h-full w-[82%] bg-gradient-to-r from-primary-fixed to-tertiary-fixed-dim rounded-full">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute -right-20 -top-20 w-64 h-64 bg-primary-container rounded-full blur-[100px] opacity-50">
                    </div>
                </div>
                <div class="bg-surface-container-lowest rounded-3xl p-8 border border-transparent flex flex-col gap-4">
                    <div class="flex justify-between items-center">
                        <h3 class="font-headline font-bold text-on-surface">Weekly XP</h3>
                        <span class="text-primary text-sm font-bold">+12% vs LW</span>
                    </div>
                    <div class="flex-1 flex items-end justify-between gap-2 pt-4">
                        <div class="w-full bg-surface-container-high rounded-t-lg h-[40%]"></div>
                        <div class="w-full bg-surface-container-high rounded-t-lg h-[65%]"></div>
                        <div class="w-full bg-surface-container-high rounded-t-lg h-[50%]"></div>
                        <div class="w-full bg-surface-container-high rounded-t-lg h-[85%]"></div>
                        <div class="w-full bg-primary rounded-t-lg h-[100%]"></div>
                        <div class="w-full bg-surface-container-high rounded-t-lg h-[70%]"></div>
                        <div class="w-full bg-surface-container-high rounded-t-lg h-[60%]"></div>
                    </div>
                    <div
                        class="flex justify-between text-[10px] text-outline font-medium uppercase tracking-widest pt-2">
                        <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                <div class="xl:col-span-2 space-y-8">
                    <section>
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-xl font-extrabold font-headline">Teaching Requests</h3>
                            <button class="text-primary font-bold text-sm hover:underline">View All</button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            @foreach ($requests as $request)
                                <div
                                    class="bg-surface-container-lowest p-6 rounded-2xl border border-transparent hover:shadow-md transition-shadow group">
                                    <div class="flex justify-between items-start mb-4">
                                        <div class="flex items-center gap-3">
                                            <img alt="Student Avatar" class="w-10 h-10 rounded-full object-cover"
                                                data-alt="portrait of a young college student with a backpack in a library setting"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2Z0bYqb4FCrLWUFcNFa_wEMRAlJvv2DH7CQizuxzoOfzVI_WPntf2AfV1Dfp-KcBijqDHDk-mkn9XHdSNA_SactBK69_3usaYbJw4xPeooG5f3r01yLdDF_l-_ohx88wb_m1icGJfpbNTuebJXCkHIF6YWaqabxCqFImQLGszVoHFfo_EOXhs5bTrmmvf_P8GK_L70XU7b5noYZOgJcL1xiovW1ogIwZQWKb7tAHgiLg1DwvUJWV_KqJl2NxqP_Y1biCTLDGpweU" />
                                            <div>
                                                <p class="font-bold text-sm">{{ $request->firstname }}
                                                    {{ $request->lastname }}</p>
                                                <p class="text-xs text-outline">Student • {{ $request->xp }} XP</p>
                                            </div>
                                        </div>
                                        <span
                                            class="bg-secondary-container text-on-secondary-container text-[10px] font-bold px-2 py-1 rounded-full uppercase">{{ $request->name }}
                                        </span>
                                    </div>
                                    <p class="text-sm text-on-surface-variant mb-6 line-clamp-2">
                                        {{ $request->description }}</p>
                                    <div class="flex gap-2">
                                        <button data-id="{{ $request->id }}" data-teacher="{{ $request->teacher_id }}"
                                            data-learner="{{ $request->learner_id }}" id="acceptbtn"
                                            class="accept-btn flex-1 py-2 bg-primary text-on-primary rounded-lg text-sm font-bold active:scale-95 transition-all">Accept</button>
                                        <button data-id="{{ $request->id }}" data-name="{{ $request->firstname }}"
                                            class="decline flex-1 py-2 bg-surface-container-high text-on-surface-variant rounded-lg text-sm font-bold hover:bg-error-container hover:text-on-error-container active:scale-95 transition-all">Decline</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    <section>
                        <h3 class="text-xl font-extrabold font-headline mb-6">Active Sessions</h3>
                        <div class="bg-surface-container-lowest rounded-3xl overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-surface-container-low">
                                            <th
                                                class="px-6 py-4 text-xs font-bold text-outline uppercase tracking-widest">
                                                Student</th>
                                            <th
                                                class="px-6 py-4 text-xs font-bold text-outline uppercase tracking-widest">
                                                Type</th>
                                            <th
                                                class="px-6 py-4 text-xs font-bold text-outline uppercase tracking-widest">
                                                Status</th>
                                            <th
                                                class="px-6 py-4 text-xs font-bold text-outline uppercase tracking-widest text-right">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-surface-container-high">
                                        @foreach ($ActiveSessions as $ActiveSession)
                                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center gap-3">
                                                        <div
                                                            class="w-8 h-8 rounded-full bg-tertiary flex items-center justify-center text-on-tertiary text-xs font-bold">
                                                            {{ substr($ActiveSession->firstname, 0, 1) }}
                                                            {{ substr($ActiveSession->lastname, 0, 1) }}</div>
                                                        <span class="font-medium text-sm">
                                                            {{ $ActiveSession->firstname }}
                                                            {{ $ActiveSession->lastname }}</span>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center gap-2 text-on-surface-variant">
                                                        <span class="material-symbols-outlined text-sm">videocam</span>
                                                        <span class="text-sm">{{ $ActiveSession->type }} Session</span>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span
                                                        class="flex items-center gap-2 text-xs font-bold text-tertiary">
                                                        <span
                                                            class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
                                                        {{ $ActiveSession->status }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <a href="messages/{{ $ActiveSession->id }}"
                                                        class="bg-primary px-4 py-2 rounded-lg text-on-primary text-xs font-bold active:scale-95 transition-all">Enter
                                                        Session
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="space-y-8">
                    <section class="bg-surface-container-lowest rounded-3xl p-8 flex flex-col gap-6">
                        <div class="flex justify-between items-center">
                            <h3 class="font-headline font-bold text-lg">Upcoming</h3>
                            <span class="text-xs font-bold text-outline">OCT 24</span>
                        </div>
                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <span class="text-xs font-bold text-primary">09:00</span>
                                    <div class="w-[2px] flex-1 bg-surface-container-high my-1"></div>
                                </div>
                                <div class="flex-1 pb-4">
                                    <div class="bg-surface-container-low p-4 rounded-xl">
                                        <p class="text-sm font-bold mb-1">Advanced CSS Grid</p>
                                        <p class="text-xs text-on-surface-variant">Group Workshop • 12 Students</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <span class="text-xs font-bold text-outline">11:30</span>
                                    <div class="w-[2px] flex-1 bg-surface-container-high my-1"></div>
                                </div>
                                <div class="flex-1 pb-4">
                                    <div class="bg-surface-container-low p-4 rounded-xl border-l-4 border-primary">
                                        <p class="text-sm font-bold mb-1">Mentorship: Liam V.</p>
                                        <p class="text-xs text-on-surface-variant">Career Coaching • 1-on-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <span class="text-xs font-bold text-outline">15:00</span>
                                </div>
                                <div class="flex-1">
                                    <div class="bg-surface-container-low p-4 rounded-xl">
                                        <p class="text-sm font-bold mb-1">Portfolio Review</p>
                                        <p class="text-xs text-on-surface-variant">Quick Feedback • Async</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full py-3 border border-outline-variant text-on-surface-variant rounded-xl text-sm font-bold hover:bg-surface-container-low transition-colors">Open
                            Full Calendar</button>
                    </section>
                    <section class="bg-surface-container-lowest rounded-3xl p-8">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-headline font-bold text-lg">Student Feedback</h3>

                        </div>
                        <div class="space-y-6">
                            @foreach ($reviews as $review)
                                <div class="space-y-3">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center gap-2">
                                            <img alt="Reviewer" class="w-6 h-6 rounded-full object-cover"
                                                data-alt="close-up portrait of a woman with curly hair and a friendly smile"
                                                src="{{ $review->profilepic }}" />
                                            <span
                                                class="text-xs font-bold">{{ $review->firstname . $review->lastname }}</span>
                                        </div>
                                        <div class="flex text-primary">
                                            @for ($i = 0; $i < $review->rating; $i++)
                                                <span class="material-symbols-outlined text-[12px]"
                                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                            @endfor
                                        </div>
                                    </div>
                                    <p class="text-xs italic text-on-surface-variant leading-relaxed">"
                                        {{ $review->comment }}"</p>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <div id="learningpopup"
        class="fixed hidden inset-0 bg-slate-900/40 backdrop-blur-sm flex items-center justify-center z-50 p-4"
        id="schedulePopup">
        <div class="bg-white p-8 rounded-lg w-full max-w-[440px] relative shadow-xl border border-slate-200">
            <button
                class="absolute top-4 right-4 p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-50 rounded-lg transition-colors"
                id="closeSchedule">
                <span class="requestclose material-symbols-outlined block text-xl">close</span>
            </button>
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-slate-900">Schedule Session</h2>
                <p class="text-sm text-slate-500 mt-1">Select the date and time for your session with the learner.</p>
            </div>
            <form id="acceptReq" method="POST" action="{{ Route('connect.session') }}">
                @csrf
                <input id="request_id" name="request_id" type="hidden" />
                <input id="teacher_id" name="teacher_id" type="hidden" />
                <input id="learner_id" name="learner_id" type="hidden" />
                <div class="mb-5">
                    <label class="block text-sm font-medium text-on-surface mb-1">Session Type</label>
                    <select name="session_type" required
                        class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent">
                        <option value="">Select session type</option>
                        <option value="video">Video</option>
                        <option value="chat">Chat</option>

                    </select>
                </div>
                <div class="mb-5">
                    <label class="flex items-center gap-2 text-sm font-semibold text-slate-700 mb-2">
                        <span class="material-symbols-outlined text-lg text-slate-400">calendar_today</span>
                        Start Time
                    </label>
                    <div class="relative">
                        <input
                            class="w-full border border-slate-200 rounded-lg p-3 text-slate-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all placeholder:text-slate-400"
                            name="start_time" type="datetime-local" />
                    </div>
                </div>
                <div class="mb-8">
                    <label class="flex items-center gap-2 text-sm font-semibold text-slate-700 mb-2">
                        <span class="material-symbols-outlined text-lg text-slate-400">schedule</span>
                        End Time
                    </label>
                    <div class="relative">
                        <input
                            class="w-full border border-slate-200 rounded-lg p-3 text-slate-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all placeholder:text-slate-400"
                            name="end_time" type="datetime-local" />
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <button
                        class="w-full bg-[#2563EB] hover:bg-blue-700 text-white font-bold px-6 py-3.5 rounded-lg transition-all shadow-md active:scale-[0.98]">
                        Confirm Schedule
                    </button>
                    <button
                        class="requestclose w-full bg-white hover:bg-slate-50 text-slate-600 font-semibold px-6 py-3 rounded-lg transition-colors border border-transparent"
                        type="button">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="declinePopup"
        class="fixed inset-0 hidden bg-slate-900/40 backdrop-blur-sm flex items-center justify-center z-50 p-4">
        <div class="bg-white p-8 rounded-lg w-full max-w-[440px] relative shadow-xl border border-slate-200">

            <button
                class="absolute top-4 right-4 p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-50 rounded-lg transition-colors"
                id="closeDecline">
                <span class="closeDecline material-symbols-outlined block text-xl">close</span>
            </button>

            <div class="mb-6">

                <p class="text-m text-slate-500 mt-1">
                    Are you sure you want to decline <span id="declname"></span> learning request? This action cannot
                    be undone.
                </p>
            </div>


            <form id="declineForm" method="POST" action="{{ Route('decline.request') }}">
                @csrf
                <input type="hidden" name="request_id" id="decline_request_id" />

                <div class="flex flex-col gap-3">
                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-3.5 rounded-lg transition-all shadow-md active:scale-[0.98]">
                        Yes, Decline Request
                    </button>
                    <button type="button"
                        class="closeDecline w-full bg-white hover:bg-slate-50 text-slate-600 font-semibold px-6 py-3 rounded-lg transition-colors border border-transparent">
                        Cancel
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
        const acceptBtn = document.getElementById('acceptbtn');
        const learningPopup = document.getElementById('learningpopup');
        const closeButtons = document.querySelectorAll('.requestclose');
        const confirmBtn = document.getElementById('confirmSchedule');
        const request_id = document.getElementById('request_id');
        const teacher_id = document.getElementById('teacher_id');
        const learner_id = document.getElementById('learner_id');
        const decline = document.querySelectorAll('.decline');
        const declinePopup = document.getElementById('declinePopup');
        const declname = document.getElementById('declname');
        const declid = document.getElementById('decline_request_id');
        const closeDecline = document.querySelectorAll('.closeDecline');

        closeDecline.forEach(u => {
            u.addEventListener('click', () => {
                declinePopup.classList.add('hidden');
            })
        })

        decline.forEach(u => {
            u.addEventListener('click', () => {
                const id = u.dataset.id;
                const name = u.dataset.name;
                declinePopup.classList.remove('hidden');
                declname.innerText = name;
                declid.value = id;
                console.log(name);
            })
        })

        document.querySelectorAll('.accept-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.dataset.id;
                const teacher = this.dataset.teacher;
                const learner = this.dataset.learner;
                learningPopup.classList.remove('hidden');
                request_id.value = id;
                teacher_id.value = teacher;
                learner_id.value = learner;
            });
        });

        acceptBtn.addEventListener('click', () => {
            learningPopup.classList.remove('hidden');
        });

        closeButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                learningPopup.classList.add('hidden');
            });
        });

        document.getElementById('acceptReq').addEventListener('submit', function(e) {
            const start = new Date(this.start_time.value);
            const end = new Date(this.end_time.value);

            if (!this.start_time.value || !this.end_time.value) {
                e.preventDefault();
                alert('Please select times');
                return;
            }

            if (end <= start) {
                e.preventDefault();
                alert('End time must be after start');
                return;
            }

            if (start.getHours() < 10 || end.getHours() > 22) {
                e.preventDefault();
                alert('Time must be between 10:00 and 22:00');
                return;
            }

        });
    </script>
</body>

</html>
