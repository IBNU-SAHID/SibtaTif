const formDosen = document.getElementById("r-dosen");
const formMhs = document.getElementById("r-mahasiswa");
const btnDosen = document.getElementById("btn-dosen");
const btnMhs = document.getElementById("btn-mhs");

function gantiKeDosen() {

    formDosen.classList.replace("hidden", "block");
    btnDosen.classList.replace("bg-gray-200", "bg-info-500");
    btnDosen.classList.replace("text-gray-600", "text-white");
    btnDosen.classList.remove("hover:bg-info-400");
    btnDosen.classList.remove("hover:text-white");

    formMhs.classList.replace("block", "hidden");
    btnMhs.classList.replace("text-white", "text-gray-600");
    btnMhs.classList.replace("bg-info-500", "bg-gray-200");
    btnMhs.classList.add("hover:bg-info-400");
    btnMhs.classList.add("hover:text-white");

}

function gantiKeMhs() {

    formMhs.classList.replace("hidden", "block");
    btnMhs.classList.replace("bg-gray-200", "bg-info-500");
    btnMhs.classList.replace("text-gray-600", "text-white");
    btnMhs.classList.remove("hover:bg-info-400");
    btnMhs.classList.remove("hover:text-white");

    formDosen.classList.replace("block", "hidden");
    btnDosen.classList.replace("text-white", "text-gray-600");
    btnDosen.classList.replace("bg-info-500", "bg-gray-200");
    btnDosen.classList.add("hover:bg-info-400");
    btnDosen.classList.add("hover:text-white");



    // document.getElementById("r-dosen").classList.replace("block", "hidden");
    // document.getElementById("r-mahasiswa").classList.replace("hidden", "block");

}