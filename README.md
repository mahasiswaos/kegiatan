kegiatan
========

1. Buka Github dan download kegiatan dengan klik tombol download
2. extrak file pada folder Zend/Apache2/htdocs
3. buka cmd.exe (command prompt) dan masuk ke folder 
   Zend/Apache2/htdocs/kegiatan dengan sintaks
	D:
	cd Zend/Apache2/htdocs/kegiatan
3. ketik pada command prompt sintaks :
	composer -vvv --prefer-dist update
4. ubah password database mysql yang ada pada file
	Zend/Apache2/htdocs/kegiatan/app/config/database.php
   dengan password mysql server yang pada komputer anda
   umumnya menggunakan 'admin'
5. klik dua kali pada file kegiatan.mwb (harus punya mysql workbench)
   dan klik menu database->forward Engiineer
   next higga selesai.
6. ketik pada command prompt php artisan serve --port 8081
7. buka browser mozilla/chrome dan ketik localhost:8081
   pada address bar anda