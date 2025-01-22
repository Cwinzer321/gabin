import tkinter as tk
from tkinter import messagebox

def generate_google_maps_link():
    try:
        # Ambil input latitude dan longitude dari entri
        lat = float(entry_lat.get())
        lng = float(entry_lng.get())
        
        # Buat link Google Maps
        link = f"https://www.google.com/maps?q={lat},{lng}"
        
        # Tampilkan link di label hasil
        label_result.config(text=link)
        
        # Simpan link ke clipboard untuk memudahkan penyalinan
        root.clipboard_clear()
        root.clipboard_append(link)
        root.update()  # Update clipboard
        messagebox.showinfo("Link Disalin", "Link Google Maps berhasil disalin ke clipboard!")
    except ValueError:
        messagebox.showerror("Error", "Pastikan Latitude dan Longitude berupa angka!")

# Membuat window utama
root = tk.Tk()
root.title("Konversi Lokasi ke Link Google Maps")
root.geometry("400x250")

# Label dan entry untuk latitude
label_lat = tk.Label(root, text="Latitude:")
label_lat.pack(pady=5)
entry_lat = tk.Entry(root, width=30)
entry_lat.pack(pady=5)

# Label dan entry untuk longitude
label_lng = tk.Label(root, text="Longitude:")
label_lng.pack(pady=5)
entry_lng = tk.Entry(root, width=30)
entry_lng.pack(pady=5)

# Tombol untuk mengonversi
button_generate = tk.Button(root, text="Generate & Copy Link", command=generate_google_maps_link)
button_generate.pack(pady=10)

# Label untuk menampilkan hasil
label_result = tk.Label(root, text="", wraplength=380, justify="left", fg="blue")
label_result.pack(pady=10)

# Menjalankan aplikasi
root.mainloop()
