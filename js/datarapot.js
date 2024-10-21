document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("nilaiForm");
    const mataPelajaranContainer = document.getElementById("mataPelajaranContainer");
    const addMapelBtn = document.getElementById("addMapelBtn");
    const raporData = [];

    // Fungsi menambahkan baris mata pelajaran
    addMapelBtn.addEventListener("click", () => {
        const mapelGroup = document.createElement("div");
        mapelGroup.classList.add("mapel-group");
        mapelGroup.innerHTML = `
            <table class="rapor-table">
                <tr>
                    <th>Mata Pelajaran</th>
                    <td><input type="text" class="mapel" placeholder="Mata Pelajaran" required></td>
                </tr>
                <tr>
                    <th>Nilai Kompetensi</th>
                    <td><input type="number" class="nilaiKompetensi" placeholder="Nilai Kompetensi" required></td>
                    <th>Nilai Keterampilan</th>
                    <td><input type="number" class="nilaiKeterampilan" placeholder="Nilai Keterampilan" required></td>
                </tr>
                <tr>
                    <th>KKM</th>
                    <td><input type="number" class="kkm" placeholder="KKM" required></td>
                    <th>Keterangan</th>
                    <td><textarea class="keterangan" placeholder="Keterangan (Opsional)"></textarea></td>
                </tr>
            </table>
        `;
        mataPelajaranContainer.appendChild(mapelGroup);
    });

    // Fungsi menangani submit form
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const nisn = document.getElementById("nisn").value;
        const nama = document.getElementById("nama").value;
        const kelas = document.getElementById("kelas").value;
        const jurusan = document.getElementById("jurusan").value;
        const tahunAjaran = document.getElementById("tahunAjaran").value;
        const semester = document.getElementById("semester").value;
        
        const mataPelajaranInputs = document.querySelectorAll(".mapel-group");

        let nilaiRapor = [];

        mataPelajaranInputs.forEach((group) => {
            let mapel = group.querySelector(".mapel").value;
            let nilaiKompetensi = group.querySelector(".nilaiKompetensi").value;
            let nilaiKeterampilan = group.querySelector(".nilaiKeterampilan").value;
            let kkm = group.querySelector(".kkm").value;
            let keterangan = group.querySelector(".keterangan").value;

            nilaiRapor.push({
                mapel,
                nilaiKompetensi,
                nilaiKeterampilan,
                kkm,
                keterangan
            });
        });

        const raporObj = {
            nisn,
            nama,
            kelas,
            jurusan,
            tahunAjaran,
            semester,
            nilaiRapor
        };

        raporData.push(raporObj);
        localStorage.setItem('raporData', JSON.stringify(raporData));

        // Redirect ke halaman tabel rapor
        window.location.href = 'tabelrapot.html';
    });
});
