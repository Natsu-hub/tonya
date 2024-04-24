export function header() {
    document.addEventListener('DOMContentLoaded', function () {
        gsap.config({ nullTargetWarn: false })

        // change-colorアニメーション
        window.addEventListener('scroll', function () {
            if (document.querySelector('.js-mv').offsetHeight < window.scrollY) {
                document.querySelector('.js-header').classList.add('change-color');
            } else {
                document.querySelector('.js-header').classList.remove('change-color');
            }
        });

        document.querySelectorAll('.js-hamburger').forEach(function (hamburger) {
            hamburger.addEventListener('click', function () {
                this.classList.toggle('is-open');
                const drawer = document.querySelector('.js-drawer');
                if (drawer.classList.contains('is-open')) {
                    closeDrawer();
                } else {
                    openDrawer();
                }
            });
        });

        document.querySelectorAll('.p-header__nav-item a').forEach(function (link) {
            link.addEventListener('click', function () {
                if (document.querySelector('.js-hamburger').classList.contains('is-open')) {
                    closeDrawer();
                }
            });
        });

        document.querySelectorAll('.js-drawer a[href]').forEach(function (link) {
            link.addEventListener('click', function () {
                closeDrawer();
            });
        });

        window.addEventListener('resize', function () {
            if (window.matchMedia('(min-width: 768px)').matches) {
                closeDrawer();
            }
        });
    });

    function openDrawer() {
        const drawer = document.querySelector('.js-drawer');
        const header = document.querySelector('.js-header');
        drawer.classList.add('is-open');
        header.classList.add('is-drawer-open'); // ヘッダーにクラスを追加
        document.body.classList.add('body-no-scroll');
        // ナビゲーションリストの各項目を選択
        const items = document.querySelectorAll('.js-nav-list');

        // 各項目に遅延を設定してアニメーションを適用
        items.forEach((item, index) => {
            if (index === 0) {
                // 最初の項目は遅延なしでアニメーションを適用
                item.classList.add('is-open');
            } else {
                // 2番目以降の項目には150ms * (index - 1) の遅延を設定
                setTimeout(() => {
                    item.classList.add('is-open');
                }, 150 * (index - 1));
            }
        });
    }

    function closeDrawer() {
        setTimeout(() => {
            const drawer = document.querySelector('.js-drawer');
            const header = document.querySelector('.js-header');
            const hamburger = document.querySelector('.js-hamburger');
            drawer.classList.remove('is-open');
            header.classList.remove('is-drawer-open'); // ヘッダーからクラスを削除
            hamburger.classList.remove('is-open');
            document.body.classList.remove('body-no-scroll');

            // アニメーションを削除
            const items = document.querySelectorAll('.js-nav-list');
            items.forEach(item => item.classList.remove('is-open'));
        }, 100); // 0.1秒遅延後に実行
    }
}