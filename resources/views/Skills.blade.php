<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LearnXChange | Instructor Marketplace</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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

        .pagination-link.active {
            @apply bg-primary text-on-primary;
        }

        .pagination-link:not(.active) {
            @apply bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high;
        }
    </style>
</head>

<body class="bg-surface mt-16 font-body text-on-surface antialiased">

    @include('layouts.navbar')

    <main class="pt-28 pb-20 px-4 md:px-8 max-w-7xl mx-auto">

        <header class="mb-16">
            <h1 class="font-headline text-5xl md:text-6xl font-extrabold text-on-surface tracking-tight leading-none mb-4">
                Master any skill with <br />
                <span class="text-primary">expert luminaries.</span>
            </h1>
            <p class="text-on-surface-variant text-lg max-w-2xl font-body">
                Curated mentors selected for their technical depth and instructional clarity. From coding to culinary arts, find your guide here.
            </p>
        </header>

        <form method="GET" action="{{ route('skills.index') }}" class="mb-8 flex gap-2">
            <input 
                type="text"
                name="search"
                id="searc"
                value="{{ request('search') }}"
                placeholder="Search skill or teacher..."
                class="flex-1 border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent transition-all"
            />
            <button 
                type="submit" 
                class="px-6 bg-primary text-white rounded-xl font-semibold hover:bg-primary-container transition-all"
            >
                Search
            </button>
        </form>

        <form method="GET" action="{{ route('skills.index') }}" id="filterForm" class="mb-12">
            <input type="hidden" name="search" value="{{ request('search') }}">
            
            <section class="grid grid-cols-1 lg:grid-cols-4 gap-6">

                <div class="lg:col-span-1 bg-surface-container-low p-6 rounded-2xl">
                    <h3 class="font-headline font-bold text-sm uppercase tracking-widest text-outline mb-6">
                        Category
                    </h3>
                    <div class="space-y-3">

                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input 
                                type="radio" 
                                name="category" 
                                value="" 
                                {{ !request('category') ? 'checked' : '' }}
                                class="w-5 h-5 rounded-full border-outline-variant text-primary focus:ring-primary/20"
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <span class="text-sm font-medium text-on-surface group-hover:text-primary transition-colors">
                                All Skills
                            </span>
                        </label>
                    
                        @foreach($categories as $category)
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input 
                                type="radio" 
                                name="category" 
                                value="{{$category->category_name}}" 
                                {{ request('category') === $category->category_name ? 'checked' : '' }}
                                class="w-5 h-5 rounded-full border-outline-variant text-primary focus:ring-primary/20"
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <span class="text-sm font-medium text-on-surface group-hover:text-primary transition-colors">
                                {{$category->category_name}}
                            </span>
                        </label>
                        @endforeach
                        
                    </div>
                </div>

                <div class="lg:col-span-1 bg-surface-container-low p-6 rounded-2xl">
                    <h3 class="font-headline font-bold text-sm uppercase tracking-widest text-outline mb-6">
                        Experience Level
                    </h3>
                    <div class="space-y-3">

                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input 
                                type="checkbox" 
                                name="levels[]" 
                                value="Beginner" 
                                {{ in_array('Beginner', request('levels', [])) ? 'checked' : '' }}
                                class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary/20"
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <span class="text-sm font-medium text-on-surface group-hover:text-primary transition-colors">
                                Beginner
                            </span>
                        </label>

                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input 
                                type="checkbox" 
                                name="levels[]" 
                                value="Intermediate" 
                                {{ in_array('Intermediate', request('levels', [])) ? 'checked' : '' }}
                                class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary/20"
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <span class="text-sm font-medium text-on-surface group-hover:text-primary transition-colors">
                                Intermediate
                            </span>
                        </label>

                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input 
                                type="checkbox" 
                                name="levels[]" 
                                value="Advanced" 
                                {{ in_array('Advanced', request('levels', [])) ? 'checked' : '' }}
                                class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary/20"
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <span class="text-sm font-medium text-on-surface group-hover:text-primary transition-colors">
                                Advanced
                            </span>
                        </label>
                    </div>
                </div>

            </section>
        </form>

        <div class="mb-6 flex items-center justify-between">
            <span class="text-sm font-medium text-outline">
                @if($skills->count() > 0)
                    Showing {{ $skills->firstItem() }} to {{ $skills->lastItem() }} of {{ $skills->total() }} instructors
                @endif
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mb-12">
  
            @forelse ($skills as $skill)
                <div class="bg-surface-container-lowest rounded-2xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(25,28,30,0.06)] transition-all duration-300">

                    <div class="relative h-48 overflow-hidden">
                        <img 
                            alt="{{ $skill->name }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="{{ $skill->icon_url ?? 'https://via.placeholder.com/400x300' }}" 
                        />
      
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                            <span 
                                class="material-symbols-outlined text-yellow-500 text-sm"
                                style="font-variation-settings: 'FILL' 1;">
                                star
                            </span>
                            <span class="text-xs font-bold text-on-surface">4.8</span>
                        </div>
                        
                        <div class="absolute bottom-4 left-4 flex gap-2">
                            <span class="px-3 py-1 bg-primary/90 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-wider rounded-lg">
                                {{ $skill->category }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-headline text-xl font-bold text-on-surface">
                                    {{ $skill->name }}
                                </h3>
                                <p class="text-sm text-outline font-medium">
                                    <span class="text-black font-bold">Teacher:</span> 
                                    {{ $skill->firstname }} {{ $skill->lastname }}
                                </p>
                            </div>
                            <div class="text-right">
                                <span class="block text-xs font-bold text-tertiary uppercase">
                                    {{ $skill->level }}
                                </span>
                                <span class="text-sm font-bold text-on-surface">
                                    {{ $skill->xp }} XP
                                </span>
                            </div>
                        </div>
                        
                        <p class="text-on-surface-variant text-sm line-clamp-2 mb-6 leading-relaxed">
                            {{ $skill->description ?? 'No description available' }}
                        </p>
                        
                        <div class="mb-6">
                            <div class="flex justify-between text-[10px] font-bold text-outline uppercase mb-2">
                                <span>Experience</span>
                                <span>{{ $skill->years ?? 0 }} Years</span>
                            </div>
                        </div>
                        @role('learner')
                        <button 
                            data-skill-id="{{ $skill->teacherskillid }}"
                            class="learningbtn w-full py-3 bg-surface-container-low hover:bg-primary hover:text-white text-primary font-bold rounded-xl transition-all flex items-center justify-center gap-2 group/btn"
                        >
                            Request Learning
                            <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">
                                arrow_forward
                            </span>
                        </button>
                        @endrole
                    </div>
                </div>
            @empty
          
                <div class="col-span-full">
                    <div class="bg-surface-container-low rounded-2xl border-2 border-dashed border-outline-variant flex flex-col items-center justify-center p-12 text-center">
                        <div class="w-16 h-16 bg-surface-container-lowest rounded-full flex items-center justify-center mb-6 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-3xl">
                                psychology_alt
                            </span>
                        </div>
                        <h3 class="font-headline text-xl font-bold text-on-surface mb-2">
                            No instructors found
                        </h3>
                        <p class="text-sm text-on-surface-variant max-w-[240px]">
                            Try adjusting your search or filters to find the perfect instructor
                        </p>
                    </div>
                </div>
            @endforelse

            @if($skills->count() < 9 && $skills->count() > 0)
                <div class="bg-surface-container-low rounded-2xl border-2 border-dashed border-outline-variant flex flex-col items-center justify-center p-8 text-center min-h-[400px]">
                    <div class="w-16 h-16 bg-surface-container-lowest rounded-full flex items-center justify-center mb-6 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-3xl">
                            psychology_alt
                        </span>
                    </div>
                    <h3 class="font-headline text-xl font-bold text-on-surface mb-2">
                        Can't find a skill?
                    </h3>
                    <p class="text-sm text-on-surface-variant max-w-[240px] mb-8">
                        We are working on adding more instructors
                    </p>
                </div>
            @endif
        </div>

        @if($skills->hasPages())
            <div class="mt-16 flex items-center justify-between py-8 border-t border-surface-container-high flex-wrap gap-6">
                <span class="text-sm text-outline font-medium">
                    Page {{ $skills->currentPage() }} of {{ $skills->lastPage() }}
                </span>
                
                <div class="flex items-center gap-2 flex-wrap">
                 
                    @if($skills->onFirstPage())
                        <button 
                            disabled
                            class="p-2 bg-surface-container-low text-on-surface-variant rounded-lg opacity-30 cursor-not-allowed"
                        >
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                    @else
                        <a 
                            href="{{ $skills->previousPageUrl() }}"
                            class="p-2 bg-surface-container-low text-on-surface-variant rounded-lg hover:bg-surface-container-high transition-colors"
                        >
                            <span class="material-symbols-outlined">chevron_left</span>
                        </a>
                    @endif

                    @php
                        $lastPage = $skills->lastPage();
                        $currentPage = $skills->currentPage();
                        $range = 2;
                    @endphp

                    @if($currentPage > $range + 1)
                        <a 
                            href="{{ $skills->url(1) }}" 
                            class="w-10 h-10 bg-surface-container-low text-on-surface-variant rounded-lg font-bold hover:bg-surface-container-high transition-colors flex items-center justify-center"
                        >
                            1
                        </a>
                        @if($currentPage > $range + 2)
                            <span class="px-2 text-outline">...</span>
                        @endif
                    @endif

                    @for($i = max(1, $currentPage - $range); $i <= min($lastPage, $currentPage + $range); $i++)
                        @if($i == $currentPage)
  
                            <button 
                                disabled 
                                class="w-10 h-10 bg-primary text-on-primary rounded-lg font-bold flex items-center justify-center"
                            >
                                {{ $i }}
                            </button>
                        @else
   
                            <a 
                                href="{{ $skills->url($i) }}" 
                                class="w-10 h-10 bg-surface-container-low text-on-surface-variant rounded-lg font-bold hover:bg-surface-container-high transition-colors flex items-center justify-center"
                            >
                                {{ $i }}
                            </a>
                        @endif
                    @endfor

                    @if($currentPage < $lastPage - $range - 1)
                        @if($currentPage < $lastPage - $range - 2)
                            <span class="px-2 text-outline">...</span>
                        @endif
                        <a 
                            href="{{ $skills->url($lastPage) }}" 
                            class="w-10 h-10 bg-surface-container-low text-on-surface-variant rounded-lg font-bold hover:bg-surface-container-high transition-colors flex items-center justify-center"
                        >
                            {{ $lastPage }}
                        </a>
                    @endif

                    @if($skills->hasMorePages())
                        <a 
                            href="{{ $skills->nextPageUrl() }}"
                            class="p-2 bg-surface-container-low text-on-surface-variant rounded-lg hover:bg-surface-container-high transition-colors"
                        >
                            <span class="material-symbols-outlined">chevron_right</span>
                        </a>
                    @else
                        <button 
                            disabled
                            class="p-2 bg-surface-container-low text-on-surface-variant rounded-lg opacity-30 cursor-not-allowed"
                        >
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    @endif
                </div>
            </div>
        @endif

    </main>

    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white/90 backdrop-blur-xl flex justify-around items-center h-16 px-4 z-50">
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

    <div 
        id="learningpopup"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-50 flex items-center justify-center"
    >
        <div class="bg-surface-container-lowest rounded-3xl shadow-2xl w-full max-w-lg p-8 relative">

            <button 
                id="closeModalBtn"
                class="absolute top-4 right-4 text-on-surface hover:text-primary text-2xl"
                aria-label="Close modal"
            >
                &times;
            </button>
      
            <h2 class="text-2xl font-bold text-on-surface mb-6">
                Request a Learning Session
            </h2>
           
            <form method="POST" action="{{ route('request.learning') }}" id="learningRequestForm" class="space-y-4">
                @csrf
                
                <input type="hidden" name="skill_id" id="skill_id">

                <div>
                    <label class="block text-sm font-medium text-on-surface mb-1">
                        Description
                    </label>
                    <textarea 
                        name="description" 
                        required
                        placeholder="Describe what you want to learn..."
                        class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent"
                    ></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-on-surface mb-1">
                        Goal Description (optional)
                    </label>
                    <textarea 
                        name="goal_description"
                        placeholder="What do you want to achieve?"
                        class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent"
                    ></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-on-surface mb-1">
                        Preferred Session Type
                    </label>
                    <select 
                        name="preferred_session_type" 
                        required
                        class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent"
                    >
                        <option value="">Select session type</option>
                        <option value="video">Video</option>
                        <option value="chat">Chat</option>
                    </select>
                </div>

                <button 
                    type="submit"
                    class="w-full py-3 bg-primary text-on-primary rounded-xl font-bold hover:bg-primary-container transition-all"
                >
                    Submit Request
                </button>
            </form>
        </div>
    </div>

    @if (session('success'))
        <div 
            id="success-popup"
            class="fixed top-6 left-1/2 -translate-x-1/2 z-50 
                   glass-card bg-surface-container-lowest 
                   px-6 py-4 rounded-2xl 
                   shadow-[0_16px_40px_-8px_rgba(0,74,198,0.2)] 
                   flex items-center gap-3 
                   opacity-0 translate-y-[-10px] 
                   transition-all duration-500"
        >
            <span class="material-symbols-outlined text-primary text-[22px]">
                check_circle
            </span>
            <p class="text-sm font-semibold text-on-surface">
                {{ session('success') }}
            </p>
        </div>
    @endif

    <script>

        const learningModal = document.getElementById('learningpopup');
        const learningButtons = document.querySelectorAll('.learningbtn');
        const closeModalButton = document.getElementById('closeModalBtn');
        const learningRequestForm = document.getElementById('learningRequestForm');
        const skillIdInput = document.getElementById('skill_id');
        
        learningButtons.forEach((button) => {
            button.addEventListener('click', openLearningModal);
        });
        
        closeModalButton.addEventListener('click', closeLearningModal);
        
        learningModal.addEventListener('click', (event) => {
           
            if (event.target === learningModal) {
                closeLearningModal();
            }
        });
        
        function openLearningModal(event) {
            
            const skillId = event.currentTarget.dataset.skillId;
            
            skillIdInput.value = skillId;
            
            learningModal.classList.remove('hidden');
            
            document.body.style.overflow = 'hidden';
        }
        
        function closeLearningModal() {

            learningModal.classList.add('hidden');
            
            document.body.style.overflow = 'auto';
            
            learningRequestForm.reset();
        }

        window.addEventListener('DOMContentLoaded', () => {
            const successPopup = document.getElementById('success-popup');
            
            if (!successPopup) return;
            
            successPopup.classList.remove('opacity-0');
            successPopup.classList.add('opacity-100');
            
            setTimeout(() => {
                successPopup.classList.remove('opacity-100');
                successPopup.classList.add('opacity-0');
            }, 10000);
        });

        document.addEventListener('keydown', (event) => {

            if (event.key === 'Escape' && !learningModal.classList.contains('hidden')) {
                closeLearningModal();
            }
        });

        learningRequestForm.addEventListener('submit', (event) => {

            const descriptionField = learningRequestForm.querySelector('textarea[name="description"]');
            const sessionTypeField = learningRequestForm.querySelector('select[name="preferred_session_type"]');

            if (!descriptionField.value.trim()) {
                event.preventDefault();
                alert('Please fill in the Description field');
                descriptionField.focus();
                return;
            }
            
            if (!sessionTypeField.value) {
                event.preventDefault();
                alert('Please select a Session Type');
                sessionTypeField.focus();
                return;
            }

        });
    </script>

</body>

</html>