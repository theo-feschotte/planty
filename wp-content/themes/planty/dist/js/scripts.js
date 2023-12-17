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

window.addEventListener("load", () => {

    populateFormSummaryTitle();
    populateFormInformationsTitle();
    populateFormAddressTitle();

});