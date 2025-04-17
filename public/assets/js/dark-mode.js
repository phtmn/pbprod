window.addEventListener('load', function () {
    let darkMode = window.localStorage.getItem('mode');
    let select = [...document.querySelectorAll('.select')];
    if (darkMode !== undefined && darkMode === 'dark') {
        select.map((e)=>e.classList.add('bg-dark'));
    } else {
        select.map((e)=>e.classList.remove('bg-dark'));
    }
})