import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);

export function textHover() {
    window.addEventListener('DOMContentLoaded', function () {
        gsap.config({ nullTargetWarn: false })

        let splitTarget = document.querySelectorAll('.js-textHover');

        // spanタグに分割する関数
        splitTarget.forEach((target) => {
            let newText = '';
            let spanText = target.textContent; // ターゲットの中身を取得
            spanText.split('').forEach((char) => {
                newText += '<span>' + char + '</span>'; // 一文字ずつspanタグで囲む
            });
            let newTextBefore = "<div class='before'>" + newText + "</div>"; // beforeクラスをつけた要素を生成
            let newTextAfter = "<div class='after'>" + newText + "</div>"; // afterクラスをつけた要素を生成
            newText = "<span class='text-wrap'>" + newTextBefore + newTextAfter + "</span>"; // before after両要素を囲む要素生成
            target.innerHTML = newText; // ターゲットに生成した要素を挿入
        });

        // ターゲットにホバーした時の動き　イベントリスナー　ホバー mouseenter mouseleave
        splitTarget.forEach((target) => {
            if (!target.classList.contains('is-active')) {//is-activeクラスを持っていなかったら
                let beforeSpan = target.querySelector('.before').querySelectorAll('span');
                let afterSpan = target.querySelector('.after').querySelectorAll('span');
                target.addEventListener('mouseenter', () => {//マウスが進入したら
                    gsap.to(beforeSpan, { y: '-150%', stagger: .05, ease: "power2.out" });
                    gsap.to(afterSpan, { y: '0%', stagger: .05, ease: "power2.out" });
                });
                target.addEventListener('mouseleave', () => {//マウスが離れたら
                    gsap.to(beforeSpan, { y: '0%', stagger: .05, ease: "power2.out" });
                    gsap.to(afterSpan, { y: '100%', stagger: .05, ease: "power2.out" });
                });
            }
        });
    })
}