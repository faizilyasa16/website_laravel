function confirmLogout() {
    if (confirm("Apakah anda yakin ingin keluar?")) {
        document.getElementById("keluar-app").submit();
    }
}