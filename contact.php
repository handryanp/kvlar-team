<?php
include 'includes/header.php';

// --- BAGIAN INI UNTUK PHP NATIVE (PROSES SUBMIT FORM) ---
// Note: Di localhost, Anda perlu konfigurasi server untuk mengirim email,
// atau hanya menampilkan pesan sukses.
$message_status = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitasi Input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // 2. Validasi Minimal (Contoh)
    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {

        // Di sini Anda akan menambahkan fungsi mail() atau PDO untuk menyimpan pesan.
        // Contoh sederhana untuk demo:

        // $to = "info@kvlarteam.com";
        // $headers = "From: " . $email;
        // if(mail($to, $subject, "Dari: " . $name . "\n\n" . $message, $headers)) {
        //     $message_status = '<div class="alert success">Pesan Anda berhasil terkirim. Terima kasih!</div>';
        // } else {
        //     $message_status = '<div class="alert error">Gagal mengirim pesan. Silakan coba lagi.</div>';
        // }

        $message_status = '<div class="alert success">Pesan Anda berhasil kami terima! Kami akan segera merespon.</div>';

        // Opsional: Kosongkan field form setelah sukses
        $_POST = array();
    } else {
        $message_status = '<div class="alert error">Harap lengkapi semua bidang dengan benar.</div>';
    }
}
// --- AKHIR BAGIAN PROSES SUBMIT FORM ---
?>

<section class="contact-section">
    <h2>Contact Us</h2>
    <p class="tagline">Have a project or question? Feel free to reach out to us through the form below or our contact details.</p>

    <div class="contact-grid">
        <div class="contact-info">
            <h3>Contact Information</h3>
            <p><i class="bi bi-envelope"></i> Email: kvlarteam@gmail.com</p>
            <p><i class="bi bi-phone"></i> Telepon: +62-812-3456-7890</p>
            <p><i class="bi bi-geo-alt"></i> Alamat: Medan, Indonesia</p>

            <div class="social-links">
                <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-github"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
            </div>
        </div>

        <div class="contact-form-container">
            <h3>Contact Form</h3>

            <?php echo $message_status; ?>

            <form action="/contact" method="POST" class="contact-form">

                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required
                    value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required
                    value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required
                    value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>">

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>

                <button type="submit" name="submit">Send</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>