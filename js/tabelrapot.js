document.addEventListener("DOMContentLoaded", () => {
    const raporBody = document.getElementById("raporBody");
    const studentInfo = document.getElementById("studentInfo");

    const raporData = JSON.parse(localStorage.getItem('raporData')) || [];
    
    // Fungsi mencari berdasarkan NISN
    const searchByNISN = () => {
        const nisnInput = document.getElementById("searchNISN").value;
        const foundData = raporData.find((data) => data.nisn === nisnInput);

        if (foundData) {
            displayStudentInfo(foundData);
            displayRaporTable(foundData.nilaiRapor);
        } else {
            studentInfo.innerHTML = "Siswa tidak ditemukan.";
            raporBody.innerHTML = "";
        }
    };

    // Fungsi menampilkan informasi siswa
    const displayStudentInfo = (data) => {
        studentInfo.innerHTML = `
            <strong>Nama:</strong> ${data.nama}<br>
            <strong>Kelas:</strong> ${data.kelas}<br>
            <strong>Jurusan:</strong> ${data.jurusan}<br>
            <strong>Tahun Ajaran:</strong> ${data.tahunAjaran}<br>
            <strong>Semester:</strong> ${data.semester}
        `;
    };

    // Fungsi menampilkan data rapor
    const displayRaporTable = (nilaiRapor) => {
        raporBody.innerHTML = '';
        nilaiRapor.forEach((item, index) => {
            raporBody.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${item.mapel}</td>
                    <td>${item.nilaiKompetensi}</td>
                    <td>${item.nilaiKeterampilan}</td>
                    <td>${item.kkm}</td>
                    <td>${item.keterangan || '-'}</td>
                </tr>
            `;
        });
    };

    window.searchByNISN = searchByNISN;
});
