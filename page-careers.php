<?php
/*
Template Name: Careers Page
*/

get_header();
?>
 <main>
        <section class="careers-hero">
            <div class="careers-hero-inner">
                <div class="careers-breadcrumb">
                    <a href="<?php echo home_url('/'); ?>">Home</a>
                    <span>/</span>
                    <span>Careers</span>
                </div>

                <div class="careers-hero-grid">
                    <div>
                        <div class="careers-kicker">Careers at TachoMind</div>
                        <h1>Build work that helps ambitious businesses grow digitally.</h1>
                        <p>Join a multidisciplinary team of strategists, developers, marketers and analysts working across SEO, PPC, web development, social media and performance growth.</p>
                        <div class="careers-actions">
                            <a href="#open-positions" class="btn-primary">View Open Positions</a>
                            <a href="#hiring-process" class="btn-secondary">How Hiring Works</a>
                        </div>
                    </div>

                    <aside class="careers-proof-panel" aria-label="TachoMind team highlights">
                        <div class="careers-proof-image"></div>
                        <div class="careers-proof-grid">
                            <div class="careers-proof-item"><strong>100+</strong><span>Professionals across marketing, creative and technology</span></div>
                            <div class="careers-proof-item"><strong>28+</strong><span>Countries served by campaigns and digital delivery teams</span></div>
                            <div class="careers-proof-item"><strong>700+</strong><span>Campaigns managed with measurable client outcomes</span></div>
                            <div class="careers-proof-item"><strong>98%</strong><span>Client retention driven by disciplined execution</span></div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="careers-section alt">
            <div class="careers-section-inner">
                <div class="careers-section-head center">
                    <div class="careers-section-kicker">Why Join Us</div>
                    <h2>A high-trust environment for people who care about outcomes.</h2>
                    <p>We value practical thinking, strong ownership and clear communication. The work is fast-moving, but the goal is simple: help clients grow with systems that can be measured and improved.</p>
                </div>
                <div class="careers-values-grid">
                    <article class="careers-value-card"><div class="careers-value-icon">01</div><h3>Growth Craft</h3><p>Develop deep expertise across strategy, search, paid media, analytics, content and web delivery.</p></article>
                    <article class="careers-value-card"><div class="careers-value-icon">02</div><h3>Real Ownership</h3><p>Work on meaningful client goals where your decisions influence traffic, leads, revenue and retention.</p></article>
                    <article class="careers-value-card"><div class="careers-value-icon">03</div><h3>Cross-Team Learning</h3><p>Collaborate with SEO experts, developers, campaign managers, writers and designers every week.</p></article>
                    <article class="careers-value-card"><div class="careers-value-icon">04</div><h3>Professional Rhythm</h3><p>Structured reviews, clear deliverables and practical feedback keep the team moving with confidence.</p></article>
                </div>
            </div>
        </section>

    <section class="careers-section" id="open-positions">
    <div class="careers-section-inner">

        <div class="careers-section-head">
            <div class="careers-section-kicker">
                Open Positions
            </div>

            <h2>Current opportunities</h2>

            <p>
                Choose the role that best matches your strengths. Every application is reviewed by the relevant
                hiring team with attention to portfolio quality, practical experience and communication clarity.
            </p>
        </div>


        <div class="careers-jobs-grid">

            <?php

            /*
             * Get all published/open job openings.
             */
            $jobs_query = new WP_Query([
                'post_type'      => 'job_opening',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'orderby'        => [
                    'menu_order' => 'ASC',
                    'date'       => 'DESC',
                ],
                'meta_query'     => [
                    [
                        'key'     => 'job_openings_job_status',
                        'value'   => 'open',
                        'compare' => '=',
                    ],
                ],
            ]);


            if ($jobs_query->have_posts()) {

                while ($jobs_query->have_posts()) {

                    $jobs_query->the_post();


                    /*
                     * Get main ACF group.
                     */
                    $job = get_field('job_openings');


                    /*
                     * Skip the post if ACF group is empty.
                     */
                    if (empty($job)) {
                        continue;
                    }


                    /*
                     * Job Title.
                     */
                    $job_title = get_the_title();


                    /*
                     * Experience.
                     */
                    $experience = !empty($job['job_experience'])
                        ? $job['job_experience']
                        : '';


                    /*
                     * Specialization.
                     */
                    $specialization = !empty($job['job_specialization'])
                        ? $job['job_specialization']
                        : '';


                    /*
                     * Employment Type.
                     */
                    $employment_type = !empty($job['employment_type'])
                        ? $job['employment_type']
                        : '';


                    /*
                     * Work Mode.
                     */
                    $work_mode = !empty($job['work_mode'])
                        ? $job['work_mode']
                        : '';


                    /*
                     * Priority Role.
                     */
                    $priority_role = !empty($job['priority_role']);


                    /*
                     * Short Description.
                     */
                    $description = !empty($job['job_short_description'])
                        ? $job['job_short_description']
                        : '';


                    /*
                     * Responsibilities group.
                     */
                    $responsibilities = !empty($job['key_responsibilities'])
                        ? $job['key_responsibilities']
                        : [];


                    /*
                     * Application Deadline.
                     */
                    $application_deadline = !empty($job['application_deadline'])
                        ? $job['application_deadline']
                        : '';


                    /*
                     * Format Application Deadline.
                     *
                     * ACF currently returns:
                     * d/m/Y
                     *
                     * Example:
                     * 31/08/2026
                     *
                     * Display:
                     * August 31, 2026
                     */
                    $formatted_deadline = '';

                    if (!empty($application_deadline)) {

                        $deadline_date = DateTime::createFromFormat(
                            'd/m/Y',
                            $application_deadline
                        );

                        if ($deadline_date) {
                            $formatted_deadline = $deadline_date->format('F j, Y');
                        } else {
                            $formatted_deadline = $application_deadline;
                        }
                    }


                    /*
                     * Employment Type labels.
                     *
                     * Your ACF Select currently returns "value".
                     */
                    $employment_labels = [
                        'full_time'  => 'Full Time',
                        'part_time'  => 'Part Time',
                        'contract'   => 'Contract',
                        'internship' => 'Internship',
                        'freelance'  => 'Freelance',
                    ];


                    /*
                     * Work Mode labels.
                     */
                    $work_mode_labels = [
                        'onsite'        => 'On-site',
                        'remote'        => 'Remote',
                        'hybrid'        => 'Hybrid',
                        'remote_hybrid' => 'Remote/Hybrid',
                    ];


                    /*
                     * Get readable Employment Type.
                     */
                    $employment_label = '';

                    if (!empty($employment_type)) {

                        if (isset($employment_labels[$employment_type])) {
                            $employment_label = $employment_labels[$employment_type];
                        } else {
                            $employment_label = $employment_type;
                        }
                    }


                    /*
                     * Get readable Work Mode.
                     */
                    $work_mode_label = '';

                    if (!empty($work_mode)) {

                        if (isset($work_mode_labels[$work_mode])) {
                            $work_mode_label = $work_mode_labels[$work_mode];
                        } else {
                            $work_mode_label = $work_mode;
                        }
                    }


                    /*
                     * Check if at least one responsibility exists.
                     */
                    $has_responsibilities = false;

                    for ($i = 1; $i <= 5; $i++) {

                        $responsibility_key = 'key_responsibilities_' . $i;

                        if (!empty($responsibilities[$responsibility_key])) {
                            $has_responsibilities = true;
                            break;
                        }
                    }

                    ?>


                    <article class="career-job-card">


                        <!-- Job Header -->
                        <div class="career-job-top">

                            <div>

                                <h3>
                                    <?php echo esc_html($job_title); ?>
                                </h3>


                                <!-- Job Meta -->
                                <div class="career-job-meta">


                                    <?php

                                    /*
                                     * Experience.
                                     */
                                    if (!empty($experience)) {
                                        ?>

                                        <span>
                                            <?php echo esc_html($experience); ?>
                                        </span>

                                        <?php
                                    }

                                    ?>


                                    <?php

                                    /*
                                     * Specialization.
                                     */
                                    if (!empty($specialization)) {
                                        ?>

                                        <span>
                                            <?php echo esc_html($specialization); ?>
                                        </span>

                                        <?php
                                    }

                                    ?>


                                    <?php

                                    /*
                                     * Work Mode.
                                     */
                                    if (!empty($work_mode_label)) {
                                        ?>

                                        <span>
                                            <?php echo esc_html($work_mode_label); ?>
                                        </span>

                                        <?php
                                    }

                                    ?>


                                    <?php

                                    /*
                                     * If this is a Priority Role,
                                     * move Employment Type into the meta badges.
                                     *
                                     * Example:
                                     *
                                     * [2-4 years]
                                     * [Technical + Content SEO]
                                     * [Full Time]
                                     */
                                    if ($priority_role && !empty($employment_label)) {
                                        ?>

                                        <span>
                                            <?php echo esc_html($employment_label); ?>
                                        </span>

                                        <?php
                                    }

                                    ?>


                                </div>

                            </div>


                            <?php

                            /*
                             * Right-hand badge.
                             */
                            if ($priority_role) {
                                ?>

                                <span class="career-job-type">
                                    Priority Role
                                </span>

                                <?php
                            } elseif (!empty($employment_label)) {
                                ?>

                                <span class="career-job-type">
                                    <?php echo esc_html($employment_label); ?>
                                </span>

                                <?php
                            }

                            ?>


                        </div>


                        <?php

                        /*
                         * Job Description.
                         */
                        if (!empty($description)) {
                            ?>

                            <p>
                                <?php echo esc_html($description); ?>
                            </p>

                            <?php
                        }

                        ?>


                        <?php

                        /*
                         * Key Responsibilities.
                         */
                        if ($has_responsibilities) {
                            ?>

                            <h4>
                                Key responsibilities
                            </h4>


                            <ul>

                                <?php

                                for ($i = 1; $i <= 5; $i++) {

                                    $responsibility_key = 'key_responsibilities_' . $i;


                                    /*
                                     * Skip empty responsibilities.
                                     */
                                    if (empty($responsibilities[$responsibility_key])) {
                                        continue;
                                    }

                                    ?>

                                    <li>
                                        <?php
                                        echo esc_html(
                                            $responsibilities[$responsibility_key]
                                        );
                                        ?>
                                    </li>

                                    <?php
                                }

                                ?>

                            </ul>

                            <?php
                        }

                        ?>


                        <?php

                        /*
                         * Application Deadline.
                         */
                        if (!empty($formatted_deadline)) {
                            ?>

                            <div class="career-job-deadline">

                                <strong>
                                    Application Deadline:
                                </strong>

                                <span>
                                    <?php echo esc_html($formatted_deadline); ?>
                                </span>

                            </div>

                            <?php
                        }

                        ?>


                        <!--
                            Existing modal button.

                            career-apply-btn and data-apply-role
                            are intentionally preserved so your
                            existing modal JavaScript continues working.
                        -->
                        <button
                            class="btn-primary career-apply-btn"
                            type="button"
                            data-apply-role="<?php echo esc_attr($job_title); ?>"
                        >
                            Apply Now
                        </button>


                    </article>


                    <?php
                }


                /*
                 * Restore original WordPress post data.
                 */
                wp_reset_postdata();

            } else {
                ?>

                <div class="careers-no-jobs">

                    <p>
                        There are currently no open positions. Please check back soon.
                    </p>

                </div>

                <?php
            }

            ?>

        </div>

    </div>
