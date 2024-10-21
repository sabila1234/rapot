document.getElementById('guruForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Mencegah pengiriman form secara default

    // Ambil data dari form
    const nip = document.getElementById('nip').value;
    const nama = document.getElementById('nama').value;
    const alamat = document.getElementById('alamat').value;
    const agama = document.getElementById('agama').value;
    const telpon = document.getElementById('telpon').value;

    // Tampilkan data dalam konsol (Anda bisa mengganti ini dengan proses yang sesuai)
    console.log('Data Guru:', {
        nip,
        nama,
        alamat,
        agama,
        telpon
    });

    // Reset form setelah pengiriman
    this.reset();
    alert('Data guru berhasil dikirim!');
});
