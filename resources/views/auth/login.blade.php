<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login - LeanXChange</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-effect {
            backdrop-filter: blur(24px);
            background-color: rgba(255, 255, 255, 0.8);
        }

        .tonal-depth-surface-container-low {
            background-color: #f2f4f6;
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased min-h-screen flex flex-col">

    <main class="flex-grow flex items-center justify-center px-6 py-12 relative overflow-hidden">
  
        <div class="absolute top-[-10%] left-[-5%] w-[40%] h-[40%] rounded-full bg-primary/5 blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-5%] w-[40%] h-[40%] rounded-full bg-tertiary/5 blur-[120px]"></div>
        <div class="w-full max-w-[440px] z-10">
   
            <div class="flex flex-col items-center mb-10 text-center">
                <div class="mb-4 text-blue-700 dark:text-blue-500">
                    <span class="material-symbols-outlined text-5xl"
                        style="font-variation-settings: 'FILL' 1;">lightbulb</span>
                </div>
                <h1 class="font-headline text-3xl font-extrabold tracking-tight text-on-surface mb-2">LearnXChange</h1>
                <p class="text-on-surface-variant font-medium">Illuminate your learning journey.</p>
            </div>

            <div
                class="bg-surface-container-lowest rounded-xl p-8 md:p-10 shadow-[0_20px_50px_rgba(25,28,30,0.06)] border border-outline-variant/20">
                <div class="space-y-6">
                    <div class="text-center mb-8">
                        <h2 class="font-headline text-xl font-bold text-on-surface">Welcome back</h2>
                        <p class="text-sm text-on-surface-variant mt-1">Please enter your details to sign in.</p>
                    </div>
    
                    <div class="grid grid-cols-2 gap-3">
                        <button
                            class="flex items-center justify-center gap-2 py-3 px-4 rounded-lg bg-surface-container-high hover:bg-surface-container-highest transition-colors text-sm font-semibold text-on-surface">
                            <img alt="" class="w-5 h-5"
                                data-alt="Official Google G logo in bright primary colors isolated on white background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVM1Lwi1qB8Ewn6NV1hzU28M4omyloESbexm7c4UGbWNL7kMfu9MmgTd_UG69EWMC105y-yxJhWLLM65D9nu-PUH5Bto0EFsATsnG-rC4QExQEXfdV7K3c_pepWQDcwHQ33d0GKvJgg5Wq2EkycnoZDA3V3CD6xVPKlBPhOCoWYYublbZb2CszG5bHIh4ci3ORkxS1sLzdEcGOCWTrCls1dpWZxC4q5pGKOTWJCqaRr4NOmMvsKe59O7PpFXJ1j_-5dzLATia3yhg" />
                            Google
                        </button>
                        <button
                            class="flex items-center justify-center gap-2 py-3 px-4 rounded-lg bg-surface-container-high hover:bg-surface-container-highest transition-colors text-sm font-semibold text-on-surface">
                            <img alt="" class="w-5 h-5"
                                data-alt="Official Microsoft four-pane window logo with corporate brand colors"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjFkFBC8L_EdeA4W0Rp7U2aKAVipdyTGwhQbjYKglkMxDjwDgcm4JP4BWE5sx7lRxo_NTsY5KFH14zXgArma8lI88SypPacGg98WNCqlrmAI7rJN9kqnIPsiEYluVFux-VlgHAK1PjPPfvlmx85OTFqatpAoh0vBRdmq2Gir0h397pAeicYryxgCShH01-iPlN5gUObNBXKfnH0O5RXQ1-URBhbgmd3z_Usd18cAc8oJ2rg6yxzBMp82bGHou1wg-TfRhYbSaselU" />
                            Microsoft
                        </button>
                    </div>
                    <div class="relative flex items-center justify-center py-2">
                        <div class="w-full border-t border-outline-variant/30"></div>
                        <span
                            class="absolute bg-surface-container-lowest px-4 text-xs font-medium text-outline uppercase tracking-widest">Or
                            email</span>
                    </div>
  
                    <form class="space-y-4" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-1.5">
                            <label class="text-sm font-semibold text-on-surface ml-1" for="email">Email
                                Address</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-lg">mail</span>
                                <input name="email"
                                    class="w-full pl-11 pr-4 py-3 bg-surface-container-low border-none rounded-lg text-on-surface focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all placeholder:text-outline/60"
                                    id="email" placeholder="name@company.com" type="email" />
                            </div>
                        </div>
                        <div class="space-y-1.5">
                            <div class="flex justify-between items-center ml-1">
                                <label class="text-sm font-semibold text-on-surface" for="password">Password</label>
                                <a class="text-xs font-semibold text-primary hover:text-primary-container transition-colors"
                                    href="#">Forgot Password?</a>
                            </div>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-lg">lock</span>
                                <input name="password"
                                    class="w-full pl-11 pr-12 py-3 bg-surface-container-low border-none rounded-lg text-on-surface focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all placeholder:text-outline/60"
                                    id="password" placeholder="••••••••" type="password" />
                                <button
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors"
                                    type="button">
                                    <span class="material-symbols-outlined text-lg">visibility</span>
                                </button>
                            </div>
                        </div>
                        <button
                            class="w-full py-3.5 bg-primary hover:bg-primary-container text-on-primary font-bold rounded-lg shadow-lg shadow-primary/20 transition-all active:scale-[0.98] mt-4"
                            type="submit">
                            Sign in
                        </button>
                    </form>
                    <div class="pt-6 text-center">
                        <p class="text-sm text-on-surface-variant font-medium">
                            Don't have an account?
                            <a class="text-primary font-bold hover:underline underline-offset-4 ml-1"
                                href="register">Sign up for free</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center gap-6">
                <a class="text-xs font-medium text-outline hover:text-on-surface transition-colors"
                    href="#">Privacy Policy</a>
                <a class="text-xs font-medium text-outline hover:text-on-surface transition-colors" href="#">Terms
                    of Service</a>
                <a class="text-xs font-medium text-outline hover:text-on-surface transition-colors" href="#">Help
                    Center</a>
            </div>
        </div>
    </main>

    <footer class="w-full py-8 bg-surface dark:bg-slate-950">
        <div class="flex flex-col md:flex-row justify-between items-center px-8 max-w-7xl mx-auto gap-4">
            <div class="font-inter text-sm text-slate-500 dark:text-slate-400">
                © 2024 LearnXChange. All rights reserved.
            </div>
            <div class="flex gap-6">
                <a class="font-inter text-sm text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline underline-offset-4 opacity-80 hover:opacity-100 transition-opacity"
                    href="">Privacy Policy</a>
                <a class="font-inter text-sm text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline underline-offset-4 opacity-80 hover:opacity-100 transition-opacity"
                    href="">Terms of Service</a>
                <a class="font-inter text-sm text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline underline-offset-4 opacity-80 hover:opacity-100 transition-opacity"
                    href="">Help Center</a>
            </div>
        </div>
    </footer>
</body>

</html>
