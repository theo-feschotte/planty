// Populate forms title
function populateFormSummaryTitle() {
    let formTitleContainer = document.querySelector(".wpcf7-form__summary-title");
    if (!formTitleContainer) return;
    let formTitleContent = document.querySelector("div.form_summary_title");
    if (!formTitleContent) return;
    populateFormsTitle(formTitleContainer, formTitleContent);
};
function populateFormInformationsTitle() {
    let formTitleContainer = document.querySelector(".wpcf7-form__informations-title");
    if (!formTitleContainer) return;
    let formTitleContent = document.querySelector("div.form_informations_title");
    if (!formTitleContent) return;
    populateFormsTitle(formTitleContainer, formTitleContent);
};
function populateFormAddressTitle() {
    let formTitleContainer = document.querySelector(".wpcf7-form__address-title");
    if (!formTitleContainer) return;
    let formTitleContent = document.querySelector("div.form_address_title");
    if (!formTitleContent) return;
    populateFormsTitle(formTitleContainer, formTitleContent);
};
function populateFormsTitle(formTitleContainer, formTitleContent) {
    formTitleContainer.innerHTML = formTitleContent.innerHTML;
    formTitleContent.remove();
};


// BackgroundColor forms-response-output
function formInvalidResponseOutput() {
    let IntervalFormsResponseOutput = setInterval(() => {
        let formresponseOutput = document.querySelector(".wpcf7 form.invalid .wpcf7-response-output");
        if (formresponseOutput) {
            clearInterval(IntervalFormsResponseOutput);
            populateFormsStyles(formresponseOutput);
        };
    }, 100 );
};
function formSentResponseOutput() {
    let IntervalFormsResponseOutput = setInterval(() => {
        let formresponseOutput = document.querySelector(".wpcf7 form.sent .wpcf7-response-output");
        if (formresponseOutput) {
            clearInterval(IntervalFormsResponseOutput);
            populateFormsStyles(formresponseOutput);
        };
    }, 100 );
};
function populateFormsStyles(formresponseOutput) {
    var formBorderColor = window.getComputedStyle(formresponseOutput).getPropertyValue('border-color');
    formresponseOutput.style.backgroundColor = formBorderColor;
};

window.addEventListener("load", () => {

    populateFormSummaryTitle();
    populateFormInformationsTitle();
    populateFormAddressTitle();
    formInvalidResponseOutput();
    formSentResponseOutput();

});