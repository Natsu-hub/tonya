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
    // フェードインアニメーション 発火遅め
    // const fadeInSlowElements = document.querySelectorAll(".js-fadeInSlow");
    // fadeInSlowElements.forEach((element) => {
    //   gsap.fromTo(
    //     element,
    //     {
    //       autoAlpha: 0,
    //       y: 10,
    //     },
    //     {
    //       delay: 1,
    //       autoAlpha: 1,
    //       y: 0,
    //       duration: 1.2,
    //       ease: "power4.out",
    //       scrollTrigger: {
    //         trigger: element, // トリガーとなる要素を指定
    //         start: "top 80%", // スクロール開始位置を指定
    //         toggleActions: 'play none none reverse',
    //       },
    //     }
    //   );
    // });
    const fadeInSlowElements = document.querySelectorAll(".js-fadeInSlow");

    fadeInSlowElements.forEach((element) => {
      // 画面の幅をチェックして適切なディレイを設定
      let delayValue = window.innerWidth >= 768 ? .7 : 0;

      gsap.fromTo(
        element,
        {
          autoAlpha: 0,
          y: 10,
        },
        {
          delay: delayValue,
          autoAlpha: 1,
          y: 0,
          duration: 1.5,
          ease: "power4.out",
          scrollTrigger: {
            trigger: element,
            start: "top 80%",
            toggleActions: 'play none none reverse',
          },
        }
      );
    });

    // ウィンドウリサイズ時にアニメーション設定を更新
    window.addEventListener('resize', () => {
      fadeInSlowElements.forEach((element) => {
        // リサイズ後も画面幅をチェックしてディレイを再設定
        let delayValue = window.innerWidth >= 768 ? .7 : 0;

        // 既存のアニメーションインスタンスがあればクリア
        gsap.killTweensOf(element);

        // アニメーションを再設定
        gsap.fromTo(
          element,
          {
            autoAlpha: 0,
            y: 10,
          },
          {
            delay: delayValue,
            autoAlpha: 1,
            y: 0,
            duration: 1.2,
            ease: "power4.out",
            scrollTrigger: {
              trigger: element,
              start: "top 80%",
              toggleActions: 'play none none reverse',
            },
          }
        );
      });
    });

    const fadeInSlowerElements = document.querySelectorAll(".js-fadeInSlower");

    fadeInSlowerElements.forEach((element) => {
      // 画面の幅をチェックして適切なディレイを設定
      let delayValue = window.innerWidth >= 768 ? 1.5 : 0;

      gsap.fromTo(
        element,
        {
          autoAlpha: 0,
          y: 10,
        },
        {
          delay: delayValue,
          autoAlpha: 1,
          y: 0,
          duration: 1.5,
          ease: "power4.out",
          scrollTrigger: {
            trigger: element,
            start: "top 65%",
            toggleActions: 'play none none reverse',
          },
        }
      );
    });

    // ウィンドウリサイズ時にアニメーション設定を更新
    window.addEventListener('resize', () => {
      fadeInSlowerElements.forEach((element) => {
        // リサイズ後も画面幅をチェックしてディレイを再設定
        let delayValue = window.innerWidth >= 768 ? 1.5 : 0;

        // 既存のアニメーションインスタンスがあればクリア
        gsap.killTweensOf(element);

        // アニメーションを再設定
        gsap.fromTo(
          element,
          {
            autoAlpha: 0,
            y: 10,
          },
          {
            delay: delayValue,
            autoAlpha: 1,
            y: 0,
            duration: 1.5,
            ease: "power4.out",
            scrollTrigger: {
              trigger: element,
              start: "top 65%",
              toggleActions: 'play none none reverse',
            },
          }
        );
      });
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
          delay: .2,
          autoAlpha: 1,
          duration: 1.5,
          scrollTrigger: {
            trigger: element, // トリガーとなる要素を指定
            start: "top 85%", // スクロール開始位置を指定
          },
        }
      );
    });

    // matchMedia
    const mm = gsap.matchMedia();

    // 761px以上の時 PC
    mm.add('(min-width:761px)', () => {
      const cardWrappers = document.querySelectorAll('.js-card-wrapper');
      cardWrappers.forEach((wrapper) => {
        const cards = wrapper.querySelectorAll('.js-card');
        gsap.fromTo(cards, { autoAlpha: 0, y: 10 },
          {
            y: 0, autoAlpha: 1, stagger: .05, duration: 1, scrollTrigger: {
              trigger: wrapper,
              start: 'top 85%',
            }
          }
        );
      });
    });

    // 760px以下の時 sp
    mm.add('(max-width:760px)', function () {
      const cards = document.querySelectorAll('.js-card');
      // card card card cards
      cards.forEach((card) => {
        gsap.fromTo(card, { autoAlpha: 0, y: 10 }, {
          y: 0, autoAlpha: 1, scrollTrigger: {
            trigger: card,
            start: 'top 85%',
          }
        });
      });
    });

  })
}
