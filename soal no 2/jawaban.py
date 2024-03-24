import tkinter as tk
from tkinter import messagebox

def pencarian_kata():
    kata_dicari = kata_pencarian_entry.get()
    hasil_pencarian = artikel_text.get("1.0", "end-1c").lower().count(kata_dicari.lower())
    messagebox.showinfo("Hasil Pencarian", f"Kata '{kata_dicari}' ditemukan sebanyak {hasil_pencarian} kali.")

def penggantian_kata():
    kata_lama = kata_lama_entry.get()
    kata_baru = kata_baru_entry.get()
    artikel_terganti = artikel_text.get("1.0", "end-1c").replace(kata_lama, kata_baru)
    artikel_text.delete("1.0", tk.END)
    artikel_text.insert(tk.END, artikel_terganti)

def pengurutan_kata():
    kata = artikel_text.get("1.0", "end-1c").split()
    kata.sort()
    artikel_terurut = "\n".join(kata)
    artikel_text.delete("1.0", tk.END)
    artikel_text.insert(tk.END, artikel_terurut)

# Membuat GUI
root = tk.Tk()
root.title("Aplikasi Pencarian, Penggantian, dan Pengurutan Kata")

frame_pencarian = tk.Frame(root)
frame_pencarian.pack(pady=5)

kata_pencarian_label = tk.Label(frame_pencarian, text="Kata yang dicari:")
kata_pencarian_label.pack(side=tk.LEFT)
kata_pencarian_entry = tk.Entry(frame_pencarian)
kata_pencarian_entry.pack(side=tk.LEFT, padx=5)
pencarian_button = tk.Button(frame_pencarian, text="Pencarian", command=pencarian_kata)
pencarian_button.pack(side=tk.LEFT)

frame_penggantian = tk.Frame(root)
frame_penggantian.pack(pady=5)

kata_lama_label = tk.Label(frame_penggantian, text="Kata lama:")
kata_lama_label.pack(side=tk.LEFT)
kata_lama_entry = tk.Entry(frame_penggantian)
kata_lama_entry.pack(side=tk.LEFT, padx=5)
kata_baru_label = tk.Label(frame_penggantian, text="Kata baru:")
kata_baru_label.pack(side=tk.LEFT)
kata_baru_entry = tk.Entry(frame_penggantian)
kata_baru_entry.pack(side=tk.LEFT, padx=5)
penggantian_button = tk.Button(frame_penggantian, text="Penggantian", command=penggantian_kata)
penggantian_button.pack(side=tk.LEFT)

pengurutan_button = tk.Button(root, text="Pengurutan Kata", command=pengurutan_kata)
pengurutan_button.pack(pady=5)

artikel_text = tk.Text(root, height=10, width=50)
artikel_text.pack(padx=10, pady=5)

