<?php
get_header();
while (have_posts()) {
  the_post();
?>
<style>
      .tm-policy-page {
    --tm-dark: #08111f;
    --tm-navy: #0f172a;
    --tm-blue: #2563eb;
    --tm-cyan: #06b6d4;
    --tm-light: #f8fbff;
    --tm-text: #334155;
    --tm-heading: #0f172a;
    --tm-border: #dbeafe;

    background: var(--tm-light);
    padding: 70px 20px;
    font-family: inherit;
  }

  .tm-policy-container {
    max-width: 1050px;
    margin: 0 auto;
  }

  .tm-policy-hero {
    background:
      radial-gradient(circle at top right, rgba(6, 182, 212, 0.25), transparent 32%),
      linear-gradient(135deg, var(--tm-dark), var(--tm-navy));
    padding: 60px 45px;
    border-radius: 24px;
    margin-bottom: 28px;
    color: #ffffff;
  }

  .tm-policy-label {
    display: inline-block;
    background: rgba(37, 99, 235, 0.18);
    color: #bfdbfe;
    border: 1px solid rgba(147, 197, 253, 0.35);
    padding: 8px 15px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 18px;
  }

  .tm-policy-hero h1 {
    margin: 0 0 15px;
    font-size: 46px;
    line-height: 1.12;
    font-weight: 800;
    color: #ffffff;
  }

  .tm-policy-hero p {
    margin: 0;
    max-width: 760px;
    font-size: 18px;
    line-height: 1.7;
    color: #cbd5e1;
  }

  .tm-policy-card {
    background: #ffffff;
    border: 1px solid var(--tm-border);
    border-radius: 20px;
    padding: 36px;
    margin-bottom: 24px;
    box-shadow: 0 14px 40px rgba(15, 23, 42, 0.06);
  }

  .tm-policy-card h2 {
    margin: 0 0 18px;
    color: var(--tm-heading);
    font-size: 30px;
    line-height: 1.25;
    font-weight: 800;
  }

  .tm-policy-card p,
  .tm-policy-card li {
    color: var(--tm-text);
    font-size: 17px;
    line-height: 1.8;
  }

  .tm-policy-card p {
    margin: 0 0 15px;
  }

  .tm-policy-card p:last-child {
    margin-bottom: 0;
  }

  .tm-policy-card ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .tm-policy-card li {
    position: relative;
    padding-left: 34px;
    margin-bottom: 14px;
  }

  .tm-policy-card li:last-child {
    margin-bottom: 0;
  }

  .tm-policy-card li::before {
    content: "✓";
    position: absolute;
    left: 0;
    top: 5px;
    width: 22px;
    height: 22px;
    background: linear-gradient(135deg, var(--tm-blue), var(--tm-cyan));
    color: #ffffff;
    border-radius: 50%;
    font-size: 13px;
    line-height: 22px;
    text-align: center;
    font-weight: 800;
  }

  .tm-policy-help {
    background: linear-gradient(135deg, var(--tm-blue), var(--tm-cyan));
    border-radius: 20px;
    padding: 38px;
    text-align: center;
    color: #ffffff;
  }

  .tm-policy-help h2 {
    margin: 0 0 10px;
    font-size: 30px;
    font-weight: 800;
    color: #ffffff;
  }

  .tm-policy-help p {
    margin: 0 0 24px;
    color: rgba(255, 255, 255, 0.9);
    font-size: 17px;
    line-height: 1.7;
  }

  .tm-policy-help a {
    display: inline-block;
    background: #ffffff;
    color: var(--tm-blue);
    padding: 13px 28px;
    border-radius: 30px;
    font-weight: 800;
    text-decoration: none;
    transition: 0.25s ease;
  }

  .tm-policy-help a:hover {
    background: var(--tm-dark);
    color: #ffffff;
  }

  @media (max-width: 767px) {
    .tm-policy-page {
      padding: 45px 15px;
    }

    .tm-policy-hero,
    .tm-policy-card,
    .tm-policy-help {
      padding: 28px 22px;
      border-radius: 18px;
    }

    .tm-policy-hero h1 {
      font-size: 33px;
    }

    .tm-policy-card h2,
    .tm-policy-help h2 {
      font-size: 25px;
    }

    .tm-policy-hero p,
    .tm-policy-card p,
    .tm-policy-card li,
    .tm-policy-help p {
      font-size: 16px;
    }
  }

</style>

<section class="tm-policy-page">
  <div class="tm-policy-container">

    <div class="tm-policy-hero">
      <span class="tm-policy-label">TachoMind Policy</span>
      <h1>Cancellation & Refund Policy</h1>
      <p>
        Please read our cancellation and refund terms carefully before placing an order with Tachomind Pvt Ltd.
      </p>
    </div>

    <div class="tm-policy-card">
      <h2>Cancellation Policy</h2>

      <ul>
        <li>Tachomind Pvt Ltd follows a transparent and no fuss cancellation policy. Here are the terms of the policy:</li>
        <li>All cancellation requests should be sent to our billing department or communicated to your Account Manager.</li>
        <li>The cancellation will not be valid until it is confirmed by the respective department.</li>
        <li>Cancellation requests will be considered only when the request is made within 12 hours of placing the order.</li>
        <li>Cancellation requests will be accepted only if execution of the project has not already started.</li>
        <li>Tachomind Pvt Ltd will not be held responsible for any third-party services, such as hosting, web development, content writing, etc.</li>
      </ul>
    </div>

    <div class="tm-policy-card">
      <h2>Refund Policy</h2>

      <p>
        Due to the nature of the services, Tachomind Pvt Ltd does not guarantee any refunds upon cancellation.
      </p>

      <p>
        In case of monthly payment, it is understood that payment for the next month is released only after reviewing the current month’s performance.
      </p>

      <p>
        Tachomind Pvt Ltd does not make any guarantees on the basis of traffic, rankings, or similar results and will not be held responsible for any refund claims thereof.
      </p>

      <p>
        We only provide White Label Digital Marketing and Web Development services all over India. If you are not happy with our services, you’ll get your refund back according to our above-mentioned policies.
      </p>
    </div>

    <div class="tm-policy-help">
      <h2>Need Help?</h2>
      <p>For cancellation or refund-related questions, please contact the TachoMind team.</p>
      <a href="<?php echo home_url('/contact'); ?>">Contact Us</a>
    </div>

  </div>
</section>



<?php
}
get_footer();
?>