document.addEventListener("DOMContentLoaded", function () {
  const nameInput = document.getElementById("name");
  const emailInput = document.getElementById("email");
  const destinationSelect = document.getElementById("destination");
  const dateInput = document.getElementById("date");
  const travelSelect = document.getElementById("travel");
  const visitTimeSelect = document.getElementById("visit_time");
  const whatsappButton = document.getElementById("whatsappButton");

  const prices = {
    "Paket 1 - Malioboro,Candi Prambanan & Pantai Parangtritis": "Rp 2.500.000",
    "Paket 2 - Malioboro,Kraton Jogja,Candi Borobudur & Kaliurang":
      "Rp 4.000.000",
    "Paket 3 - Malioboro,Ratu Boko & Tebing Breksi": "Rp 1.000.000",
    "Paket 4 - Malioboro,Tamansari & Gembiraloka": "Rp 1.600.000",
    "Paket 5 - Malioboro,Hutan Pinus & Pantai di Gunung kidul (Bisa Request Pantai)":
      "Rp 900.000",
    "Paket 6 - Malioboro,Makam Raja Raja Imogiri & Museum Ulen Sentalu":
      "Rp 1.000.000",
    "Paket 7 - Malioboro,Taman Pelangi & Heha Sky View": "Rp 600.000",
  };

  const whatsappNumbers = {
    "Travel A": "6289508545071",
    "Travel B": "6281393535529",
    "Travel C": "6282290608772",
    "Travel D": "6285355239223",
  };

  whatsappButton.addEventListener("click", function () {
    const name = nameInput.value;
    const email = emailInput.value;
    const destination = destinationSelect.value;
    const date = dateInput.value;
    const visitTime = visitTimeSelect.value;
    const travel = travelSelect.value;
    const price = prices[destination];
    const whatsappNumber = whatsappNumbers[travel];

    if (name && email && destination && date && visitTime && travel) {
      const message = `Selamat Datang di Perusahaan Kami! Terimakasih telah memilih kami sebagai mitra perjalanan Anda. Saya ingin memesan tiket perjalanan untuk rute yang diinginkan.\n\nNama: ${name}\nEmail: ${email}\nDestinasi: ${destination}\nHari/Tanggal: ${date}\nJam Kunjungan: ${visitTime}\nTravel: ${travel}\nHarga: ${price}`;

      const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
        message
      )}`;
      window.open(whatsappURL, "_blank");
    } else {
      alert("Mohon lengkapi semua field terlebih dahulu.");
    }
  });
});


