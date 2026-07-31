@echo off
echo ============================================
echo   SampahKita - Update Semua Gambar Edukasi
echo ============================================
echo.

set "PROJECT=C:\Users\tamfa\OneDrive\Documents\KKN FILE\Project Individu\public\images"
set "ASSETS=C:\Users\tamfa\.gemini\antigravity\brain\df47d070-eb10-4fdd-883d-bd6e56dd0c6c"

echo [1/3] Menyalin gambar Tong Sampah Pemilahan...
copy /Y "%ASSETS%\tong_sampah_pemilahan_1785422921872.jpg" "%PROJECT%\tong_sampah.jpg"
if exist "%PROJECT%\tong_sampah.jpg" (echo     OK - tong_sampah.jpg) else (echo     GAGAL - tong_sampah.jpg)

echo.
echo [2/3] Menyalin gambar Hidroponik...
copy /Y "%ASSETS%\hidroponik_edukasi_1785424668594.jpg" "%PROJECT%\hidroponik.jpg"
if exist "%PROJECT%\hidroponik.jpg" (echo     OK - hidroponik.jpg) else (echo     GAGAL - hidroponik.jpg)

echo.
echo [3/3] Menyalin gambar Lilin Aromaterapi (foto asli)...
copy /Y "%ASSETS%\.user_uploaded\media__1785497987890.jpg" "%PROJECT%\lilin_aromaterapi.jpg"
if exist "%PROJECT%\lilin_aromaterapi.jpg" (echo     OK - lilin_aromaterapi.jpg) else (echo     GAGAL - lilin_aromaterapi.jpg)

echo.
echo ============================================
echo   Melakukan git commit dan push...
echo ============================================
cd /D "C:\Users\tamfa\OneDrive\Documents\KKN FILE\Project Individu"
git add public/images/tong_sampah.jpg public/images/hidroponik.jpg public/images/lilin_aromaterapi.jpg
git commit -m "feat: add/update edukasi images - tong sampah pemilahan, hidroponik, lilin aromaterapi"
git push

echo.
echo ============================================
echo   SELESAI! Semua gambar sudah di-upload.
echo   Cek website Anda di Vercel setelah deploy.
echo ============================================
echo.
pause
