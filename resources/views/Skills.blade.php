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
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1, h2, h3, .font-headline {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-nav {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .glass-card {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .btn-primary {
            background-color: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .text-teal-brand {
            color: #005a82;
        }

        .bg-gray-light {
            background-color: #f2f4f6;
        }
    </style>
</head>

<body class="bg-slate-50 mt-16 font-body text-gray-900 antialiased">

    @include('layouts.notification')
    @include('layouts.notificationError')
    @include('layouts.navbar')

    <main class="pt-28 pb-20 px-4 md:px-8 max-w-7xl mx-auto">

        <header class="mb-16">
            <h1 class="font-headline text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-none mb-4">
                Master any skill with <br />
                <span class="text-blue-600">expert luminaries.</span>
            </h1>
            <p class="text-gray-600 text-lg max-w-2xl font-body">
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
                class="flex-1 border border-gray-300 rounded-xl p-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
            />
            <button 
                type="submit" 
                class="px-6 btn-primary rounded-xl font-semibold hover:opacity-90 transition-all"
            >
                Search
            </button>
        </form>

        <form method="GET" action="{{ route('skills.index') }}" id="filterForm" class="mb-12">
            <input type="hidden" name="search" value="{{ request('search') }}">
            
            <section class="grid grid-cols-1 lg:grid-cols-4 gap-6">

                <div class="lg:col-span-1 bg-gray-light p-6 rounded-2xl">
                    <h3 class="font-headline font-bold text-sm uppercase tracking-widest text-gray-500 mb-6">
                        Category
                    </h3>
                    <div class="space-y-3">

                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input 
                                type="radio" 
                                name="category" 
                                value="" 
                                {{ !request('category') ? 'checked' : '' }}
                                class="w-5 h-5 rounded-full border-gray-300 text-blue-600 focus:ring-blue-500/20"
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <span class="text-sm font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
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
                                class="w-5 h-5 rounded-full border-gray-300 text-blue-600 focus:ring-blue-500/20"
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <span class="text-sm font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                                {{$category->category_name}}
                            </span>
                        </label>
                        @endforeach
                        
                    </div>
                </div>

                <div class="lg:col-span-1 bg-gray-light p-6 rounded-2xl">
                    <h3 class="font-headline font-bold text-sm uppercase tracking-widest text-gray-500 mb-6">
                        Experience Level
                    </h3>
                    <div class="space-y-3">

                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input 
                                type="checkbox" 
                                name="levels[]" 
                                value="Beginner" 
                                {{ in_array('Beginner', request('levels', [])) ? 'checked' : '' }}
                                class="w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500/20"
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <span class="text-sm font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                                Beginner
                            </span>
                        </label>

                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input 
                                type="checkbox" 
                                name="levels[]" 
                                value="Intermediate" 
                                {{ in_array('Intermediate', request('levels', [])) ? 'checked' : '' }}
                                class="w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500/20"
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <span class="text-sm font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                                Intermediate
                            </span>
                        </label>

                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input 
                                type="checkbox" 
                                name="levels[]" 
                                value="Advanced" 
                                {{ in_array('Advanced', request('levels', [])) ? 'checked' : '' }}
                                class="w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500/20"
                                onchange="document.getElementById('filterForm').submit()" 
                            />
                            <span class="text-sm font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                                Advanced
                            </span>
                        </label>
                    </div>
                </div>

            </section>
        </form>

        <div class="mb-6 flex items-center justify-between">
            <span class="text-sm font-medium text-gray-500">
                @if($skills->count() > 0)
                    Showing {{ $skills->firstItem() }} to {{ $skills->lastItem() }} of {{ $skills->total() }} instructors
                @endif
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mb-12">
  
            @forelse ($skills as $skill)
                <div class="bg-white rounded-2xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(25,28,30,0.06)] transition-all duration-300 border border-gray-200">

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
                            <span class="text-xs font-bold text-gray-900">4.8</span>
                        </div>
                        
                        <div class="absolute bottom-4 left-4 flex gap-2">
                            <span class="px-3 py-1 btn-primary text-white text-[10px] font-bold uppercase tracking-wider rounded-lg">
                                {{ $skill->category }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-headline text-xl font-bold text-gray-900">
                                    {{ $skill->name }}
                                </h3>
                                <p class="text-sm text-gray-500 font-medium">
                                    <span class="text-gray-900 font-bold">Teacher:</span> 
                                    {{ $skill->firstname }} {{ $skill->lastname }}
                                </p>
                            </div>
                            <div class="text-right">
                                <span class="block text-xs font-bold text-teal-brand uppercase">
                                    {{ $skill->level }}
                                </span>
                                <span class="text-sm font-bold text-gray-900">
                                    {{ $skill->xp }} XP
                                </span>
                            </div>
                        </div>
                        
                        <p class="text-gray-600 text-sm line-clamp-2 mb-6 leading-relaxed">
                            {{ $skill->description ?? 'No description available' }}
                        </p>
                        
                        <div class="mb-6">
                            <div class="flex justify-between text-[10px] font-bold text-gray-500 uppercase mb-2">
                                <span>Experience</span>
                                <span>{{ $skill->years ?? 0 }} Years</span>
                            </div>
                        </div>
                        @role('learner')
                        <button 
                            data-skill-id="{{ $skill->teacherskillid }}"
                            class="learningbtn w-full py-3 bg-gray-light hover:btn-primary text-blue-600 hover:text-white font-bold rounded-xl transition-all flex items-center justify-center gap-2 group/btn"
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
                    <div class="bg-gray-light rounded-2xl border-2 border-dashed border-gray-300 flex flex-col items-center justify-center p-12 text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm">
                            <span class="material-symbols-outlined text-blue-600 text-3xl">
                                psychology_alt
                            </span>
                        </div>
                        <h3 class="font-headline text-xl font-bold text-gray-900 mb-2">
                            No instructors found
                        </h3>
                        <p class="text-sm text-gray-600 max-w-[240px]">
                            Try adjusting your search or filters to find the perfect instructor
                        </p>
                    </div>
                </div>
            @endforelse

            @if($skills->count() < 9 && $skills->count() > 0)
                <div class="bg-gray-light rounded-2xl border-2 border-dashed border-gray-300 flex flex-col items-center justify-center p-8 text-center min-h-[400px]">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm">
                        <span class="material-symbols-outlined text-blue-600 text-3xl">
                            psychology_alt
                        </span>
                    </div>
                    <h3 class="font-headline text-xl font-bold text-gray-900 mb-2">
                        Can't find a skill?
                    </h3>
                    <p class="text-sm text-gray-600 max-w-[240px] mb-8">
                        We are working on adding more instructors
                    </p>
                </div>
            @endif
        </div>

        @if($skills->hasPages())
            <div class="mt-16 flex items-center justify-between py-8 border-t border-gray-200 flex-wrap gap-6">
                <span class="text-sm text-gray-500 font-medium">
                    Page {{ $skills->currentPage() }} of {{ $skills->lastPage() }}
                </span>
                
                <div class="flex items-center gap-2 flex-wrap">
                 
                    @if($skills->onFirstPage())
                        <button 
                            disabled
                            class="p-2 bg-gray-light text-gray-500 rounded-lg opacity-30 cursor-not-allowed"
                        >
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                    @else
                        <a 
                            href="{{ $skills->previousPageUrl() }}"
                            class="p-2 bg-gray-light text-gray-500 rounded-lg hover:bg-gray-200 transition-colors"
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
                            class="w-10 h-10 bg-gray-light text-gray-500 rounded-lg font-bold hover:bg-gray-200 transition-colors flex items-center justify-center"
                        >
                            1
                        </a>
                        @if($currentPage > $range + 2)
                            <span class="px-2 text-gray-500">...</span>
                        @endif
                    @endif

                    @for($i = max(1, $currentPage - $range); $i <= min($lastPage, $currentPage + $range); $i++)
                        @if($i == $currentPage)
  
                            <button 
                                disabled 
                                class="w-10 h-10 btn-primary rounded-lg font-bold flex items-center justify-center"
                            >
                                {{ $i }}
                            </button>
                        @else
   
                            <a 
                                href="{{ $skills->url($i) }}" 
                                class="w-10 h-10 bg-gray-light text-gray-500 rounded-lg font-bold hover:bg-gray-200 transition-colors flex items-center justify-center"
                            >
                                {{ $i }}
                            </a>
                        @endif
                    @endfor

                    @if($currentPage < $lastPage - $range - 1)
                        @if($currentPage < $lastPage - $range - 2)
                            <span class="px-2 text-gray-500">...</span>
                        @endif
                        <a 
                            href="{{ $skills->url($lastPage) }}" 
                            class="w-10 h-10 bg-gray-light text-gray-500 rounded-lg font-bold hover:bg-gray-200 transition-colors flex items-center justify-center"
                        >
                            {{ $lastPage }}
                        </a>
                    @endif

                    @if($skills->hasMorePages())
                        <a 
                            href="{{ $skills->nextPageUrl() }}"
                            class="p-2 bg-gray-light text-gray-500 rounded-lg hover:bg-gray-200 transition-colors"
                        >
                            <span class="material-symbols-outlined">chevron_right</span>
                        </a>
                    @else
                        <button 
                            disabled
                            class="p-2 bg-gray-light text-gray-500 rounded-lg opacity-30 cursor-not-allowed"
                        >
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    @endif
                </div>
            </div>
        @endif

    </main>

    <!-- Learning Request Modal -->
    <div 
        id="learningpopup"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-50 flex items-center justify-center"
    >
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-lg p-8 relative">

            <button 
                id="closeModalBtn"
                class="absolute top-4 right-4 text-gray-900 hover:text-blue-600 text-2xl"
                aria-label="Close modal"
            >
                &times;
            </button>
      
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Request a Learning Session
            </h2>
           
            <form method="POST" action="{{ route('request.learning') }}" id="learningRequestForm" class="space-y-4">
                @csrf
                
                <input type="hidden" name="skill_id" id="skill_id">

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">
                        Description
                    </label>
                    <textarea 
                        name="description" 
                        required
                        placeholder="Describe what you want to learn..."
                        class="w-full border border-gray-300 rounded-xl p-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    ></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">
                        Goal Description (optional)
                    </label>
                    <textarea 
                        name="goal_description"
                        placeholder="What do you want to achieve?"
                        class="w-full border border-gray-300 rounded-xl p-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    ></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">
                        Preferred Session Type
                    </label>
                    <select 
                        name="preferred_session_type" 
                        required
                        class="w-full border border-gray-300 rounded-xl p-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                        <option value="">Select session type</option>
                        <option value="video">Video</option>
                        <option value="chat">Chat</option>
                    </select>
                </div>

                <button 
                    type="submit"
                    class="w-full py-3 btn-primary rounded-xl font-bold hover:opacity-90 transition-all"
                >
                    Submit Request
                </button>
            </form>
        </div>
    </div>

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