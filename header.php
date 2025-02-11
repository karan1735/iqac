      <div>
          <div class=" hamburger" onclick="toggleMenu()">
              <div></div>
              <div></div>
              <div></div>
          </div>
          <img src="image.png" alt="Kongu College Logo" class="logo" />
      </div>

      <?php
          $filePath = 'scrolling-text'; 

          // Check if the file exists
          if (file_exists($filePath)) {
              // Read the contents of the file
              $content = file_get_contents($filePath);

              // Display the content inside the marquee tag
              echo "<marquee class='marquee-text' behavior='scroll' direction='left' scrollamount='7'>";
              echo htmlspecialchars($content); // htmlspecialchars() for security
              echo "</marquee>";
          } else {
              echo "<p>File not found.</p>";
          }
      ?>

      <div>
          <a href="Contact.php" class="contact-link">CONTACT</a>
      </div>




      <style>
/* Styling the logo */
.logo {
    height: 50px;
    width: auto;
    border-radius: 5px;
    justify-self: center;
}

/* Styling the marquee text */
.marquee-text {
    text-align: center;
    font-weight: bold;
    color: white;
    background-color: black;
    height: 30px;
    width: 100%;
    text-align: center;
    justify-content: center;
    justify-self: center;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    letter-spacing: 1px;
    word-spacing: 5px;
}

/* Styling the contact link */
.contact-link {
    color: #ffffff;
    background-color: #1100ff;
    text-decoration: none;
    font-weight: bold;
    padding: 4px 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 0 12px rgba(17, 146, 255, 0.8), 0 0 24px rgba(17, 0, 255, 0.6);
    transition: background-color 0.3s, box-shadow 0.3s ease-in-out;
    width: 100%;
}

.contact-link:hover {
    text-decoration: none;
}


/* Responsive styling for smaller screens */
@media (max-width: 768px) {
    header {
        grid-template-columns: 1fr;
        /* Stack items vertically */
        grid-template-rows: auto auto auto;
        /* Allow items to adjust their height */
        text-align: center;
    }

    .logo {
        width: 85%;
        height: auto;
        /* Adjust logo size on smaller screens */
    }

    .marquee-text {
        width: 100%;
    }

    .contact-link {
        justify-self: center;
    }
}
      </style>