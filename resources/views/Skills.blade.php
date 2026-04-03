<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Luminary | Instructor Marketplace</title>
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

        .glass-nav {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased">
  
    <nav
        class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-sm dark:shadow-none flex justify-between items-center px-8 h-20 w-full max-w-full">
        <div class="flex items-center gap-12">
            <span
                class="text-2xl font-extrabold tracking-tighter text-blue-700 dark:text-blue-500 font-headline">Luminary</span>
            <div class="hidden md:flex items-center gap-8 font-manrope text-sm font-medium tracking-tight">
                <a class="text-slate-600 dark:text-slate-400 hover:text-blue-500 transition-colors"
                    href="#">Home</a>
                <a class="text-blue-600 dark:text-blue-400 font-bold border-b-2 border-blue-600 dark:border-blue-400 pb-1"
                    href="#">Marketplace</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-blue-500 transition-colors"
                    href="#">Dashboard</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-blue-500 transition-colors"
                    href="#">Profile</a>
            </div>
        </div>
        <div class="flex items-center gap-6">
            <div class="relative hidden lg:block group">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                <input
                    class="pl-10 pr-4 py-2 bg-surface-container-high border-none rounded-xl text-sm focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all w-64"
                    placeholder="Search instructors..." type="text" />
            </div>
            <div class="flex items-center gap-3">
                <button
                    class="p-2 text-on-surface-variant hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all duration-200 rounded-full scale-95 active:opacity-80">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button
                    class="p-2 text-on-surface-variant hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all duration-200 rounded-full scale-95 active:opacity-80">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                </button>
                <img alt="User profile avatar" class="w-10 h-10 rounded-full border-2 border-primary-fixed ml-2"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCk5kf5BoLe6Yjqefyj4uJ2ZW3ULb8_3Tv4hTaxxHR7euX0IoENcrBK4nzHWLunZ-HuUCwbEx9H2p01gCZr21hP9vKfLgYGDtYAd9Zybk17bHjJacUKhLpvjwmDdtWck6EH1HkAdFMTMOgUBroK_ruqTQ4Cj1VXrAXRaAsWLB9OmH6E6XoxnyxhyKk4JNsKGTDx__kO9PT-y5DJQvH1b3B2V3qyGe9kX-OWwn_smqf8RL3-mK1Z2u0ayyNgNQKfRrZsCAxlpqSLrxM" />
            </div>
        </div>
    </nav>

    <main class="pt-28 pb-20 px-4 md:px-8 max-w-7xl mx-auto">

        <header class="mb-16">
            <h1
                class="font-headline text-5xl md:text-6xl font-extrabold text-on-surface tracking-tight leading-none mb-4">
                Master any skill with <br /><span class="text-primary">expert luminaries.</span>
            </h1>
            <p class="text-on-surface-variant text-lg max-w-2xl font-body">
                Curated mentors selected for their technical depth and instructional clarity. From coding to culinary
                arts, find your guide here.
            </p>
        </header>
 
        <section class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-12">

            <div class="lg:col-span-1 bg-surface-container-low p-6 rounded-2xl">
                <h3 class="font-headline font-bold text-sm uppercase tracking-widest text-outline mb-6">Expertise</h3>
                <div class="flex flex-wrap gap-2">
                    <button class="px-4 py-2 bg-primary text-on-primary text-xs font-bold rounded-full">All
                        Skills</button>
                    <button
                        class="px-4 py-2 bg-secondary-fixed text-on-secondary-fixed text-xs font-medium rounded-full hover:bg-secondary-fixed-dim transition-colors">Coding</button>
                    <button
                        class="px-4 py-2 bg-secondary-fixed text-on-secondary-fixed text-xs font-medium rounded-full hover:bg-secondary-fixed-dim transition-colors">Design</button>
                    <button
                        class="px-4 py-2 bg-secondary-fixed text-on-secondary-fixed text-xs font-medium rounded-full hover:bg-secondary-fixed-dim transition-colors">Cooking</button>
                    <button
                        class="px-4 py-2 bg-secondary-fixed text-on-secondary-fixed text-xs font-medium rounded-full hover:bg-secondary-fixed-dim transition-colors">Marketing</button>
                    <button
                        class="px-4 py-2 bg-secondary-fixed text-on-secondary-fixed text-xs font-medium rounded-full hover:bg-secondary-fixed-dim transition-colors">Music</button>
                </div>
            </div>
  
            <div class="lg:col-span-1 bg-surface-container-low p-6 rounded-2xl">
                <h3 class="font-headline font-bold text-sm uppercase tracking-widest text-outline mb-6">Experience Level
                </h3>
                <div class="space-y-3">
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input checked=""
                            class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary/20"
                            type="checkbox" />
                        <span
                            class="text-sm font-medium text-on-surface group-hover:text-primary transition-colors">Beginner</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary/20"
                            type="checkbox" />
                        <span
                            class="text-sm font-medium text-on-surface group-hover:text-primary transition-colors">Intermediate</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary/20"
                            type="checkbox" />
                        <span
                            class="text-sm font-medium text-on-surface group-hover:text-primary transition-colors">Advanced</span>
                    </label>
                </div>
            </div>

            <div class="lg:col-span-2 bg-primary-container p-8 rounded-2xl relative overflow-hidden group">
                <div class="relative z-10 h-full flex flex-col justify-between">
                    <div>
                        <h3 class="text-on-primary-container font-headline text-2xl font-bold mb-2">Active Instructors
                        </h3>
                        <p class="text-on-primary-container/80 text-sm max-w-xs">Join 1,200+ world-class mentors sharing
                            knowledge across 45 unique domains.</p>
                    </div>
                    <div class="flex items-end justify-between">
                        <div class="flex -space-x-3">
                            <img alt="Instructor thumbnail"
                                class="w-10 h-10 rounded-full border-2 border-primary-container"
                                data-alt="professional headshot of a smiling young woman with dark hair against a soft studio background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6U5EPObmdGftUoyCe3BhDzZojHTqCiIISGPIJSYF11dF15RAVxvtEvTm_7T398R0_SNfvzfMw7k3d2T5zJf-x8Ii-oykxArnZ-BWAsTkuxb-adQQK77cjoYyNUeq90hnd4uJLRBkk_32jBJP1H0Nf7r6EzwFNmNpdmIr8JSNIdTc_Bw2TK-P9ZxNyj_TIdqrTlFhoA-D9RFyBP0gNK8zC1Wb-_oMvCg3uIs5jrHvHSuerQcZatxlgHlWJ0gQcfMCCfq4_5TGmbpI" />
                            <img alt="Instructor thumbnail"
                                class="w-10 h-10 rounded-full border-2 border-primary-container"
                                data-alt="close-up portrait of a man with glasses and a friendly expression in a modern office setting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdzyp1kuupWzrhEudjxsc6D1BMN9BPGrrfuD708iZWiFjKIqdVQeTXuwowV6DUQqVxcH4xF39kKm0Lb0bH7N9hJolkl2bB2iuvjV-2Vg4WlJu8yCupH_wFdTWibUDoZHBFihlRe8F0yvsOndwzJ9Ur3IcxtamxtSBRSpkgi9yMYqCkbntTy0Rn2_3r4MtPr8MuLkpaErNH3OLn0f_TCqGw5XzspzBAdgVrbV14ihNJFf1aGrMyra58NHlfS6BL40tQXdrmfmAp7kg" />
                            <img alt="Instructor thumbnail"
                                class="w-10 h-10 rounded-full border-2 border-primary-container"
                                data-alt="vibrant portrait of an artist with colorful clothing in a brightly lit creative studio"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeg35AFeyoXx7l5zy-pUylcrDsHi10Xi5eGTWwg6D_iA17ZRiLq45315oaxl0zMMlcd4TvCZ9-nZrdP9WbVVNQPKDvpaT4odBy5hEmgzboQUtXckU-jrc4-Di7VbAoCc4ctrCAPmTYzlKjxxYs_TZYKs-TNOOmLuabTAUxsZSCGnErp1ieWWKSv4qcRW8Z78DY1DOzjLRXM7tvQlPbZgBuO24EJNyb9_L3mb6HxVOgLlxg2NP-5WobXRxIc845fWKsusLpmlTDa9w" />
                            <div
                                class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-xs font-bold text-white border-2 border-primary-container">
                                +42</div>
                        </div>
                        <button
                            class="bg-surface-container-lowest text-primary px-6 py-3 rounded-xl font-bold text-sm shadow-sm hover:translate-y-[-2px] transition-transform">Become
                            a Mentor</button>
                    </div>
                </div>
           
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-20 -mt-20 blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-tertiary/20 rounded-full -ml-10 -mb-10 blur-2xl">
                </div>
            </div>
        </section>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
        @foreach($skills as $skill)
            <div
                class="bg-surface-container-lowest rounded-2xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(25,28,30,0.06)] transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img alt="Marcus Vane"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        data-alt="creative designer sketching ideas on a tablet in a studio filled with vibrant art and inspiration boards"
                        src="{{$skill->icon_url}}" />
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                        <span class="material-symbols-outlined text-yellow-500 text-sm"
                            style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="text-xs font-bold text-on-surface">4.8</span>
                    </div>
                    <div class="absolute bottom-4 left-4 flex gap-2">
                        <span
                            class="px-3 py-1 bg-primary/90 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-wider rounded-lg">{{$skill->category}}</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-headline text-xl font-bold text-on-surface">{{$skill->name}}</h3>
                            <p class="text-sm text-outline font-medium"><span class="text-black font-bold">Teacher :</span> {{$skill->firstname}} {{$skill->lastname}}</p>
                        </div>
                        <div class="text-right">
                            <span class="block text-xs font-bold text-tertiary uppercase">{{$skill->level}}</span>
                            <span class="text-sm font-bold text-on-surface">{{$skill->xp}} XP</span>
                        </div>
                    </div>
                    <p class="text-on-surface-variant text-sm line-clamp-2 mb-6 leading-relaxed">
                        {{$skill->description}}
                    </p>
                    <div class="mb-6">
                        <div class="flex justify-between text-[10px] font-bold text-outline uppercase mb-2">
                            <span>Experience</span>
                            <span>{{$skill->years}} Years</span>
                        </div>
                    </div>
                    <button data-skill-id="{{$skill->teacherskillid}}"
                        class="learningbtn w-full py-3 bg-surface-container-low hover:bg-primary hover:text-white text-primary font-bold rounded-xl transition-all flex items-center justify-center gap-2 group/btn">
                        Request Learning
                        <span
                            class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </div>
            </div>
        @endforeach
        
            <div
                class="bg-surface-container-low rounded-2xl border-2 border-dashed border-outline-variant flex flex-col items-center justify-center p-8 text-center min-h-[400px]">
                <div
                    class="w-16 h-16 bg-surface-container-lowest rounded-full flex items-center justify-center mb-6 shadow-sm">
                    <span class="material-symbols-outlined text-primary text-3xl">psychology_alt</span>
                </div>
                <h3 class="font-headline text-xl font-bold text-on-surface mb-2">Can't find a skill?</h3>
                <p class="text-sm text-on-surface-variant max-w-[240px] mb-8">
                    We are Working on It
                </p>
                
            </div>
        
        </div>

        <div class="mt-16 flex items-center justify-between py-8 border-t border-surface-container-high">
            <span class="text-sm text-outline font-medium">Showing 12 of 1,248 instructors</span>
            <div class="flex items-center gap-2">
                <button
                    class="p-2 bg-surface-container-low text-on-surface-variant rounded-lg hover:bg-surface-container-high disabled:opacity-30">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="w-10 h-10 bg-primary text-on-primary rounded-lg font-bold">1</button>
                <button
                    class="w-10 h-10 bg-surface-container-low text-on-surface-variant rounded-lg font-bold hover:bg-surface-container-high">2</button>
                <button
                    class="w-10 h-10 bg-surface-container-low text-on-surface-variant rounded-lg font-bold hover:bg-surface-container-high">3</button>
                <span class="px-2 text-outline">...</span>
                <button
                    class="w-10 h-10 bg-surface-container-low text-on-surface-variant rounded-lg font-bold hover:bg-surface-container-high">48</button>
                <button
                    class="p-2 bg-surface-container-low text-on-surface-variant rounded-lg hover:bg-surface-container-high">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
    </main>

    <nav
        class="md:hidden fixed bottom-0 left-0 right-0 bg-white/90 backdrop-blur-xl flex justify-around items-center h-16 px-4 z-50">
        <button class="flex flex-col items-center gap-1 text-outline">
            <span class="material-symbols-outlined">home</span>
            <span class="text-[10px] font-bold">Home</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-primary">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">explore</span>
            <span class="text-[10px] font-bold">Explore</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-outline">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-[10px] font-bold">Learnings</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-outline">
            <span class="material-symbols-outlined">person</span>
            <span class="text-[10px] font-bold">Profile</span>
        </button>
    </nav>

    <div id="learningpopup"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-50 flex items-center justify-center">
        <div class="bg-surface-container-lowest rounded-3xl shadow-2xl w-full max-w-lg p-8 relative">
            <button id="closeModalBtn"
                class="absolute top-4 right-4 text-on-surface hover:text-primary text-2xl">&times;</button>
            <h2 class="text-2xl font-bold text-on-surface mb-6">Request a Learning Session</h2>
            <form method="POST" action="{{ Route('request.learning') }}" id="learningRequestForm"
                class="space-y-4">
                @csrf
                <input type="hidden" name="skill_id" id="skill_id">
                
                <div>
                    <label class="block text-sm font-medium text-on-surface mb-1">Description</label>
                    <textarea name="description" required
                        class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-on-surface mb-1">Goal Description (optional)</label>
                    <textarea name="goal_description"
                        class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-on-surface mb-1">Preferred Session Type</label>
                    <select name="preferred_session_type" required
                        class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent">
                        <option value="">Select session type</option>
                        <option value="video">Video</option>
                        <option value="chat">Chat</option>

                    </select>
                </div>

                <button type="submit"
                    class="w-full py-3 bg-primary text-on-primary rounded-xl font-bold hover:bg-primary-container transition-all">Submit
                    Request</button>
            </form>
        </div>
    </div>

@if(session('success'))
<div id="success-popup"
    class="fixed top-6 left-1/2 -translate-x-1/2 z-50 
           glass-card bg-surface-container-lowest 
           px-6 py-4 rounded-2xl 
           shadow-[0_16px_40px_-8px_rgba(0,74,198,0.2)] 
           flex items-center gap-3 
           opacity-0 translate-y-[-10px] 
           transition-all duration-500">

    <!-- Icon -->
    <span class="material-symbols-outlined text-primary text-[22px]">
        check_circle
    </span>

    <!-- Message -->
    <p class="text-sm font-semibold text-on-surface">
        {{ session('success') }}
    </p>
</div>
<script>
 window.addEventListener('DOMContentLoaded', () => {
      const popup = document.getElementById('success-popup');

      // Show the popup
      popup.classList.remove('opacity-0');
      popup.classList.add('opacity-100');

      // Hide after 10 seconds
      setTimeout(() => {
        popup.classList.remove('opacity-100');
        popup.classList.add('opacity-0');
      }, 10000);
    });
</script>
@endif



<script>

const learningpopup = document.getElementById('learningpopup');
const learningbtn = document.querySelectorAll('.learningbtn');
const closeModalBtn = document.getElementById('closeModalBtn');

learningbtn.forEach( (u)=>{

    u.addEventListener('click', ()=>{
  
    let skillId = u.dataset.skillId;
    
    document.getElementById('skill_id').value = skillId;

    learningpopup.classList.remove('hidden');
    })
})

closeModalBtn.addEventListener('click', ()=> {
    
    learningpopup.classList.add('hidden');
})
</script>

</body>

</html>

</body>

</html>
