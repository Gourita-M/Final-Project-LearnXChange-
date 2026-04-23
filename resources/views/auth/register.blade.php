<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Join LeanXChange | Begin Your Learning Journey</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap"
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
                        "inverse-on-surface": "#eff1f3",
                        "on-primary-fixed-variant": "#003ea8",
                        "secondary-fixed-dim": "#b9c7df",
                        "on-error-container": "#93000a",
                        "tertiary": "#005a82",
                        "surface-variant": "#e0e3e5",
                        "surface-container-high": "#e6e8ea",
                        "surface-container": "#eceef0",
                        "on-tertiary-fixed": "#001e2f",
                        "tertiary-fixed": "#c9e6ff",
                        "error": "#ba1a1a",
                        "surface-dim": "#d8dadc",
                        "primary-fixed-dim": "#b4c5ff",
                        "on-tertiary-container": "#e4f2ff",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#eeefff",
                        "tertiary-container": "#0074a6",
                        "on-background": "#191c1e",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed": "#d5e3fc",
                        "outline": "#737686",
                        "primary-fixed": "#dbe1ff",
                        "surface": "#f7f9fb",
                        "error-container": "#ffdad6",
                        "on-primary-fixed": "#00174b",
                        "on-secondary-container": "#57657a",
                        "surface-container-low": "#f2f4f6",
                        "secondary": "#515f74",
                        "on-tertiary": "#ffffff",
                        "surface-tint": "#0053db",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "inverse-surface": "#2d3133",
                        "on-error": "#ffffff",
                        "on-primary": "#ffffff",
                        "background": "#f7f9fb",
                        "secondary-container": "#d5e3fc",
                        "inverse-primary": "#b4c5ff",
                        "primary": "#004ac6",
                        "on-secondary-fixed-variant": "#3a485b",
                        "tertiary-fixed-dim": "#89ceff",
                        "surface-container-highest": "#e0e3e5",
                        "on-surface-variant": "#434655",
                        "primary-container": "#2563eb",
                        "on-surface": "#191c1e",
                        "on-secondary-fixed": "#0d1c2e",
                        "outline-variant": "#c3c6d7"
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
        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .tonal-shift {
            background: linear-gradient(135deg, #f7f9fb 0%, #eceef0 100%);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased min-h-screen flex flex-col">

    @include('layouts.notification')
    @include('layouts.notificationError')

    <main class="flex-grow flex items-center justify-center pt-24 pb-12 px-4 tonal-shift">
        <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <div
                class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-primary-fixed opacity-20 blur-[120px] rounded-full">
            </div>
            <div
                class="absolute top-[40%] -right-[5%] w-[30%] h-[50%] bg-tertiary-fixed opacity-30 blur-[100px] rounded-full">
            </div>
        </div>
        <div class="relative z-10 w-full max-w-[480px]">

            <div
                class="glass-card bg-surface-container-lowest rounded-[2rem] p-8 md:p-12 shadow-[0_32px_64px_-12px_rgba(0,74,198,0.08)]">

                <div class="text-center mb-10">
                    <h1 class="font-headline text-3xl font-extrabold text-on-surface tracking-tight mb-3">Create your
                        account</h1>
                    <p class="text-on-surface-variant font-medium">Start your journey toward mastery today.</p>
                </div>

                <div class="flex items-center gap-4 mb-8">
                    <div class="h-[1px] flex-grow bg-outline-variant/30"></div>
                    <span class="text-xs font-bold text-outline uppercase tracking-widest"></span>
                    <div class="h-[1px] flex-grow bg-outline-variant/30"></div>
                </div>
                <form class="space-y-5" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface-variant ml-1" for="name">First
                            Name</label>
                        <div class="relative">
                            <input name="firstname" required
                                class="w-full pl-11 pr-4 py-3.5 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-outline/60"
                                id="name" placeholder="3alal" type="text" />
                            <span
                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline/60 text-[20px]">person</span>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface-variant ml-1" for="name">Last
                            Name</label>
                        <div class="relative">
                            <input name="lastname" required
                                class="w-full pl-11 pr-4 py-3.5 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-outline/60"
                                id="name" placeholder="Soba" type="text" />
                            <span
                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline/60 text-[20px]">person</span>
                        </div>
                    </div>

                    <div class="relative">
                        <select name="role" required
                            class="w-full pl-11 pr-10 py-3.5 bg-surface-container-high border-none rounded-xl 
                                focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest 
                                transition-all duration-200 text-on-surface appearance-none">
                            <option value="" disabled selected>Select Your Role</option>
                            <option value="learner">Learner</option>
                            <option value="teacher">Teacher</option>

                        </select>


                        <span
                            class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline/60 text-[20px]">
                            school
                        </span>

                        <span
                            class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-outline/60 text-[20px] pointer-events-none">
                            expand_more
                        </span>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface-variant ml-1" for="email">Email
                            Address</label>
                        <div class="relative">
                            <input name="email" required
                                class="w-full pl-11 pr-4 py-3.5 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-outline/60"
                                id="email" placeholder="name@gmail.com" type="email" />
                            <span
                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline/60 text-[20px]">mail</span>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface-variant ml-1"
                            for="password">Password</label>
                        <div class="relative">
                            <input name="password" required
                                class="w-full pl-11 pr-12 py-3.5 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-outline/60"
                                id="password" placeholder="••••••••" type="password" />
                            <span
                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline/60 text-[20px]">lock</span>
                            <button id="show"
                                class="absolute right-3.5 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface-variant ml-1"
                            for="password_confirmation">Confirm
                            Password</label>
                        <div class="relative">
                            <input name="password_confirmation"
                                class="w-full pl-11 pr-12 py-3.5 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-outline/60"
                                id="password_confirmation" placeholder="••••••••" type="password" />
                            <span
                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline/60 text-[20px]">lock</span>
                            <button id="show_confirm"
                                class="absolute right-3.5 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 pt-2">
                        <div class="flex items-center h-5">
                            <input
                                class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary/20 bg-surface-container-high"
                                id="terms" type="checkbox" required />
                        </div>
                        <label class="text-sm text-on-surface-variant leading-tight" for="terms">
                            I agree to the <a
                                class="text-primary font-semibold hover:underline decoration-2 underline-offset-4"
                                href="#">Terms of Service</a> and <a
                                class="text-primary font-semibold hover:underline decoration-2 underline-offset-4"
                                href="#">Privacy Policy</a>.
                        </label>
                    </div>

                    <button
                        class="w-full mt-6 py-4 px-6 bg-primary hover:bg-primary-container text-on-primary font-bold rounded-xl shadow-[0_8px_24px_-4px_rgba(0,74,198,0.3)] hover:shadow-[0_12px_28px_-4px_rgba(0,74,198,0.4)] transition-all duration-300 scale-100 active:scale-[0.98]"
                        type="submit">
                        Create Account
                    </button>
                </form>

                <div class="mt-8 text-center">
                    <p class="text-on-surface-variant font-medium">
                        Already have an account?
                        <a class="text-primary font-bold hover:underline decoration-2 underline-offset-4 ml-1"
                            href="/login">Log in</a>
                    </p>
                </div>
            </div>

            <div class="mt-8 flex justify-center gap-8 opacity-60">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[18px]"
                        style="font-variation-settings: 'FILL' 1;">verified_user</span>
                    <span class="text-xs font-bold tracking-wide uppercase text-on-surface-variant">Secure SSL</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[18px]"
                        style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="text-xs font-bold tracking-wide uppercase text-on-surface-variant">Top Rated</span>
                </div>
            </div>
        </div>
    </main>

    <footer
        class="w-full py-8 bg-surface dark:bg-slate-950 flex flex-col md:flex-row justify-between items-center px-8 max-w-7xl mx-auto gap-4">
        <div class="flex items-center gap-6">
            <span class="font-inter text-sm text-slate-500 dark:text-slate-400">© 2024 LeanXChange. All rights
                reserved.</span>
        </div>
        <div class="flex gap-8">
            <a class="font-inter text-sm text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline underline-offset-4 transition-opacity opacity-80 hover:opacity-100"
                href="#">Privacy Policy</a>
            <a class="font-inter text-sm text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline underline-offset-4 transition-opacity opacity-80 hover:opacity-100"
                href="#">Terms of Service</a>
            <a class="font-inter text-sm text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline underline-offset-4 transition-opacity opacity-80 hover:opacity-100"
                href="#">Help Center</a>
        </div>
    </footer>
</body>
<script>
    const showbtn = document.getElementById('show');
    const passinout = document.getElementById('password');

    showbtn.addEventListener('click', () => {
        if (passinout.type === 'password') {
            passinout.type = 'text';
        } else {
            passinout.type = 'password';
        }
    });

    const showbtnconfirm = document.getElementById('show_confirm');
    const passinoutconfirm = document.getElementById('password_confirmation');

    showbtnconfirm.addEventListener('click', () => {
        if (passinoutconfirm.type === 'password') {
            passinoutconfirm.type = 'text';
        } else {
            passinoutconfirm.type = 'password';
        }
    });
</script>

</html>
