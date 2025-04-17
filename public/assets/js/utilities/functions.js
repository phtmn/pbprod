document.addEventListener("DOMContentLoaded", function () {
    const submit = document.querySelector('#prompt-fav-submit');
    if(submit){
        submit.addEventListener('click', async (event) => {
            // event.preventDefault();
            history.replaceState({}, document.title, window.location.pathname);
            const form = document.querySelector('#favorite-prompt');
            const inputs = form.querySelectorAll('input');
            const favoriteId = inputs[3].value;
            const star = document.querySelector('#star');
            const isFavorite = star.classList.contains('ai-check');
            let url = isFavorite && favoriteId ? '/favorites/'+favoriteId : '/favorites';
            const method = isFavorite && favoriteId ? 'DELETE' : 'POST';
    
            let result = {};
            inputs.forEach(input => {
                result[input.name] = input.value; 
            });
    
            await fetch(url, {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(result), 
            })
                .then(response => {
                    if (response.ok) {
                        star.classList.remove('ai-star');
                        star.classList.add('ai-check');
                    } else {
                        star.classList.add('ai-star');
                        star.classList.remove('ai-check');
                    }
                })
                .catch(error => {
                });
                window.location.href = '/favorites';
        });
    }

    const userSubmit = document.querySelector('#user-fav-submit');
    if(userSubmit){
        userSubmit.addEventListener('click', async (event) => {
            event.preventDefault();
            history.replaceState({}, document.title, window.location.pathname);
            const form = document.querySelector('#favorite-user-form');
            const inputs = form.querySelectorAll('input');
            const favoriteId = inputs[3].value;
            const star = document.querySelector('#starUser');
            const isFavorite = star.classList.contains('ai-check');
            let url = isFavorite && favoriteId ? '/user-delete/'+favoriteId : '/favorites';
            const method = isFavorite && favoriteId ? 'DELETE' : 'POST';
    
            let result = {};
            inputs.forEach(input => {
                result[input.name] = input.value; 
            });
    
            await fetch(url, {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(result),
            })
                .then(response => {
                    if (response.ok) {
                        star.classList.remove('ai-star');
                        star.classList.add('ai-check');
                    } else {
                        star.classList.add('ai-star');
                        star.classList.remove('ai-check');
                    }
                })
                .catch(error => {
                });
                window.location.href = '/favorites';
        });
    }

    $(document).ready(function () {
        $('#whatsapp').inputmask('(99) 99999-9999'); // Define a máscara
    });
    
});
