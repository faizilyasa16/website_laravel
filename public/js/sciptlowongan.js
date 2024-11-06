        // JavaScript untuk menampilkan form ketika tombol "Apply" diklik
function showForm() {
    document.getElementById("jobContent").style.display = "none"; // Sembunyikan konten lowongan
    document.getElementById("applyForm").style.display = "block";  // Tampilkan form
}
function hideForm() {
    document.getElementById("jobContent").style.display = "block"; // Tampilkan konten lowongan
    document.getElementById("applyForm").style.display = "none";  // Sembunyikan form
}