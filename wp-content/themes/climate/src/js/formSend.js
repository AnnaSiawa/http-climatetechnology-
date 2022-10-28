const form = document.getElementById('form-mail');
const submitButton = document.querySelector('#button');
const modalBuy = document.querySelector('.modal-buy');
const modalSignUp = document.querySelector('.modal-sign-up');
const modalSendMessage = document.querySelector('.modal-send-message');
const btnChoose = document.querySelectorAll('.btn-choose');
const btnBack = document.querySelectorAll('.go-back');

const inputs = {
    'name': document.querySelector('#name'),
    'phone': document.querySelector('#phone'),
    'message': document.querySelector('#message')
};

let formSent = false;

function formAddError(input) {
    input.parentElement.classList.add('_error');
    input.classList.add('_error');
}

function formRemoveErrors() {
    for (const [key, input] of Object.entries(inputs)) {
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
    }
}

function clearInputs() {
    for (const [key, input] of Object.entries(inputs)) {
        input.value = '';
    }
}

if (submitButton) {
    submitButton.addEventListener('click', (event) => {
      event.preventDefault();
      if (formSent) {
        return false;
      }
      formRemoveErrors();
      let errors = false;
      for (const [key, input] of Object.entries(inputs)) {
        if (input.value.trim() == '') {
            errors = true;
            formAddError(input);
        }
      }
      if (!errors) {
        let params = new FormData(form);
        fetch('/mail.php', {
          method: 'POST',
          headers: {
            'Accept': 'application/json'
          },
          body: params
        })
        .then(response => {
            modalSendMessage.classList.add('active');
            formSent = true;
            clearInputs();
        })
        .catch((error) => {
          console.log('Form sending error', error);
        });
      } else {
        return false;
      }
    });
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
            modalSendMessage.classList.remove('active');
        });
    })
}
