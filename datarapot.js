// Dummy data for student information
const students = {
    '1234567890': { nama: 'Budi Santoso', kelas: '12A', jurusan: 'IPA' },
    '0987654321': { nama: 'Siti Aminah', kelas: '11B', jurusan: 'IPS' },
    '1122334455': { nama: 'Andi Wijaya', kelas: '10C', jurusan: 'Bahasa' }
};

// Fetch and populate student data by NISN
function fetchStudentData() {
    const nisn = document.getElementById('nisn').value;
    const studentInfo = students[nisn];

    if (studentInfo) {
        document.getElementById('nama').value = studentInfo.nama;
        document.getElementById('kelas').value = studentInfo.kelas;
        document.getElementById('jurusan').value = studentInfo.jurusan;
    } else {
        document.getElementById('nama').value = '';
        document.getElementById('kelas').value = '';
        document.getElementById('jurusan').value = '';
    }
}

// Add new Mata Pelajaran form group
document.getElementById('addMapelBtn').addEventListener('click', function () {
    const container = document.getElementById('mataPelajaranContainer');
    
    const newGroup = document.createElement('div');
    newGroup.classList.add('mapel-group');

    newGroup.innerHTML = `
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
                <td>
                    <textarea class="keterangan" placeholder="Keterangan (Opsional)"></textarea>
                </td>
            </tr>
        </table>
    `;
    
    container.appendChild(newGroup);
});

// Prevent default form submission for demonstration
document.getElementById('nilaiForm').addEventListener('submit', function (e) {
    e.preventDefault();
    
    const nilaiKompetensiInputs = document.querySelectorAll('.nilaiKompetensi');
    const nilaiKeterampilanInputs = document.querySelectorAll('.nilaiKeterampilan');
    
    let totalNilaiKompetensi = 0;
    let totalNilaiKeterampilan = 0;
    let totalKKM = 0;
    let count = 0;

    nilaiKompetensiInputs.forEach((input, index) => {
        const nilaiKompetensi = parseFloat(input.value) || 0;
        const nilaiKeterampilan = parseFloat(nilaiKeterampilanInputs[index].value) || 0;
        const kkm = parseFloat(document.querySelectorAll('.kkm')[index].value) || 0;

        totalNilaiKompetensi += nilaiKompetensi;
        totalNilaiKeterampilan += nilaiKeterampilan;
        totalKKM += kkm;
        count++;
    });

    const averageNilaiKompetensi = totalNilaiKompetensi / count;
    const averageNilaiKeterampilan = totalNilaiKeterampilan / count;
    const averageKKM = totalKKM / count;

    document.getElementById('averageResult').style.display = 'block';
    document.getElementById('averageResult').innerHTML = `
        <strong>Rata-rata Nilai Kompetensi:</strong> ${averageNilaiKompetensi.toFixed(2)} <br>
        <strong>Rata-rata Nilai Keterampilan:</strong> ${averageNilaiKeterampilan.toFixed(2)} <br>
        <strong>Rata-rata KKM:</strong> ${averageKKM.toFixed(2)}
    `;
});
