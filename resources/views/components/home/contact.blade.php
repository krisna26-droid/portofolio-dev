<section id="contact" class="relative min-h-[70vh] flex flex-col justify-center items-center px-6 md:px-10 py-20 border-t border-white/5 overflow-hidden">
    {{-- Grid Background --}}
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" 
         style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 50px 50px;">
    </div>

    {{-- Content Container --}}
    <div class="relative z-10 w-full max-w-4xl flex flex-col items-center text-center">
        
        {{-- Heading --}}
        <h2 class="text-[15vw] md:text-[10vw] font-black tracking-tighter leading-[0.85] uppercase italic text-white mb-8">
            {{ __('portfolio.contact.title_1') }} <br class="md:hidden"> 
            <span class="text-gradient">{{ __('portfolio.contact.title_2') }}</span>
        </h2>

        {{-- Subtitle --}}
        <p class="text-gray-500 uppercase tracking-[0.3em] text-[10px] md:text-xs mb-12 max-w-2xl leading-relaxed">
            {{ __('portfolio.contact.subtitle') }}
        </p>

        {{-- CTA Button --}}
        <a href="mailto:parasteamdev@gmail.com" 
           class="btn-aggressive inline-flex items-center gap-4 px-12 py-6 bg-accent text-white font-black rounded-2xl uppercase tracking-[0.2em] shadow-[0_0_50px_rgba(139,92,246,0.3)] hover:scale-105 active:scale-95 transition-all mb-20">
            {{ __('portfolio.contact.cta') }} 
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M7 17L17 7M17 7H7M17 7v10"/>
            </svg>
        </a>

        {{-- Social Icons --}}
        <div class="flex flex-wrap justify-center gap-4">
            {{-- Instagram --}}
            <a href="https://www.instagram.com/krisnaaaaadddd?igsh=MWNwaDQwc21pZmNxdA%3D%3D&utm_source=qr" target="_blank" class="w-14 h-14 glass-card rounded-2xl flex items-center justify-center hover:text-accent hover:border-accent/50 group transition-all">
                <svg class="w-6 h-6 text-gray-400 group-hover:text-accent transition-colors" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.668-.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281-.059 1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                </svg>
            </a>
            
            {{-- GitHub --}}
            <a href="https://github.com/krisna26-droid" target="_blank" class="w-14 h-14 glass-card rounded-2xl flex items-center justify-center hover:text-accent hover:border-accent/50 group transition-all">
                <svg class="w-6 h-6 text-gray-400 group-hover:text-accent transition-colors" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                </svg>
            </a>

            {{-- LinkedIn --}}
            <a href="https://www.linkedin.com/in/nyoman-krisna-adi-guna-8aa4a4355/" target="_blank" class="w-14 h-14 glass-card rounded-2xl flex items-center justify-center hover:text-accent hover:border-accent/50 group transition-all">
                <svg class="w-6 h-6 text-gray-400 group-hover:text-accent transition-colors" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
            </a>

            {{-- Dribbble --}}
            <a href="https://dribbble.com/yourusername" target="_blank" class="w-14 h-14 glass-card rounded-2xl flex items-center justify-center hover:text-accent hover:border-accent/50 group transition-all">
                <svg class="w-6 h-6 text-gray-400 group-hover:text-accent transition-colors" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.017-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.816zm-11.62-2.073c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.176zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.455 0-.9.04-1.4.09zm10.437 3.887c-.223.308-1.943 2.487-5.912 4.044.247.517.47 1.043.68 1.576.308-.043.61-.077.917-.077 3.296 0 5.86 1.105 6.695 1.477-.105-2.65-1.1-5.07-2.38-7.02z"/>
                </svg>
            </a>
        </div>
    </div>
</section>