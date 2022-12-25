function tutupMenu() {
    var sidebar = document.getElementById("sidebar");
    var terbuka = document.getElementById("sidebar-buka");
    var tertutup = document.getElementById("sidebar-tutup");
    var tombol = document.getElementById("tutup-menu");
    var logoNav = document.getElementById("logo-nav");

    terbuka.classList.replace("block", "hidden");
    tertutup.classList.replace("hidden", "block");
    logoNav.classList.replace("md:hidden", "md:block");

    if (terbuka.classList.contains("hidden")) {
        terbuka.classList.replace("block", "hidden");
        tertutup.classList.replace("hidden", "block");
        tombol.classList.replace("block", "hidden");
    }
}

function bukaMenu() {
    var terbuka = document.getElementById("sidebar-buka");
    var tertutup = document.getElementById("sidebar-tutup");
    var tombol = document.getElementById("tutup-menu");
    var logoNav = document.getElementById("logo-nav");

    terbuka.classList.replace("hidden", "block");
    tertutup.classList.replace("block", "hidden");
    tombol.classList.replace("hidden", "block");
    logoNav.classList.replace("md:block", "md:hidden");
}

function copyLink() {
    // Get the text field
    var copyText = document.getElementById("link-penaftaran-dosen");
    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
    // Copy the text inside the text field
    navigatorclipboard.writeText(copyText.value);
    // Alert the copied text
    alert("Copied the text: " + copyText.value);
}

function cek() {
    alert("javascript jalan");
}