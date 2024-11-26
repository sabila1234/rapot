// Fungsi untuk mengambil data siswa dari server berdasarkan NISN
// async function fetchStudentData() {
//     const nisn = document.getElementById('nisn').value;
//     if (nisn) {
//         const response = await fetch(`http://localhost:5000/api/students/${nisn}`);
//         if (response.ok) {
//             const student = await response.json();
//             document.getElementById('nama').value = student.nama;
//             document.getElementById('kelas').value = student.kelas;
//             document.getElementById('jurusan').value = student.jurusan;
//         } else {
//             document.getElementById('nama').value = '';
//             document.getElementById('kelas').value = '';
//             document.getElementById('jurusan').value = '';
//         }
//     } else {
//         document.getElementById('nama').value = '';
//         document.getElementById('kelas').value = '';
//         document.getElementById('jurusan').value = '';
//     }
// }

// Fungsi untuk menambahkan grup Mata Pelajaran
function addMataPelajaran() {
    const container = document.getElementById('mataPelajaranContainer');
    
    const newGroup = document.createElement('div');
    newGroup.classList.add('mapel-group');

    newGroup.innerHTML = `
          <table class="rapor-table">
                    <tr>
                        <th>Mata Pelajaran</th>
                        <td><input type="text" name="mapel" class="mapel" placeholder="Mata Pelajaran" required></td>
                    </tr>
                    <tr>
                        <th>Nilai Kompetensi</th>
                        <td><input type="number" name="nilaiKompetesi" class="nilaiKompetensi" placeholder="Nilai Kompetensi" required></td>
                        <th>Nilai Keterampilan</th>
                        <td><input type="number" name="nilaiKeterampilan" class="nilaiKeterampilan" placeholder="Nilai Keterampilan" required></td>
                    </tr>
                    <tr>
                        <th>KKM</th>
                        <td><input type="number" name="kkm" class="kkm" placeholder="KKM" required></td>
                        <th>Keterangan</th>
                        <td>
                            <textarea class="keterangan" name="keterangan" placeholder="Keterangan (Opsional)"></textarea>
                        </td>
                    </tr>
                </table>
                `;
                
                container.appendChild(newGroup);
            }
            document.getElementById('addMapelBtn').addEventListener('click', addMataPelajaran);

