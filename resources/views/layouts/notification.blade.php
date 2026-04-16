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