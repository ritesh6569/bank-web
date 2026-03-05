<?php
/**
 * Home Page - Professional Bank Website
 */

$page_title = 'Home - Professional Bank';
$current_page = 'home';

// Include header
include $_SERVER['DOCUMENT_ROOT'] . '/bank-website-grok/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/bank-website-grok/includes/data-fetcher.php';
include $_SERVER['DOCUMENT_ROOT'] . '/bank-website-grok/includes/notices-fetcher.php';

// Get data
$offers = $data_fetcher->getOffers();
$news = $data_fetcher->getNews();
$branches = $data_fetcher->getBranches();
$notices = getActiveNotices();
?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container-lg">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">Your Trusted Banking Partner</h1>
                    <p class="hero-subtitle">Experience modern banking with secure, innovative financial solutions designed for your success.</p>
                    <div class="hero-buttons">
                        <a href="/bank-website-grok/pages/deposits.php" class="btn btn-light me-3 mb-2">
                            <i class="fas fa-wallet me-2"></i>Open Account
                        </a>
                        <a href="/bank-website-grok/pages/loans.php" class="btn btn-outline-light mb-2">
                            <i class="fas fa-handshake me-2"></i>Apply for Loan
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="hero-image" style="text-align: center;">
                        <i class="fas fa-university" style="font-size: 15rem; color: rgba(255,255,255,0.2);"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offers/Highlights Section -->
    <section class="section bg-light">
        <div class="container-lg">
            <div class="section-title">
                <h2>Special Offers & Highlights</h2>
                <p class="section-subtitle">Check out our latest promotions and exclusive benefits</p>
            </div>
            
            <div class="row g-4">
                <?php foreach ($offers as $offer): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card feature-card">
                            <div>
                                <i class="<?php echo htmlspecialchars($offer['icon']); ?>"></i>
                                <h5 class="card-title mt-3"><?php echo htmlspecialchars($offer['title']); ?></h5>
                                <p class="text-muted"><?php echo htmlspecialchars($offer['description']); ?></p>
                                <a href="/bank-website-grok/pages/deposits.php" class="btn btn-sm btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="section">
        <div class="container-lg">
            <div class="section-title">
                <h2>Quick Links to Key Services</h2>
                <p class="section-subtitle">Navigate directly to the services you need</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <a href="/bank-website-grok/pages/deposits.php#savings" class="card text-decoration-none h-100" style="border-left: 4px solid var(--secondary-color);">
                        <div class="card-body text-center">
                            <i class="fas fa-piggy-bank" style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;"></i>
                            <h5 class="card-title">Deposits</h5>
                            <p class="text-muted small">Savings, Current, FD & RD</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <a href="/bank-website-grok/pages/loans.php#personal" class="card text-decoration-none h-100" style="border-left: 4px solid var(--success-color);">
                        <div class="card-body text-center">
                            <i class="fas fa-hand-holding-usd" style="font-size: 2.5rem; color: var(--success-color); margin-bottom: 1rem;"></i>
                            <h5 class="card-title">Loans</h5>
                            <p class="text-muted small">Personal, Home, Vehicle & Business</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <a href="/bank-website-grok/pages/services.php#internet" class="card text-decoration-none h-100" style="border-left: 4px solid var(--warning-color);">
                        <div class="card-body text-center">
                            <i class="fas fa-globe" style="font-size: 2.5rem; color: var(--warning-color); margin-bottom: 1rem;"></i>
                            <h5 class="card-title">Services</h5>
                            <p class="text-muted small">Internet, Mobile & SMS Banking</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <a href="/bank-website-grok/pages/contact.php" class="card text-decoration-none h-100" style="border-left: 4px solid var(--danger-color);">
                        <div class="card-body text-center">
                            <i class="fas fa-phone" style="font-size: 2.5rem; color: var(--danger-color); margin-bottom: 1rem;"></i>
                            <h5 class="card-title">Support</h5>
                            <p class="text-muted small">Contact our branches</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Overview Section -->
    <section class="section bg-light">
        <div class="container-lg">
            <div class="section-title">
                <h2>Our Products</h2>
                <p class="section-subtitle">Explore our comprehensive range of banking products</p>
            </div>
            
            <div class="row g-4">
                <!-- Deposits Overview -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="fas fa-book me-2"></i>Deposit Products</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Our deposit products are designed to help you save money with competitive interest rates and flexible terms.</p>
                            <ul class="list-unstyled">
                                <li class="py-2">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <strong>Savings Account</strong> - Up to 4.0% p.a.
                                </li>
                                <li class="py-2">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <strong>Fixed Deposit</strong> - Up to 6.5% p.a.
                                </li>
                                <li class="py-2">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <strong>Recurring Deposit</strong> - Up to 6.0% p.a.
                                </li>
                                <li class="py-2">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <strong>Current Account</strong> - Business focused
                                </li>
                            </ul>
                            <a href="/bank-website-grok/pages/deposits.php" class="btn btn-primary mt-3">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Loans Overview -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="fas fa-credit-card me-2"></i>Loan Products</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Get the financial support you need with our flexible loan options and competitive rates.</p>
                            <ul class="list-unstyled">
                                <li class="py-2">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <strong>Personal Loan</strong> - From 8.5% p.a.
                                </li>
                                <li class="py-2">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <strong>Home Loan</strong> - From 7.0% p.a.
                                </li>
                                <li class="py-2">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <strong>Vehicle Loan</strong> - From 7.5% p.a.
                                </li>
                                <li class="py-2">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <strong>Business Loan</strong> - From 9.0% p.a.
                                </li>
                            </ul>
                            <a href="/bank-website-grok/pages/loans.php" class="btn btn-primary mt-3">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Preview Section -->
    <section class="section">
        <div class="container-lg">
            <div class="section-title">
                <h2>Latest News & Updates</h2>
                <p class="section-subtitle">Stay informed with our latest announcements and bank news</p>
            </div>
            
            <div class="row g-4">
                <?php foreach (array_slice($news, 0, 3) as $item): ?>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <small class="text-muted">
                                    <i class="far fa-calendar me-1"></i>
                                    <?php echo date('M d, Y', strtotime($item['date'])); ?>
                                </small>
                                <h5 class="card-title mt-2"><?php echo htmlspecialchars($item['title']); ?></h5>
                                <p class="card-text text-muted"><?php echo htmlspecialchars($item['excerpt']); ?></p>
                                <a href="<?php echo htmlspecialchars($item['link']); ?>" class="btn btn-sm btn-outline-primary">
                                    Read More <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="text-center mt-4">
                <a href="/bank-website-grok/pages/media.php" class="btn btn-primary">
                    View All News <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    
    <!-- Important Notices Section -->
    <?php if (!empty($notices)): ?>
    <section class="section" style="background: var(--color-bg-secondary);">
        <div class="container-lg">
            <div class="section-title">
                <h2><i class="fas fa-bullhorn me-2" style="color: var(--color-accent);"></i>Important Notices</h2>
                <p class="section-subtitle">Critical updates and regulatory information for our valued customers</p>
            </div>
            
            <div class="row g-4">
                <?php foreach (array_slice($notices, 0, 3) as $notice): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100" style="position: relative; overflow: hidden;">
                            <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: linear-gradient(to bottom, var(--color-accent), var(--color-accent-dark));"></div>
                            <div class="card-body" style="padding-left: 1.5rem;">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title mb-0" style="flex: 1;">
                                        <?php echo htmlspecialchars($notice['title']); ?>
                                    </h5>
                                    <span class="badge badge-primary">
                                        <i class="fas fa-exclamation-circle me-1"></i>Notice
                                    </span>
                                </div>
                                <small style="color: var(--color-text-tertiary);">
                                    <i class="fas fa-calendar me-1" style="color: var(--color-accent);"></i>
                                    <?php echo formatNoticeDate($notice['date_published']); ?>
                                </small>
                                <p class="card-text mt-2">
                                    <?php echo htmlspecialchars(truncateNotice(stripHtmlTags($notice['content']), 150)); ?>
                                </p>
                                <a href="#noticeModal<?php echo $notice['id']; ?>" class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#noticeModal<?php echo $notice['id']; ?>">
                                    Read More <i class="fas fa-arrow-right ms-1" style="font-size: 0.75rem;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- View All Notices Link -->
            <?php if (count($notices) > 3): ?>
            <div class="text-center mt-4">
                <a href="#allNotices" class="btn btn-outline-primary" data-bs-toggle="collapse">
                    <i class="fas fa-list me-2"></i>View All Notices (<?php echo count($notices); ?>)
                </a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Notice Detail Modals -->
    <?php foreach ($notices as $notice): ?>
    <div class="modal fade" id="noticeModal<?php echo $notice['id']; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); color: white; border: none;">
                    <h5 class="modal-title">
                        <i class="fas fa-bell me-2"></i><?php echo htmlspecialchars($notice['title']); ?>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <small class="text-muted d-block mb-3">
                        <i class="fas fa-calendar-alt me-1"></i>Published on <?php echo formatNoticeDate($notice['date_published']); ?>
                    </small>
                    <div class="notice-content">
                        <?php echo $notice['content']; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>


    <!-- Downloads Section -->
    <?php 
    $downloads = $data_fetcher->getDownloads(6);
    if (!empty($downloads)): 
    ?>
    <section class="section" style="background: var(--color-bg-primary);">
        <div class="container-lg">
            <div class="section-title">
                <h2><i class="fas fa-file-download me-2" style="color: var(--color-accent);"></i>Downloads & Resources</h2>
                <p class="section-subtitle">Access important forms, documents, and regulatory information</p>
            </div>
            
            <div class="row g-4">
                <?php foreach ($downloads as $download): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100" style="position: relative; overflow: hidden;">
                            <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: linear-gradient(to bottom, var(--color-accent), var(--color-accent-dark));"></div>
                            <div class="card-body" style="padding-left: 1.5rem;">
                                <div style="display: inline-block; background: rgba(15, 118, 110, 0.1); color: var(--color-accent); padding: 10px 12px; border-radius: 6px; margin-bottom: 1rem; font-size: 1.25rem;">
                                    <i class="fas fa-file-pdf"></i>
                                </div>
                                <h5 class="card-title"><?php echo htmlspecialchars($download['title']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($download['description'] ?? 'Download this resource'); ?></p>
                                <?php if (!empty($download['category'])): ?>
                                    <span class="badge" style="background: rgba(15, 118, 110, 0.1); color: var(--color-accent); border: 1px solid rgba(15, 118, 110, 0.2);"><?php echo htmlspecialchars($download['category']); ?></span>
                                <?php endif; ?>
                                <a href="/bank-website-grok/admin/downloads.php?action=download&id=<?php echo $download['id']; ?>" class="btn btn-sm btn-primary w-100 mt-3">
                                    <i class="fas fa-download me-1"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Gallery Section -->
    <?php 
    $gallery = $data_fetcher->getGallery(6);
    if (!empty($gallery)): 
    ?>
    <section class="section" style="background: var(--color-bg-secondary);">
        <div class="container-lg">
            <div class="section-title">
                <h2><i class="fas fa-images me-2" style="color: var(--color-accent);"></i>Gallery</h2>
                <p class="section-subtitle">Highlights from our facilities, events, and operations</p>
            </div>
            
            <div class="row g-4">
                <?php foreach ($gallery as $image): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 overflow-hidden">
                            <div style="background: var(--color-bg-tertiary); height: 240px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                                <?php if (!empty($image['image_path']) && file_exists($_SERVER['DOCUMENT_ROOT'] . $image['image_path'])): ?>
                                    <img src="<?php echo htmlspecialchars($image['image_path']); ?>" alt="<?php echo htmlspecialchars($image['alt_text'] ?? $image['title']); ?>" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.02)';" onmouseout="this.style.transform='scale(1)';">
                                <?php else: ?>
                                    <i class="fas fa-image" style="font-size: 2.5rem; color: var(--color-border-dark);"></i>
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($image['title']); ?></h5>
                                <?php if (!empty($image['category'])): ?>
                                    <span class="badge" style="background: var(--color-bg-tertiary); color: var(--color-text-secondary);"><?php echo htmlspecialchars($image['category']); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Contact Summary Section -->
    <section class="section bg-light">
        <div class="container-lg">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p class="section-subtitle">Get in touch with our team for any assistance</p>
            </div>
            
            <div class="row g-4 mb-4">
                <!-- Contact Info -->
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-phone" style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;"></i>
                            <h5 class="card-title">Phone</h5>
                            <p class="text-muted">
                                <a href="tel:+1234567890" class="text-decoration-none">+1 (234) 567-890</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope" style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;"></i>
                            <h5 class="card-title">Email</h5>
                            <p class="text-muted">
                                <a href="mailto:support@bank.com" class="text-decoration-none">support@bank.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marker-alt" style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;"></i>
                            <h5 class="card-title">Address</h5>
                            <p class="text-muted">123 Banking Street, Financial City, FC 12345</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); color: white;">
        <div class="container-lg text-center">
            <h2 class="mb-3">Ready to Get Started?</h2>
            <p class="lead mb-4">Join thousands of satisfied customers who trust us with their financial needs.</p>
            <a href="/bank-website-grok/pages/deposits.php" class="btn btn-light btn-lg">
                Open an Account Today <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </section>

<?php
// Include footer
include $_SERVER['DOCUMENT_ROOT'] . '/bank-website-grok/includes/footer.php';
?>
