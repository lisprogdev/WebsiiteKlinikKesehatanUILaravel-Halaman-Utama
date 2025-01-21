 function updateDateTime() {
    const currentDate = new Date();
    
    // Mengatur format tanggal
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const dateString = currentDate.toLocaleDateString('id-ID', options);
    
    // Mengatur format waktu dengan zona waktu Makassar (WITA)
    const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit', timeZone: 'Asia/Makassar' };
    const timeString = new Intl.DateTimeFormat('id-ID', timeOptions).format(currentDate);

    // Menampilkan tanggal dan waktu
    document.getElementById('date').textContent = dateString;
    document.getElementById('time').textContent = `${timeString} WITA`; // Menambahkan "WITA"
}

// Memperbarui waktu setiap detik
setInterval(updateDateTime, 1000);
updateDateTime(); 