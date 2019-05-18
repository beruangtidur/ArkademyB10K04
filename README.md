# Bismillah

 - **_REST API_** adalah suatu layanan _web API_ yang dalam pembuatannya menerapakan gaya arsitektur _REST_.
 - Kegunaan _JSON_ pada _REST API_ adalah format data yang dihasilkan dari sebuah _API_ yang nantinya data _JSON_ tersebut dikonsumsi oleh pengguna _API_ tersebut .
   

---

## Setup Database Untuk Tes 6:

- Buat Database **programmer_db**:

  ```mysql
  CREATE DATABASE `programmer_db`;
  ```

- Buat Table **users** :

  ```mysql
  CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1
  ```

- Buat Table **skills** :

  ```mysql
  CREATE TABLE `skills` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `user_id` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `user_id` (`user_id`),
    CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
  ) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1
  ```

  ---

  ## Capture Soal No.6

  
  
  - Tampilan Awal (Belum ada data).
  
  ![1](hasil/1.png"1")
  
  - Menambahkan nama programmer baru.
  
  ![1](hasil/3.png"3")
  
  - Menambahkan skill baru dan programmer baru.![1](hasil/4.png"4")
  
  - Menghapus salah satu programmer.![1](hasil/5.png"5")
  
  - Hasil akhir setelah hapus programmer.![1](hasil/6.png"6")