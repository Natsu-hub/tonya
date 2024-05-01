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
        // header.classList.add('is-drawer-open'); // ヘッダーにクラスを追加
        document.body.classList.add('body-no-scroll');
    }

    function closeDrawer() {
        setTimeout(() => {
            const drawer = document.querySelector('.js-drawer');
            const header = document.querySelector('.js-header');
            const hamburger = document.querySelector('.js-hamburger');
            drawer.classList.remove('is-open');
            // header.classList.remove('is-drawer-open'); // ヘッダーからクラスを削除
            hamburger.classList.remove('is-open');
            document.body.classList.remove('body-no-scroll');
        }, 100); // 0.1秒遅延後に実行
    }
}