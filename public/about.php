<!DOCTYPE html>
<html lang="en">
  <?php
    $pageTitle = "About";
    require __DIR__ . "/includes/head.php";
  ?>
  <body>
    <!-- SHARED HEADER (keep identical on every page) SHARED NAV is nested in header -->
    <?php
      require __DIR__ . "/includes/header.php";
    ?>
    <!-- END SHARED HEADER -->

    <!-- BEGIN PAGE CONTENT (About page only) -->
    <main class="about-page">
      <h1>About The Bridge</h1>
      <p class="about-intro">
        The Bridge is a website concept that connects organizations that have
        openings with people looking for opportunities to fill them. It is a
        semester project for CS 4345 at Faulkner University. It is a classroom
        concept, not an official Faulkner University service, and any
        organizations or listings you see while we build it are examples, not
        real partners.
      </p>

      <section aria-labelledby="purpose">
        <h2 id="purpose">Why The Bridge exists</h2>
        <p>
          Local churches regularly need help, from staffing children's ministry
          and organizing outreach events to filling part-time roles or offering
          internship-style experience in ministry, communications, and
          administration. Today those needs are scattered across bulletin
          announcements, personal connections, and word of mouth, which makes
          them hard for students to discover and hard for churches to share with
          a wide, willing audience.
        </p>
        <p>
          At the same time, students often need service hours, internship
          placements, or hands-on course experience, but there is no single
          place that connects them to nearby churches that could offer it. The
          Bridge is our attempt to be that place.
        </p>
      </section>

      <section aria-labelledby="audience">
        <h2 id="audience">Who it serves</h2>
        <p>
          The Bridge is designed first for churches near Faulkner University and
          for the Faulkner students, faculty, and departments who are looking
          for volunteer, internship, or paid opportunities with them. Students
          may apply on their own, to meet a course requirement, or for a formal
          internship.
        </p>
        <p>As we build the site, visitors will be able to:</p>
        <ul>
          <li>
            Post an opportunity, with its type, time commitment, location, and
            description (organizations).
          </li>
          <li>
            Browse and filter open opportunities and apply to the ones that fit
            (students).
          </li>
          <li>
            Find which opportunities count toward a course requirement (faculty
            and departments).
          </li>
        </ul>
      </section>

      <section aria-labelledby="approach">
        <h2 id="approach">How we are building it</h2>
        <p>
          We are a small team of students building The Bridge in stages: pages
          first, then forms, then a server and database. A few commitments guide
          our choices.
        </p>
        <ul>
          <li>
            <strong>Honest communication.</strong> This page says what is real
            and what is still planned.
          </li>
          <li>
            <strong>Collect only what we need.</strong> Our forms will not ask
            for government ID numbers, payment details, or home addresses.
          </li>
          <li>
            <strong>Accessible by default.</strong> We are using labeled form
            fields, keyboard-friendly navigation, and readable color contrast.
          </li>
          <li>
            <strong>Room to grow.</strong> We write the site generally enough
            that it could someday serve other schools and organizations.
          </li>
        </ul>
      </section>

      <section aria-labelledby="next-step">
        <h2 id="next-step">Take the next step</h2>
        <p>
          Head back to the Home page to see where visitors will browse and post
          opportunities.
        </p>
        <p>
          <a class="cta-link" href="index.html#opportunity-actions"
            >Go to the Home page and get started</a
          >
        </p>
      </section>
    </main>
    <!-- END PAGE CONTENT -->

    <!-- BEGIN SHARED FOOTER (keep identical on every page) ALSO CONTAINS NAV -->
    <?php
      require __DIR__ . "/includes/footer.php";
    ?>
    <!-- END SHARED FOOTER -->
  </body>
</html>
