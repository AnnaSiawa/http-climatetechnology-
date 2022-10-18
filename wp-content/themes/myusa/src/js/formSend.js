const form = document.getElementById('form-mail');
let modalBuy = document.querySelector('.modal-buy');
let modalSignUp = document.querySelector('.modal-sign-up');
let btnChoose = document.querySelectorAll('.btn-choose');
let btnBack = document.querySelectorAll('.go-back');

if (form) {
    form.addEventListener('submit', formSend);
}

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
            // alert(result.message);
            modalSignUp.classList.add('active');
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

//открыть форму выбора кондиционера
if (btnChoose) {
    let arrBtnChoose = [...btnChoose];
    arrBtnChoose.forEach(item => {
        item.addEventListener('click', e => {
            e.stopPropagation();
            modalBuy.classList.add('active');
        });
    });
}

//закрыть форму выбора кондиционера/обратной связи
if (btnBack) {
    let arrBtnBack = [...btnBack];
    console.log(arrBtnBack);
    arrBtnBack.forEach(item => {
        item.addEventListener('click', e => {
            e.stopPropagation();
            modalBuy.classList.remove('active');
            modalSignUp.classList.remove('active');
        });
    })
}
