import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);

// export function img() {
//     window.addEventListener('DOMContentLoaded', function () {
//         gsap.config({ nullTargetWarn: false })

//         /* initial */
//         gsap.set('.js-img', { autoAlpha: 0 })
//         gsap.set('.js-move-text', { y: 20, autoAlpha: 0 })

//         /* 一番行数が少なく済みそう */
//         gsap.utils.toArray('.trigger-effect').forEach((trigger, i) => {// 全ての.trigger-effectに対してアニメーションを定義していく
//             let image = trigger.querySelector('.js-img');
//             let text = trigger.querySelectorAll('.js-move-text');
//             ScrollTrigger.create({
//                 trigger: trigger,
//                 start: 'top 80%',
//                 onEnter: () => {
//                     gsap.to(image, { autoAlpha: 1, duration: 2.5 });
//                     gsap.to(text, { y: 0, autoAlpha: 1, stagger: .2, duration: 1 })
//                 }
//             })
//         })
//     })
// }

export function img() {
    window.addEventListener('DOMContentLoaded', function () {
        gsap.config({ nullTargetWarn: false })

        /* initial */
        gsap.set('.js-img', { autoAlpha: 0 })
        gsap.set('.js-move-text', { y: 20, autoAlpha: 0 })

        const items = document.querySelectorAll('.p-service-list__item');

        items.forEach((item, index) => {
            let image = item.querySelector('.js-img');
            let texts = item.querySelectorAll('.js-move-text');

            // 画面の幅をチェックして適切なディレイを設定
            let delayValue = window.innerWidth >= 768 ? (index === 1 ? 0.7 : 0) : 0;

            ScrollTrigger.create({
                trigger: item,
                start: 'top 80%',
                onEnter: () => {
                    gsap.to(image, { autoAlpha: 1, duration: 2.5, delay: delayValue });
                    gsap.to(texts, { y: 0, autoAlpha: 1, stagger: 0.2, duration: 1, delay: delayValue })
                }
            });
        });
    });
}
