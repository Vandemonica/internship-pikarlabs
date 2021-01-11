## Instruksi Umum

- jawaban hanya dalam PHP, tidak perlu ada tag HTML
- tidak perlu menggunakan CSS framework
- pure logic, tidak boleh pakai library

## Soal 1

ada sebuah array, hasilnya tiap value dalam array dikalikan angka

### Input

```
$input = [1, 3, 2, 9, 4];
$angka = 3;
```

### Output

nama file : `/answer/array-1.php`

```
3
9
6
27
12
```

---

## Soal 2

ada sebuah array, hasilnya valuenya direverse/ditampilkan terbalik

### Input

```
$input = [1, 3, 2, 9, 4];
```

### Output

nama file : `/answer/array-2.php`

```
4
9
2
3
1
```

---

## Soal 3

ada sebuah array, carilah index yang memiliki value tertentu

### Input

```
$input = [1, 3, 2, 9, 4];
$cari = 2;
```

### Output

nama file : `/answer/array-3.php`

```
index ke 2
```

---

## Soal 4

ada sebuah array, carilah yang memiliki value tertentu. tampilkan indexnya dan value dari index tersebut. buat sebagai function sehingga bisa dilakukan beberapa pencarian sekaligus. 

### Input

```
$input = [
  { 'id' => 122, 'nama' => 'rama' },
  { 'id' => 287, 'nama' => 'renaldy' },
  { 'id' => 423, 'nama' => 'fakhri' },
];

cariSiswa(122);
cariSiswa('ivan');
```

### Output

nama file : `/answer/array-4.php`

```
------------------------
cari siswa "122"
index ke 0
id=122, nama=rama

------------------------
cari siswa "ivan"
data tidak ditemukan
```

---

## Soal 5

ada sebuah array, carilah yang memiliki index dan value tertentu. tampilkan indexnya dan value dari index tersebut. buat sebagai function sehingga bisa dilakukan beberapa pencarian sekaligus.

### Input

```
$input = [
  { 'id' => 122, 'nama' => 'rama' },
  { 'id' => 287, 'nama' => 'renaldy' },
  { 'id' => 423, 'nama' => 'fakhri' },
];

cariObject('nama', 'fakhri');
cariObject('nama', 'rahman');
```

### Output

nama file : `/answer/array-5.php`

```
------------------------
cari object "nama: fakhri"
index ke 2
id=122, nama=fakhri

------------------------
cari object "nama: rahman"
data tidak ditemukan
```