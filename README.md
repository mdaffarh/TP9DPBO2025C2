# TP8DPBO2025C2
## Janji
Saya Muhammad Daffa Rizmawan Harahap mengerjakan TP8 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Desain Program
Program dibuat dalam arsitektur MVC atau Model, View, dan Controller. Terdapat dua kelas utama yaitu:
- Student
- Extracurricular
  
## Struktur Folder
![image](https://github.com/user-attachments/assets/4a667d0a-1572-41b4-a391-4e109bc957b3)

## Alur Program
### 1. Routing
File `index.php` berfungsi sebagai router utama. Berdasarkan parameter `$_GET['page']`, sistem akan memilih controller yang sesuai:
- `page tidak diset` → `StudentController`
- `page=extracurricular` → `ExtracurricularController`

### 2. Controller (`/controllers`)
Controller berisi logika aplikasi dan menjembatani antara model dan view. Method umum yang digunakan:
- `index()` → Menampilkan daftar data
- `create()` → Menampilkan form tambah
- `add($data)` → Memproses input tambah data
- `edit($id)` → Menampilkan form edit
- `update($data)` → Memproses update data
- `delete($id)` → Menghapus data

### 3. Model
Model berisi fungsi untuk mengakses database seperti:
- `add($data)`
- `getAll()`
- `find($id)`
- `update($data)`
- `delete($id)`

Model dihubungkan dengan database melalui `DB.class.php`.

### 4. View dan Template
- Folder `views/` memuat file PHP yang mengatur tampilan (memanggil template).
- Folder `templates/` menyimpan file HTML statis untuk masing-masing entitas (student dan extracurricular), terdiri dari:
  - `index.html`
  - `create.html`
  - `edit.html`

## Dokumentasi
https://github.com/user-attachments/assets/d560605f-d5b7-4632-a999-c1fd7197f19a


  


