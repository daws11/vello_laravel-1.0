@extends('layouts.app')

@section('content')
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="quiz-container container" style="margin-top: 120px;">
    <div id="quiz-content">
        <!-- Pertanyaan 1 -->
        <div class="question-card fade-in-bottom" id="question-0" style="margin-bottom: 50px;">
            <h2 class="section-title">1. Bagaimana bisnis Anda menjalankan proses utama saat ini?</h2>
            <p>Isi deskripsi singkat mengenai proses bisnis Anda saat ini.</p>
            <form>
                <div class="form-group">
                    <textarea name="answer-0" id="answer-0" rows="4" class="form-control" placeholder="Contoh: Sebagian besar manual, terutama inventori dan pelaporan keuangan."></textarea>
                </div>
            </form>
            <button class="next-btn" onclick="showNextQuestion(0)">Selanjutnya</button>
        </div>

        <!-- Pertanyaan 2 -->
        <div class="question-card fade-in-bottom hidden" id="question-1" style="margin-bottom: 50px;">
            <h2 class="section-title">2. Apakah Anda menggunakan teknologi untuk sebagian besar operasional?</h2>
            <div class="card-container">
                <div class="card" onclick="selectAnswer(1, 'Ya')">Ya</div>
                <div class="card" onclick="selectAnswer(1, 'Tidak')">Tidak</div>
                <div class="card" onclick="selectAnswer(1, 'Sebagian')">Sebagian</div>
            </div>
            <input type="hidden" name="answer_2" id="hidden-answer-2">
        </div>

        <!-- Pertanyaan 3 -->
        <div class="question-card fade-in-bottom hidden" id="question-2" style="margin-bottom: 50px;">
            <h2 class="section-title">3. Apa tujuan utama Anda dalam 6-12 bulan ke depan?</h2>
            <div class="card-container">
                <div class="card" onclick="selectAnswer(2, 'Meningkatkan efisiensi')">Meningkatkan efisiensi</div>
                <div class="card" onclick="selectAnswer(2, 'Meningkatkan penjualan')">Meningkatkan penjualan</div>
                <div class="card" onclick="selectAnswer(2, 'Memperluas pasar')">Memperluas pasar</div>
                <div class="card" onclick="showDescriptionForm(2)">Lainnya (jelaskan)</div>
            </div>

            <!-- Input hidden untuk menyimpan jawaban deskripsi lainnya -->
            <input type="hidden" name="answer_3" id="hidden-answer-3">
            
            <!-- Form deskripsi untuk pilihan "Lainnya" -->
            <div id="description-form-2" class="hidden" style="margin-top: 20px;">
                <textarea name="description-3" id="description-3" rows="4" class="form-control" placeholder="Jelaskan tujuan utama Anda..."></textarea>
                <button class="next-btn" onclick="showNextQuestion(2)">Selanjutnya</button>
            </div>
        </div>

        <!-- Pertanyaan 4 -->
        <div class="question-card fade-in-bottom hidden" id="question-3" style="margin-bottom: 50px;">
            <h2 class="section-title">4. Apakah Anda merasa operasional bisnis saat ini lambat atau memakan banyak waktu?</h2>
            <div class="card-container">
                <div class="card" onclick="selectAnswer(3, 'Ya')">Ya</div>
                <div class="card" onclick="selectAnswer(3, 'Tidak')">Tidak</div>
            </div>
            <input type="hidden" name="answer_4" id="hidden-answer-4">
        </div>

        <!-- Pertanyaan 5 -->
        <div class="question-card fade-in-bottom hidden" id="question-4" style="margin-bottom: 50px;">
            <h2 class="section-title">5. Apakah pelanggan dapat mengakses layanan atau produk Anda secara online?</h2>
            <div class="card-container">
                <div class="card" onclick="selectAnswer(4, 'Ya')">Ya</div>
                <div class="card" onclick="selectAnswer(4, 'Tidak')">Tidak</div>
                <div class="card" onclick="selectAnswer(4, 'Sebagian')">Sebagian</div>
            </div>
            <input type="hidden" name="answer_5" id="hidden-answer-5">
        </div>

        <!-- Pertanyaan 6 -->
        <div class="question-card fade-in-bottom hidden" id="question-5" style="margin-bottom: 50px;">
            <h2 class="section-title">6. Apakah Anda mengalami kesulitan dalam mengelola data atau informasi bisnis?</h2>
            <div class="card-container">
                <div class="card" onclick="selectAnswer(5, 'Ya')">Ya</div>
                <div class="card" onclick="selectAnswer(5, 'Tidak')">Tidak</div>
            </div>
            <input type="hidden" name="answer_6" id="hidden-answer-6">
        </div>

        <!-- Pertanyaan 7 -->
        <div class="question-card fade-in-bottom hidden" id="question-6" style="margin-bottom: 50px;">
            <h2 class="section-title">7. Seberapa siap tim Anda untuk beradaptasi dengan teknologi baru?</h2>
            <div class="card-container">
                <div class="card" onclick="selectAnswer(6, 'Sangat Siap')">Sangat Siap</div>
                <div class="card" onclick="selectAnswer(6, 'Siap')">Siap</div>
                <div class="card" onclick="selectAnswer(6, 'Perlu Pelatihan Lebih Lanjut')">Perlu Pelatihan Lebih Lanjut</div>
            </div>
            <input type="hidden" name="answer_7" id="hidden-answer-7">
        </div>

        <!-- Pertanyaan 8 -->
        <div class="question-card fade-in-bottom hidden" id="question-7" style="margin-bottom: 50px;">
            <h2 class="section-title">8. Seberapa baik Anda merasa memahami apa yang dilakukan pesaing dalam hal digitalisasi?</h2>
            <div class="card-container">
                <div class="card" onclick="selectAnswer(7, 'Sangat Buruk')">Sangat Buruk</div>
                <div class="card" onclick="selectAnswer(7, 'Buruk')">Buruk</div>
                <div class="card" onclick="selectAnswer(7, 'Biasa Saja')">Biasa Saja</div>
                <div class="card" onclick="selectAnswer(7, 'Baik')">Baik</div>
                <div class="card" onclick="selectAnswer(7, 'Sangat Baik')">Sangat Baik</div>
            </div>
            <input type="hidden" name="answer_8" id="hidden-answer-8">
        </div>

        <!-- Pertanyaan 9 -->
        <div class="question-card fade-in-bottom hidden" id="question-8" style="margin-bottom: 50px;">
            <h2 class="section-title">9. Apakah Anda sudah memiliki anggaran khusus untuk digitalisasi?</h2>
            <div class="card-container">
                <div class="card" onclick="selectAnswer(8, 'Ya')">Ya</div>
                <div class="card" onclick="selectAnswer(8, 'Tidak')">Tidak</div>
                <div class="card" onclick="selectAnswer(8, 'Perlu Dipertimbankan')">Perlu Dipertimbankan</div>
            </div>
            <input type="hidden" name="answer_9" id="hidden-answer-9">
        </div>

        <!-- Pertanyaan 10 -->
