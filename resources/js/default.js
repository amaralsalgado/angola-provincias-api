if (localStorage.getItem('theme')) {
    document.documentElement.classList.add('dark');
    document.querySelector('#btn-theme').checked = true
}

window.onload = function () {
    window.hljs.highlightAll();

    document.querySelector('#btn-theme').addEventListener('change', function (e) {
        e.preventDefault();

        if (e.currentTarget.checked) {
            localStorage.setItem('theme', 'dark');
            document.documentElement.classList.add('dark');
            return;
        }

        localStorage.removeItem('theme');
        document.documentElement.classList.remove('dark');
    });

    document.querySelector('#btn-show-aside').addEventListener('click', () => {
        const aside = document.querySelector('aside');

        if (aside.classList.contains('hidden')) {
            aside.classList.remove('hidden');
            setTimeout(() => {
                aside.style.left = '0px';
            }, 100);
            return;
        }
        aside.style.left = '-320px';
        setTimeout(() => {
            aside.classList.add('hidden');
        }, 100);
    })
}
