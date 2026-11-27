<!DOCTYPE html>
<html lang="en">
  <?php
    $pageTitle = "Home";
    require __DIR__ . "/includes/head.php";
  ?>
  <body>
    <?php
      require __DIR__ . "/includes/header.php";
    ?>
    <main>
      <p>
        The Bridge connects organizations that have openings with people looking
        for opportunities to fill them.
      </p>
      <section aria-labelledby="opportunity-actions">
        <h2 id="opportunity-actions">Get started</h2>
        <ul>
          <li><a href="browse.html">Browse Opportunities</a></li>
          <li><a href="post-opportunity.html">Post an Opportunity</a></li>
        </ul>
      </section>
    </main>
    <?php
      require __DIR__ . "/includes/footer.php";
    ?>
  </body>
</html>
