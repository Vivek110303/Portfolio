<?php
// php/download_cv.php
// Sends a static CV file from assets/cv. Replace the file with your own resume PDF.
$path = __DIR__ . '/../assets/cv/sample_cv.pdf';
if (!file_exists($path)) {
    // fallback text if the pdf is missing
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="resume.txt"');
    echo "Replace assets/cv/sample_cv.pdf with your real resume."; exit;
}
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="John_Developer_CV.pdf"');
header('Content-Length: ' . filesize($path));
readfile($path);
?>