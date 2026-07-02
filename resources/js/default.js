if (localStorage.getItem('theme')) {
    document.documentElement.classList.add('dark');
    document.querySelector('#btn-theme').checked = true
    changeJsonViewerTheme('dark');
}

window.onload = function () {
    document.querySelector('#btn-theme').addEventListener('change', function (e) {
        e.preventDefault();

        if (e.currentTarget.checked) {
            localStorage.setItem('theme', 'dark');
            document.documentElement.classList.add('dark');
            changeJsonViewerTheme('dark');
            return;
        }

        localStorage.removeItem('theme');
        document.documentElement.classList.remove('dark');
        changeJsonViewerTheme('light');
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

    document.addEventListener('click', (e) => {
        const button = e.target.closest('.btn-copy-endpoint');
        if (!button) return;

        navigator.clipboard.writeText(button.dataset.copy).then(() => {
            const icon = button.querySelector('i');
            icon.classList.replace('mdi-content-copy', 'mdi-check');

            setTimeout(() => {
                icon.classList.replace('mdi-check', 'mdi-content-copy');
            }, 1500);
        });
    });
}


function changeJsonViewerTheme(theme) {
    const jsonViewers = document.querySelectorAll('.json-viewer-element');
    jsonViewers.forEach((jsonViewer) => {
        jsonViewer.setAttribute('theme', theme === 'dark' ? 'default-dark' : 'classic-light');
    });
}
