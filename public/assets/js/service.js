document.addEventListener('DOMContentLoaded', function () {
    const sectionTitle = document.getElementById('section-title');
    const serviceList = document.getElementById('service-list');
    const backButton = document.querySelector('.btn.fade-in-top'); // Tombol Back di atas
    const loader = document.getElementById('loader');
    const serviceListContainer = document.querySelector('.service-list-container'); // Container utama untuk list card
    const serviceDataMapping = {
        'Pilih Jenis Web App Yang Anda butuhkan': 'Web Development',
        'Pilih Jenis Mobile App Yang Anda butuhkan': 'Mobile Development'
    };

    // Variabel untuk menyimpan data pilihan user
    let selectedServiceData = "";
    let selectedJenisAplikasi = "";
    let selectedServiceFeature = [];
    const pricePerFeature = 700000; // Harga per fitur
    const daysPerFeature = 14; // Waktu pengerjaan standar per fitur (14 hari)

    // Sembunyikan tombol back pada awal
    backButton.style.display = 'none';

    // Fungsi untuk mengganti konten dengan transisi dan loader
    function replaceContent(serviceId) {
        loader.style.display = 'block';
        sectionTitle.classList.remove('fade-in');
        sectionTitle.classList.add('fade-out');
        serviceList.classList.remove('fade-in');
        serviceList.classList.add('fade-out');
    
        setTimeout(() => {
            fetch(`/service-data/${serviceId}`)
                .then(response => response.json())
                .then(data => {
                    loader.style.display = 'none';
                    serviceList.innerHTML = '';

                    // Periksa jika serviceId adalah mobile atau web development
                    if (serviceId === 'mobile-development' || serviceId === 'web-development') {
                        selectedServiceData = serviceDataMapping[data.title] || data.title;  // Simpan nama layanan yang sesuai
                    }

                    sectionTitle.textContent = data.title;

                    data.cards.forEach(card => {
                        const li = document.createElement('li');
                        const cardDiv = document.createElement('div');
                        cardDiv.classList.add('service-card', 'fade-in-bottom', 'visible');

                        const iconDiv = document.createElement('div');
                        iconDiv.classList.add('card-icon');
                        const icon = document.createElement('ion-icon');
                        icon.setAttribute('name', card.icon);
                        iconDiv.appendChild(icon);

                        const title = document.createElement('h3');
                        title.classList.add('h3', 'title');
                        title.textContent = card.title;

                        const text = document.createElement('p');
                        text.classList.add('text');
                        text.textContent = card.text;

                        cardDiv.appendChild(iconDiv);
                        cardDiv.appendChild(title);
                        cardDiv.appendChild(text);

                        if (card.type === 'feature') {
                            const checkboxContainer = document.createElement('div');
                            checkboxContainer.classList.add('checkbox-container');

                            const checkbox = document.createElement('input');
                            checkbox.setAttribute('type', 'checkbox');
                            checkbox.classList.add('feature-checkbox');

                            checkbox.addEventListener('change', function () {
                                if (checkbox.checked) {
                                    selectedServiceFeature.push(title.textContent);
                                } else {
                                    selectedServiceFeature = selectedServiceFeature.filter(
                                        feature => feature !== title.textContent
                                    );
                                }
                            });

                            checkboxContainer.appendChild(checkbox);
                            cardDiv.appendChild(checkboxContainer);
                        } else {
                            const button = document.createElement('button');
                            button.classList.add('card-btn');
                            button.setAttribute('aria-label', 'Show More');
                            button.innerHTML = '<ion-icon name="chevron-forward-outline"></ion-icon>';
                            button.addEventListener('click', function () {
                                selectedJenisAplikasi = card.title;
                                replaceContent(card.data_id);
                            });
                            cardDiv.appendChild(button);
                        }

                        li.appendChild(cardDiv);
                        serviceList.appendChild(li);
                    });

                    const existingNextButton = document.querySelector('.next-btn');
                    if (existingNextButton) {
                        existingNextButton.remove();
                    }

                    if (data.cards.some(card => card.type === 'feature')) {
                        const nextButton = document.createElement('button');
                        nextButton.classList.add('next-btn');
                        nextButton.textContent = 'Selanjutnya';
                        nextButton.style.marginTop = '40px';
                        nextButton.addEventListener('click', function () {
                            const url = new URL('/service/detail', window.location.origin);
                            url.searchParams.set('serviceData', selectedServiceData);
                            url.searchParams.set('jenisAplikasi', selectedJenisAplikasi);
                            url.searchParams.set('serviceFeature', JSON.stringify(selectedServiceFeature));

                            window.location.href = url.toString();
                        });

                        serviceListContainer.appendChild(nextButton);
                    }

                    sectionTitle.classList.remove('fade-out');
                    sectionTitle.classList.add('fade-in');
                    serviceList.classList.remove('fade-out');
                    serviceList.classList.add('fade-in');
                })
                .catch(error => {
                    console.error('Error fetching service data:', error);
                    loader.style.display = 'none';
                });
        }, 500);
    }

    // Simpan data pengguna dan harga akhir
    function saveUserData(days, price) {
        const userId = 1; // Dapatkan user ID dari session atau backend
        const userData = {
            userId,
            serviceData: selectedServiceData, // Pastikan serviceData diisi dengan Mobile/Web Development
            jenisAplikasi: selectedJenisAplikasi,
            serviceFeature: selectedServiceFeature,
            days: days,
            price: price
        };
    
        // Mengirimkan data ke server menggunakan fetch
        fetch('/save-user-data', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(userData)
        })
        .then(response => response.json())
        .then(result => {
            alert('Data berhasil disimpan!');
            console.log(result);
        })
        .catch(error => {
            console.error('Error saving user data:', error);
        });
    }

    function goBack() {
        backButton.classList.add('fade-out');

        setTimeout(() => {
            window.location.reload();
        }, 500);
    }

    backButton.addEventListener('click', goBack);

    function attachCardButtonListeners() {
        document.querySelectorAll('.service-card .card-btn').forEach(button => {
            button.addEventListener('click', function () {
                const serviceId = this.closest('.service-card').getAttribute('data-id');
                replaceContent(serviceId);
            });
        });
    }

    attachCardButtonListeners();
});
