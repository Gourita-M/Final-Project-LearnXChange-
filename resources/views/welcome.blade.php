<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Luminary | Learn anything, Teach everyone</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
                        "lg": "1rem",
                        "xl": "1.25rem",
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

        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased">

    <nav
        class="fixed top-0 w-full z-50 flex justify-between items-center px-8 h-20 w-full max-w-full bg-white/80 backdrop-blur-xl shadow-sm">
        <div class="flex items-center gap-8">
            <span class="text-2xl font-extrabold tracking-tighter text-blue-700">Luminary</span>
            <div class="hidden md:flex gap-6 items-center">
                <a class="font-headline text-sm font-bold tracking-tight text-blue-600 border-b-2 border-blue-600 pb-1"
                    href="#">Home</a>
                <a class="font-headline text-sm font-medium tracking-tight text-slate-600 hover:text-blue-500 transition-colors"
                    href="#">Marketplace</a>
                <a class="font-headline text-sm font-medium tracking-tight text-slate-600 hover:text-blue-500 transition-colors"
                    href="#">Dashboard</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-600 hover:bg-slate-50 rounded-full transition-all active:scale-95">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <a href="login"
                class="px-6 py-2.5 bg-primary text-on-primary font-semibold rounded-lg hover:bg-primary-container transition-all active:scale-95 shadow-sm">
                Sign In
            </a>
        </div>
    </nav>
    <main class="pt-20">
   
        <section class="relative min-h-[921px] flex items-center px-8 lg:px-24 overflow-hidden">
            <div class="grid lg:grid-cols-2 gap-16 items-center z-10 w-full">
                <div class="max-w-2xl">
                    <span
                        class="inline-block px-4 py-1.5 bg-secondary-fixed text-on-secondary-fixed rounded-full text-sm font-semibold mb-6">
                        The Future of Learning
                    </span>
                    <h1
                        class="font-headline text-5xl lg:text-7xl font-extrabold text-on-background tracking-tight leading-[1.1] mb-8">
                        Learn anything, <br />
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-tertiary">Teach
                            everyone.</span>
                    </h1>
                    <p class="text-lg text-on-surface-variant leading-relaxed mb-10 max-w-lg">
                        Access a world-class educational ecosystem where boundaries disappear. Whether you're mastering
                        a new craft or sharing your expertise, Luminary guides your journey.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button
                            class="px-8 py-4 bg-primary text-on-primary font-bold rounded-lg hover:bg-primary-container transition-all active:scale-95 shadow-lg flex items-center gap-2">
                            Get Started
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                        <button
                            class="px-8 py-4 bg-secondary-container text-on-secondary-container font-bold rounded-lg hover:bg-surface-container-high transition-all active:scale-95 flex items-center gap-2">
                            Become a Learner
                            <span class="material-symbols-outlined">school</span>
                        </button>
                    </div>
                    <div class="mt-12 flex items-center gap-4">
                        <div class="flex -space-x-3">
                            <img alt="Portrait of a learner"
                                class="w-10 h-10 rounded-full border-2 border-white object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCmc0ACeLGaxZ75zvRSVck75rHMEq8VSy8BkZtxmuLsX8hCI5zOBOkmAkFXYUcU3zdPHWBAzjPUH68iuYg-rpK7xB1C6f-N4O-5Rpux6__aSqeuUTSTL7uWCw_aQ-6un3XbZjKLJE2W78YsOsK77FBmVdkwth2peIaGsCg43gPwe479oXc4uU9Ze1BkUcUpeJ3B7tbYVTFHEVgbkIAvfgeS4VmTbdlBVOC-cAyCVxtPkFB1T_g5SEDbbvB7VE7gxHi8kBM0pIXdFUU" />
                            <img alt="Portrait of a learner"
                                class="w-10 h-10 rounded-full border-2 border-white object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAEY3g2mCtvW9PZ_Advav_X2uJejEtUcciz7MsLYZh8tnQiNdsLAJwWvg9OwgrMTpzCH4TUAnBRCagH28dU0RcmjYtL4T9mQBIAm8iyNUDzjhlQDWGssZdir9CpDzM608a6EnzqL-cUg35jLanHG8ZLCucHzd2JgbpM2-SGbOZn0Tv3EPjFatQpuRfrGAHZ1aI1EFPdvvGYlG7N4VwfdfY7yIzB5XToRTgtSewqQFqtVH2I99DsTG9FTYvanZk-voaHwJ4wJOJU1E" />
                            <img alt="Portrait of a learner"
                                class="w-10 h-10 rounded-full border-2 border-white object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnQAs2Bompe6I9biCT1aX1jooPl0F5nzyOGZOLUnW8_626gCd8zi11uW3wivfksDrcp_vwZj7Qe9BxNkO4CHNN-WizSq_ZNorgEY8aigmPFLG4GCaokCJgIQFrDMWFHhfs_tu0gFtNsyyinHDfvUofgDjvIWMgJgtlYhX8WIRQ32E_cbE1jdXKNyaKkTWujcA2zt-CxhDfkB7Ea5UPb1SDLdrZlTboIHGqdyF_6lgsWiY-4y6zW7ZCWvxQOLj__aGF7CFrBvs1GfQ" />
                        </div>
                        <p class="text-sm font-medium text-on-surface-variant">
                            Joined by <span class="text-primary font-bold">12,000+</span> learners this month
                        </p>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <div class="grid grid-cols-12 gap-4 h-[600px]">
                        <div
                            class="col-span-8 row-span-6 bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden relative group">
                            <img alt="Minimalist workspace"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIotbjqoSJvUV9Mf-hNbMWEyYK07qOcAWg2gbRvZrDROWkK6nPYl2VxN3Fk9aecRwVU2A0s3G63Vz2qBtJbJLIQOagQG4M_HLDZNS1uoZuFIT2wM9V-uUsz-bTDG1VAKC656UnY7mxVs33X_Zwa8TUFDLfONsd-0UKDF2RPZn7qmzuiLP05s-_S8KFhbrQ_x6_ew2l8_oVgnI-fvO9KXbWHx-s8Nhb1YqOeziDj4cJBKQCc6GdkBhqx51IpgqIx3W1UJVtzTYbgEs" />
                            <div class="absolute bottom-4 left-4 right-4 glass-panel p-4 rounded-lg">
                                <p class="text-xs font-bold text-primary mb-1">FEATURED COURSE</p>
                                <p class="font-headline font-bold text-on-surface">Advanced UI Architecture</p>
                            </div>
                        </div>
                        <div
                            class="col-span-4 row-span-3 bg-primary rounded-xl p-6 flex flex-col justify-end text-on-primary">
                            <span class="material-symbols-outlined text-4xl mb-4" data-weight="fill">bolt</span>
                            <h3 class="font-headline font-bold text-xl leading-tight">Fast-track your career</h3>
                        </div>
                        <div
                            class="col-span-4 row-span-3 bg-tertiary-container rounded-xl p-6 flex flex-col justify-end text-on-tertiary-container">
                            <span class="material-symbols-outlined text-4xl mb-4">group</span>
                            <h3 class="font-headline font-bold text-xl leading-tight">Expert Mentorship</h3>
                        </div>
                        <div
                            class="col-span-12 row-span-4 bg-surface-container-low rounded-xl p-8 flex items-center justify-between">
                            <div>
                                <h4 class="font-headline font-bold text-2xl mb-2">Live Progress</h4>
                                <div class="flex gap-2 items-center">
                                    <div class="w-32 h-3 bg-primary-fixed rounded-full overflow-hidden">
                                        <div class="h-full w-2/3 bg-gradient-to-r from-primary to-tertiary"></div>
                                    </div>
                                    <span class="text-sm font-bold text-primary">67%</span>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-12 h-12 rounded-lg bg-white shadow-sm flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">psychology</span>
                                </div>
                                <div class="w-12 h-12 rounded-lg bg-white shadow-sm flex items-center justify-center">
                                    <span class="material-symbols-outlined text-tertiary">architecture</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="absolute -right-20 -top-20 w-[600px] h-[600px] bg-primary/5 blur-[120px] rounded-full -z-10">
            </div>
            <div class="absolute -left-20 -bottom-20 w-[600px] h-[600px] bg-tertiary/5 blur-[120px] rounded-full -z-10">
            </div>
        </section>
     
        <section class="py-24 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="relative order-2 lg:order-1">
                        <div
                            class="relative z-10 rounded-2xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500">
                            <img alt="Students collaborating on laptops" class="w-full h-full object-cover aspect-[4/5]"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrkUsVMdjweTjQ_FzTC7cSr7nJOpBex3hy68DdYWopzLp_RVj7v_hnq_i4f_WDbaKXFuhdfKGeVc8uDwV-WQu9xEBauaGZrQvjvx6Hy2AyCaqlV9lhiJ3E6jGkndAYd9HTOjapg-xe5BtlKafeK2LycEJoe9Llq7JQLhYyvH8jCNgxXy6GXH9yS_6SeBMSxxSm-48uj75ARsdbPJrdGJCW9X23F47e_OtA1gsi3-ZcHAh459LVxwm_lZdLh-EMcJzMTxhRD4J2zpo" />
                        </div>
            
                        <div class="absolute -bottom-6 -left-6 w-48 h-48 bg-primary/10 rounded-full blur-3xl -z-10">
                        </div>
                        <div class="absolute top-10 -right-10 w-32 h-32 bg-tertiary/10 rounded-full blur-2xl -z-10">
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <h2
                            class="font-headline text-4xl lg:text-5xl font-extrabold text-on-background mb-8 leading-tight">
                            Master skills with an immersive <span class="text-primary">Learning Experience</span>.</h2>
                        <p class="text-xl text-on-surface-variant leading-relaxed mb-12">We’ve reimagined online
                            education. No more passive watching—immerse yourself in projects, interactive labs, and
                            real-time community support.</p>
                        <div class="space-y-8">
                            <div class="flex gap-5">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">route</span>
                                </div>
                                <div>
                                    <h4 class="font-headline font-bold text-xl mb-2 text-on-background">Curated Learning
                                        Paths</h4>
                                    <p class="text-on-surface-variant">Step-by-step roadmaps designed by industry
                                        veterans to take you from beginner to job-ready professional.</p>
                                </div>
                            </div>
                            <div class="flex gap-5">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">devices</span>
                                </div>
                                <div>
                                    <h4 class="font-headline font-bold text-xl mb-2 text-on-background">Interactive
                                        Sandboxes</h4>
                                    <p class="text-on-surface-variant">Write code, design prototypes, or run
                                        simulations directly in your browser with our integrated tools.</p>
                                </div>
                            </div>
                            <div class="flex gap-5">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">forum</span>
                                </div>
                                <div>
                                    <h4 class="font-headline font-bold text-xl mb-2 text-on-background">24/7 Global
                                        Peer Support</h4>
                                    <p class="text-on-surface-variant">Never get stuck alone. Connect with a worldwide
                                        community of learners and mentors anytime.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
        <section class="py-24 bg-surface-container-low overflow-hidden">
            <div class="max-w-7xl mx-auto px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2
                            class="font-headline text-4xl lg:text-5xl font-extrabold text-on-background mb-8 leading-tight">
                            Turn your passion into a career: <span class="text-tertiary">Empowering Teachers</span>.
                        </h2>
                        <p class="text-xl text-on-surface-variant leading-relaxed mb-12">Scale your expertise and reach
                            a global audience. We provide the tools, the platform, and the support to help you build a
                            thriving educational business.</p>
                        <div class="space-y-8">
                            <div class="flex gap-5">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-tertiary/10 rounded-xl flex items-center justify-center">
                                    <span class="material-symbols-outlined text-tertiary">public</span>
                                </div>
                                <div>
                                    <h4 class="font-headline font-bold text-xl mb-2 text-on-background">Global Revenue
                                        Opportunities</h4>
                                    <p class="text-on-surface-variant">Monetize your knowledge with flexible pricing,
                                        subscriptions, and corporate licensing across 190 countries.</p>
                                </div>
                            </div>
                            <div class="flex gap-5">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-tertiary/10 rounded-xl flex items-center justify-center">
                                    <span class="material-symbols-outlined text-tertiary">analytics</span>
                                </div>
                                <div>
                                    <h4 class="font-headline font-bold text-xl mb-2 text-on-background">Advanced
                                        Content Creator Suite</h4>
                                    <p class="text-on-surface-variant">Seamlessly upload videos, create quizzes, and
                                        track student performance with our intuitive dashboard.</p>
                                </div>
                            </div>
                            <div class="flex gap-5">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-tertiary/10 rounded-xl flex items-center justify-center">
                                    <span class="material-symbols-outlined text-tertiary">verified</span>
                                </div>
                                <div>
                                    <h4 class="font-headline font-bold text-xl mb-2 text-on-background">Expert Branding
                                        &amp; Marketing</h4>
                                    <p class="text-on-surface-variant">Leverage Luminary’s brand power. We help promote
                                        your courses to the right audience at the right time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div
                            class="relative z-10 rounded-2xl overflow-hidden shadow-2xl -rotate-2 hover:rotate-0 transition-transform duration-500">
                            <img alt="Trainer presenting in a modern workshop"
                                class="w-full h-full object-cover aspect-[4/5]"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBakI7KZCo31dVR6c6CIuCWcpU6WVeCW4lTUK09SvAullYeqKkqjyLPj33izyljFXYTyNJOCgpfQ2RtOhcVhQULGTGVoiG9uirO3MW0TarG2M1EvrtA3GQ1WpOobRBO8zuwEsf-ZCltlEnvZqCsL6n4-FFNKze_NYjJCv-tAAZLpsj9cQiLhQwMwvyCOdkGbSl17RUH6GXfqKkgKrS2V03bLoZexCAg2OtjhH2ZplPcYCRRorDuy3SxUe9kttXHeEd_jHZ2RIjOJ4k" />
                        </div>
      
                        <div class="absolute -top-10 -left-10 w-40 h-40 bg-tertiary/10 rounded-full blur-3xl -z-10">
                        </div>
                        <div class="absolute -bottom-10 -right-10 w-56 h-56 bg-primary/5 rounded-full blur-3xl -z-10">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-20">
                    <h2 class="font-headline text-4xl font-extrabold mb-4">The Luminary Difference</h2>
                    <div class="h-1.5 w-24 bg-primary mx-auto rounded-full"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-8">

                    <div
                        class="group p-8 bg-surface-container-low rounded-xl hover:bg-white hover:shadow-xl transition-all duration-300">
                        <div
                            class="mb-6 inline-block p-4 bg-white rounded-xl shadow-sm group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">menu_book</span>
                        </div>
                        <h3 class="font-headline font-bold text-2xl mb-4">Limitless Library</h3>
                        <p class="text-on-surface-variant leading-relaxed mb-6">Access over 50,000 courses spanning
                            design, code, business, and creative arts. Updated weekly with new trends.</p>
                        <a class="inline-flex items-center gap-2 text-primary font-bold hover:gap-3 transition-all"
                            href="#">
                            Explore library <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>

                    <div
                        class="group p-8 bg-surface-container-low rounded-xl hover:bg-white hover:shadow-xl transition-all duration-300">
                        <div
                            class="mb-6 inline-block p-4 bg-white rounded-xl shadow-sm group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">diversity_3</span>
                        </div>
                        <h3 class="font-headline font-bold text-2xl mb-4">Global Community</h3>
                        <p class="text-on-surface-variant leading-relaxed mb-6">Join 2M+ learners from 190 countries.
                            Participate in study groups and live Q&amp;A sessions with global experts.</p>
                        <a class="inline-flex items-center gap-2 text-primary font-bold hover:gap-3 transition-all"
                            href="#">
                            Join the tribe <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>

                    <div
                        class="group p-8 bg-surface-container-low rounded-xl hover:bg-white hover:shadow-xl transition-all duration-300">
                        <div
                            class="mb-6 inline-block p-4 bg-white rounded-xl shadow-sm group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">monitoring</span>
                        </div>
                        <h3 class="font-headline font-bold text-2xl mb-4">Skill Insights</h3>
                        <p class="text-on-surface-variant leading-relaxed mb-6">Track your growth with deep-dive
                            analytics. See how your skills compare to industry standards in real-time.</p>
                        <a class="inline-flex items-center gap-2 text-primary font-bold hover:gap-3 transition-all"
                            href="#">
                            See analytics <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 px-8">
            <div
                class="max-w-6xl mx-auto rounded-[2rem] bg-gradient-to-br from-primary to-primary-container p-12 lg:p-20 text-center text-on-primary relative overflow-hidden">
                <div class="relative z-10">
                    <h2 class="font-headline text-4xl lg:text-6xl font-extrabold mb-8 leading-tight">Ready to
                        illuminate <br /> your future?</h2>
                    <p class="text-xl text-primary-fixed mb-12 max-w-2xl mx-auto opacity-90">Start your 14-day free
                        trial today. No credit card required. Cancel anytime.</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="/register"
                            class="px-10 py-5 bg-white text-primary font-bold rounded-lg hover:bg-surface-bright transition-all active:scale-95 shadow-xl">
                            Create Free Account
                        </a>
                        <button
                            class="px-10 py-5 border-2 border-white/30 text-white font-bold rounded-lg hover:bg-white/10 transition-all active:scale-95">
                            Contact Sales
                        </button>
                    </div>
                </div>

                <div
                    class="absolute -right-20 -bottom-20 w-[400px] h-[400px] bg-tertiary-fixed/20 blur-[80px] rounded-full">
                </div>
                <div class="absolute -left-20 -top-20 w-[400px] h-[400px] bg-white/10 blur-[80px] rounded-full"></div>
            </div>
        </section>
    </main>
    <footer class="py-12 bg-white border-t border-surface-container">
        <div class="max-w-6xl mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex flex-col items-center md:items-start">
                <span class="text-xl font-extrabold tracking-tighter text-blue-700 mb-2">Luminary</span>
                <p class="text-sm text-on-surface-variant">© 2024 Luminary Learning Inc. All rights reserved.</p>
            </div>
            <div class="flex gap-8 text-sm font-medium text-on-surface-variant">
                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                <a class="hover:text-primary transition-colors" href="#">Help Center</a>
                <a class="hover:text-primary transition-colors" href="#">Careers</a>
            </div>
        </div>
    </footer>
</body>

</html>
