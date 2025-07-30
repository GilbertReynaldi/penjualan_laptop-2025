# Analisis Struktur Data  
**Sistem Penjualan Laptop**

Dokumen ini berisi analisis struktur data dari sistem penjualan laptop yang dibangun menggunakan tiga tabel utama: `products`, `orders`, dan `items`.

---

## 1. Tabel `products`

Tabel `products` menyimpan informasi produk laptop yang tersedia untuk dijual.

### Struktur Kolom:
- **`id`** → ID unik setiap produk *(primary key)*  
- **`name`** → Nama produk  
- **`description`** → Deskripsi produk *(boleh kosong)*  
- **`price`** → Harga produk dalam format desimal  
- **`stock`** → Jumlah stok tersedia *(default 0)*  
- **`created_at`, `updated_at`** → Timestamp pencatatan otomatis

Tabel ini menjadi sumber utama data produk yang akan dijual dan dikelola.

---

## 2. Tabel `orders`

Tabel `orders` menyimpan data pemesanan dari pelanggan.

### Struktur Kolom:
- **`id`** → ID unik pesanan *(primary key)*  
- **`product_id`** → ID produk yang dipesan  
- **`quantity`** → Jumlah unit produk yang dipesan  
- **`total_price`** → Total harga berdasarkan kuantitas  
- **`status`** → Status pesanan (`pending`, `completed`, `cancelled`)  
- **`order_date`** → Tanggal pemesanan *(otomatis saat dibuat)*  
- **`created_at`, `updated_at`** → Timestamp pencatatan otomatis

Tabel ini mencatat pesanan produk berdasarkan satu jenis produk per entri.

---

## 3. Tabel `items`

Tabel `items` menyimpan informasi data barang berdasarkan produk tertentu.

### Struktur Kolom:
- **`id`** → ID unik item  
- **`product_id`** → ID produk yang terkait  
- **`quantity`** → Jumlah item  
- **`price`** → Harga masing-masing item  
- **`status`** → Status ketersediaan (`available`, `out_of_stock`)  
- **`created_at`, `updated_at`** → Timestamp pencatatan otomatis

Tabel ini mencatat kondisi produk di sistem secara terpisah dari transaksi.

---

## Kesimpulan

Struktur data yang digunakan sudah cukup merepresentasikan sistem penjualan laptop secara sederhana. Dengan memisahkan informasi produk, transaksi, dan item, sistem ini mampu:
- Mengelola data produk yang tersedia,
- Mencatat transaksi pesanan pelanggan,
- Memantau ketersediaan barang.


