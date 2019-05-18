 - REST API adalah suatu layanan web API yang menerapakan gaya arsitektur REST 
 suatu gaya arsitektur untuk membuat layanan web API.

 - kegunaan JSON pada REST API adalah format data yang dikeluarkan dari sebuah API yang nantinya data JSON tersebut digunakan oleh yang mengonsumsi API tersebut  
   

---

## Setup Database :

- Buat Database:

  ```
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
   skills | CREATE TABLE `skills` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `user_id` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `user_id` (`user_id`),
    CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
  ) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1