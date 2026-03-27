import './bootstrap';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    const cursor = document.getElementById('v-cursor');
    const mainContent = document.getElementById('main-content');

    // 1. Kursor Logic (Slim & Optimized)
    if (cursor) {
        // Gunakan quickTo untuk performa yang jauh lebih ringan dibanding to() biasa
        const xTo = gsap.quickTo(cursor, "x", {duration: 0.1, ease: "power2.out"});
        const yTo = gsap.quickTo(cursor, "y", {duration: 0.1, ease: "power2.out"});

        window.addEventListener('mousemove', (e) => {
            xTo(e.clientX - 6);
            yTo(e.clientY - 6);
        });
    }

    // 2. Button & Card Interaction (Agresif & Dinamis)
    // Kita panggil ulang setiap kali ada elemen baru yang mungkin muncul
    const updateInteractions = () => {
        const interactives = document.querySelectorAll('button, a, .glass-card, .group');
        interactives.forEach(el => {
            el.addEventListener('mouseenter', () => {
                gsap.to(el, { y: -4, scale: 1.01, duration: 0.3, ease: "power2.out" });
                if (cursor) gsap.to(cursor, { borderColor: "#fff", scale: 0.8 });
            });
            el.addEventListener('mouseleave', () => {
                gsap.to(el, { y: 0, scale: 1, duration: 0.3, ease: "power2.out" });
                if (cursor) gsap.to(cursor, { borderColor: "#8B5CF6", scale: 1 });
            });
        });
    };
    updateInteractions();

    // 3. Loading & Reveal Timeline
    const tl = gsap.timeline();

tl.to("#loader-logo", { opacity: 1, y: 0, duration: 0.5 })

.add(() => {
    const bar = document.getElementById("loader-bar");
    const perc = document.getElementById("loader-perc");

    let state = { value: 0 };

    gsap.to(state, {
        value: 100,
        duration: 1,
        ease: "expo.inOut",
        onUpdate: () => {
            bar.style.width = state.value + "%";
            perc.textContent = Math.floor(state.value);
        }
    });
})

.to("#loader", { yPercent: -100, duration: 0.7, ease: "expo.inOut" })

.to(mainContent, { 
    opacity: 1, 
    duration: 0.3, 
    onStart: () => {
        document.body.style.overflow = 'auto';
        document.body.style.cursor = 'none';
    }
}, "-=0.3")

.from("h1 span", { 
    y: 40, 
    opacity: 0, 
    stagger: 0.05, 
    duration: 0.6, 
    ease: "power3.out" 
}, "-=0.2");

    // 4. Scroll Reveal (Work & About Sections)
    const revealElements = document.querySelectorAll('#work .group, #about .glass-card');
    revealElements.forEach((el, index) => {
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: "top 95%",
            },
            y: 30,
            opacity: 0,
            duration: 0.5,
            ease: "power2.out",
            delay: (index % 3) * 0.1 // Stagger tipis berdasarkan urutan
        });
    });

    // 5. Counter Animation (About Section Stats)
    const stats = document.querySelectorAll('.stat-number');
    stats.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-target'));
        const suffix = stat.innerText.includes('+') ? '+' : (stat.innerText.includes('%') ? '%' : '');

        gsap.to(stat, {
            scrollTrigger: {
                trigger: stat,
                start: "top 90%",
            },
            innerText: target,
            duration: 1.5,
            snap: { innerText: 1 },
            ease: "power2.out",
            onUpdate: function() {
                stat.innerText = Math.floor(stat.innerText) + suffix;
            }
        });
    });

    // 6. Marquee Speed Control (Untuk Tech Stack nanti)
    const marquee = document.querySelector('.animate-marquee');
    if (marquee) {
        marquee.addEventListener('mouseenter', () => gsap.to(marquee, { timeScale: 0.2, duration: 0.5 }));
        marquee.addEventListener('mouseleave', () => gsap.to(marquee, { timeScale: 1, duration: 0.5 }));
    }
    function updateTime() {
    const timeEl = document.getElementById('local-time');
    if (timeEl) {
        const now = new Date();
        timeEl.innerText = now.toLocaleTimeString('en-US', { 
            hour12: false, 
            hour: '2-digit', 
            minute: '2-digit', 
            second: '2-digit' 
        });
    }
}
setInterval(updateTime, 1000);
updateTime();
});