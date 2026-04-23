<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Luminary Admin | Dashboard</title>
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
                        "primary": "#004ac6",
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

<body class="bg-surface text-on-background min-h-screen">

    @include('layouts.navbar')
    @include('layouts.notification')
    @include('layouts.notificationError')

    <main class="ml-64 pt-28 px-10 pb-20">

        <header class="mb-12">
            <h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">Administrative Console</h1>
            <p class="text-on-surface-variant text-lg">Real-time platform overview and verification metrics.</p>
        </header>

        <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div
                class="col-span-1 md:col-span-2 bg-primary-container p-8 rounded-xl flex flex-col justify-between text-on-primary-container relative overflow-hidden">
                <div class="z-10">
                    <p class="text-sm font-semibold uppercase tracking-wider opacity-80 mb-2">Total Platform Users</p>
                    <h3 class="text-5xl font-extrabold tracking-tighter"> {{ $totalUsers }}</h3>
                    <div class="mt-4 flex items-center gap-2 text-sm">

                    </div>
                </div>
                <div class="absolute -right-10 -bottom-10 opacity-20">
                    <span class="material-symbols-outlined text-[180px]" data-icon="group">group</span>
                </div>
            </div>
            <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm">
                <span class="material-symbols-outlined text-tertiary mb-4" data-icon="verified">verified</span>
                <p class="text-on-surface-variant text-sm font-medium mb-1">Certificates Pending</p>
                <h3 class="text-3xl font-bold text-on-surface">{{ $totalCertificates }}</h3>
                <div class="mt-6 h-1 w-full bg-surface-container-high rounded-full overflow-hidden">
                    <div class="h-full bg-tertiary w-3/4"></div>
                </div>
            </div>
            <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm">
                <span class="material-symbols-outlined text-error mb-4" data-icon="report">report</span>
                <p class="text-on-surface-variant text-sm font-medium mb-1">Active Reports</p>
                <h3 class="text-3xl font-bold text-on-surface">{{ $totalReports }}</h3>
                @if ($totalReports > 10)
                    <p class="mt-4 text-error text-xs font-bold">Action required immediately</p>
                @endif
            </div>
        </section>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <section class="lg:col-span-2 space-y-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-on-surface">Certificates Requests</h2>

                </div>
                <div class="bg-surface-container-low rounded-xl overflow-hidden ">
                    <div class="divide-y divide-surface-container-high max-h-96 overflow-y-auto">
                        @forelse($certificates as $certificate)
                            <div
                                class="p-6 bg-surface-container-lowest flex items-center justify-between hover:bg-surface-bright transition-colors">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
                                        <span class="material-symbols-outlined"
                                            data-icon="history_edu">history_edu</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-on-surface">
                                            Certificate For : {{ $certificate->skillname }}
                                        </h4>

                                        <p class="text-sm text-on-surface-variant">
                                            Teacher: {{ $certificate->firstname }} {{ $certificate->lastname }} •
                                            Submitted: {{ $certificate->date }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <form method="POST" action="{{ route('aprove.certificate') }}">
                                        @csrf
                                        <input type="hidden" name="certifid" value="{{ $certificate->certifid }}">
                                        <input type="hidden" name="action" value="approve">

                                        <button type="submit" onclick="return confirm('Approve this certificate?')"
                                            class="px-4 py-2 text-sm font-semibold bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
                                            Approve
                                        </button>
                                    </form>
                                    <form method="POST" action="{{ route('decline.certificate') }}">
                                        @csrf
                                        <input type="hidden" name="certifid" value="{{ $certificate->certifid }}">
                                        <input type="hidden" name="action" value="decline">

                                        <button type="submit" onclick="return confirm('Decline this certificate?')"
                                            class="px-4 py-2 text-sm font-semibold bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition">
                                            Decline
                                        </button>
                                    </form>

                                </div>
                            </div>
                        @empty
                            <div class="p-6 text-center text-on-surface-variant">
                                <p class="text-lg font-semibold">No certificates found</p>
                                <p class="text-sm">There are currently no certificates to review.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>

            <section class="bg-surface-container-lowest rounded-3xl p-8 lg:col-span-2">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-on-surface">Review Reports</h2>
                        <p class="text-sm text-on-surface-variant">Inspect reported messages and resolve them when appropriate.</p>
                    </div>
                    <span class="text-sm text-tertiary font-semibold">{{ $reports->count() }} active</span>
                </div>

                @if($reports->isEmpty())
                    <div class="p-6 text-center text-on-surface-variant">
                        <p class="text-lg font-semibold">No active reports</p>
                        <p class="text-sm">All reports have been reviewed or there are no new reports.</p>
                    </div>
                @else
                    <div class="space-y-4 max-h-[500px] overflow-y-auto">
                        @foreach($reports as $report)
                            <div class="p-5 rounded-3xl bg-white border border-slate-200 shadow-sm">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                    <div>
                                        <p class="text-sm font-semibold text-on-surface">{{ $report->reason }}</p>
                                        <p class="text-xs text-on-surface-variant mt-1">
                                            Reported by {{ $report->reporter_firstname }} {{ $report->reporter_lastname }}
                                            against {{ $report->reported_firstname }} {{ $report->reported_lastname }} •
                                            {{ \Carbon\Carbon::parse($report->date)->format('M d, Y') }}
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-2 w-full md:w-auto">
                                        <div class="flex flex-wrap gap-2 items-center">
                    
                                            <button type="button" data-report-id="{{ $report->reportid }}" class="report-manage-btn inline-flex items-center gap-2 rounded-xl bg-slate-100 px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-200 transition">
                                                Manage
                                            </button>
                                        </div>
                                        <div id="report-actions-{{ $report->reportid }}" class="hidden flex flex-wrap gap-2 items-center mt-2">
                                            <form method="POST" action="{{ route('admin.report.resolve') }}" class="w-full md:w-auto">
                                                @csrf
                                                <input type="hidden" name="report_id" value="{{ $report->reportid }}" />
                                                <button type="submit" class="inline-flex items-center gap-2 rounded-xl bg-primary px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700 transition">
                                                    Resolve
                                                </button>
                                            </form>
                                            <a href="/ban.user/{{ $report->reported_id }}"
                                                onclick="return confirm('Ban reported user {{ $report->reported_firstname }} {{ $report->reported_lastname }}?')"
                                                class="inline-flex items-center gap-2 rounded-xl bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-700 transition">
                                                Ban User
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </section>

            <aside class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-on-surface mb-6">Moderation Tools</h2>
                    <div class="bg-surface-container-low p-6 rounded-xl space-y-4">
                        <button id="usersopen"
                            class="w-full flex items-center justify-between p-4 bg-surface-container-lowest rounded-lg hover:shadow-md transition-all group">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-on-surface-variant group-hover:text-primary"
                                    data-icon="search">search</span>
                                <span class="font-medium">Manage User</span>
                            </div>
                            <span class="material-symbols-outlined text-sm opacity-50"
                                data-icon="chevron_right">chevron_right</span>
                        </button>
                        <button
                            class="w-full flex items-center justify-between p-4 bg-surface-container-lowest rounded-lg hover:shadow-md transition-all group">
                            <div class="flex items-center gap-3">
                                <span
                                    class="material-symbols-outlined text-on-surface-variant group-hover:text-tertiary"
                                    data-icon="flag">flag</span>
                                <span class="font-medium">Review Reports</span>
                            </div>
                            <span class="material-symbols-outlined text-sm opacity-50"
                                data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-on-surface mb-6">System Health</h2>
                    <div
                        class="relative bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/20 overflow-hidden">
                        <div class="relative z-10">
                            <div class="flex items-center gap-2 text-tertiary mb-2">
                                <span class="relative flex h-3 w-3">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-tertiary opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-tertiary"></span>
                                </span>
                                <span class="text-sm font-bold uppercase tracking-widest">All Systems
                                    Operational</span>
                            </div>
                            <p class="text-xs text-on-surface-variant">Last backup performed: 14 mins ago</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex justify-between text-xs">
                                    <span class="text-on-surface-variant">Server Load</span>
                                    <span class="font-bold">24%</span>
                                </div>
                                <div class="h-1.5 w-full bg-surface-container-high rounded-full overflow-hidden">
                                    <div class="h-full bg-primary w-[24%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

    </main>

    <div id="userpopup" class="fixed inset-0 hidden bg-black/40 backdrop-blur-sm flex items-center justify-center z-50">

        <div class="bg-white w-full max-w-3xl rounded-2xl shadow-2xl p-6 relative">

            <button id="closeuser"
                class="absolute top-4 right-4 text-gray-400 hover:text-red-500 text-xl">
                ✕
            </button>

            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                Platform Users
            </h2>

            <div class="mb-5">
                <input id="search" type="text" placeholder="Search users..."
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div id="userscontainer" class="max-h-[400px] overflow-y-auto space-y-3">
                {{-- Container --}}
            </div>

        </div>
    </div>
    <script>
        const usersopen = document.getElementById('usersopen');
        const userpopup = document.getElementById('userpopup');
        const closeuser = document.getElementById('closeuser');
        const users = @json($users);
        const userscontainer = document.getElementById('userscontainer');
        const search = document.getElementById('search');

        usersopen.addEventListener('click',()=>{
            userpopup.classList.remove('hidden');
        })

        closeuser.addEventListener('click',()=>{
            userpopup.classList.add('hidden');
        })

        search.addEventListener('keyup', () => {

        let value = search.value.toLowerCase();

        let searchresult = users.filter(user => {

            let fullname = (user.firstname + " " + user.lastname).toLowerCase();
            let email = user.email.toLowerCase();

            return fullname.includes(value) || email.includes(value);
        });
            userscontainer.innerHTML = '';
            showUsers(searchresult);
        });

        showUsers(users);

        function showUsers(users){
        users.forEach( user => {
            userscontainer.innerHTML += `
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:shadow transition">
                    <div>
                        <p class="font-semibold text-gray-800">${user.firstname} ${user.lastname}</p>
                        <p class="text-sm text-gray-500">${user.email}</p>
                    </div>
                    <div>
                    <form method="GET" action="ban.user/${user.id}">
                    <button
                        class="px-4 py-2 text-sm font-semibold rounded-lg bg-${user.Banned ? 'green' : 'red'}-500 text-white hover:bg-${user.Banned ? 'green' : 'red'}-600 transition">
                        ${user.Banned ? 'Unban' : 'Ban'}
                    </button>
                    </div>
                    </form>
                </div>
            `
        })
        }

        const reportManageButtons = document.querySelectorAll('.report-manage-btn');

        reportManageButtons.forEach(button => {
            button.addEventListener('click', () => {
                const target = document.getElementById(`report-actions-${button.dataset.reportId}`);
                if (!target) return;
                const isHidden = target.classList.toggle('hidden');
                button.textContent = isHidden ? 'Manage' : 'Hide';
            });
        });

        console.log(users);
    </script>
</body>

</html>
