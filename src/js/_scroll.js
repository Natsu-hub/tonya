import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);
export function scroll() {
    const headerHeight = document.querySelector('header').offsetHeight + 20;  // 固定ヘッダーの高さ（＋余白の追加）

    function scrollToPos(position) {
        const startPos = window.scrollY;
        const distance = Math.min(position - startPos, document.documentElement.scrollHeight - window.innerHeight - startPos);
        const duration = 800;  // スクロールにかかる時間（ミリ秒）

        let startTime;
        function easeOutExpo(t, b, c, d) {
            return c * (-Math.pow(2, -10 * t / d) + 1) * 1024 / 1023 + b;
        }

        function animation(currentTime) {
            if (!startTime) {
                startTime = currentTime;
            }
            const timeElapsed = currentTime - startTime;
            const scrollPos = easeOutExpo(timeElapsed, startPos, distance, duration);
            window.scrollTo(0, scrollPos);
            if (timeElapsed < duration) {
                requestAnimationFrame(animation);
            } else {
                window.scrollTo(0, position);
            }
        }

        requestAnimationFrame(animation);
    }

    function removeLazyLoad() {
        const targets = document.querySelectorAll('[data-src]');
        for (const target of targets) {
            target.setAttribute('src', target.getAttribute('data-src'));
            target.addEventListener('load', () => {
                target.removeAttribute('data-src');
            });
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        for (const link of document.querySelectorAll('a[href*="#"]')) {
            link.addEventListener('click', (e) => {
                const hash = e.currentTarget.hash;
                if (!hash || hash === '#top') {
                    e.preventDefault();
                    scrollToPos(1);
                } else {
                    const target = document.getElementById(hash.slice(1));
                    if (target) {
                        e.preventDefault();
                        removeLazyLoad();
                        const position = target.getBoundingClientRect().top + window.scrollY - headerHeight;
                        scrollToPos(position);
                        history.pushState(null, null, hash);
                    }
                }
            });
        }
    });

    window.addEventListener("load", () => {
        const hash = window.location.hash;
        if (hash) {
            const target = document.getElementById(hash.slice(1));
            if (target) {
                removeLazyLoad();
                setTimeout(() => {  // 少し遅延を設けることで不具合を解消
                    const position = target.getBoundingClientRect().top + window.scrollY - headerHeight;
                    scrollToPos(position);
                }, 100);
            }
        }
    });
};
