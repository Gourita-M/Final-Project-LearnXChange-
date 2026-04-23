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

<body class="bg-surface mt-16 text-on-surface min-h-screen">
    @include('layouts.navbar')
    @include('layouts.notification')
    @include('layouts.notificationError')

    <main class="ml-64 p-8 min-h-screen">

        <div class="mt-20 space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div
                    class="lg:col-span-2 bg-primary rounded-3xl p-8 text-on-primary relative overflow-hidden flex flex-col justify-between shadow-xl">
                    <div class="relative z-10">
                        <div class="mt-0 space-y-4">
                            <div class="flex justify-between items-end">
                                <div>
                                    
                                    <p class="text-primary-fixed text-xs mb-1">{{ $badge->name }}</p>
                                    <p class="text-xl font-bold font-headline">{{Auth::user()->xp}}.00 XP </p>
                                </div>                         
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute -right-20 -top-20 w-64 h-64 bg-primary-container rounded-full blur-[100px] opacity-50">
                    </div>
                </div>
                
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                <div class="xl:col-span-2 space-y-8">
                    <section>
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-xl font-extrabold font-headline">Teaching Requests</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

    @forelse ($requests as $request)
        <div
            class="bg-surface-container-lowest p-6 rounded-2xl border border-transparent hover:shadow-md transition-shadow group">

            <div class="flex justify-between items-start mb-4">
                <div class="flex items-center gap-3">
                    <img alt="Student Avatar" class="w-10 h-10 rounded-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2Z0bYqb4FCrLWUFcNFa_wEMRAlJvv2DH7CQizuxzoOfzVI_WPntf2AfV1Dfp-KcBijqDHDk-mkn9XHdSNA_SactBK69_3usaYbJw4xPeooG5f3r01yLdDF_l-_ohx88wb_m1icGJfpbNTuebJXCkHIF6YWaqabxCqFImQLGszVoHFfo_EOXhs5bTrmmvf_P8GK_L70XU7b5noYZOgJcL1xiovW1ogIwZQWKb7tAHgiLg1DwvUJWV_KqJl2NxqP_Y1biCTLDGpweU" />

                    <div>
                        <p class="font-bold text-sm">
                            {{ $request->firstname }} {{ $request->lastname }}
                        </p>
                        <p class="text-xs text-outline">
                            Student • {{ $request->xp }} XP
                        </p>
                    </div>
                </div>

                <span
                    class="bg-secondary-container text-on-secondary-container text-[10px] font-bold px-2 py-1 rounded-full uppercase">
                    {{ $request->name }}
                </span>
            </div>

            <p class="text-sm text-on-surface-variant mb-6 line-clamp-2">
                {{ $request->description }}
            </p>

            <div class="flex gap-2">
                <button data-id="{{ $request->id }}" data-teacher="{{ $request->teacher_id }}"
                    data-learner="{{ $request->learner_id }}"
                    class="accept-btn flex-1 py-2 bg-primary text-on-primary rounded-lg text-sm font-bold active:scale-95 transition-all">
                    Accept
                </button>

                <button data-id="{{ $request->id }}" data-name="{{ $request->firstname }}"
                    class="decline flex-1 py-2 bg-surface-container-high text-on-surface-variant rounded-lg text-sm font-bold hover:bg-error-container hover:text-on-error-container active:scale-95 transition-all">
                    Decline
                </button>
            </div>
        </div>

    @empty
        <div class="col-span-1 md:col-span-2 flex flex-col items-center justify-center py-16 text-center">
            <span class="material-symbols-outlined text-5xl text-outline mb-2">
                inbox
            </span>
            <p class="text-sm font-medium text-on-surface-variant">
                No requests available
            </p>
        </div>
        <div class="flex hidden gap-2">
                <button"
                   
                    class="accept-btn flex-1 py-2 bg-primary text-on-primary rounded-lg text-sm font-bold active:scale-95 transition-all">
                    Accept
                </button>

                <button"
                    class="decline flex-1 py-2 bg-surface-container-high text-on-surface-variant rounded-lg text-sm font-bold hover:bg-error-container hover:text-on-error-container active:scale-95 transition-all">
                    Decline
                </button>
            </div>
    @endforelse

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
                                                Date</th>
                                            <th
                                                class="px-6 py-4 text-xs font-bold text-outline uppercase tracking-widest text-right">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-surface-container-high">
                                        @forelse ($ActiveSessions as $ActiveSession)
                                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center gap-3">
                                                        <div
                                                            class="w-8 h-8 rounded-full bg-tertiary flex items-center justify-center text-on-tertiary text-xs font-bold">
                                                            {{ substr($ActiveSession->firstname, 0, 1) }}
                                                            {{ substr($ActiveSession->lastname, 0, 1) }}
                                                        </div>
                                                        <span class="font-medium text-sm">
                                                            {{ $ActiveSession->firstname }}
                                                            {{ $ActiveSession->lastname }}
                                                        </span>
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
                                                        {{ $ActiveSession->start_time }}
                                                    </span>
                                                </td>

                                                <td class="px-6 py-4 text-right">
                                                    @if(!empty($ActiveSession->canJoin) && $ActiveSession->canJoin)
                                                        <a href="messages/{{ $ActiveSession->id }}"
                                                            class="bg-primary px-4 py-2 rounded-lg text-on-primary text-xs font-bold active:scale-95 transition-all">
                                                            Enter
                                                        </a>
                                                    @else
                                                        <button disabled
                                                            class="bg-gray-400 px-4 py-2 rounded-lg text-white text-xs font-bold cursor-not-allowed">
                                                            10 Mins before
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="px-6 py-10 text-center">
                                                    <div
                                                        class="flex flex-col items-center gap-2 text-on-surface-variant">
                                                        <span
                                                            class="material-symbols-outlined text-4xl">event_busy</span>
                                                        <p class="text-sm font-medium">No active sessions</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section class="bg-surface-container-lowest rounded-3xl p-8">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h3 class="text-xl font-extrabold font-headline">My Teaching Skills</h3>
                                <p class="text-sm text-on-surface-variant">List of your active teaching skills with certificate request actions.</p>
                            </div>
                            <span class="text-sm text-on-surface-variant">{{ $teacherSkills->count() }} skills</span>
                        </div>
                        <div class="space-y-4">
                            @forelse ($teacherSkills as $skill)
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 p-4 bg-white rounded-3xl border border-slate-200">
                                    <div>
                                        <p class="font-semibold text-on-surface">{{ $skill->name }}</p>
                                        <p class="text-sm text-on-surface-variant">Level {{ $skill->level }} · {{ $skill->years_experience ?? 0 }} years experience</p>
                                    </div>
                                    <button type="button"
                                        class="request-certificate-btn inline-flex items-center justify-center rounded-xl px-4 py-2 text-sm font-semibold transition-colors bg-primary text-white hover:bg-blue-700 disabled:bg-slate-300 disabled:text-slate-600"
                                        data-skill-id="{{ $skill->teacherskillid }}"
                                        data-skill-name="{{ $skill->name }}"
                                        data-skill-key="{{ $skill->skill_id }}"
                                        @if(in_array($skill->skill_id, $pendingCertificates)) disabled @endif>
                                        @if(in_array($skill->skill_id, $pendingCertificates))
                                            Pending Request
                                        @else
                                            Request Certificate
                                        @endif
                                    </button>
                                </div>
                            @empty
                                <div class="text-center py-8 text-on-surface-variant">
                                    <p class="font-medium">No teaching skills found yet.</p>
                                    <p class="text-sm">Add skills from your profile page to request certificates.</p>
                                </div>
                            @endforelse
                        </div>
                    </section>
                </div>
                <div class="space-y-8">
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
                        <option value="" disabled selected>Select Session Type</option>
                        <option value="video" disabled>Video "Coming Soon 'Bonus'"</option>
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

    <div id="certificatePopup" class="fixed inset-0 hidden bg-slate-900/40 backdrop-blur-sm flex items-center justify-center z-50 p-4">
        <div class="bg-white p-8 rounded-lg w-full max-w-[440px] relative shadow-xl border border-slate-200">
            <button
                class="absolute top-4 right-4 p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-50 rounded-lg transition-colors"
                id="closeCertificatePopup">
                <span class="material-symbols-outlined block text-xl">close</span>
            </button>
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-slate-900">Request Certificate</h2>
                <p class="text-sm text-slate-500 mt-1">Submit a certificate request for the selected teaching skill.</p>
            </div>
            <form id="certificateForm" method="POST" action="{{ route('request.certificate') }}">
                @csrf
                <input type="hidden" name="skill_id" id="certificate_skill_id" />
                <div class="mb-5">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Selected Skill</label>
                    <p id="certificate_skill_name" class="text-sm text-slate-900 font-semibold"></p>
                </div>
                <div class="mb-5">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Comments (optional)</label>
                    <textarea name="comments" rows="4"
                        class="w-full border border-slate-200 rounded-lg p-3 text-slate-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all placeholder:text-slate-400"
                        placeholder="Any note for the admin..."></textarea>
                </div>
                <div class="flex flex-col gap-3">
                    <button type="submit"
                        class="w-full bg-primary hover:bg-blue-700 text-white font-bold px-6 py-3.5 rounded-lg transition-all shadow-md active:scale-[0.98]">
                        Submit Certificate Request
                    </button>
                    <button type="button"
                        class="closeCertificatePopup w-full bg-white hover:bg-slate-50 text-slate-600 font-semibold px-6 py-3 rounded-lg transition-colors border border-transparent">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

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
        const certificatePopup = document.getElementById('certificatePopup');
        const closeCertificatePopup = document.querySelectorAll('.closeCertificatePopup');
        const certificateSkillId = document.getElementById('certificate_skill_id');
        const certificateSkillName = document.getElementById('certificate_skill_name');

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

        document.querySelectorAll('.request-certificate-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const teacherskill = this.dataset.skillId;
                const skillName = this.dataset.skillName;
                certificateSkillId.value = teacherskill;
                certificateSkillName.innerText = skillName;
                certificatePopup.classList.remove('hidden');
            });
        });

        closeCertificatePopup.forEach(btn => {
            btn.addEventListener('click', () => {
                certificatePopup.classList.add('hidden');
            });
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

        // acceptBtn.addEventListener('click', () => {
        //     learningPopup.classList.remove('hidden');
        // });

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
