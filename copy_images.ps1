# Script: Copy gambar Hidroponik & Tong Sampah ke folder public/images
# Jalankan script ini dengan double-click atau klik kanan > "Run with PowerShell"

$source1 = "C:\Users\tamfa\.gemini\antigravity\brain\df47d070-eb10-4fdd-883d-bd6e56dd0c6c\hidroponik_edukasi_1785424668594.jpg"
$dest1   = "c:\Users\tamfa\OneDrive\Documents\KKN FILE\Project Individu\public\images\hidroponik.jpg"

$source2 = "C:\Users\tamfa\.gemini\antigravity\brain\df47d070-eb10-4fdd-883d-bd6e56dd0c6c\tong_sampah_pemilahan_1785422921872.jpg"
$dest2   = "c:\Users\tamfa\OneDrive\Documents\KKN FILE\Project Individu\public\images\tong_sampah.jpg"

Write-Host "=== Meng-copy gambar edukasi ===" -ForegroundColor Cyan

# Copy hidroponik.jpg
if (Test-Path $source1) {
    Copy-Item $source1 -Destination $dest1 -Force
    $size = (Get-Item $dest1).Length
    Write-Host "✅ hidroponik.jpg berhasil disalin ($size bytes)" -ForegroundColor Green
} else {
    Write-Host "❌ File sumber hidroponik tidak ditemukan!" -ForegroundColor Red
}

# Copy tong_sampah.jpg
if (Test-Path $source2) {
    Copy-Item $source2 -Destination $dest2 -Force
    $size = (Get-Item $dest2).Length
    Write-Host "✅ tong_sampah.jpg berhasil disalin ($size bytes)" -ForegroundColor Green
} else {
    Write-Host "❌ File sumber tong_sampah tidak ditemukan!" -ForegroundColor Red
}

Write-Host ""
Write-Host "=== Selesai! Silakan jalankan git push ===" -ForegroundColor Cyan
Write-Host ""
Write-Host "Perintah git:" -ForegroundColor Yellow
Write-Host 'cd "c:\Users\tamfa\OneDrive\Documents\KKN FILE\Project Individu"' -ForegroundColor White
Write-Host "git add ." -ForegroundColor White
Write-Host 'git commit -m "Tambah materi Hidroponik dan Tong Sampah Pemilahan di halaman Edukasi"' -ForegroundColor White
Write-Host "git push origin main" -ForegroundColor White
Write-Host ""
pause
