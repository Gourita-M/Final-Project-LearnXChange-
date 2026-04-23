@if (session('error'))
<div id="error-popup"
    class="fixed top-6 left-1/2 -translate-x-1/2 z-50 
    glass-card bg-error-container 
    px-6 py-4 rounded-2xl 
    shadow-[0_16px_40px_-8px_rgba(186,26,26,0.2)] 
    flex items-center gap-3 
    opacity-0 translate-y-[-10px] 
    transition-all duration-500">

    <span class="material-symbols-outlined text-error text-[22px]">
        error
    </span>

    <p class="text-sm font-semibold text-on-error-container">
        {{ session('error') }}
    </p>
</div>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const popup = document.getElementById('error-popup');

        popup.classList.remove('opacity-0');
        popup.classList.add('opacity-100');

        setTimeout(() => {
            popup.classList.remove('opacity-100');
            popup.classList.add('opacity-0');
        }, 10000);
    });
</script>
@endif