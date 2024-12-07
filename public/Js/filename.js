// Fungsi untuk menampilkan nama file yang diunggah
function showFileName(fileInputId, textInputId) {
    const fileInput = document.getElementById(fileInputId);
    const textInput = document.getElementById(textInputId);
    if (fileInput.files.length > 0) {
        textInput.value = fileInput.files[0].name;
    } else {
        textInput.value = "No file chosen";
    }
}

// Fungsi untuk menampilkan modal
function openModal() {
    document.getElementById("uploadModal").style.display = "flex";
}

// Fungsi untuk menyembunyikan modal
function closeModal() {
    document.getElementById("uploadModal").style.display = "none";
}

// Fungsi untuk menyimpan file (placeholder, disesuaikan dengan backend)
function saveFile() {
    const fileInput = document.getElementById('fileInput');
    if (fileInput.files.length === 0) {
        alert('No file selected!');
        return;
    }
    alert(`File ${fileInput.files[0].name} is ready to be saved.`);
    closeModal();
}
