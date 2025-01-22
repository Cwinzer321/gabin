import tkinter as tk
from tkinter import messagebox
import re

def extract_coordinates_from_link():
    try:
        # Ambil input URL Google Maps dari entri
        gmaps_link = entry_link.get().strip()
        
        # Ekstraksi koordinat dari URL
        match = re.search(r"@(-?\d+\.\d+),(-?\d+\.\d+)", gmaps_link)
        if match:
            lat, lng = match.groups()
            
            # Tampilkan hasil koordinat di label
            label_result.config(text=f"Latitude: {lat}\nLongitude: {lng}")
            
            # Simpan koordinat ke clipboard
            coordinates = f"{lat}, {lng}"
            root.clipboard_clear()
            root.clipboard_append(coordinates)
            root.update()  # Update clipboard
            messagebox.showinfo("Koordinat Disalin", "Koordinat berhasil disalin ke clipboard!")
        else:
            raise ValueError("URL tidak valid atau tidak mengandung koordinat.")
    except Exception as e:
        messagebox.showerror("Error", str(e))

# Membuat window utama
root = tk.Tk()
root.title("Konversi Link Google Maps ke Koordinat")
root.geometry("400x250")

# Label dan entry untuk link Google Maps
label_link = tk.Label(root, text="Link Google Maps:")
label_link.pack(pady=5)
entry_link = tk.Entry(root, width=50)
entry_link.pack(pady=5)

# Tombol untuk mengonversi
button_convert = tk.Button(root, text="Extract & Copy Coordinates", command=extract_coordinates_from_link)
button_convert.pack(pady=10)

# Label untuk menampilkan hasil
label_result = tk.Label(root, text="", wraplength=380, justify="left", fg="blue")
label_result.pack(pady=10)

# Menjalankan aplikasi
root.mainloop()
