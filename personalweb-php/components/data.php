<?php
$profil = [
    'nama'=>'Ivan Nircahya',
    'foto'=>'redacted.jpg',
    'deskripsi'=>'&nbsp;&nbsp;&nbsp;&nbsp; Seorang pelajar dari SMKN 2 Surabaya 
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

$skills = [
    ['bahasa'=>'HTML & CSS', 'xp'=>32, 'color'=>'seagreen'],
    ['bahasa'=>'PHP & SQL', 'xp'=>28, 'color'=>'steelblue'],
    ['bahasa'=>'Python', 'xp'=>16, 'color'=>'brown'],
    ['bahasa'=>'C#', 'xp'=>24, 'color'=>'darkslateblue']
];

$education = [
    ['nama'=>'SDN Tandes Kidul 1', 'tahun'=>'2010-2016'],
    ['nama'=>'SMP Dharma Bhakti Surabaya', 'tahun'=>'2016-2019'],
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
        'capt'=>'Tampilan gallerium sebelum login',
        'imgx'=>[
            'galleriumLogin.png', 'galleriumLogged.png'
        ],
        'captx'=>[
            'Login form Gallerium', 'Tampilan Gallerium sesudah login'
        ]
    ]
];



?>