<div class="question-card fade-in-bottom hidden" id="question-9" style="margin-bottom: 50px;">
    <h2 class="section-title">10. Apa kendala utama yang Anda hadapi dalam adopsi teknologi digital?</h2>
    <div class="card-container">
        <div class="card" onclick="selectAnswer(9, 'Biaya')">Biaya</div>
        <div class="card" onclick="selectAnswer(9, 'Sumber Daya Manusia')">Sumber Daya Manusia</div>
        <div class="card" onclick="selectAnswer(9, 'Kurangnya pemahaman teknologi')">Kurangnya pemahaman teknologi</div>
        <div class="card" onclick="showDescriptionForm(9)">Lainnya (jelaskan)</div>
    </div>

    <!-- Form deskripsi singkat jika memilih "Lainnya" -->
    <div id="description-form-9" class="hidden" style="margin-top: 20px;">
        <textarea name="description-9" id="description-9" rows="4" class="form-control" placeholder="Jelaskan kendala utama Anda..."></textarea>
        <button class="next-btn" onclick="finishQuiz()">Selesai</button>
    </div>

    <!-- Tombol "Selesai" jika bukan memilih "Lainnya" -->
    <button id="finish-btn-9" class="next-btn" style="margin-top: 20px;" onclick="finishQuiz()">Selesai</button>
</div>

