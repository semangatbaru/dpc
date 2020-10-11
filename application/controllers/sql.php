<!-- terbaru -->
CREATE VIEW terbaru AS
SELECT berita.id_berita, berita.judul, berita.deskripsi, berita.gambar, berita.penulis, kategori.nama_kategori, berita.tanggal
FROM berita, kategori
WHERE berita.id_kategori=kategori.id_kategori
ORDER BY berita.tanggal DESC
LIMIT 6

<!-- ekonomiAll -->
CREATE VIEW analisaAll AS
SELECT berita.id_berita, berita.judul, berita.deskripsi, berita.gambar, berita.penulis, kategori.nama_kategori, berita.tanggal
FROM berita, kategori
WHERE berita.id_kategori=kategori.id_kategori && berita.id_kategori='k04'
ORDER BY berita.tanggal DESC
<!-- analisaLimit -->
CREATE VIEW analisa3 AS
SELECT berita.id_berita, berita.judul, berita.deskripsi, berita.gambar, berita.penulis, kategori.nama_kategori, berita.tanggal
FROM berita, kategori
WHERE berita.id_kategori=kategori.id_kategori && berita.id_kategori='k04'
ORDER BY berita.tanggal DESC
LIMIT  3
<!-- analisa1 -->
CREATE VIEW analisa1 AS
SELECT berita.id_berita, berita.judul, berita.deskripsi, berita.gambar, berita.penulis, kategori.nama_kategori, berita.tanggal
FROM berita, kategori
WHERE berita.id_kategori=kategori.id_kategori && berita.id_kategori='k04'
ORDER BY berita.tanggal DESC
LIMIT 1