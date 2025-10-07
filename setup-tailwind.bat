@echo off
echo 📦 Membuat struktur folder...

REM Membuat folder jika belum ada
mkdir resources\css
mkdir public\css

REM Membuat file app.css
echo @tailwind base; > resources\css\app.css
echo @tailwind components; >> resources\css\app.css
echo @tailwind utilities; >> resources\css\app.css

echo module.exports = { > tailwind.config.js
echo.  content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"], >> tailwind.config.js
echo.  theme: { >> tailwind.config.js
echo.    extend: {}, >> tailwind.config.js
echo.  }, >> tailwind.config.js
echo.  plugins: [], >> tailwind.config.js
echo } >> tailwind.config.js

echo.
echo ✅ Struktur dan konfigurasi selesai dibuat.
echo 💡 Jalankan perintah berikut untuk mulai proses build:
echo.
echo     .\tailwindcss.exe -i ./resources/css/app.css -o ./public/css/app.css --watch
echo.
echo 📄 Jangan lupa tambahkan ini di Blade template kamu:
echo.
echo     <link href="^{{ asset('css/app.css') ^}}" rel="stylesheet">
echo.

pause
