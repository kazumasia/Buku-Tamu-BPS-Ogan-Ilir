 # <center>BUKU TAMU Badan Pusat Statistik Ogan Ilir</center>

PETUNJUK CARA PENGGUNAAN

- Silahkan Taro file nya di dalam folder xampp/htdocs
- Pastikan xampp anda sudah terinstall serta ;extension=intl dan ;extension=gd didalam file php.ini sudah di ubah menjadi extension=intl dan extension=gd
   note: file php ini ada di xampp di bagian config
- Pastikan COMPOSER sudah tersetup/terinstall
   note : file nya bisa didownload disini https://getcomposer.org/download/
- Pastikan GIT juga sudah terinstal
   note : file GIT bisa di download disini https://git-scm.com/downloads
- Hidupkan atau Klik tombol Start di Bagian Apache dan Mysql agar database nya dapat berjalan
- Bikin database baru dengan nama ci4login
  note : jika ingin database dengan nama yang berbeda silahkan ubah nama database yang ada di .env
- import DatabaseTamu ke dalam database nya

- Jika sudah semua buka file yang uda di taro di htdocs
- Klik kanan pada bagian kosong di folder lalu pilih GIT BASH HERE
- Masukkan Perintah "php spark serve"
- lalu Buka browser anda serta ketikkan localhost:8080
- masukkan Akun
  
    Akun Admin     
    Username : admin   
    password : bps123456
      
    Akun User    
    Username : user    
    password : bps123456   

- dan selesai sekarang web sudah bisa digunakan

NOTE
Project ini menggunakan beberapa library
- Php spreadsheet
  masukan command `composer require phpoffice/phpspreadsheet`
- Chart.js
  masukkan comand `npm install chart.js`