<!-- Modal Kustom -->
<div id="successModal" class="modal hidden">
    <div class="modal-content">
        <h2>Solusi Digital Bisnis Anda Siap Dimulai! 🚀</h2>
        <p>Terima kasih telah melengkapi form! Kami telah menyiapkan solusi digital yang sesuai untuk meningkatkan efisiensi dan memperluas jangkauan bisnis Anda.</p>
        <p>Ingin tahu lebih banyak tentang langkah-langkah yang bisa diterapkan? Lanjutkan konsultasi melalui WhatsApp dan kami akan membantu Anda mewujudkan transformasi bisnis yang lebih besar.</p>
            <button><a id="whatsappLink" href="#" target="_blank" class="next-btn">Lanjutkan Proses</a> <a class="next-btn" style="margin-top: 5px;" onclick="closeModal()">Kembali</a></button>
            
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Setup CSRF token untuk AJAX request
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });

    // Fungsi untuk menampilkan pertanyaan berikutnya
    window.showNextQuestion = function(index) {
        const nextQuestion = document.getElementById(`question-${index + 1}`);
        if (nextQuestion) {
            nextQuestion.classList.remove('hidden');
            nextQuestion.scrollIntoView({ behavior: 'smooth' });
            nextQuestion.classList.add('fade-in-bottom');
        }
    }

    // Fungsi untuk menangani pilihan jawaban dan simpan di input hidden
    window.selectAnswer = function(questionIndex, answer) {
        const cards = document.querySelectorAll(`#question-${questionIndex} .card`);
        cards.forEach(card => card.classList.remove('selected'));
        const selectedCard = Array.from(cards).find(card => card.textContent === answer);
        if (selectedCard) {
            selectedCard.classList.add('selected');
        }

        // Simpan jawaban yang dipilih di input hidden
        const hiddenInput = document.getElementById(`hidden-answer-${questionIndex + 1}`);
        if (hiddenInput) {
            hiddenInput.value = answer;
        }

        // Lanjut ke pertanyaan berikutnya
        showNextQuestion(questionIndex);
    }

    // Fungsi untuk menampilkan form deskripsi saat memilih "Lainnya"
    window.showDescriptionForm = function(questionIndex) {
        const descriptionForm = document.getElementById(`description-form-${questionIndex}`);
        descriptionForm.classList.remove('hidden');
        const finishBtn = document.getElementById(`finish-btn-${questionIndex}`);
        if (finishBtn) {
            finishBtn.classList.add('hidden');
        }
    }

    // Fungsi untuk memproses pengiriman data setelah quiz selesai
    window.finishQuiz = function() {
        submitQuiz();
    }

    // Fungsi untuk submit data menggunakan AJAX
    window.submitQuiz = function() {
        console.log("submitQuiz function called");

        // Ambil nilai dari textarea atau input radio yang dipilih
        let description1 = document.getElementById('answer-0') ? document.getElementById('answer-0').value : null;
        let description9 = document.getElementById('description-9') ? document.getElementById('description-9').value : null;

        // Ambil jawaban dari input hidden yang disimpan
        let answer2 = document.getElementById('hidden-answer-2') ? document.getElementById('hidden-answer-2').value : null;
        let answer3 = document.getElementById('hidden-answer-3') ? document.getElementById('hidden-answer-3').value : null;
        let answer4 = document.getElementById('hidden-answer-4') ? document.getElementById('hidden-answer-4').value : null;
        let answer5 = document.getElementById('hidden-answer-5') ? document.getElementById('hidden-answer-5').value : null;
        let answer6 = document.getElementById('hidden-answer-6') ? document.getElementById('hidden-answer-6').value : null;
        let answer7 = document.getElementById('hidden-answer-7') ? document.getElementById('hidden-answer-7').value : null;
        let answer8 = document.getElementById('hidden-answer-8') ? document.getElementById('hidden-answer-8').value : null;
        let answer9 = document.getElementById('hidden-answer-9') ? document.getElementById('hidden-answer-9').value : null;

        // Buat objek form data hanya dengan data yang berhasil ditemukan
        let formData = {
            description_1: description1,
            answer_2: answer2,
            answer_3: answer3,
            answer_4: answer4,
            answer_5: answer5,
            answer_6: answer6,
            answer_7: answer7,
            answer_8: answer8,
            answer_9: answer9,
            description_9: description9
        };

        // Validasi sebelum submit, jika ada pertanyaan yang belum diisi
        if (!answer2 || !answer3 || !answer4 || !answer5 || !answer6 || !answer7 || !answer8 || !answer9) {
            alert('Harap isi semua pertanyaan.');
            return;
        }

        // Submit data menggunakan AJAX
        $.ajax({
            url: '{{ route("submit.quiz") }}',  // Pastikan route ini benar
            method: 'POST',
            data: formData,
            success: function(response) {
                // Tampilkan modal setelah quiz selesai dan data tersimpan
                const modal = document.getElementById('successModal');
                modal.style.display = 'block';

                // Set nomor antrian di WhatsApp
                const whatsappLink = `https://wa.me/?text=Halo, Saya ingin melanjutkan konsultasi dengan nomor antrian ${response.queue_number}`;
                document.getElementById('whatsappLink').setAttribute('href', whatsappLink);
            },
            error: function(xhr) {
                if (xhr.status === 419) {
                    alert('CSRF token mismatch. Harap refresh halaman dan coba lagi.');
                } else {
                    alert('Terjadi kesalahan saat menyimpan data. Coba lagi.');
                }
            }
        });
    }
});
</script>


<style>
.question-card {
    background-color: var(--platinum);
    border-radius: var(--radius-12);
    padding: 20px;
    box-shadow: var(--shadow);
    transition: var(--transition-2);
    margin-bottom: 20px;
}

.card-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 10px;
}

.card {
    background-color: var(--platinum);
    border-radius: var(--radius-12);
    padding: 20px;
    transition: var(--transition-2);
    cursor: pointer;
    font-size: var(--fs-8);
    text-align: center;
    box-shadow: var(--shadow);
}

.card:hover, .card.selected {
    background-color: var(--winter-sky);
    color: var(--white);
}


.section-title {
    font-size: var(--fs-4);
}

p {
    font-size: var(--fs-8);
    margin-bottom: 10px;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: var(--platinum);
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
    border-radius: var(--radius-12);
}

.hidden {
    display: none;
}
</style>
@endsection