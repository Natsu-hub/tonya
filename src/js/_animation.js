import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);

export function animation() {
  window.addEventListener('DOMContentLoaded', function () {
    gsap.config({ nullTargetWarn: false })

    // フェードインアニメーション
    const fadeInElements = document.querySelectorAll(".js-fade-in");
    fadeInElements.forEach((element) => {
      gsap.fromTo(
        element,
        {
          autoAlpha: 0,
          y: 10,
        },
        {
          autoAlpha: 1,
          y: 0,
          duration: 1.2,
          ease: "power4.out",
          scrollTrigger: {
            trigger: element, // トリガーとなる要素を指定
            start: "top 80%", // スクロール開始位置を指定
            toggleActions: 'play none none reverse',
          },
        }
      );
    });

    // フェードインアニメーション02
    const fadeIn02Elements = document.querySelectorAll(".js-fadeIn");
    fadeIn02Elements.forEach((element) => {
      gsap.fromTo(
        element,
        {
          autoAlpha: 0,
        },
        {
          autoAlpha: 1,
          duration: 1,
          scrollTrigger: {
            trigger: element, // トリガーとなる要素を指定
            start: "top 85%", // スクロール開始位置を指定
            toggleActions: 'play none none reverse',
          },
        }
      );
    });
    // フェードインアニメーションbody
    const fadeInBodyElements = document.querySelectorAll(".js-fadeBodyIn");
    fadeInBodyElements.forEach((element) => {
      gsap.fromTo(
        element,
        {
          autoAlpha: 0,
        },
        {
          autoAlpha: 1,
          duration: 1.5,
          scrollTrigger: {
            trigger: element, // トリガーとなる要素を指定
            start: "top bottom", // スクロール開始位置を指定
          },
        }
      );
    });

  })
}
