window.addEventListener('DOMContentLoaded', function (event) {
    jQuery(document).ready(function ($) {
        const PATHNAME = 'make-a-payment';

        const getErrorMessageBlock = (el) => {
            let element;
            let children = el.parentNode.childNodes;
            for (let i = 0; i < children.length; i++) {
                let classes = children[i].classList;
                if (classes !== undefined) {
                    if (classes.contains('input_error')) {
                        element = children[i];
                        break;
                    }
                }
            }
            return element;
        };

        const
            emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
            onlyDigitsPattern = /^\d+$/,
            noDigitsPattern = /^\D*$/,
            visaPattern = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/,
            mastPattern = /^(?:5[1-5][0-9]{14})$/,
            amexPattern = /^(?:3[47][0-9]{13})$/,
            discPattern = /^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/,
            maestroPattern = /^(5018|5081|5044|5020|5038|603845|6304|6759|676[1-3]|6799|6220|504834|504817|504645)[0-9]{8,15}$/,
            cardNamePattern = /^[a-z ,.'-]+$/i,
            cardExpiresPattern = /^\d{4}$/,
            cardCVVPattern = /^\d{3}$/,

            submitBtn = document.querySelector('#jsMakePaySubmitBtn'),
            jsMakePayBtn = document.querySelectorAll('.js-pmb-btn'),
            pmdc = document.querySelector('.payment-method-details-container'),
            pmb = document.querySelector('.payment-method-box'),
            paymentcheck = document.querySelector('.csf-checkbox-input'),
            containInner = document.querySelector('.contain-inner'),
            paymentMethodDetailsInput = document.querySelector('.payment-method-details__input'),
            paymentMethodDetailsResult = document.querySelector('.payment-method-details__result'),
            pmdrEmail = document.querySelector('.pmdr-email'),
            sendEmailInstructionsBtn = document.querySelector('.payment-method-details__result .pmdr-buttons .email-btn');

        orderEmailInput = document.querySelector('#pf-order-email'),
            orderIdInput = document.querySelector('#pf-order-id'),
            orderTotalInput = document.querySelector('#pf-order-total'),

            creditCardNumberInput = document.querySelector('#pf-cc-num'),
            creditCardNameInput = document.querySelector('#pf-cc-name'),
            creditCardExpiresInput = document.querySelector('#pf-cc-exp'),

            cvvInputNumber = window.innerWidth < 980 ? 1 : 2,
            creditCardCVVInput = document.querySelector('#pf-cc-cvv' + cvvInputNumber),

            addressInput = document.querySelector('#pf-address'),
            suiteInput = document.querySelector('#pf-suite'),
            cityInput = document.querySelector('#pf-city'),
            stateInput = document.querySelector('#pf-state'),
            zipInput = document.querySelector('#pf-zip'),
            countryInput = document.querySelector('#pf-country'),

            ccNumberPattern = /^\d{0,16}$/g,
            ccNumberSeparator = " ",
            ccExpiryPattern = /^\d{0,4}$/g,
            ccExpirySeparator = "-",
            ccCVVPattern = /^\d{0,3}$/g;

        let
            orderEmailInputError,
            orderIdInputError,
            orderTotalInputError,
            paymentcheckError,

            creditCardNumberInputError,
            creditCardNameInputError,
            creditCardExpiresInputError,
            creditCardCVVInputError,

            addressInputError,
            cityInputError,
            suiteInputError,
            stateInputError,
            zipInputError,
            countryInputError,

            isVisa,

            orderIdInputOldValue,
            orderIdInputOldCursor,
            orderTotalInputOldValue,
            orderTotalInputOldCursor,

            ccNumberInputOldValue,
            ccNumberInputOldCursor,
            ccExpiryInputOldValue,
            ccExpiryInputOldCursor,
            ccCVVInputOldValue,
            ccCVVInputOldCursor,
            ccNameInputOldValue,
            ccNameInputOldCursor,

            cityInputOldValue,
            cityInputOldCursor,
            zipInputOldValue,
            zipInputOldCursor,
            stateInputOldValue,
            stateInputOldCursor;

        if (location.pathname.indexOf(PATHNAME) !== -1) {
            orderEmailInputError = getErrorMessageBlock(orderEmailInput);
            orderIdInputError = getErrorMessageBlock(orderIdInput);
            orderTotalInputError = getErrorMessageBlock(orderTotalInput);
            creditCardNumberInputError = getErrorMessageBlock(creditCardNumberInput);
            creditCardNameInputError = getErrorMessageBlock(creditCardNameInput);
            creditCardExpiresInputError = getErrorMessageBlock(creditCardExpiresInput);
            creditCardCVVInputError = getErrorMessageBlock(creditCardCVVInput);
            addressInputError = getErrorMessageBlock(addressInput);
            cityInputError = getErrorMessageBlock(cityInput);
            suiteInputError = getErrorMessageBlock(suiteInput);
            stateInputError = getErrorMessageBlock(stateInput);
            zipInputError = getErrorMessageBlock(zipInput);
            countryInputError = getErrorMessageBlock(countryInput);
            paymentcheckError = getErrorMessageBlock(paymentcheck);
        }

        const
            mask = (value, limit, separator) => {
                let output = [];
                for (let i = 0; i < value.length; i++) {
                    if (i !== 0 && i % limit === 0) {
                        output.push(separator);
                    }
                    output.push(value[i]);
                }
                return output.join("");
            },

            unmask = (value) => value.replace(/[^\d]/g, ''),

            checkSeparator = (position, interval) => Math.floor(position / (interval + 1)),

            ccNumberInputKeyDownHandler = (e) => {
                let el = e.target;
                ccNumberInputOldValue = el.value;
                ccNumberInputOldCursor = el.selectionEnd;
            },

            ccNumberInputInputHandler = (e) => {
                let el = e.target,
                    newValue = unmask(el.value),
                    newCursorPosition;

                if (newValue.match(ccNumberPattern)) {
                    newValue = mask(newValue, 4, ccNumberSeparator);

                    newCursorPosition =
                        ccNumberInputOldCursor - checkSeparator(ccNumberInputOldCursor, 4) +
                        checkSeparator(ccNumberInputOldCursor + (newValue.length - ccNumberInputOldValue.length), 4) +
                        (unmask(newValue).length - unmask(ccNumberInputOldValue).length);

                    el.value = (newValue !== "") ? newValue : "";
                } else {
                    el.value = ccNumberInputOldValue;
                    newCursorPosition = ccNumberInputOldCursor;
                }

                el.setSelectionRange(newCursorPosition, newCursorPosition);

                /* TODO: activate the mask for a payment system */
                // highlightCC(el.value); //
            },

            orderIdInputKeyDownHandler = (e) => {
                let el = e.target;
                orderIdInputOldValue = el.value;
                orderIdInputOldCursor = el.selectionEnd;
            },

            orderIdInputInputHandler = (e) => {
                let el = e.target,
                    newValue = el.value;

                el.value = newValue.match(onlyDigitsPattern) || newValue === "" ? newValue : orderIdInputOldValue;
            },

            orderTotalInputKeyDownHandler = (e) => {
                let el = e.target;
                orderTotalInputOldValue = el.value;
                orderTotalInputOldCursor = el.selectionEnd;
            },

            orderTotalInputInputHandler = (e) => {
                let el = e.target,
                    newValue = el.value;

                el.value = newValue.match(onlyDigitsPattern) || newValue === "" ? newValue : orderTotalInputOldValue;
            },

            ccCVVInputKeyDownHandler = (e) => {
                let el = e.target;
                ccCVVInputOldValue = el.value;
                ccCVVInputOldCursor = el.selectionEnd;
            },

            ccCVVInputInputHandler = (e) => {
                let el = e.target,
                    newValue = el.value;

                el.value = newValue.match(ccCVVPattern) || newValue === "" ? newValue : ccCVVInputOldValue;
            },

            ccNameInputKeyDownHandler = (e) => {
                let el = e.target;
                ccNameInputOldValue = el.value;
                ccNameInputOldCursor = el.selectionEnd;
            },

            ccNameInputInputHandler = (e) => {
                let el = e.target,
                    newValue = el.value;

                el.value = newValue.match(cardNamePattern) || newValue === "" ? newValue : ccNameInputOldValue;
            },

            ccExpiryInputKeyDownHandler = (e) => {
                let el = e.target;
                ccExpiryInputOldValue = el.value;
                ccExpiryInputOldCursor = el.selectionEnd;
            },

            ccExpiryInputInputHandler = (e) => {
                let el = e.target,
                    newValue = el.value;

                newValue = unmask(newValue);
                if (newValue.match(ccExpiryPattern)) {
                    if (el.value !== "") {
                        newValue = mask(newValue, 2, ccExpirySeparator);
                    }
                    el.value = newValue;
                } else {
                    el.value = ccExpiryInputOldValue;
                }
            },

            cityInputKeyDownHandler = (e) => {
                let el = e.target;
                cityInputOldValue = el.value;
                cityInputOldCursor = el.selectionEnd;
            },

            cityInputInputHandler = (e) => {
                let el = e.target,
                    newValue = el.value;

                el.value = newValue.match(noDigitsPattern) || newValue === "" ? newValue : cityInputOldValue;
            },

            stateInputKeyDownHandler = (e) => {
                let el = e.target;
                stateInputOldValue = el.value;
                stateInputOldCursor = el.selectionEnd;
            },

            stateInputInputHandler = (e) => {
                let el = e.target,
                    newValue = el.value;

                el.value = newValue.match(noDigitsPattern) || newValue === "" ? newValue : stateInputOldValue;
            },

            zipInputKeyDownHandler = (e) => {
                let el = e.target;
                zipInputOldValue = el.value;
                zipInputOldCursor = el.selectionEnd;
            },

            zipInputInputHandler = (e) => {
                let el = e.target,
                    newValue = el.value;

                el.value = newValue.match(onlyDigitsPattern) || newValue === "" ? newValue : zipInputOldValue;
            },

            validateEmailInput = () => {
                let isValid = false;
                if (orderEmailInput.classList.contains('activated')) {
                    isValid = emailPattern.test(orderEmailInput.value);
                    orderEmailInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateIdInput = () => {
                let isValid = false;
                if (orderIdInput.classList.contains('activated')) {
                    isValid = orderIdInput.value.length > 0;
                    orderIdInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateTotalInput = () => {
                let isValid = false;
                if (orderTotalInput.classList.contains('activated')) {
                    isValid = orderTotalInput.value.length > 0;
                    orderTotalInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateCreditCardNumberInput = () => {
                let isValid = false;
                if (creditCardNumberInput.classList.contains('activated')) {
                    isValid = creditCardNumberInput.value.length >= 16;
                    creditCardNumberInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateCreditCardNameInput = () => {
                let isValid = false;
                if (creditCardNameInput.classList.contains('activated')) {
                    isValid = cardNamePattern.test(creditCardNameInput.value);
                    creditCardNameInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateCreditCardExpiresInput = () => {
                let isValid = false;
                if (creditCardExpiresInput.classList.contains('activated')) {
                    isValid = creditCardExpiresInput.value.length >= 4;
                    creditCardExpiresInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateCreditCardCVVInput = () => {
                let isValid = false;
                if (creditCardCVVInput.classList.contains('activated')) {
                    isValid = creditCardCVVInput.value.length === 3;
                    creditCardCVVInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateAddressInput = () => {
                let isValid = false;
                if (addressInput.classList.contains('activated')) {
                    isValid = addressInput.value.trim().length > 1;
                    addressInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateSuiteInput = () => {
                let isValid = false;
                if (suiteInput.classList.contains('activated')) {
                    isValid = suiteInput.value.trim().length > 0;
                    suiteInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateCityInput = () => {
                let isValid = false;
                if (cityInput.classList.contains('activated')) {
                    isValid = cityInput.value.trim().length > 1;
                    cityInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateStateInput = () => {
                let isValid = false;
                if (stateInput.classList.contains('activated')) {
                    isValid = stateInput.value.trim().length > 1;
                    stateInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateZipInput = () => {
                let isValid = false;
                if (zipInput.classList.contains('activated')) {
                    isValid = zipInput.value.length > 1;
                    zipInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validateCountryInput = () => {
                let isValid = false;
                if (countryInput.classList.contains('activated')) {
                    isValid = countryInput.value !== '#';
                    countryInputError.style.display = isValid ? 'none' : 'block';
                }
                return isValid;
            },

            validatePaymentcheck = () => {
                return paymentcheck.checked;
            },

            getScrollOptions = (el) => {
                return {
                    top: el.offsetTop - 60,
                    left: 0,
                    behavior: 'smooth'
                }
            },

            validateOrderForm = () => {
                validateEmailInput();
                validateIdInput();
                validateTotalInput();
                return validateEmailInput() && validateIdInput() && validateTotalInput();
            },

            validateFullForm = () => {
                validateOrderForm();
                validateCreditCardNumberInput();
                validateCreditCardNameInput();
                validateCreditCardExpiresInput();
                validateCreditCardCVVInput();
                validateCityInput();
                validateStateInput();
                validateZipInput();
                validateCountryInput();

                let
                    orderFormValid = validateOrderForm(),
                    ccNumberValid = validateCreditCardNumberInput(),
                    ccNameValid = validateCreditCardNameInput(),
                    ccExpiresValid = validateCreditCardExpiresInput(),
                    ccCVVValid = validateCreditCardCVVInput(),
                    cityValid = validateCityInput(),
                    addressValid = validateAddressInput(),
                    suiteValid = validateSuiteInput(),
                    stateValid = validateStateInput(),
                    zipValid = validateZipInput(),
                    countryValid = validateCountryInput(),
                    paymentcheckValid = validatePaymentcheck();

                let isValid = orderFormValid && ccNumberValid && ccNameValid && ccExpiresValid
                    && ccCVVValid && addressValid && suiteValid && cityValid && stateValid && zipValid
                    && countryValid && paymentcheckValid;

                console.log('___');
                console.log('orderFormValid: ' + orderFormValid);
                console.log('ccNumberValid: ' + ccNumberValid);
                console.log('ccNameValid: ' + ccNameValid);
                console.log('ccExpiresValid: ' + ccExpiresValid);
                console.log('ccCVVValid: ' + ccCVVValid);
                console.log('addressValid: ' + addressValid);
                console.log('suiteValid: ' + suiteValid);
                console.log('cityValid: ' + cityValid);
                console.log('stateValid: ' + stateValid);
                console.log('zipValid: ' + zipValid);
                console.log('countryValid: ' + countryValid);
                console.log('paymentcheckValid: ' + paymentcheckValid);
                console.log('full form: ' + isValid);

                if (isValid) {
                    submitBtn.removeAttribute('disabled');
                } else {
                    submitBtn.setAttribute('disabled', 'disabled');
                }
                return isValid;
            };

        if (location.pathname.indexOf(PATHNAME) !== -1) {
            console.log('payment-form.js loaded');
            paymentcheck.addEventListener('change', (e) => {
                const checkbox = e.currentTarget;
                let orderFormValid = validateOrderForm();
                if (!orderFormValid) {
                    return false;
                } else {
                    checkbox.setAttribute('checked', orderFormValid);
                    if (checkbox.checked === true) {
                        pmb.style.display = 'block';
                        setTimeout(() => window.scroll(getScrollOptions(pmb)), 100);
                    } else {
                        setTimeout(() => window.scroll(getScrollOptions(containInner)), 100);
                        jsMakePayBtn.forEach((btn) => {
                            btn.classList.remove('pmbtn-active')
                        });
                        pmb.style.display = 'none';
                        pmdc.style.display = 'none';
                    }
                }
            });

            jsMakePayBtn.forEach((btn) => {
                btn.addEventListener('click', (e) => {
                    jsMakePayBtn.forEach((jsmpbtn) => {
                        jsmpbtn.classList.remove('pmbtn-active');
                    });
                    let button = e.currentTarget;
                    button.classList.add('pmbtn-active');

                    switch (button.dataset.attr) {
                        case 'card':
                            console.log('card');
                            $('#paymenttype').val('card');
                            pmdc.style.display = 'block';
                            paymentMethodDetailsInput.style.display = 'block';
                            paymentMethodDetailsResult.style.display = 'none';
                            setTimeout(() => window.scroll(getScrollOptions(pmdc)), 100);
                            break;

                        case 'paypal':
                            $('#paymenttype').val('paypal');
                            makePayRequest();
                            break;

                        case 'western-union':
                            $('#paymenttype').val('western-union');
                            makePayRequest();
                            break;

                        case 'wire-transfer':
                            $('#paymenttype').val('wire-transfer');
                            makePayRequest();
                            break;

                        default:
                            break;
                    }
                });
            });

            sendEmailInstructionsBtn.addEventListener('click', function () {
                sendInstructions();
            });

            function makePayRequest() {
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: "https://www.myusacorporation.com/custom-payment",
                    data: $("#pay-form").serialize() + '&payment[agreed]=' + $('#payagree').val(),
                    success: function (data) {
                        console.log("custom-payment answer", data);
                        if (data.success) {
                            switch ($('#paymenttype').val()) {
                                case 'card':

                                    break;

                                case 'paypal':
                                    window.location.href = data.url;
                                    break;

                                case 'western-union':
                                    $('.payment-method-details__result .pmdr-buttons a').attr('href', data.url);
                                    pmdc.style.display = 'block';
                                    pmdrEmail.innerHTML = orderEmailInput.value;
                                    paymentMethodDetailsInput.style.display = 'none';
                                    paymentMethodDetailsResult.style.display = 'block';
                                    setTimeout(() => window.scroll(getScrollOptions(pmdc)), 100);
                                    break;

                                case 'wtire-transfer':
                                    break;
                            }
                        }
                    }
                });
            }

            function sendInstructions() {
                $.ajax({
                    type: "POST",
                    //dataType: 'json',
                    url: "https://www.myusacorporation.com/custom-payment",
                    data: $("#pay-form").serialize() + '&payment[agreed]=' + $('#payagree').val() + '&payment[instructions]=' + $('#paymenttype').val() + '&payment[instructions]=' + $('#paymenttype').val(),
                    success: function (data) {
                        console.log("custom-payment answer", data);

                    }
                });
            }

            const validatingInputs = [
                orderEmailInput,
                orderIdInput,
                orderTotalInput,
                creditCardNumberInput,
                creditCardNameInput,
                creditCardExpiresInput,
                creditCardCVVInput,
                addressInput,
                cityInput,
                suiteInput,
                stateInput,
                zipInput,
                countryInput
            ];

            validatingInputs.forEach((input) => {
                input.addEventListener('blur', validateFullForm);
            });

            countryInput.addEventListener('change', validateFullForm);

            validatingInputs.forEach((input) => {
                input.addEventListener('focus', (e) => {
                    let el = e.currentTarget;
                    if (!el.classList.contains('activated')) {
                        el.classList.add('activated');
                    }
                });
            });

            submitBtn.addEventListener('click', (e) => {
                validateFullForm();
                let isValid = validateFullForm();
                if (!isValid) {
                    submitBtn.setAttribute('disabled', 'disabled');
                } else {
                    //alert('The form has been successfully submitted');
                    $.ajax({
                        type: "get",
                        //dataType: 'json',
                        url: "https://www.myusacorporation.com/order-info",
                        data: `order-id=${$('input[name="payment[order-id]"]').val()}&email=${$('input[name="payment[liame]"]').val()}`,
                        success: function (data) {
                            console.log("order-info answer", data);

                        }
                    });

                    let [cardMonth, cardYear] = $('input#pf-cc-exp').val().split('-');
                    cardYear = '20' + cardYear;
                    let cardCvv = ($('input#pf-cc-cvv2').val() != '') ? $('input#pf-cc-cvv2').val() : $('input#pf-cc-cvv1').val();

                    Stripe.card.createToken({
                        number: $('input[name="payment[card-num]').val(),
                        cvc: cardCvv,
                        exp_month: cardMonth,
                        exp_year: cardYear,
                        address_zip: $('input#pf-address').val()
                    }, function (status, response) {
                        //var $form = $('#payment-form');
                        //$('[data-stripe]').val("");
                        if (response.error) {
                            console.log(response);
                        } else {
                            console.log(response);
                            var token = response.id;

                            /*payment_form.send({
                                beforeSend: function () {
                                    showLoading();
                                },
                                error: function (error) {
                                    commonError(method);
                                    hideLoading();
                                },
                                complete: function () {
                                    // hideLoading();
                                }
                            }, {
                                "payment": {
                                    "stripe-token": response
                                }
                            });*/
                        }
                    });
                }
            });

            creditCardNumberInput.addEventListener('keydown', ccNumberInputKeyDownHandler);
            creditCardNumberInput.addEventListener('input', ccNumberInputInputHandler);

            creditCardExpiresInput.addEventListener('keydown', ccExpiryInputKeyDownHandler);
            creditCardExpiresInput.addEventListener('input', ccExpiryInputInputHandler);

            creditCardCVVInput.addEventListener('keydown', ccCVVInputKeyDownHandler);
            creditCardCVVInput.addEventListener('input', ccCVVInputInputHandler);

            creditCardNameInput.addEventListener('keydown', ccNameInputKeyDownHandler);
            creditCardNameInput.addEventListener('input', ccNameInputInputHandler);

            orderIdInput.addEventListener('keydown', orderIdInputKeyDownHandler);
            orderIdInput.addEventListener('input', orderIdInputInputHandler);

            orderTotalInput.addEventListener('keydown', orderTotalInputKeyDownHandler);
            orderTotalInput.addEventListener('input', orderTotalInputInputHandler);

            cityInput.addEventListener('keydown', cityInputKeyDownHandler);
            cityInput.addEventListener('input', cityInputInputHandler);

            stateInput.addEventListener('keydown', stateInputKeyDownHandler);
            stateInput.addEventListener('input', stateInputInputHandler);

            zipInput.addEventListener('keydown', zipInputKeyDownHandler);
            zipInput.addEventListener('input', zipInputInputHandler);
        }

    });
});