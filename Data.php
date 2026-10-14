<?php
// 2311102309_Alden Audy Akabar 
$my_projects = [
    [
        "nama" => "Task Manager",
        "kategori" => "web",
        "deskripsi" => "Aplikasi manajemen tugas untuk mengatur dan melacak produktivitas harian.",
        "tech" => "PHP, HTML, CSS",
        "link" => "https://coding-camp-16-feb26-alden.vercel.app"
    ],
    [
        "nama" => "Computer Vision PIN Unlocker",
        "kategori" => "ml",
        "deskripsi" => "Aplikasi JavaFX untuk validasi PIN menggunakan klasifikasi gambar real-time dari tangkapan kamera, ditenagai oleh model machine learning TensorFlow.",
        "tech" => "JavaFX, TensorFlow",
        "link" => "https://github.com/Alden0000/csa-cv-lesson3c-main" // <-- Link GitHub Baru
    ],
    [
        "nama" => "Genetic Algorithm Classifier",
        "kategori" => "ml",
        "deskripsi" => "Implementasi Algoritma Genetika untuk optimasi model klasifikasi kontinu pada tugas akhir.",
        "tech" => "Python, Scikit-Learn",
        "link" => "" 
    ],
    [
        "nama" => "Digital Forensics Tracker",
        "kategori" => "forensic",
        "deskripsi" => "Sistem pelacakan dan analisis jejak digital pada sistem file menggunakan metode data carving.",
        "tech" => "EnCase, Autopsy",
        "link" => ""
    ],
    [
        "nama" => "Personal Web Portfolio",
        "kategori" => "web",
        "deskripsi" => "Membangun identitas digital dan portofolio interaktif menggunakan HTML, CSS, dan native AJAX.",
        "tech" => "HTML, CSS, JS Native, PHP",
        "link" => ""
    ]
];


$category = isset($_GET['category']) ? $_GET['category'] : 'all';


$found = false;

foreach ($my_projects as $project) {
    if ($category == 'all' || $project['kategori'] == $category) {
        $found = true;
        
        
        $linkHtml = "";
        if (!empty($project['link'])) {
            $linkHtml = "<a href='{$project['link']}' target='_blank' style='display: inline-block; margin-top: 15px; color: var(--c-teal); text-decoration: none; font-weight: bold; border-bottom: 2px solid var(--c-teal); padding-bottom: 2px; transition: color 0.3s;'>View Project &#8594;</a>";
        }

        echo "
        <div class='card'>
            <h3>{$project['nama']}</h3>
            <p>{$project['deskripsi']}</p>
            <div class='tech-stack'>Tech: {$project['tech']}</div>
            {$linkHtml}
        </div>";
    }
}


if (!$found) {
    echo "
    <div class='card'>
        <h3>Belum ada proyek</h3>
        <p>Proyek untuk kategori ini sedang dalam tahap pengerjaan.</p>
    </div>";
}
?>