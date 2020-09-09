const TableMedecins = document.querySelector(
    "#TableMedecins"
) as HTMLTableElement;
const TablePatients = document.querySelector(
    "#TablePatients"
) as HTMLTableElement;

const SectionMedecins = document.querySelector(
    "#SectionMedecins"
) as HTMLDivElement;
const SectionPatients = document.querySelector(
    "#SectionPatients"
) as HTMLDivElement;

const BtnSectionMedecins = document.querySelector(
    "#option1"
) as HTMLButtonElement;
const BtnSectionPatients = document.querySelector(
    "#option2"
) as HTMLButtonElement;

BtnSectionMedecins.addEventListener("click", () => {
    SectionMedecins.classList.remove("display-none");
    SectionPatients.classList.add("display-none");
});
BtnSectionPatients.addEventListener("click", () => {
    SectionMedecins.classList.add("display-none");
    SectionPatients.classList.remove("display-none");
});
