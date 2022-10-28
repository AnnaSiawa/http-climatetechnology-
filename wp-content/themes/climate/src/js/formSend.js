const submitButton = document.querySelector('.send-form-btn');
const modalBuy = document.querySelector('.modal-buy');
const modalSignUp = document.querySelector('.modal-sign-up');
const modalSendMessage = document.querySelector('.modal-send-message');
const btnChoose = document.querySelectorAll('.btn-choose');
const btnBack = document.querySelectorAll('.go-back');

let modalFormHasOpened = false;
let formSent = false;

function formAddError(input) {
    input.parentElement.classList.add('_error');
    input.classList.add('_error');
}

function formRemoveErrors(inputsObject) {
    for (const [key, input] of Object.entries(inputsObject)) {
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
      let formType = event.target.classList.contains('measure-form-btn') ? 'measure' : 'order';
      let form = document.querySelector(`.${formType}-form`);
      let inputs = {
        'name': document.querySelector(`.${formType}-form-name`),
        'phone': document.querySelector(`.${formType}-form-phone`),
        'message': document.querySelector(`.${formType}-form-message`)
      }; 
      formRemoveErrors(inputs);
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
            if (modalFormHasOpened) {
              modalBuy.classList.remove('active');
            }
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
            modalFormHasOpened = true;
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
