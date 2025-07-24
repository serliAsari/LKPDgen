<?php include 'includes/header.php'; ?>

<!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
  

      </div>

    </section><!-- /Clients Section -->
<!-- Admin Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Upload File</h2>
  </div><!-- End Section Title -->

  <div class="container">

<form action="upload/upload.php" method="POST" enctype="multipart/form-data">
    
            <div class="mb-3">
                <label class="form-label">Nama Dokumen</label>
                <input type="text" name="filename" required>
            </div>
      
            <div class="mb-3">
                <label class="form-label">Materi</label>
                <select class="form-select" name="materi" required>
                    <option value="" selected disabled>Pilih Materi</option>
                    <option value="pecahan">Pecahan</option>
                    <option value="trigonometri">Trigonometri</option>
                    <option value="persamaankuadrat">Persamaan Kuadra</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Gambar</label>
                <input type="file" name="file" accept="application/pdf" required>
            </div>
            <button type="submit" class="btn btn-primary">Unggah</button>
        </form>

  </div>

</section><!-- /Admin Section -->

<?php include 'includes/footer.php'; ?>