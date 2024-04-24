import { gsap } from 'gsap';
import { CustomEase, ScrollTrigger } from 'gsap/all';

export function wipeAnimation() {
    window.addEventListener('DOMContentLoaded', function () {
        gsap.config({ nullTargetWarn: false })

        gsap.registerPlugin(CustomEase, ScrollTrigger);

        // easeの定義
        CustomEase.create("custom", "0.48,-0.02,0,0.85");

        // .js-wipeAnimation 要素のセレクタを取得して、それぞれにアニメーションを設定
        document.querySelectorAll('.js-wipeAnimation').forEach((element) => {
            gsap.to(element, {
                clipPath: 'inset(0 0% 0 0)',
                duration: 1.5,
                ease: 'custom',
                scrollTrigger: {
                    trigger: element,
                    start: 'bottom 100%', // 画面下に要素が来たら発火
                    // markers: true,
                    toggleActions: 'play none none reverse',
                }
            });
        });
    })
}

