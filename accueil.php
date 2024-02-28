<?php
include 'header.php'
?>
<main>
  <!-- page-title-area start -->
  <div class="page-title-area pos-relative gray-bg pt-90 pb-60 fix" style="background-image: url(img/bg/page-title-bg.jpg);">
    <div class="shape-slIDer">
      <img class="shape shape-2  " src="img/shape/shape2.png" alt="">
      <img class="shape shape-4 " src="img/shape/shape3.png" alt="">
      <img class="shape shape-5 " src="img/shape/shape-sq.png" alt="">
      <img class="shape shape-6 " src="img/shape/shape-c-2.png" alt="">
    </div>
    <div class="container">
      <div class="result align-items-center">
        <div class="col-lg-6">
          <div class="page-title mb-30">
            <h3>Blog</h3>
            <p>Le meilleur de l'actualité</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="breadcrumb-list text-left text-lg-right mb-30">
            <ul>
              <li><a href="#">Home</a></li>
              <li>Blog Page</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page-title-area end -->

  <!-- blog-area -->
  <div class="blog-area pos-relative pt-130 pb-130">
    <div class="container">
      <div class="result">

        <?php
        include 'connect_base.php';

        // Requête pour récupérer les articles
        $query = "SELECT * FROM article ORDER BY date_rev DESC";
        $stmt = $pdo->query($query);

        // Afficher les articles
        while ($result = $stmt->fetch()) {
          echo '<div class="col-lg-6 col-md-6">';
          echo '<div class="news-wrapper mb-60">';
          echo '<div class="news-img">';
          echo '<a href="actu.php?ID=' . $result["ID"] . '"><img src=" ' . $result['image'] . '" alt=""></a>';
          echo '</div>';
          echo '<div class="news-box">';
          echo '<div class="news-text">';
          echo '<div class="blog-meta-top mb-15">';
          echo '<span><a href="actu.php?ID=' . $result["ID"] . '">' . $result['date_rev'] . ' </a></span>';
          echo '</div>';
          echo '<h4><a href="actu.php?ID=' . $result["ID"] . '">' . $result['titre'] . '</a></h4>';
          echo '<div class="news-meta">';
          echo '<span> <a href="#"><i class="ti-user"></i> ' . $result['auteur'] . '</a> </span>';
          echo '<span><a href="actu.php?ID=' . $result["ID"] . '"><i class="bx bx-purchase-tag-alt"></i>' . $result['tags'] . ' </a></span>';
          echo "<p>Date de publication: " . $result['date_pub'] . "</p>";
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '<div>';
          echo '</div>';
        }
        ?>

      </div>
    </div>
  </div>
  <!-- blog-area end -->



  <div class="post-comments-form">
    <div class="post-comments-title">
      <h2>Contactez Nous</h2>
    </div>
    <form id="contacts-form" class="conatct-post-form" action="send_email.php" method="post">
      <div class="row">
        <div class="col-xl-6">
          <div class="contact-icon">
            <label>Notre nom*</label>
            <input type="text" name="nom" required>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="contact-icon">
            <label>Votre email*</label>
            <input type="email" name="email" required>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="contact-icon">
            <label>Votre commentaire*</label>
            <textarea name="commentaire" id="commentaire" cols="30" rows="10" required></textarea>
          </div>
        </div>
        <div class="col-xl-12">
          <button class="x-btn theme-btn" type="submit">Envoyer</button>
        </div>
      </div>
    </form>
  </div>
</main>

<?php
include 'footer.php'
?>