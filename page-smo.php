<?php
get_header();
while (have_posts()) {
  the_post();
?>
<style>
.smo-image-card{
    height:none!important;
}
.smo-service-media {
    height: none!important;
}
</style>
<main>
        <section class="smo-hero">
            <div class="smo-hero-dot-grid"></div>
            <div class="smo-hero-glow"></div>
            <div class="smo-hero-inner">
                <div class="smo-breadcrumb">
                    <a href="<?php echo home_url('/'); ?>">Home</a>
                    <span>/</span>
                    <span>SMO</span>
                </div>

                <div class="smo-hero-grid">
                    <div class="smo-hero-left">
                        <div class="smo-hero-badge">✦ SMO - Briliant Minds At Work</div>
                        <h1 class="smo-hero-title">
                            <span>Get Most out of your</span>
                            <strong>Social Media</strong>
                        </h1>
                        <h2 class="smo-hero-subtitle">Personally curated strategy for your brand</h2>
                        <p class="smo-hero-text">Tachomind is the top-rated Social Media Marketing agency in India, you were looking for so long. Excel your business globally with the best offers that we offer relating to Social Media Optimization.</p>
                        <div class="smo-hero-actions">
                            <a href="<?php echo home_url('/about'); ?>" class="smo-btn-primary">Start a Project</a>
                            <a href="#packages" class="smo-btn-dark">Our Packages</a>
                        </div>
                    </div>

                    <div class="smo-hero-stats" aria-label="TachoMind proof points">
                        <div class="smo-hero-stat">
                            <span class="smo-stat-icon blue">↗</span>
                            <div>
                                <small>We've generated over</small>
                                <strong>$108,231,120</strong>
                            </div>
                        </div>
                        <div class="smo-hero-stat">
                            <span class="smo-stat-icon indigo">◎</span>
                            <div>
                                <small>We've managed</small>
                                <strong>700+</strong>
                            </div>
                        </div>
                        <div class="smo-hero-stat">
                            <span class="smo-stat-icon green">✓</span>
                            <div>
                                <small>We're a</small>
                                <strong>Certified</strong>
                            </div>
                        </div>
                        <div class="smo-hero-stat">
                            <span class="smo-stat-icon amber">★</span>
                            <div>
                                <small>Brilliant Minds At Work</small>
                                <strong>TachoMind</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="smo-intro">
            <div class="smo-two-col">
                <div class="smo-image-card">
                    <img class="smo-service-image" src="<?php echo get_template_directory_uri() . '/assets/images/smo/66dbbe50-4681-493c-8975-5d1c62da58cd.webp' ?>"
                        alt="Social media content creation on a smartphone" />
                </div>
                <div class="smo-copy">
                    <div class="smo-kicker">✦ Social Media Optimization</div>
                    <h2>SMO – one important strategy to increase the awareness of your brand digitally!</h2>
                    <h3>How could SMO be a worthy solution for your business?</h3>
                    <p>As the continuous progress in Social Media Marketing (SMM) it has become the most essential and a powerful online marketing tool for companies and brands. You can get maximum exposure with the help of various social media platforms like Facebook, LinkedIn, Twitter, LinkedIn, and Google. It can make your website more interesting and attract more traffic.</p>
                    <p>Social interaction is very essential to achieve your target audience. Search engines like Google, Yahoo and Bing integrate profiles, tweets and comments into their results pages. With the ongoing changes in the internet community, social media campaigns and strategies need to be updated.</p>
                    <p>Tachomind has immense experience with SMO and experts in creating designs that can excel your business growth. With the implementation of effective social media marketing your website attracts maximum traffic and generates leads. Keep in touch with us for availing the best offers you are looking for digital marketing.</p>
                </div>
            </div>
        </section>

        <section class="smo-services-strip">
            <div class="smo-section-head">
                <div class="smo-kicker">✦ Our Social Media Marketing Services</div>
                <h2>Our Social Media Marketing services Include:</h2>
            </div>
            <div class="smo-include-grid">
                <div>Estimating and identifying target audience.</div>
                <div>Planning an effective marketing strategy and proper execution.</div>
                <div>Regularly monitoring the updates to other information.</div>
                <div>Continuous tracking of Social media marketing with better response and recognition.</div>
                <div>Proper research, tracking, and adaptation as per the latest trend.</div>
                <div>Encouraging awareness related to the blogging community and forums.</div>
                <div>Mainly focus on the specific keywords, topics and phrases, suitable for your brand.</div>
                <div>Utilization of highly advanced data-tracking tools and strategies for best results.</div>
            </div>
        </section>

        <!--<section class="smo-packages" id="packages">-->
        <!--    <div class="smo-section-head">-->
        <!--        <div class="smo-kicker">✦ Our Packages</div>-->
        <!--        <h2>Our Packages</h2>-->
        <!--    </div>-->

        <!--    <div class="smo-package-grid">-->
        <!--        <article class="smo-package-card blue">-->
        <!--            <div class="smo-package-top">-->
        <!--                <span>A</span>-->
        <!--                <strong>$299 USD</strong>-->
        <!--            </div>-->
        <!--            <ul>-->
        <!--                <li>10 Post /month</li>-->
        <!--                <li>Original Content Creation for SMM</li>-->
        <!--                <li>Social Media Calendar Organization</li>-->
        <!--                <li>Post Promotion (Ad Boost Management)</li>-->
        <!--                <li>Community Management (10 responses per day)</li>-->
        <!--                <li>Platforms Included: Facebook & Instagram</li>-->
        <!--                <li>More Social Networks (Twitter, LinkedIn, etc.) 99 USD</li>-->
        <!--                <li>Initial Campaign Strategy</li>-->
        <!--                <li>Single Account Manager</li>-->
        <!--                <li>No Setup Fee or Initial Campaign Investment</li>-->
        <!--                <li>Analyze Performance/Reporting</li>-->
        <!--                <li>Up to one hours of consultation per month</li>-->
        <!--                <li>2 Social Medias (Facebook,Instagram)</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Choose Plan</a>-->
        <!--        </article>-->

        <!--        <article class="smo-package-card purple featured">-->
        <!--            <div class="smo-package-top">-->
        <!--                <span>A+</span>-->
        <!--                <strong>$449 USD</strong>-->
        <!--            </div>-->
        <!--            <ul>-->
        <!--                <li>20 Post /month</li>-->
        <!--                <li>Original Content Creation for SMM</li>-->
        <!--                <li>Social Media Calendar Organization</li>-->
        <!--                <li>Post Promotion (Ad Boost Management)</li>-->
        <!--                <li>Community Management (10 responses per day)</li>-->
        <!--                <li>Platforms Included: Facebook & Instagram</li>-->
        <!--                <li>More Social Networks (Twitter, LinkedIn, etc.) 99 USD</li>-->
        <!--                <li>Initial Campaign Strategy</li>-->
        <!--                <li>Single Account Manager</li>-->
        <!--                <li>No Setup Fee or Initial Campaign Investment</li>-->
        <!--                <li>Analyze Performance/Reporting</li>-->
        <!--                <li>Up to two hours of consultation per month</li>-->
        <!--                <li>3 Social Medias (Facebook,Instagram, Linkedin)</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Choose Plan</a>-->
        <!--        </article>-->

        <!--        <article class="smo-package-card cyan">-->
        <!--            <div class="smo-package-top">-->
        <!--                <span>B</span>-->
        <!--                <strong>$549 USD</strong>-->
        <!--            </div>-->
        <!--            <ul>-->
        <!--                <li>30 Post /month</li>-->
        <!--                <li>Original Content Creation for SMM</li>-->
        <!--                <li>Social Media Calendar Organization</li>-->
        <!--                <li>Post Promotion (Ad Boost Management)</li>-->
        <!--                <li>Community Management (10 responses per day)</li>-->
        <!--                <li>Platforms Included: Facebook & Instagram</li>-->
        <!--                <li>More Social Networks (Twitter, LinkedIn, etc.) 99 USD</li>-->
        <!--                <li>Initial Campaign Strategy</li>-->
        <!--                <li>Single Account Manager</li>-->
        <!--                <li>No Setup Fee or Initial Campaign Investment</li>-->
        <!--                <li>Analyze Performance/Reporting</li>-->
        <!--                <li>Up to two hours of consultation per month</li>-->
        <!--                <li>3 Social Medias (Facebook,Instagram, Linkedin)</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Choose Plan</a>-->
        <!--        </article>-->

        <!--        <article class="smo-package-card green">-->
        <!--            <div class="smo-package-top">-->
        <!--                <span>B+</span>-->
        <!--                <strong>$649 USD</strong>-->
        <!--            </div>-->
        <!--            <ul>-->
        <!--                <li>40 Post /month</li>-->
        <!--                <li>Original Content Creation for SMM</li>-->
        <!--                <li>Social Media Calendar Organization</li>-->
        <!--                <li>Post Promotion (Ad Boost Management)</li>-->
        <!--                <li>Community Management (10 responses per day)</li>-->
        <!--                <li>Platforms Included: Facebook & Instagram</li>-->
        <!--                <li>More Social Networks (Twitter, LinkedIn, etc.) 99 USD</li>-->
        <!--                <li>Initial Campaign Strategy</li>-->
        <!--                <li>Single Account Manager</li>-->
        <!--                <li>No Setup Fee or Initial Campaign Investment</li>-->
        <!--                <li>Analyze Performance/Reporting</li>-->
        <!--                <li>Up to two hours of consultation per month</li>-->
        <!--                <li>3 Social Medias (Facebook,Instagram, Linkedin)</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Choose Plan</a>-->
        <!--        </article>-->

        <!--        <article class="smo-package-card amber">-->
        <!--            <div class="smo-package-top">-->
        <!--                <span>C</span>-->
        <!--                <strong>$799 USD</strong>-->
        <!--            </div>-->
        <!--            <ul>-->
        <!--                <li>60 Post /month</li>-->
        <!--                <li>Original Content Creation for SMM</li>-->
        <!--                <li>Social Media Calendar Organization</li>-->
        <!--                <li>Post Promotion (Ad Boost Management)</li>-->
        <!--                <li>Community Management (10 responses per day)</li>-->
        <!--                <li>Platforms Included: Facebook & Instagram</li>-->
        <!--                <li>More Social Networks (Twitter, LinkedIn, etc.) 99 USD</li>-->
        <!--                <li>Initial Campaign Strategy</li>-->
        <!--                <li>Single Account Manager</li>-->
        <!--                <li>No Setup Fee or Initial Campaign Investment</li>-->
        <!--                <li>Analyze Performance/Reporting</li>-->
        <!--                <li>Up to two hours of consultation per month</li>-->
        <!--                <li>3 Social Medias (Facebook,Instagram, Linkedin)</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Choose Plan</a>-->
        <!--        </article>-->
        <!--    </div>-->
        <!--</section>-->
        
        
        <section class="smo-packages" id="packages">
    <div class="smo-section-head">
        <div class="smo-kicker">✦ Our Packages</div>
        <h2>Our Packages</h2>
    </div>

    <div class="smo-package-grid">

        <!-- Package A -->
        <article class="smo-package-card blue">
            <div class="smo-package-top">
                <span>A</span>
                <strong>$299 USD</strong>
            </div>

            <ul>
                <li>10 Post /month</li>
                <li>Original Content Creation for SMM</li>
                <li>Social Media Calendar Organization</li>
                <li>Post Promotion (Ad Boost Management)</li>
                <li>Community Management (10 responses per day)</li>
                <li>Platforms Included: Facebook &amp; Instagram</li>
                <li>More Social Networks (Twitter, LinkedIn, etc.) 99 USD</li>
                <li>Initial Campaign Strategy</li>
                <li>Single Account Manager</li>
                <li>No Setup Fee or Initial Campaign Investment</li>
                <li>Analyze Performance/Reporting</li>
                <li>Up to one hours of consultation per month</li>
                <li>2 Social Medias (Facebook,Instagram)</li>
            </ul>

            <a href="https://tachomind.com/contact">Choose Plan</a>
        </article>


        <!-- Package A+ -->
        <article class="smo-package-card purple featured">
            <div class="smo-package-top">
                <span>A+</span>
                <strong>$449 USD</strong>
            </div>

            <ul>
                <li>20 Post /month</li>
                <li>Original Content Creation for SMM</li>
                <li>Social Media Calendar Organization</li>
                <li>Post Promotion (Ad Boost Management)</li>
                <li>Community Management (10 responses per day)</li>
                <li>Platforms Included: Facebook &amp; Instagram</li>
                <li>More Social Networks (Twitter, LinkedIn, etc.) 99 USD</li>
                <li>Initial Campaign Strategy</li>
                <li>Single Account Manager</li>
                <li>No Setup Fee or Initial Campaign Investment</li>
                <li>Analyze Performance/Reporting</li>
                <li>Up to two hours of consultation per month</li>
                <li>3 Social Medias (Facebook,Instagram, Linkedin)</li>
            </ul>

            <a href="https://tachomind.com/contact">Choose Plan</a>
        </article>


        <!-- Package B -->
        <article class="smo-package-card cyan">
            <div class="smo-package-top">
                <span>B</span>
                <strong>$549 USD</strong>
            </div>

            <ul>
                <li>30 Post /month</li>
                <li>Original Content Creation for SMM</li>
                <li>Social Media Calendar Organization</li>
                <li>Post Promotion (Ad Boost Management)</li>
                <li>Community Management (10 responses per day)</li>
                <li>Platforms Included: Facebook &amp; Instagram</li>
                <li>More Social Networks (Twitter, LinkedIn, etc.) 99 USD</li>
                <li>Initial Campaign Strategy</li>
                <li>Single Account Manager</li>
                <li>No Setup Fee or Initial Campaign Investment</li>
                <li>Analyze Performance/Reporting</li>
                <li>Up to two hours of consultation per month</li>
                <li>3 Social Medias (Facebook,Instagram, Linkedin)</li>
            </ul>

            <a href="https://tachomind.com/contact">Choose Plan</a>
        </article>


        <!-- Package B+ -->
        <article class="smo-package-card green">
            <div class="smo-package-top">
                <span>B+</span>
                <strong>$649 USD</strong>
            </div>

            <ul>
                <li>40 Post /month</li>
                <li>Original Content Creation for SMM</li>
                <li>Social Media Calendar Organization</li>
                <li>Post Promotion (Ad Boost Management)</li>
                <li>Community Management (10 responses per day)</li>
                <li>Platforms Included: Facebook &amp; Instagram</li>
                <li>More Social Networks (Twitter, LinkedIn, etc.) 99 USD</li>
                <li>Initial Campaign Strategy</li>
                <li>Single Account Manager</li>
                <li>No Setup Fee or Initial Campaign Investment</li>
                <li>Analyze Performance/Reporting</li>
                <li>Up to two hours of consultation per month</li>
                <li>3 Social Medias (Facebook,Instagram, Linkedin)</li>
            </ul>

            <a href="https://tachomind.com/contact">Choose Plan</a>
        </article>


        <!-- Package C -->
        <article class="smo-package-card amber">
            <div class="smo-package-top">
                <span>C</span>
                <strong>$799 USD</strong>
            </div>

            <ul>
                <li>60 Post /month</li>
                <li>Original Content Creation for SMM</li>
                <li>Social Media Calendar Organization</li>
                <li>Post Promotion (Ad Boost Management)</li>
                <li>Community Management (10 responses per day)</li>
                <li>Platforms Included: Facebook &amp; Instagram</li>
                <li>More Social Networks (Twitter, LinkedIn, etc.) 99 USD</li>
                <li>Initial Campaign Strategy</li>
                <li>Single Account Manager</li>
                <li>No Setup Fee or Initial Campaign Investment</li>
                <li>Analyze Performance/Reporting</li>
                <li>Up to two hours of consultation per month</li>
                <li>3 Social Medias (Facebook,Instagram, Linkedin)</li>
            </ul>

            <a href="https://tachomind.com/contact">Choose Plan</a>
        </article>

    </div>
</section>

        <section class="smo-secret">
            <div class="smo-article">
                <div class="smo-section-head">
                    <div class="smo-kicker">✦ Social Media Optimization</div>
                    <h2>The top secret of improving any business is social media optimization.</h2>
                </div>
                <div class="smo-article-grid">
                    <div>
                        <p>Nowadays, every one of us wants to make our products and service famous on social media. SMO marketing became the most emerging technique that already took the place of traditional marketing. Are you running a business through the traditional marketing process still? If you are, then this is high time to transform the way of marketing for the development and growth of your business.</p>
                        <p>At TachoMind, you can get the secret tricks of leveraging social media with your products. SMO is a digital marketing technique that is used to improve the position of your business digitally. When you visit us, we will help you to rank your website and improve its credibility by implementing the steps. From us, you can achieve something better than you expected. If you are hunting for a digital marketing company for social media optimization services, then you have landed at the right place.</p>
                    </div>
                    <div class="smo-image-card small">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/smo/46f77981-fa29-44a8-8953-5a2be5fc1d4a.webp' ?>"
                            alt="Social media video creation setup" />
                    </div>
                </div>
                <p>Nowadays, every one of us needs a social media presence. With the help of a comprehensive digital marketing optimization service, we will deliver you the best possible results. We can create social media optimization for your business to engage your site with the consumers and boost your business. We have world-class-level developers who are professional and experts in producing social media content and providing social media optimization services.</p>
                <p>It is needless to say that social media has become the most powerful platform in the internet era. Social media is a place where billions of people visit daily from all over the world. If your business is starving for exposure, then social media optimization is the one-stop solution. Here through SMO marketing, you can create a brand of your products in the local and global media. Now you can get more engagement on your website through social media marketing and generate unlimited leads.</p>
                <p>Running a business is not a joke, right? You have a lot of things to maintain and coordinate with the day-to-day task. In between these things, you might forget about the engagement of customers. If you think more deeply, then there are almost millions of businesses on the internet, and hundreds of more are added daily to this list. So, if you don't want to become invisible among them, then you should be updated with social media optimization.</p>
                <p>As an owner of a business, you should be more focused on the new and advanced marketing strategy. If your business generates a limited number of leads monthly or yearly, then the only reason that it may have is a lack of exposure. Social media marketing or optimization is the perfect way of dealing with the targeted customers. Through SMO social media optimization, you can develop and flourish the business organically and increase high client retention.</p>
                <p>We, the team of TachoMind, help you to cover all your marketing needs and requirements. Make growth in your business with the help of the best social media marketing experts and be in the rank one position on the search engine pages. We are one of the most searched SEO companies with more than 1000+ clients worldwide. We have 20+ in-house social media marketers who deliver growth and improvements. No matter whether you run a small business or a big enterprise purchasing SMO plans from TachoMind could be a great choice.</p>
            </div>
        </section>

        <section class="smo-purchase">
            <div class="smo-section-head">
                <div class="smo-kicker">✦ Services</div>
                <h2>What are the services that you can purchase from us?</h2>
                <p>Are you looking for a company where you can extend your likes and subscribers for social media channels? SMO overall depends upon improving the quality of your post, interaction, and followers. No matter which kind of social account you have, you can increase the interaction with your clients by purchasing one of the services from social media optimization company.</p>
            </div>

            <div class="smo-service-list">
                <article class="smo-service-row">
                    <div class="smo-service-media dark">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/smo/a1dd352c-b641-416a-a523-b5e55d6f2abf.webp' ?>"
                            alt="Facebook social media platform" />
                    </div>
                    <div class="smo-service-text">
                        <span>1</span>
                        <h3>Facebook SMO</h3>
                        <p>Facebook is the biggest powerful platform in the world of social media, where you get better opportunities and exposure for your business. Billions of active users are there who access Facebook from different locations. If you want your business to reach up to each mobile phone and laptop, Facebook could be the better platform for you. One-third of your social media marketing is done when you purchase the Facebook marketing optimization. Through Facebook, you can attract multiple targeted audiences. Nowadays, everybody is active on Facebook so if you are hunting for developing a potential customer base for your business, come to us. We can create attractive images, videos, and different brouchers or banners to run advertisements on Facebook that will help you to increase the traffic!</p>
                    </div>
                </article>

                <article class="smo-service-row reverse">
                    <div class="smo-service-media">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/smo/ce26dfb2-4e18-4096-b2af-9d2a7df198b0.webp' ?>"
                            alt="Instagram social media content on phone" />
                    </div>
                    <div class="smo-service-text">
                        <span>2</span>
                        <h3>Instagram SMO</h3>
                        <p>Instagram is considered the second-largest platform where people become active on a huge basis. As per the recent reports, Instagram is delivering 30% more successful results in targeting the audience. Most of the e-commerce platforms choose Instagram to promote their brands. If you want to reach up the targeted audiences through Instagram, you should have knowledge of the right hashtags. With the help of our expert, you can run multiple kinds of campaigns. To make growth in your business, we implement different strategies that will deliver you the proven results. If your business faces a lack of engagement, then here you can improve that. We will help you make your Instagram account efficient by constantly updating the post and stories with unique content. Now you can post valuable stories related to your product to give a kick start to your business.</p>
                    </div>
                </article>

                <article class="smo-service-row">
                    <div class="smo-service-media">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/smo/eddc4237-3838-488b-b0f1-6e13262e8707.webp' ?>"
                            alt="Twitter social media publishing" />
                    </div>
                    <div class="smo-service-text">
                        <span>3</span>
                        <h3>Twitter SMO</h3>
                        <p>Does your business have an account on Twitter? Twitter is another powerful platform where you can interact along with the targeted audience. You can tweet anything valuable related to your products and services. Twitter is the platform where you can engage people and start talking about your products with full confidence. Along with that, here, customers can also give you feedback by sharing the problems that they have faced. A business can only become better when you take feedback from people. Accept your weakness and start working on it to reach more and more people. No matter whether it's a B2B company or B2C, you can generate unlimited leads by making strategies for Twitter marketing. Along with that, it can also improve the traffic of your site by attracting a huge customer base.</p>
                    </div>
                </article>

                <article class="smo-service-row reverse">
                    <div class="smo-service-media">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/smo/3e084c58-b9c6-4e48-a4f8-e01ed03660c4.webp' ?>"
                            alt="Pinterest social media promotion" />
                    </div>
                    <div class="smo-service-text">
                        <span>4</span>
                        <h3>Pinterest SMO</h3>
                        <p>For you, Pinterest may be a photo-sharing platform, but in reality, it is something more than this. Do you ever think to market your business through Pinterest? Pinterest is the most powerful platform where you can create valuable content. As per the recent report and case studies, a business has tripled its revenue within a year through Pinterest. This is the tool where you can make some amazing changes in your business. Now attract a huge chunk of traffics from this platform by making partnerships with the SEO and social media marketing companies.</p>
                    </div>
                </article>

                <article class="smo-service-row">
                    <div class="smo-service-media dark">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/smo/6195e891-9317-414c-8269-48853f210ab1.webp' ?>"
                            alt="LinkedIn social media platform" />
                    </div>
                    <div class="smo-service-text">
                        <span>5</span>
                        <h3>Linkedin SMO</h3>
                        <p>LinkedIn is another social media platform where you can meet with a lot of professionals. If you want to expand the opportunity for your business, then you have proper ideas on these platforms. The B2B business can get better exposure in this platform as compared to the B2C. You can meet digitally with the local and global CEO of established businesses. Here you can generate clients through paid marketing tools. LinkedIn is also helpful for the hiring process. Here at TachoMind, through SMO digital marketing, you can collect a huge number of candidates from the job hunters. If you want to reach the business goals, then implement these strategies!</p>
                    </div>
                </article>

                <article class="smo-service-row reverse">
                    <div class="smo-service-media">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/smo/6028c0d2-23a2-46e5-9445-f84d9283562e.webp' ?>"
                            alt="YouTube social media video production" />
                    </div>
                    <div class="smo-service-text">
                        <span>6</span>
                        <h3>Youtube SMO</h3>
                        <p>Youtube is another most popular video-sharing platform that holds more than 4 billion users. This is the popular marketing platform for generating traffic to your site. Here you can showcase your services in an attractive way. From us, you can develop the best kind of videos and also increase the likes and subscribers. Whether you have a business or an individual account, we are here to provide you with the service you are expecting from us. If you want to get better visibility to your business, then talk with the SMO services company right now!</p>
                    </div>
                </article>
            </div>
        </section>
        
        

        <section class="smo-faq">
            <div class="smo-section-head">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="smo-faq-list">
                <details open>
                    <summary>Do you know the power of good quality content and posts on social media?</summary>
                    <p>If you give better exposure to your business, then come to TachoMind, an SMO agency. We have the best SMO experts who will help your business to grow.</p>
                </details>
                <details>
                    <summary>Can I use SMO for my e-commerce store?</summary>
                    <p>Yes, you can implement the SMO on your e-commerce business too. Through this, you can drive your business and make proper changes.</p>
                </details>
                <details>
                    <summary>How many leads can I get in a month?</summary>
                    <p>Well, it totally depends upon the budget and business. We will help you to give the best possible services that can increase your engagement rate.</p>
                </details>
                <details>
                    <summary>Is there any difference between SMO and SMM?</summary>
                    <p>Yes, there is a little bit of difference between them. SMM, referred to as social media marketing, is a paid marketing process while SMO is completely free.</p>
                </details>
            </div>
        </section>

        <section class="smo-contact-strip">
            <!--<a href="tel:+15183036708">USA: +1-518-303-6708</a>-->
            <a href="tel:+918917643345">+91-8917643345</a>
            <a href="mailto:hi@tachomind.com">hi@tachomind.com</a>
            <span>Ready to speak with a marketing expert?</span>
        </section>

        <section class="smo-cta">
            <div class="smo-hero-dot-grid"></div>
            <div class="smo-cta-inner">
                <h2>You have a vision. <span>We have a team to get you there.</span></h2>
                <p>Ready to speak with a marketing expert? Give us a ring.</p>
                <div class="smo-cta-actions">
                    <a href="<?php echo home_url('/contact'); ?>" class="smo-btn-primary">Contact Us</a>
                    <a href="tel:+918917643345" class="smo-btn-dark">+91-8917643345</a>
                </div>
            </div>
        </section>
    </main>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".smo-faq-list details");

    faqItems.forEach(function (item) {
        item.addEventListener("toggle", function () {
            if (item.open) {
                faqItems.forEach(function (otherItem) {
                    if (otherItem !== item) {
                        otherItem.removeAttribute("open");
                    }
                });
            }
        });
    });
});
</script>
    <?php
}
get_footer();
?>