</section>

        <section class="careers-section alt" id="hiring-process">
            <div class="careers-section-inner">
                <div class="careers-section-head center">
                    <div class="careers-section-kicker">Hiring Process</div>
                    <h2>Clear, respectful and role-focused.</h2>
                    <p>We keep the process structured so candidates know what to expect and hiring teams can assess the right signals.</p>
                </div>
                <div class="career-process-grid">
                    <article class="career-process-step"><span>01</span><h3>Application Review</h3><p>We assess your profile, portfolio and role alignment with the open position.</p></article>
                    <article class="career-process-step"><span>02</span><h3>Skill Discussion</h3><p>Shortlisted candidates meet the team for a practical conversation about experience and expectations.</p></article>
                    <article class="career-process-step"><span>03</span><h3>Work Sample</h3><p>Some roles may include a focused assignment or portfolio walkthrough relevant to day-to-day work.</p></article>
                    <article class="career-process-step"><span>04</span><h3>Final Alignment</h3><p>We discuss scope, compensation, joining timeline and the first 90 days of success.</p></article>
                </div>
            </div>
        </section>
    </main>

    <div class="career-modal" id="careerModal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="careerModalTitle">
        <div class="career-modal-backdrop" data-close-career-modal></div>
        <div class="career-modal-panel">
            <div class="career-modal-head">
                <div>
                    <span>Application Form</span>
                    <h2 id="careerModalTitle">Apply for <strong id="modalRole">this role</strong></h2>
                </div>
                <button class="career-modal-close" type="button" aria-label="Close application form" data-close-career-modal>&times;</button>
            </div>
            <!--<form class="career-form" id="careerApplicationForm">-->
            <!--    <input type="hidden" name="role" id="careerRole" />-->
            <!--    <div class="career-form-grid">-->
            <!--        <label>Full Name <input type="text" name="name" placeholder="Your full name" required /></label>-->
            <!--        <label>Email Address <input type="email" name="email" placeholder="you@example.com" required /></label>-->
            <!--        <label>Phone Number <input type="tel" name="phone" placeholder="+91 00000 00000" required /></label>-->
            <!--        <label>Current Location <input type="text" name="location" placeholder="City, Country" required /></label>-->
            <!--        <label>Experience Level-->
            <!--            <select name="experience" required>-->
            <!--                <option value="">Select experience</option>-->
            <!--                <option>0-1 years</option>-->
            <!--                <option>1-3 years</option>-->
            <!--                <option>3-5 years</option>-->
            <!--                <option>5+ years</option>-->
            <!--            </select>-->
            <!--        </label>-->
            <!--        <label>Portfolio / LinkedIn <input type="url" name="portfolio" placeholder="https://linkedin.com/in/yourname" /></label>-->
            <!--    </div>-->
            <!--    <label>Why are you a strong fit for this role?-->
            <!--        <textarea name="message" rows="4" placeholder="Share your relevant experience, strongest skills and the kind of work you want to do next." required></textarea>-->
            <!--    </label>-->
            <!--    <label>Upload CV / Resume-->
            <!--        <input type="file" name="resume" id="resume" accept=".pdf,.doc,.docx" required />-->
            <!--        <span class="career-file-note" id="resumeFileName">PDF, DOC or DOCX up to 5 MB.</span>-->
            <!--    </label>-->
            <!--    <p class="career-form-note">By submitting this form, you consent to TachoMind reviewing your application for hiring purposes. Shortlisted profiles will be contacted by the relevant team.</p>-->
            <!--    <button class="btn-primary" type="submit">Submit Application</button>-->
            <!--</form>-->
            
             <div class="career-everest-form-wrap">
            <?php echo do_shortcode('[everest_form id="2143"]'); ?>
        </div>
        </div>
    </div>
    <script>
        (function () {
  'use strict';

  const navbar = document.getElementById('navbar');
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');

  function handleNavScroll() {
    if (!navbar) return;
    navbar.classList.toggle('scrolled', window.scrollY > 20);
  }

  window.addEventListener('scroll', handleNavScroll, { passive: true });
  handleNavScroll();

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      mobileMenu.classList.toggle('open');
    });

    document.querySelectorAll('.mobile-link, .mobile-cta').forEach(function (link) {
      link.addEventListener('click', function () {
        mobileMenu.classList.remove('open');
      });
    });
  }

  const modal = document.getElementById('careerModal');
  const roleField = document.getElementById('careerRole');
  const modalRole = document.getElementById('modalRole');
  const form = document.getElementById('careerApplicationForm');
  const fileInput = document.getElementById('resume');
  const fileName = document.getElementById('resumeFileName');
  const openButtons = document.querySelectorAll('[data-apply-role]');
  const closeButtons = document.querySelectorAll('[data-close-career-modal]');

  function openModal(role) {
    if (!modal) return;
    modal.classList.add('open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';

    if (roleField) roleField.value = role;
    if (modalRole) modalRole.textContent = role;

    const firstInput = modal.querySelector('input, select, textarea, button');
    if (firstInput) firstInput.focus();
  }

  function closeModal() {
    if (!modal) return;
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  openButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      openModal(button.getAttribute('data-apply-role'));
    });
  });

  closeButtons.forEach(function (button) {
    button.addEventListener('click', closeModal);
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') closeModal();
  });

  if (fileInput && fileName) {
    fileInput.addEventListener('change', function () {
      const file = fileInput.files && fileInput.files[0];
      fileName.textContent = file ? file.name : 'PDF, DOC or DOCX up to 5 MB.';
    });
  }

  if (form) {
    form.addEventListener('submit', function (event) {
      event.preventDefault();

      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      const file = fileInput && fileInput.files ? fileInput.files[0] : null;
      if (!file) {
        fileInput.setCustomValidity('Please upload your CV or resume.');
        fileInput.reportValidity();
        return;
      }

      fileInput.setCustomValidity('');
      sessionStorage.setItem('tachomindCareerRole', roleField ? roleField.value : 'your selected role');
      window.location.href = 'career-application-submitted.html';
    });
  }
})();

    </script>
    <?php

get_footer();
?>
