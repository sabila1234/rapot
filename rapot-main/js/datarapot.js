// Fungsi untuk mengambil data siswa dari server berdasarkan NISN
async function fetchStudentData() {
    const nisn = document.getElementById('nisn').value;
    if (nisn) {
        const response = await fetch(`http://localhost:5000/api/students/${nisn}`);
        if (response.ok) {
            const student = await response.json();
            document.getElementById('nama').value = student.nama;
            document.getElementById('kelas').value = student.kelas;
            document.getElementById('jurusan').value = student.jurusan;
        } else {
            document.getElementById('nama').value = '';
            document.getElementById('kelas').value = '';
            document.getElementById('jurusan').value = '';
        }
    } else {
        document.getElementById('nama').value = '';
        document.getElementById('kelas').value = '';
        document.getElementById('jurusan').value = '';
    }
}

// Fungsi untuk menambahkan grup Mata Pelajaran
function addMataPelajaran() {
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
}

// Fungsi untuk menghitung rata-rata nilai
function calculateAverage() {
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
}

// Event listener untuk tombol "Tambah Mata Pelajaran"
document.getElementById('addMapelBtn').addEventListener('click', addMataPelajaran);

// Event listener untuk form submission
document.getElementById('nilaiForm').addEventListener('submit', function (e) {
    e.preventDefault();
    calculateAverage();
});

// Event listener untuk input NISN
document.getElementById('nisn').addEventListener('input', fetchStudentData);
