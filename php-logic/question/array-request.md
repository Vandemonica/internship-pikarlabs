## Instruksi Umum

- jawaban menggunakan PHP + HTML, kodingan rapi
- boleh menggunakan CSS framework apa saja
- pure logic, tidak boleh pakai library

## Soal 1

ada sebuah array, tampilkan dalam table.

- jika tidak ada $_GET maka tampilkan dalam bentuk HTML tabel
- jika ada request $_GET maka tampilkan salah satu arraynya dalam bentuk HTML
- request melalui link, misal `<a href="?id=122">`
- ada tombol back/kembali pada profil untuk menampilkan kembali seluruh data

### Input

```
$input = [
  { 'id' => 122, 'nama' => 'rama', 'asal' => 'surabaya' },
  { 'id' => 227, 'nama' => 'renaldy', 'asal' => 'surabaya' },
  { 'id' => 423, 'nama' => 'fakhri', 'asal' => 'surabaya' },
];

```

### Output

tidak ada $_GET
nama file : `/answer/array-request-1.php`

```
seluruh peserta magang

| id | nama  |  asal  |  link  |
|----|-------|--------|--------|
|122 | rama  |surabaya| profil |
|227 |renaldy|surabaya| profil |
|423 | fakhry|surabaya| profil |

```

ada $_GET

```
profil siswa id = 122

- id : 122
- nama : rama
- asal : surabaya

| kembali |

```

---

## Soal 2

ada sebuah array, tampilkan dalam table.

- ada kolom pencarian ID `<input name="id" />` dan `<form method="GET">`
- jika tidak ada $_GET maka tampilkan seluruh datanya
- jika ada request $_GET maka tampilkan datanya yang memiliki kesamaan huruf/angka/karakter dengan pencarian
- ada tombol reset untuk menampilkan kembali seluruh data

### Input

```
$input = [
  { 'id' => 122, 'nama' => 'rama', 'asal' => 'surabaya' },
  { 'id' => 227, 'nama' => 'renaldy', 'asal' => 'surabaya' },
  { 'id' => 423, 'nama' => 'fakhri', 'asal' => 'surabaya' },
];

```

### Output

tidak ada $_GET
nama file : `/answer/array-request-2.php`

```
peserta magang

        -------------------------
cari ID |        | cari | reset |
        -------------------------

| id | nama  |  asal  |  link  |
|----|-------|--------|--------|
|122 | rama  |surabaya| profil |
|227 |renaldy|surabaya| profil |
|423 | fakhry|surabaya| profil |

```

ada $_GET

```
peserta magang

        -------------------------
cari ID | 22     | cari | reset |
        -------------------------

mencari siswa dengan ID "22"

| id | nama  |  asal  |  link  |
|----|-------|--------|--------|
|122 | rama  |surabaya| profil |
|227 |renaldy|surabaya| profil |

```

---

## Soal 3

- sama dengan soal 2, hanya saja kali ini kolom pencarian menggunakan `<form method="POST">`
- nama file : `/answer/array-request-3.php`