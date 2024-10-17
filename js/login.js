document.getElementById('type').addEventListener('change', function() {
    const adminInputs = document.getElementById('admin-inputs');
    const guruInputs = document.getElementById('guru-inputs');
    const siswaInputs = document.getElementById('siswa-inputs');
    
    adminInputs.style.display = 'none';
    guruInputs.style.display = 'none';
    siswaInputs.style.display = 'none';
    
    if (this.value === 'admin') {
        adminInputs.style.display = 'block';
    } else if (this.value === 'guru') {
        guruInputs.style.display = 'block';
    } else if (this.value === 'siswa') {
        siswaInputs.style.display = 'block';
    }
});

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const role = document.getElementById('type').value;
    let message = '';
    
    if (role === 'admin') {
        const username = document.querySelector('[name="username"]').value;
        const password = document.querySelector('[name="password"]').value;
        
        if (username === 'admin' && password === 'admin123') {
            message = 'Login berhasil sebagai Admin!';
        } else {
            message = 'Login Admin gagal. Username atau password salah.';
        }
        
    } else if (role === 'guru') {
        const nip = document.querySelector('[name="nip"]').value;
        const nama = document.querySelector('[name="nama"]').value;
        
        if (nip === '123456' && nama === 'Guru') {
            message = 'Login berhasil sebagai Guru!';
        } else {
            message = 'Login Guru gagal. NIP atau Nama salah.';
        }
        
    } else if (role === 'siswa') {
        const nisn = document.querySelector('[name="nisn"]').value;
        const nama = document.querySelector('[name="nama"]').value;
        
        if (nisn === '654321' && nama === 'Siswa') {
            message = 'Login berhasil sebagai Siswa!';
        } else {
            message = 'Login Siswa gagal. NISN atau Nama salah.';
        }
    }
    
    alert(message);
});

// Animasi fade in saat footer muncul (opsional)
window.addEventListener('load', function() {
    const footer = document.querySelector('footer');
    footer.style.opacity = '0';  // Set awal footer jadi tidak terlihat
    footer.style.transition = 'opacity 1s';  // Animasi transisi
    setTimeout(function() {
        footer.style.opacity = '1';  // Setelah load, tampilkan footer
    }, 500);  // Delay 500ms sebelum mulai animasi
});
