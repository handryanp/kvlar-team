document.addEventListener("DOMContentLoaded", function () {
  // Ambil elemen-elemen yang diperlukan
  const menuToggle = document.getElementById("menuToggle");
  const closeSidebar = document.getElementById("closeSidebar");
  const sidebar = document.getElementById("sidebar");

  // Tambahkan event listener untuk tombol hamburger
  if (menuToggle) {
    menuToggle.addEventListener("click", function () {
      sidebar.classList.add("open"); // Tambahkan class 'open' untuk menampilkan sidebar
    });
  }

  // Tambahkan event listener untuk tombol close
  if (closeSidebar) {
    closeSidebar.addEventListener("click", function () {
      sidebar.classList.remove("open"); // Hapus class 'open' untuk menyembunyikan sidebar
    });
  }

  // Opsional: Tutup sidebar ketika salah satu link diklik (untuk navigasi)
  const sidebarLinks = sidebar.querySelectorAll("a");
  sidebarLinks.forEach((link) => {
    link.addEventListener("click", function () {
      // Berikan jeda sebentar sebelum menutup (agar link sempat diproses)
      setTimeout(() => {
        sidebar.classList.remove("open");
      }, 300);
    });
  });
});
