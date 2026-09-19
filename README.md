# Product Information System (Mini Project 1)

Sistem Informasi Manajemen Data Produk berbasis PHP modular yang dirancang menggunakan pendekatan arsitektur 3-Layer (*Data*, *Processing*, dan *Presentation Layer*).

---

## 📌 Fitur Utama
* **Manajemen Data Produk**: Penyimpanan data komoditas produk dalam struktur *multidimensional array*.
* **Kalkulasi Otomatis**: Perhitungan total nilai aset gudang ($\text{Harga} \times \text{Stok}$) secara terpusat.
* **Deteksi Stok Kritis**: Penandaan baris tabel secara otomatis dengan warna khusus jika stok produk kurang dari 3 unit ($< 3$).

---

## 🏗️ Arsitektur Sistem

1. **Data Layer (`products.php`)**: Berkas penampung array multidimensi yang menyimpan atribut produk (ID, Nama, Kategori, Harga, Stok, Deskripsi).
2. **Processing Layer (`functions.php`)**: Berkas berisi fungsi `hitungTotalNilaiStok()` untuk kalkulasi aset dan logika penanganan stok kritis.
3. **Presentation Layer (`index.php`)**: Berkas utama yang menggabungkan seluruh komponen menggunakan `require_once` dan merender data ke dalam tabel HTML menggunakan perulangan `foreach`.

---

## 📂 Struktur Berkas

```text
mini-project/
├── products.php     # Data Layer (Array Multidimensi)
├── functions.php    # Processing Layer (Fungsi & Logika)
└── index.php        # Presentation Layer (Tampilan HTML & Loop)
<img width="940" height="321" alt="product-information-system png" src="https://github.com/user-attachments/assets/d21d90f9-d633-4f5d-aee4-127650d4ef98" />

