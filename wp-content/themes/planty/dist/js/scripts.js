function populateFormSummaryTitle() {
    let formSummaryTitle = document.querySelector(".wpcf7-form__summary-title");
    if (!formSummaryTitle) return;
    formSummaryTitle.innerHTML = document.querySelector("div.form_summary_title").innerHTML;
    document.querySelector("div.form_summary_title").remove();
};

function populateFormInformationsTitle() {
    let formInformationsTitle = document.querySelector(".wpcf7-form__informations-title");
    if (!formInformationsTitle) return;
    formInformationsTitle.innerHTML = document.querySelector("div.form_informations_title").innerHTML;
    document.querySelector("div.form_informations_title").remove();
};

function populateFormAddressTitle() {
    let formAddressTitle = document.querySelector(".wpcf7-form__address-title");
    if (!formAddressTitle) return;
    formAddressTitle.innerHTML = document.querySelector("div.form_address_title").innerHTML;
    document.querySelector("div.form_address_title").remove();
};

window.addEventListener("load", () => {

    populateFormSummaryTitle();
    populateFormInformationsTitle();
    populateFormAddressTitle();

});