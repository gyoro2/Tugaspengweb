<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Pendaftaran</h1>
    <form id="registrationForm" action="sistem.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" required minlength="3">
            <span class="error" id="nameError"></span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <span class="error" id="emailError"></span>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telepon</label>
            <input type="text" id="phone" name="phone" required pattern="\d+" minlength="10">
            <span class="error" id="phoneError"></span>
        </div>
        <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <select id="gender" name="gender" required>
                <option value="">Pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <span class="error" id="genderError"></span>
        </div>
        <div class="form-group">
            <label for="fileUpload">Unggah File (Teks)</label>
            <input type="file" id="fileUpload" name="fileUpload" accept=".txt" required>
            <span class="error" id="fileError"></span>
        </div>
        <button type="submit">Kirim</button>
    </form>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function (event) {
            let isValid = true;

            // Validasi JavaScript tambahan
            const fileInput = document.getElementById('fileUpload');
            const file = fileInput.files[0];
            const name = document.getElementById('name').value;

            if (file && file.size > 1048576) { // 1 MB
                isValid = false;
                document.getElementById('fileError').textContent = "Ukuran file tidak boleh lebih dari 1MB";
            }

            if (name.length < 3) {
                isValid = false;
                document.getElementById('nameError').textContent = "Nama harus lebih dari 3 karakter.";
            }

            if (!isValid) event.preventDefault();
        });
        <script>
    document.getElementById('registrationForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Mencegah form terkirim langsung untuk memberikan pop-up
        const isValid = validateForm();

        if (isValid) {
            alert('Form berhasil dikirim!');
            this.submit(); // Melanjutkan pengiriman form
        }
    });

    function validateForm() {
        let isValid = true;

        // Validasi tambahan di sini, seperti panjang teks, ukuran file, dsb.
        const fileInput = document.getElementById('fileUpload');
        const file = fileInput.files[0];
        const name = document.getElementById('name').value;

        if (file && file.size > 1048576) { // 1 MB
            alert('Ukuran file tidak boleh lebih dari 1MB.');
            isValid = false;
        }

        if (name.length < 3) {
            alert('Nama harus lebih dari 3 karakter.');
            isValid = false;
        }

        return isValid;
    }
</script>



    </script>
</body>
</html>
