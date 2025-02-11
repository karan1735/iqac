<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQAC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <style>
    .gallery-container {
        width: 100%;
    }

    .gallery-category {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
        gap: 15px;

    }

    .gallery-item {
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    /* Lightbox Styles */
    .lightbox {
        display: none;
        position: fixed;
        z-index: 10;
        padding-top: 150px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        backdrop-filter: blur(16px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        background-color: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(255, 255, 255, 0.125);
    }

    .lightbox-content {
        margin: auto;
        display: block;
        margin-left: 32%;
        width: 80%;
        max-width: 700px;
        animation: fadeIn 0.4s;
        border-radius: 10px;
    }

    .close {
        position: absolute;
        top: 80px;
        right: 65px;
        color: white;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }

    .prev:hover {
        text-decoration: none;
        color: blue;
    }

    .next:hover {
        text-decoration: none;
        color: blue;
    }

    .close:hover {
        color: white;
    }

    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 40px;
        transition: 0.3s;
        user-select: none;
    }

    .prev {
        left: 20%;
    }

    .next {
        right: 10%;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
    </style>
</head>

<body>
    <header id="header">
    </header>
    <nav id="navMenu">
        <div id="navbar"></div>
    </nav>
    <main>
        <h1>GALLERY</h1><br>
        <div class="gallery-container">
            <?php
    $imagesDir = 'gallery/';
    $years = glob($imagesDir . '*', GLOB_ONLYDIR); // Scan for year directories
    $imageIndex = 0;

    if (count($years) > 0) {
        foreach ($years as $yearDir) {
            $year = basename($yearDir);
            $months = glob($yearDir . '/*', GLOB_ONLYDIR); // Scan for month directories

            if (count($months) > 0) {
                echo "<h3>$year</h3>";
                foreach ($months as $monthDir) {
                    $month = basename($monthDir);
                    $images = glob($monthDir . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

                    if (count($images) > 0) {
                        echo "<h3>$month</h3>";
                        echo "<div class='gallery-category'>";
                        foreach ($images as $image) {
                            echo "<div class='gallery-item'>
                                    <img src='$image' alt='Gallery Image' data-index='$imageIndex' onclick='openLightbox($imageIndex)'>
                                  </div>";
                            $imageIndex++;
                        }
                        echo "</div>";
                    }
                }
            }
        }
    } else {
        echo "<p>No images found in the directory.</p>";
    }
    ?>

        </div>

        <!-- Lightbox Modal -->
        <div id="lightbox" class="lightbox">
            <span class="close" onclick="closeLightbox()">&times;</span>
            <img class="lightbox-content" id="lightbox-img">
            <a class="prev" onclick="changeImage(-1)">&#10094;</a>
            <a class="next" onclick="changeImage(1)">&#10095;</a>
        </div>

    </main>

</body>
<script>
let currentIndex = 0;
const images = document.querySelectorAll('.gallery-item img');

function openLightbox(index) {
    currentIndex = index;
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');

    lightbox.style.display = 'block';
    lightboxImg.src = images[currentIndex].src;
}

function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
}

function changeImage(step) {
    currentIndex = (currentIndex + step + images.length) % images.length;
    document.getElementById('lightbox-img').src = images[currentIndex].src;
}
</script>

</html>