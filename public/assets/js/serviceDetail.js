document.addEventListener('DOMContentLoaded', function() {
    const startDateInput = document.getElementById('start-date');
    const endDateInput = document.getElementById('end-date');
    const totalDaysLabel = document.getElementById('total-days');
    const priceInput = document.getElementById('price-input');
    const minPriceMessage = document.getElementById('min-price-message');
    const submitButton = document.getElementById('submit-button');
    const customerNameInput = document.getElementById('customer-name');
    const companyNameInput = document.getElementById('company-name');
    const appNameInput = document.getElementById('app-name');
    const appDetailsInput = document.getElementById('app-details');
    const whatsappButton = document.getElementById('whatsapp-button');
    const popupOverlay = document.getElementById('popup-confirmation');
    const confirmContinueButton = document.getElementById('confirm-continue');
    const closePopupButton = document.getElementById('close-popup');
    


    function validateForm() {
        let isValid = true;

        if (customerNameInput.value.trim() === '') {
            isValid = false;
            customerNameInput.classList.add('is-invalid');
        } else {
            customerNameInput.classList.remove('is-invalid');
        }

        if (appNameInput.value.trim() === '') {
            isValid = false;
            appNameInput.classList.add('is-invalid');
        } else {
            appNameInput.classList.remove('is-invalid');
        }

        if (appDetailsInput.value.trim() === '' || appDetailsInput.value.trim().length > 100) {
            isValid = false;
            appDetailsInput.classList.add('is-invalid');
        } else {
            appDetailsInput.classList.remove('is-invalid');
        }

        return isValid;
    } 

    
    // Hitung total hari ketika tanggal diubah
    function calculateTotalDays() {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);

        if (startDate && endDate && endDate > startDate) {
            const timeDiff = endDate.getTime() - startDate.getTime();
            const dayDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
            totalDaysLabel.textContent = `Total Hari: ${dayDiff} hari`;

            // Hitung harga minimal berdasarkan total hari
            const minPrice = calculateMinPrice(dayDiff);
            priceInput.setAttribute('min', minPrice);
            minPriceMessage.textContent = `Harga yang di rekomendasikan adalah Rp ${minPrice.toLocaleString()}`;
        }
    }

    // Fungsi untuk menghitung selisih hari antara dua tanggal
    function calculateDayDiff(startDate, endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);
        const diffTime = Math.abs(end - start);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); // Konversi dari milidetik ke hari
        return diffDays;
    }

    // Fungsi untuk menghitung harga minimal berdasarkan total hari
    function calculateMinPrice(days) {
        const featuresCount = parseInt(priceInput.getAttribute('data-features-count'));
        const basePricePerFeature = 700000;
        const baseDaysPerFeature = 14;
        const defaultPrice = featuresCount * basePricePerFeature;
        const defaultDays = featuresCount * baseDaysPerFeature;
        let finalPrice = defaultPrice;

        if (days < defaultDays) {
            const priceMultiplier = defaultDays / days;
            finalPrice = Math.ceil(defaultPrice * priceMultiplier);
        } else if (days > defaultDays) {
            finalPrice = Math.ceil(defaultPrice / (days / defaultDays));
        }

        return finalPrice;
    }

    function formatCurrency(value) {
        const numberString = value.replace(/[^,\d]/g, '').toString();
        const split = numberString.split(',');
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        const ribuan = split[0].substr(sisa).match(/\d{3}/g);
    
        if (ribuan) {
            const separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
    
        return 'Rp ' + rupiah + (split[1] ? ',' + split[1] : '');
    }


    // Periksa apakah harga input valid
    priceInput.addEventListener('input', function(e) {
        // Hapus karakter non-angka
        let value = this.value.replace(/[^0-9]/g, '');
        
        // Format angka
        const formattedValue = formatCurrency(value);
        
        // Set nilai yang sudah diformat ke input
        this.value = formattedValue;
    
        // Periksa harga minimum
        const inputPrice = parseInt(value, 10);
        const minPrice = parseInt(priceInput.getAttribute('min'), 10);
    
        if (inputPrice < minPrice) {
            minPriceMessage.style.display = 'block';
        } else {
            minPriceMessage.style.display = 'none';
        }
    });

    // Event listener untuk menghitung ulang total hari
    startDateInput.addEventListener('change', calculateTotalDays);
    endDateInput.addEventListener('change', calculateTotalDays);

    

    // Event listener untuk membuka popup setelah validasi
    whatsappButton.addEventListener('click', function() {
        if (validateForm()) {
            showPopup(); // Tampilkan popup dengan animasi fade-in
        } else {
            alert('Mohon lengkapi semua field yang wajib diisi.');
        }
    });

    // Event listener untuk tombol "Setuju dan Lanjutkan"
    confirmContinueButton.addEventListener('click', function() {
          const customerName = customerNameInput.value;
        const companyName = companyNameInput.value || '-'; // Default jika kosong
        const appName = appNameInput.value;
        const appDetails = appDetailsInput.value;
        const agreedPrice = priceInput.value; // Ambil harga dari input 'price-input'
        const startDate = startDateInput.value; // Ambil start date dari form
        const endDate = endDateInput.value; // Ambil end date dari form
        const dayDiff = calculateDayDiff(startDate, endDate); // Hitung selisih hari

        // Format pesan WhatsApp dengan detail tambahan dari Blade dan input tanggal
        const whatsappMessage = `
Halo, saya ingin mengajukan permintaan dengan detail sebagai berikut:

*Pelanggan:*
    - Nama: ${customerName}
    - Perusahaan/Organisasi/Brand: ${companyName}
    
*Proyek:*
    - Nama Aplikasi: ${appName}
    - Detail Singkat: ${appDetails}
    - Service Data: ${serviceData}
    - Jenis Aplikasi: ${jenisAplikasi}
    - Fitur Aplikasi: 
      ${serviceFeature}

*Biaya dan Jadwal:*
    - Harga yang Disetujui: 
      *${agreedPrice}*
    - Tanggal Mulai: ${startDate}
    - Tanggal Selesai: ${endDate}
    - Durasi: ${dayDiff} hari
`;
        // Buat URL untuk mengarahkan ke WhatsApp
        const whatsappUrl = `https://api.whatsapp.com/send?phone=6285603520775&text=${encodeURIComponent(whatsappMessage)}`;

        // Arahkan pengguna ke WhatsApp
        window.open(whatsappUrl, '_blank');

        // Sembunyikan popup setelah pengguna melanjutkan
        hidePopup();
    });

    // Event listener untuk tombol "Batal"
    closePopupButton.addEventListener('click', function() {
        hidePopup(); // Sembunyikan popup dengan animasi fade-out
    });

    function showPopup() {
        popupOverlay.classList.remove('fade-out');
        popupOverlay.classList.add('fade-in');
        popupOverlay.style.display = 'flex';
    }

    // Fungsi untuk menyembunyikan popup dengan animasi fade-out
    function hidePopup() {
        popupOverlay.classList.remove('fade-in');
        popupOverlay.classList.add('fade-out');
        setTimeout(() => {
            popupOverlay.style.display = 'none'; // Sembunyikan popup setelah animasi
        }, 500); // Durasi animasi fade-out
    }

});