artikel_text.insert(tk.END, 
'''
    Dalam kehidupan suatu negara, pendidikan memegang peranan yang amat 
    penting untuk menjamin kelangsungan hidup negara dan bangsa, karena pendidikan 
    merupakan wahana untuk meningkatkan dan mengembangkan kualitas sumber daya 
    manusia. Seiring dengan perkembangan teknologi komputer dan teknologi informasi, 
    sekolah-sekolah di Indonesia sudah waktunya mengembangkan Sistem Informasi 
    manajemennya agar mampu mengikuti perubahan jaman.
    SISKO mampu memberikan kemudahan pihak pengelola menjalankan 
    kegiatannya dan meningkatkan kredibilitas dan akuntabilitas sekolah dimata siswa, 
    orang tua siswa, dan masyakat umumnya.Penerapan teknologi informasi untuk 
    menunjang proses pendidikan telah menjadi kebutuhan bagi lembaga pendidikan di 
    Indonesia. Pemanfaatan teknologi informasi ini sangat dibutuhkan untuk 
    meningkatkan efisiensi dan produktivitas bagi manajemen pendidikan. Keberhasilan 
    dalam peningkatan efisiensi dan produktivitas bagi manajemen pendidikan akan ikut 
    menentukan kelangsungan hidup lembaga pendidikan itu sendiri. Dengan kata lain 
    menunda penerapan teknologi informasi dalam lembaga pendidikan berarti menunda 
    kelancaran pendidikan dalam menghadapi persaingan global.
    Pemanfaatan teknologi informasi diperuntukkan bagi peningkatan kinerja 
    lembaga pendidikan dalam upayanya meningkatkan kualitas Sumber Daya Manusia
    Indonesia. Guru dan pengurus sekolah tidak lagi disibukkan oleh pekerjaan-pekerjaan 
    operasional, yang sesungguhnya dapat digantikan oleh komputer. Dengan demikian 
    dapat memberikan keuntungan dalam efisien waktu dan tenaga.
    Penghematan waktu dan kecepatan penyajian informasi akibat penerapan 
    teknologi informasi tersebut akan memberikan kesempatan kepada guru dan pengurus 
    sekolah untuk meningkatkan kualitas komunikasi dan pembinaan kepada siswa. 
    Dengan demikian siswa akan merasa lebih dimanusiakan dalam upaya 
    mengembangkan kepribadian dan pengetahuannya.
    Sebagai contoh yang paling utama adalah sistem penjadwalan yang harus 
    dilakukan setiap awal semester. Biasanya membutuhkan waktu lama untuk menyusun penjadwalan, Dengan SISKO dapat selesai dalam waktu singkat. Untuk 
    mempermudah bagian administrasi kurikulum sekolah, SISKO menyediakan fasilitas 
    istimewa yang merupakan inti dari sistem kurikulum sekolah yaitu membantu dalam 
    pembuatan penjadwalan mata pelajaran sekolah yang dapat diproses tidak lebih lama 
    dari 10 menit. Administrator hanya akan memasukkan kondisi dari masing-masing 
    guru yang akan mengajar baik itu dalam 1 minggu seorang guru dapat mengajar berapa 
    jam, selain itu dapat juga melakukan pemesanan tempat dan penempatan hari libur 
    masing-masing guru dalam 1 minggu masa mengajar. Setelah semua kondisi 
    dimasukkan, sistem akan memproses semua data tersebut sehingga menghasilkan 
    jadwal yang optimal dan dapat langsung dipakai karena sistem akan mendeteksi 
    sehingga tidak akan ada jadwal yang bertumpukan satu dengan yang lainnya.
    Setelah semua kondisi dimasukkan, sistem akan memproses semua data 
    tersebut sehingga menghasilkan jadwal yang optimal dan dapat langsung dipakai 
    karena sistem akan mendeteksi sehingga tidak akan ada jadwal yang bertumpukan satu 
    dengan yang lainnya. Setelah permasalahan penjadwalan dapat ditangani dengan baik, 
    hal yang tidak kalah pentingnya adalah memasukkan data siswa.
    Program SISKO telah menyediakan fasilitas untuk penanganan penilaian 
    siswa yang secara langsung memasukkan nilai ke dalam raport dan siap dicetak. Untuk 
    sistem penilaian siswa, yang dapat melakukan pengisian hanya Guru yang mengajar 
    mata pelajaran. Sistem penilaian telah disesuaikan dengan KBK sehingga masingmasing guru dapat memasukkan deskripsi narasi dari mata pelajaran. Untuk 
    menampilkan data penilaian dapat disesuaikan kembali dengan kebijaksanaan dari 
    masing-masing lembaga pendidikan apakah ingin menampilkan data nilai akhir siswa 
    maupun menampilkan data nilai siswa setiap kali mengadakan test ataupun tugas 
    tertentu.
    Selain Modul untuk penjadwalan dan Modul Penilaian siswa, SISKO juga 
    memberikan fasilitas untuk bagian administrasi keuangan sekolah dalam hal 
    pembayaran SPP siswa. Bagian administrasi dapat langsung mengecek siapa siswa 
    yang mempunyai tunggakan SPP dan untuk detail histori pembayaran SPP dari 
    masing-masing siswa dapat dicetak seperti mencetak buku tabungan di bank sehingga 
    mempermudah pekerjaan pihak administrasi keuangan. Administrasi keuangan dapat 
    langsung melakukan pengaturan data pembayaran masing-masing siswa sesuai 
    dengan kebutuhan dan dapat diubah sewaktu-waktu apabila ada kenaikan pembayaran SPP. Apabila siswa tersebut akan melakukan pembayaran, petugas dapat langsung 
    memasukkan data. Hal sama juga dapat dilakukan untuk Data pembayaran 
    Sumbangan Sukarela dan Tabungan Karyawisata.
'''
)

root.mainloop()
