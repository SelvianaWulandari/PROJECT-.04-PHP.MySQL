// Memilih semua elemen <section> dan tautan navigasi
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("nav a");

// Menambahkan event listener untuk setiap tautan navigasi
navLinks.forEach((link, index) => {
  link.addEventListener("click", (event) => {
    event.preventDefault(); // Mencegah perilaku default dari tautan
    // Menghapus kelas "active" dari setiap elemen <section>
    sections.forEach((section) => {
      section.classList.remove("active");
    });
    // Menambahkan kelas "active" ke elemen <section> yang sesuai dengan indeks tautan yang diklik
    sections[index].classList.add("active");
  });
});

// Animasi untuk menggerakkan gambar di halaman utama
const homeImage = document.querySelector("#Home img");
const maxOffset = 20; // Maximum distance in pixels for the movement (adjust as needed)

function moveImage() {
  const currentPosition = parseInt(homeImage.style.transform?.replace('translateX(', '') || '0', 10); // Get current position or set to 0
  const newPosition = currentPosition ? currentPosition * -1 : maxOffset; // Reverse direction or start at max offset

  homeImage.style.transform = `translateX(${newPosition}px)`;
  setTimeout(() => moveImage(), 100); // Call the function again after 100 milliseconds (adjust speed)
}

moveImage(); // Start the movement

// Lightbox untuk galeri
const images = document.querySelectorAll('section#Gallery img');
const lightbox = document.getElementById('lightbox');
const lightboxImage = document.getElementById('lightbox-image');
const closeButton = document.querySelector('.close');

images.forEach(image => {
  image.addEventListener('click', () => {
    lightbox.style.display = 'flex';
    lightboxImage.src = image.src;
    lightboxImage.alt = image.alt;
  });
});

closeButton.addEventListener('click', () => {
  lightbox.style.display = 'none';
});

// Menampilkan atau menyembunyikan detail kontak
function showContact() {
  var contactDetails = document.getElementById("contact-details");
  if (contactDetails.style.display === "none") {
    contactDetails.style.display = "block";
  } else {
    contactDetails.style.display = "none";
  }
}

// Animasi untuk logo kontak
const contactLogos = document.querySelectorAll('.contact-logo');

contactLogos.forEach(logo => {
  logo.addEventListener('click', () => {
    logo.classList.add('clicked'); // Add a class for animation reset
    setTimeout(() => {
      logo.classList.remove('clicked'); // Remove the class after animation
    }, 500); // Adjust timeout as needed (in milliseconds)
  });
});

// Animasi untuk menggerakkan gambar-gambar dalam galeri secara acak setiap 3 detik
document.addEventListener("DOMContentLoaded", function () {
  const galleryImages = document.querySelectorAll(".gallery img");
  setInterval(() => {
    galleryImages.forEach(image => {
      const xPos = Math.floor(Math.random() * window.innerWidth);
      const yPos = Math.floor(Math.random() * window.innerHeight);
      image.style.transform = `translate(${xPos}px, ${yPos}px)`;
    });
  }, 3000); // Ubah angka 3000 menjadi jumlah milidetik yang Anda inginkan untuk perubahan posisi gambar
});
