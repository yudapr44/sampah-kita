@echo off
echo ============================================
echo   SampahKita - Update Gambar Lilin
echo ============================================
echo.

set "SRC=C:\Users\tamfa\.gemini\antigravity\brain\df47d070-eb10-4fdd-883d-bd6e56dd0c6c\.user_uploaded\media__1785497987890.jpg"
set "DST=C:\Users\tamfa\OneDrive\Documents\KKN FILE\Project Individu\public\images\lilin_aromaterapi.jpg"

echo Menyalin foto lilin aromaterapi...
copy /Y "%SRC%" "%DST%"

if exist "%DST%" (
    echo.
    echo [OK] Gambar berhasil disalin!
    echo.
    echo Sekarang melakukan git commit dan push...
    cd /D "C:\Users\tamfa\OneDrive\Documents\KKN FILE\Project Individu"
    git add public/images/lilin_aromaterapi.jpg
    git commit -m "feat: update lilin aromaterapi image with real product photo from Desa Balonggandu"
    git push
    echo.
    echo [SELESAI] Gambar sudah diupload ke Vercel!
) else (
    echo.
    echo [ERROR] File gagal disalin. Pastikan path file benar.
)

echo.
pause
