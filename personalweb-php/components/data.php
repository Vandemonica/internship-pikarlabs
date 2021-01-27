<?php
$vindex = [
    ['ver'=>'Versi 1', 'link'=>'v1.php', 'img'=>'v1.png', 
        'ket'=>'Personal Web yang memiliki section: 
            profil, skills, portfolio, dan contact dalam satu halaman'],

    ['ver'=>'Versi 2', 'link'=>'v2.php', 'img'=>'v2.png', 
        'ket'=>'Seperti versi-1 tapi halaman portfolionya terpisah dan tampilan lebih minimalis'],
];

$profil = [
    'nama'=>'Ivan Nircahya',
    'foto'=>'redacted.jpg',
    'deskripsi'=>'Seorang pelajar dari SMKN 2 Surabaya 
                    yang duduk dibangku kelas 11 jurusan SIJA (Sistem Informatika Jaringan dan Aplikasi). 
                    Saat ini saya sedang menjelajahi dunia pemrogramman dan membuat project-project kecil 
                    menggunakan bahasa pemrogramman PHP, SQL(untuk database), C#, dan Python.'
];

$navbar = [
    'judul'=>'Web Personal',
    'sekte'=>[
        'Profil', 'Portfolio', 'Contact'
    ]
];

$sekte = [
    'My Skills', 'Riwayat Pendidikan', 'Portfolio'
];

$skills = [
    ['bahasa'=>'HTML & CSS', 'xp'=>32, 'color'=>'seagreen'],
    ['bahasa'=>'PHP & SQL', 'xp'=>28, 'color'=>'steelblue'],
    ['bahasa'=>'Python', 'xp'=>16, 'color'=>'brown'],
    ['bahasa'=>'C#', 'xp'=>24, 'color'=>'darkslateblue']
];

$education = [
    ['nama'=>'SDN Tandes Kidul 1', 'tahun'=>'2010-2016'],
    ['nama'=>'SMPN 2 Cerme', 'tahun'=>'2016-2017'],
    ['nama'=>'SMP Dharma Bhakti', 'tahun'=>'2017-2019'],
    ['nama'=>'SMKN 2 Surabaya', 'tahun'=>'2019-Sekarang']
];

$portfolio = [
    [
        'judul'=>'Union',
        'tahun'=>'2020',
        'ket'=>'Web forum diskusi untuk berbagi topik',
        'link'=>'http://cyanya.000webhostapp.com',
        'img'=>'union0.png',
        'capt'=>'Halaman utama Union',
        'imgx'=>[
            'unionLogin.png', 'unionForum.png', 'unionChat.png',
        ],
        'captx'=>[
            'Login form Union', 'Tampilan forum Union', 'Chatroom Union'
        ]
    ],
    [
        'judul'=>'Cedrie',
        'tahun'=>'2020',
        'ket'=>'Sebuah web based chat-bot wannabe',
        'link'=>'http://cyanya.000webhostapp.com/cedrie',
        'img'=>'cedrie0.png',
        'capt'=>'Tampilan chat Cedrie',
        'imgx'=>[
            'cedrieGame.png',
        ],
        'captx'=>[
            'Minigame Cedrie'
        ]
    ],
    [
        'judul'=>'Gallerium',
        'tahun'=>'2021',
        'ket'=>'Web untuk sharing gambar dan foto-foto',
        'link'=>'http://gallerium.great-site.net',
        'img'=>'gallerium0.png',
        'capt'=>'Tampilan Gallerium sebelum login',
        'imgx'=>[
            'galleriumLogin.png', 'galleriumLogged.png'
        ],
        'captx'=>[
            'Login form Gallerium', 'Tampilan Gallerium sesudah login'
        ]
    ]
];



?>