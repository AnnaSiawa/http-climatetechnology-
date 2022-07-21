
const form = document.getElementById('form-mail');
form.addEventListener('submit', formSend);

async function formSend(e) {
 // function formSend(e) {
    e.preventDefault();
    let error = formValidate(form);
    let formData = new FormData(form);

    if (error === 0) {
        let response = await fetch('mail.php', {
        // let response = fetch('mail.php', {
            method: 'POST',
            body: formData
        });
        if (response.ok) {
            let result = await response.json();
            // let result = response.json();
            alert(result.message);
            form.reset();
        } else {
            alert('ошибка');
        }
    } else {
        alert('заполните обязательные поля');
    }

    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        for (let i = 0; i < formReq.length; i++) {
            const input = formReq[i];
            formRemoveError(input)


            if (input.value === '') {
                formAddError(input);
                error++;
            }

        }
        return error;
    }

     function formAddError(input) {
         input.parentElement.classList.add('_error');
         input.classList.add('_error');
     }

     function formRemoveError(input) {
         input.parentElement.classList.remove('_error');
         input.classList.remove('_error');
     }
}
