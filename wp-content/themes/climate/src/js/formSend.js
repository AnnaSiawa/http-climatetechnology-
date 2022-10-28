const measureFormSubmitButton = document.querySelector('.measure-form-btn');
const modalBuy = document.querySelector('.modal-buy');
const modalSignUp = document.querySelector('.modal-sign-up');
const modalSendMessage = document.querySelector('.modal-send-message');
const btnChoose = document.querySelectorAll('.btn-choose');
const btnBack = document.querySelectorAll('.go-back');

let modalFormHasOpened = false;

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

function sendForm(formType) {
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
          clearInputs();
      })
      .catch((error) => {
        console.log('Form sending error', error);
      });
    } else {
      return false;
    }
}

const once = {
  once: true
};

if (measureFormSubmitButton) {
  measureFormSubmitButton.addEventListener('click', (event) => {
    event.preventDefault();
    let type = event.target.classList.contains('measure-form-btn') ? 'measure' : 'order';
    sendForm(type);
  }, once);
}

//открыть форму выбора кондиционера
if (btnChoose) {
    let arrBtnChoose = [...btnChoose];
    arrBtnChoose.forEach(item => {
        item.addEventListener('click', e => {
            e.stopPropagation();
            modalBuy.classList.add('active');
            modalFormHasOpened = true;
            const orderFormSubmitButton = document.querySelector('.order-form-btn');
            orderFormSubmitButton.addEventListener('click', (event) => {
              event.preventDefault();
              let type = event.target.classList.contains('measure-form-btn') ? 'measure' : 'order';
              sendForm(type);
            }, once);
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
