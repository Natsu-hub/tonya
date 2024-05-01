import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);

export function common() {
    window.addEventListener('DOMContentLoaded', function () {
        gsap.config({ nullTargetWarn: false })

        // change-colorアニメーション
        window.addEventListener('scroll', function () {
            if (document.querySelector('.js-mv').offsetHeight < window.scrollY) {
                document.querySelector('.js-fixed-tel-wrapper').classList.add('is-active');
            } else {
                document.querySelector('.js-fixed-tel-wrapper').classList.remove('is-active');
            }
        });

        // 電話PC時は無効
        var ua = navigator.userAgent.toLowerCase();
        var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

        if (!isMobile) {
            document.querySelectorAll('a[href^="tel:"]').forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                });
                link.style.cursor = 'default'; // カーソルのスタイルをデフォルトに設定
                link.style.opacity = '1';      // 不透明度を1に設定
            });
        }


    })

}
