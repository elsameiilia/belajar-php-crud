# Belajar CRUD dengan PHP

CRUD adalah singkatan dari Create, Read, Update, dan Delete, yaitu operasi dasar dalam pengolahan data di database khususnya pada database yang relasional. CRUD dapat diterapkan secara luas di berbagai jenis database seperti MySQL, PostgreeSQL, MongoDB, dan sejenisnya.

Selain itu, CRUD adalah fondasi dasar dalam pengembangan sistem atau aplikasi yang berhubungan dengan pengolahan data. Ini karena hampir semua aplikasi yang menggunakan database melibatkan operasi CRUD dalam penggunaannya.

## Fungsi dan Manfaat CRUD
| CRUD             | Fungsi                                                               |
| ----------------- | ------------------------------------------------------------------ |
| Create | Fungsi dari create dalam CRUD adalah pembuatan database dan juga aktivitas memasukkan data baru ke dalam database. |
| Read | Fungsi dari read adalah untuk mengambil dan menampilkan data atau record yang tersimpan dalam database. |
| Update | Fungsi dari update adalah untuk mengupdate atau memperbaharui data yang sudah ada dalam database. |
| Delete |Fungsi delete dalam CRUD yaitu untuk menghapus database maupun data atau record yang berada di database. |

## Penerapan CRUD
Contoh penerapan CRUD yaitu pada program yang telah dibuat. 
- Terdapat operasi Create, untuk memasukkan data ke dalam database. 
- Read, untuk menampilkan data yang dipanggil dari database. 
- Update, untuk memperbaharui data. 
- Delete, untuk menghapus data yang telah ada.
- Jangan lupa untuk membuat database dan table yang kemudian akan dihubungkan dengan program.

Pada program yang saya kerjakan, saya menggunakan database MySQL.
Berikut sintaks database dan table yang digunakan pada program:
```bash
  CREATE DATABASE modul_6;
  USE modul_6;
  CREATE TABLE pengguna (
    id int (11) NOT NULL auto_increment,
    username varchar(100),
    password varchar(100),
    PRIMARY KEY (id)
  );
```
