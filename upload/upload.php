<?php
// Periksa apakah form telah dikirim dengan benar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = $_POST['filename'] ?? null;
    $materi = $_POST['materi'] ?? null;
    $file = $_FILES['file'] ?? null;

    if ($filename && $materi && $file) {
        // Pastikan direktori tujuan ada
        $uploadDir = __DIR__ . '/' . $materi . '/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Ambil ekstensi file
        $fileExt = pathinfo($file['name'], PATHINFO_EXTENSION);
        $safeFilename = preg_replace('/[^a-zA-Z0-9-_]/', '_', $filename);
        $targetPath = $uploadDir . $safeFilename . '.' . $fileExt;

        // Upload file
        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            echo "✅ LKPD berhasil diunggah ke materi: <b>" . htmlspecialchars($materi) . "</b>.<br>";
            echo "<a href='../index.html'>← Kembali ke Beranda</a>";
        } else {
            echo "❌ Gagal mengunggah file.";
        }
    } else {
        echo "⚠️ Form tidak lengkap.";
    }
} else {
    echo "🔒 Akses tidak sah.";
}
