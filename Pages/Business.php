<?php
/**
 * Business Page - City of Imus
 * 
 * This page displays business-related information for the City of Imus
 * including investment opportunities, accommodation rates, services, and utilities.
 */

// Set page title for header
$pageTitle = 'Business Opportunities';

// Include configuration and data
require_once __DIR__ . '/../config/data.php';

// Include form handler
require_once __DIR__ . '/../handlers/business-inquiry.php';

// Include header and navbar
require_once __DIR__ . '/../includes/header.navbar.php';
?>
    <!-- Main Content -->
    <!-- Youtube Video Section -->
    <div class="d-flex justify-content-center my-4">
        <div style="position: relative; width: 100%; max-width: 940px; aspect-ratio: 16/9; overflow: hidden; border-radius: 12px; box-shadow: 0 4px 24px rgba(0,72,154,0.10); background: #000;">
            <iframe 
                src="https://www.youtube.com/embed/ROTO4QJJyso?autoplay=1&loop=1&playlist=ROTO4QJJyso&rel=0"
                title="City of Imus - Top Tax Payers 2024"
                frameborder="0"
                allow="autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
                style="width:100%; height:100%; border-radius:12px;">
            </iframe>
        </div>
    </div>

     <!-- End of Video Section-->

    <section class="Why-invest-in-Imus section" id="Why-invest-in-Imus">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-sm border-3 mb-3" style="background: #f8fafc;">
                        <div class="card-body">
                            <h2 class="text-center mb-4 section-title"><strong>Why Invest in Imus</strong></h2>
                            <p class="text-justify" style="text-align: justify; font-size: 1.08rem;">
                                <br>
                                The City of Imus is recognized as one of the country's most Economically Dynamic Component Cities.<br><br>
                                Geographically located in the Northeastern part of Cavite, Imus is 
                                politically subdivided into 97 barangays. Being a highly urbanized city, Imus takes effective and aggressive 
                                strides for technological progressions, earning the distinction as one of the most Competitive Cities at the 
                                national level.<br><br>
                                The investment climate in the City has attracted multiple investors, both foreign and local. These investments create 
                                new jobs, provide high revenue taxes, serve as vehicles for new technologies, and boost earnings from exports.<br><br>
                                Big corporations such as Liwayway Corporation, San Miguel-Yamamura Asia Corporation, and EDS Manufacturing   
                                Incorporated-Yazaki have continuously operated in the City. Likewise, several shopping malls 
                                have emerged such as Robinsons Place Imus, The District, S&amp;R Membership Shopping, CityMall, Shopwise, Lotus Mall, 
                                Puregold, and SM Center Imus.<br><br>
                                Committed to supporting its economic enterprises, Imus continues to provide businesses, particularly micro, small, and medium 
                                enterprises (MSMEs), with apt learning resources to sustain operations in the new normal with the conduct of talks, trainings, and workshops
                                such as the Imus Seminars of Emerging Entrepreneurs (iSEE), Imus City Business Summit, Business Cliniquing, Business Expo, 
                                and E-Talakayan.<br><br>
                                The City Government has also established several platforms for businesses, such as the following:<br>
                                <ol style="margin-left: 1.2em;">
                                    <li>Business One-Stop Shop (BOSS), which offers ease and convenience for the application and renewal 
                                        of business permits;</li>
                                    <li>Go Negosyo Center, which provides a direct link between entrepreneurs and the Department of Trade and Industry (DTI) 
                                        for business consultations and registration;</li>
                                    <li>Implementing the "Ease of Doing Business Act" which helps simplify business procedures.</li>
                                </ol>
                                <br>
                                The influx of investors who have chosen Imus as their home, is a concrete testament that the 
                                City's business policies have successfully created and sustained a business-friendly environment, earning Imus City the 
                                distinction as one of the most Business Friendly Cities in the Philippines.
                            </p>
                            <p class="text-center mb-0" style="font-size: 1rem;">
                        <br>
                        Conversion rate 1US$ = Php 58.46*<br>
                        *Based on quotations published by the respective agencies.<br>
                        These may vary and change without prior notice.
                    </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Business Inquiry Form Section -->
    <section class="Business-Inquiry section" id="Business-Inquiry">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm border-2 mb-4">
                        <div class="card-body">
                            <h2 class="text-center mb-4 section-title">Interested in Investing?</h2>
                            <p class="text-center mb-4">Submit your business inquiry and our team will contact you soon.</p>
                            
                            <?php if ($inquiry_result): ?>
                                <?php if ($inquiry_result['success']): ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Success!</strong> <?php echo htmlspecialchars($inquiry_result['message']); ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php else: ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error!</strong> <?php echo htmlspecialchars($inquiry_result['message']); ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <?php if (isset($inquiry_result['errors']['name'])): ?>
                                        <div class="text-danger small mt-1"><?php echo htmlspecialchars($inquiry_result['errors']['name']); ?></div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <?php if (isset($inquiry_result['errors']['email'])): ?>
                                        <div class="text-danger small mt-1"><?php echo htmlspecialchars($inquiry_result['errors']['email']); ?></div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                    <?php if (isset($inquiry_result['errors']['phone'])): ?>
                                        <div class="text-danger small mt-1"><?php echo htmlspecialchars($inquiry_result['errors']['phone']); ?></div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="organization" class="form-label">Organization / Company <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="organization" name="organization" required>
                                    <?php if (isset($inquiry_result['errors']['organization'])): ?>
                                        <div class="text-danger small mt-1"><?php echo htmlspecialchars($inquiry_result['errors']['organization']); ?></div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="business_type" class="form-label">Type of Business <span class="text-danger">*</span></label>
                                    <select class="form-select" id="business_type" name="business_type" required>
                                        <option value="">-- Select Business Type --</option>
                                        <option value="Manufacturing">Manufacturing</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Services">Services</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <?php if (isset($inquiry_result['errors']['business_type'])): ?>
                                        <div class="text-danger small mt-1"><?php echo htmlspecialchars($inquiry_result['errors']['business_type']); ?></div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                    <?php if (isset($inquiry_result['errors']['message'])): ?>
                                        <div class="text-danger small mt-1"><?php echo htmlspecialchars($inquiry_result['errors']['message']); ?></div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg">Send Inquiry</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Business Inquiry Form Section -->

    <section class="Accomodation section" id="Accomodation">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm border-2 mb-4">
                        <div class="card-body">
                            <h3 class="text-center mb-3 text-imusBlue">Room Rates</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle mb-4">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Room Per Night</th>
                                            <th>Rates (PHP)</th>
                                            <th>Rates (USD)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($accommodation_rates['rooms'] as $room): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($room['type']); ?></td>
                                            <td><?php echo number_format($room['rate_php_min'], 2) . ' - ' . number_format($room['rate_php_max'], 2); ?></td>
                                            <td><?php echo number_format($room['rate_usd_min'], 2) . ' - ' . number_format($room['rate_usd_max'], 2); ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <h3 class="text-center mb-3 text-imusBlue">Office and Commercial Space Rental</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Type<br>(Per sq. meter/month)</th>
                                            <th>Rates (PHP)</th>
                                            <th>Rates (USD)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($accommodation_rates['commercial_space'] as $space): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($space['type']); ?></td>
                                            <td><?php echo number_format($space['rate_php_min'], 2) . ' - ' . number_format($space['rate_php_max'], 2); ?></td>
                                            <td><?php echo number_format($space['rate_usd_min'], 2) . ' - ' . number_format($space['rate_usd_max'], 2); ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Communication section" id="Communication">
        <div class="d-flex justify-content-center">
            <div class="table-responsive" style="max-width: 420px;">
                <table class="table table-bordered align-middle mb-4 mx-auto" style="width:100%;">
                    <thead class="table-primary">
                        <tr>
                            <th class="text-center" colspan="2" style="font-size:1.15rem;">Monthly Service Fees</th>
                        </tr>
                        <tr>
                            <th>Service Type</th>
                            <th>Rate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($communication_fees as $fee): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($fee['service']); ?></td>
                            <td><?php echo htmlspecialchars($fee['rate']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="Courier-and-Cargo section" id="Courier-and-Cargo">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm border-2 mb-4">
                        <div class="card-body">
                            <h3 class="text-center mb-3 text-imusBlue">Courier and Cargo Rates</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle mb-0">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Courier/Cargo Service</th>
                                            <th>Minimum Rate (PHP)</th>
                                            <th>Minimum Rate (USD)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($courier_services as $service => $rates): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($service); ?></td>
                                            <td><?php echo $rates['minimum_rate_php'] > 0 ? $rates['minimum_rate_php'] : '-'; ?></td>
                                            <td><?php echo $rates['minimum_rate_usd'] > 0 ? $rates['minimum_rate_usd'] : '-'; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <p class="text-end mt-2 mb-0" style="font-size:0.95rem;color:#888;">
                                *Rates are subject to change. Please confirm with the service provider.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="National-Taxes section" id="National-Taxes">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-sm border-2 mb-4" style="background: #f8fafc;">
                        <div class="card-body">
                            <h2 class="text-center mb-4 section-title">National Taxes</h2>
                            <div class="accordion" id="taxAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingVAT">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVAT" aria-expanded="true" aria-controls="collapseVAT">
                                            Value Added Tax (VAT)
                                        </button>
                                    </h2>
                                    <div id="collapseVAT" class="accordion-collapse collapse show" aria-labelledby="headingVAT" data-bs-parent="#taxAccordion">
                                        <div class="accordion-body">
                                            Value added tax is a tax imposed and collected on every sale, barter, exchange, or transaction deemed sale of taxable goods, properties, lease of goods or properties, or services in the course of trade or business as they pass along the production and distribution chain. The tax is limited only to the value added to such goods, properties or services by the seller or transferor.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPercentage">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePercentage" aria-expanded="false" aria-controls="collapsePercentage">
                                            Percentage Tax
                                        </button>
                                    </h2>
                                    <div id="collapsePercentage" class="accordion-collapse collapse" aria-labelledby="headingPercentage" data-bs-parent="#taxAccordion">
                                        <div class="accordion-body">
                                            Any person engaged in business whose sales or receipts are exempt from payment of the value added tax and who is not a VAT-registered person must file a percentage tax return and pay the appropriate percentage tax. Percentage tax is a business tax measured by a given ratio between the gross sales or receipts and the burden imposed upon the taxpayer.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingExcise">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExcise" aria-expanded="false" aria-controls="collapseExcise">
                                            Excise Tax
                                        </button>
                                    </h2>
                                    <div id="collapseExcise" class="accordion-collapse collapse" aria-labelledby="headingExcise" data-bs-parent="#taxAccordion">
                                        <div class="accordion-body">
                                            The excise tax applies to certain specified goods or articles manufactured or produced in the Philippines for domestic sale, consumption, or any other disposition and to things imported into the Philippines.<br>
                                            <ul>
                                                <li><strong>Specific tax</strong> – imposed on certain goods based on weight or volume capacity or any other physical unit of measurement. Applies to alcohol and alcohol products, tobacco and tobacco products, and petroleum products.</li>
                                                <li><strong>Ad valorem tax</strong> – imposed on certain goods based on selling price or other specified value of the goods. Applies to mineral products, automobiles and non-essential goods.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingIncome">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIncome" aria-expanded="false" aria-controls="collapseIncome">
                                            Income Tax
                                        </button>
                                    </h2>
                                    <div id="collapseIncome" class="accordion-collapse collapse" aria-labelledby="headingIncome" data-bs-parent="#taxAccordion">
                                        <div class="accordion-body">
                                            Income tax is a tax on all yearly profits arising from property, profession, trades or offices or as a tax on a person’s income, emoluments, profits and the like.<br>
                                            <strong>A. Individuals</strong>
                                            <ul>
                                                <li>Resident citizen receiving income from sources within or outside the Philippines</li>
                                                <li>Non-resident citizen receiving income from sources within the Philippines</li>
                                                <li>Aliens whether resident or not receiving income from sources within the Philippines</li>
                                            </ul>
                                            <strong>B. Corporations</strong> (including general partnership):<br>
                                            Domestic corporations receiving income from sources within and outside the Philippines and foreign corporation receiving income from sources within the Philippines.<br>
                                            <strong>C. Estates and Trusts</strong> engaged in trade or business.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingWithholding">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWithholding" aria-expanded="false" aria-controls="collapseWithholding">
                                            Withholding Tax
                                        </button>
                                    </h2>
                                    <div id="collapseWithholding" class="accordion-collapse collapse" aria-labelledby="headingWithholding" data-bs-parent="#taxAccordion">
                                        <div class="accordion-body">
                                            Classification of withholding taxes:
                                            <ul>
                                                <li>Expanded withholding tax</li>
                                                <li>Final withholding tax</li>
                                                <li>Withholding of income tax on compensation</li>
                                                <li>Withholding of creditable VAT and other percentage taxes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingCapitalGains">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCapitalGains" aria-expanded="false" aria-controls="collapseCapitalGains">
                                            Capital Gains Tax
                                        </button>
                                    </h2>
                                    <div id="collapseCapitalGains" class="accordion-collapse collapse" aria-labelledby="headingCapitalGains" data-bs-parent="#taxAccordion">
                                        <div class="accordion-body">
                                            Capital gains is a tax imposed on the gains presumed to have been realized by the seller from the sale, exchange, or other disposition of real property located in the Philippines, classified as capital assets, including pacto de retro sales and other forms of conditional sale.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingDST">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDST" aria-expanded="false" aria-controls="collapseDST">
                                            Documentary Stamp Tax
                                        </button>
                                    </h2>
                                    <div id="collapseDST" class="accordion-collapse collapse" aria-labelledby="headingDST" data-bs-parent="#taxAccordion">
                                        <div class="accordion-body">
                                            Documentary stamp tax is a tax on documents, instruments, loan agreements and papers evidencing the acceptance, assignment, sale or transfer of an obligation, rights, or property incident thereto. There are different documents that are subject to different rates of Documentary Stamp Tax.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <a href="http://www.bir.gov.ph/" target="_blank" class="btn btn-primary rounded-pill px-4">
                                    More information on National Taxes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Transportation section" id="Transportation">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm border-2 mb-4">
                        <div class="card-body">
                            <h3 class="text-center mb-3" style="color:#00489a;">Transportation Rates</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle mb-0">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Transportation</th>
                                            <th>Rate (PHP)</th>
                                            <th>Rate (USD)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach ($transportation_rates as $category => $routes): 
                                        ?>
                                        <tr class="table-group">
                                            <td colspan="3" class="fw-bold text-primary bg-light"><?php echo htmlspecialchars($category); ?></td>
                                        </tr>
                                        <?php 
                                        foreach ($routes as $route): 
                                        ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($route['route']); ?></td>
                                            <td><?php echo $route['rate_php']; ?></td>
                                            <td><?php echo $route['rate_usd']; ?></td>
                                        </tr>
                                        <?php 
                                        endforeach; 
                                        endforeach; 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <p class="text-end mt-2 mb-0" style="font-size:0.95rem;color:#888;">
                                *Rates are subject to change. Please confirm with the transport provider.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Utilities section" id="Utilities">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm border-2 mb-4">
                        <div class="card-body">
                            <h2 class="text-center mb-4 section-title">POWER (MERALCO)</h2>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Residential
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="mb-3 text-center">
                                                For Residential and MicroBiz customers with 0 to 4 kW contracted capacity and Local Government Units
                                            </p>
                                            <h5 class="text-center mb-3"><strong>How to apply for Ordinary Service Application for Residential Customers</strong></h5>
                                            <ol class="mb-3" style="max-width:600px;margin:0 auto;">
                                                <li>Complete the application form. You may download the form here or visit any Meralco Business Center.</li>
                                                <li>Submit the completed form, together with the following requirements, to the Meralco Business Center nearest the home being applied for:
                                                    <ul>
                                                        <li>Original and Photocopy of one valid ID with picture and signature</li>
                                                        <li>Original and Photocopy of Proof of Ownership or Occupancy (e.g. Transfer Certificate of Title, Notarized Deed of Sale or Lease Contract, etc.)</li>
                                                        <li>Signed copy of Waiver (You may get the waiver from the Business Center or sign it upon submission of the documents)</li>
                                                    </ul>
                                                    <span>If you are a tenant, you will also be required to submit the original copy of a notarized Undertaking form. This form is also available at the Meralco Business Center.</span>
                                                </li>
                                                <li>You will be given a Service Application Number. This will serve as your reference number when you would like to follow-up on the status of your application.</li>
                                                <li>A field representative will conduct a feasibility survey of your home. Please make sure that an authorized representative is present.</li>
                                                <li>Once approved, you will be advised to prepare and pay for your Bill Deposit. The bill deposit is equivalent to an estimated one month bill.</li>
                                                <li>Visit the Business Center to pay for your bill deposit, sign the service contract and get your meter socket.</li>
                                                <li>Install the service entrance. This may be done by your private contractor or by the Accredited Meralco Contractor. For more information about the Accredited Meralco Contractor, please visit <a href="http://www.amc.org.ph" target="_blank">www.amc.org.ph</a>. The Service Entrance must comply with Meralco standards. The business center will provide you with an installation guide, together with the meter socket.</li>
                                                <li>Once installed, please email your Service Application Number to your assigned business center. A field representative will visit to ensure that the service entrance meets the standard requirements of Meralco. You will be given an advice card (yellow card). This will reflect whether your service entrance is approved for energization or will need some necessary corrections. If reworks are needed, please make sure that the recommendations written in the advice card are followed. Once completed, kindly inform the Business Center for inspection.</li>
                                                <li>Once service entrance is approved, you will need to submit the Certificate of Final Electrical Inspection. You may get this from your respective local government unit. The advice card may be required in securing the certificate. You may also get the services of the Accredited Meralco Contractor. For more information, you may visit <a href="http://www.amc.org.ph" target="_blank">www.amc.org.ph</a>.</li>
                                                <li>A Meralco crew will visit you within 3 working days to energize your home.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Non-residential
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="text-center mb-3">
                                                <strong>Biz</strong> – For non-residential customers with 5 to 499 kW contracted capacity<br>
                                                <strong>Corporate</strong> – For private customers with 500 kW and up contract capacity and National Government
                                            </p>
                                            <h5 class="text-center mb-3">What are the classifications of Meralco new service applications?</h5>
                                            <ul style="max-width:600px;margin:0 auto;">
                                                <li>General Service – this type of connection covers non-residential entities that have a contracted capacity below 40kW.</li>
                                                <li>General Power – this type of connection covers non-residential entities that have a contracted capacity of at least 40kW.</li>
                                            </ul>
                                            <h5 class="text-center mt-4 mb-3">Where can I apply for an electric connection?</h5>
                                            <ul style="max-width:600px;margin:0 auto;">
                                                <li>For customers with contracted capacity of less than 500kW – Please contact a Meralco engineer at the Meralco Business Center that covers your area. To find out the location of the Meralco Business Center nearest you, please call 16211.</li>
                                                <li>For customers with contracted capacity of at least 500kW – Please contact the Technical Support Group for Corporate Partners assigned to your area at the Meralco sector offices. To find out which Meralco sector office covers your area, please contact 1622-2378.</li>
                                                <li>For conglomerate accounts with contracted capacity of less than 500kW – Please contact the Technical Support Group for Corporate Partners assigned to your area at the Meralco sector offices. To find out which Meralco sector office covers your area and for the complete list of conglomerate accounts, please contact 1622-2378.</li>
                                            </ul>
                                            <h5 class="text-center mt-4 mb-3">What is the application process for service connection?</h5>
                                            <ol style="max-width:600px;margin:0 auto;">
                                                <li>Submit the following documentation:
                                                    <ul>
                                                        <li>Letter of request for electric connection on company letterhead indicating if this is a new service, temporary service application or change in contracted capacity. The letter should also contain the following information:
                                                            <ul>
                                                                <li>Surname, first name, middle name</li>
                                                                <li>Registered business name</li>
                                                                <li>Mobile phone number</li>
                                                                <li>Landline phone number</li>
                                                                <li>Service address (location where electric service is required)</li>
                                                                <li>Email address</li>
                                                                <li>Office address</li>
                                                                <li>Target date of energization</li>
                                                            </ul>
                                                        </li>
                                                        <li>Authorization letter from the owner and the representative’s valid ID (if application is being coursed through an authorized representative such as a contractor or licensed electrician or electrical engineer).</li>
                                                        <li>Electrical Permit & Certificate of Final Electrical Inspection (CFEI) from the City or Municipal Engineer’s Office.</li>
                                                        <li>Electrical Plans which contain the following: [must be signed & sealed by a Professional Electrical Engineer (PEE)]</li>
                                                        <li>Photocopy of the following:
                                                            <ul>
                                                                <li>SEC registration (for corporate entity)</li>
                                                                <li>BIR Certificate of Registration and Tax Identification Number (TIN)</li>
                                                                <li>Any of the following valid identification card with picture – Driver’s License, GSIS ID, SSS ID, passport, PRC License, Pag-ibig ID, Philhealth ID, Firearm’s License, original NBI Clearance</li>
                                                                <li>Business/DTI Permit or business name (for sole proprietorship)</li>
                                                                <li>Contract of Lease (if rented)</li>
                                                                <li>Condominium Certificate of Title or Contract to Sell (for condominium owners)</li>
                                                                <li>Transfer Certificate Title (TCT) or Deed of Absolute Sale</li>
                                                                <li>Secretary’s Certificate authorizing the signatory to sign contracts regarding Meralco’s transactions</li>
                                                            </ul>
                                                        </li>
                                                        <li>For an applied load of 500kW or more, kindly submit the additional documents:
                                                            <ul>
                                                                <li>Complete single-line diagram reflecting winding configurations and relays</li>
                                                                <li>Transformer vault or metering vault location plan</li>
                                                                <li>Elevation plan of transformer or metering vault</li>
                                                                <li>Layout showing rooms surrounding the transformer vault or metering vault room (below/beside/above)</li>
                                                                <li>Proposed primary and secondary conduit runs</li>
                                                                <li>Drainage system layout</li>
                                                                <li>Layout containing location of main circuit breaker [High-voltage switchgear (HVSG) or Low-voltage switchgear (LVSG)]</li>
                                                                <li>Metering location</li>
                                                                <li>Hoisting facilities and its specifications</li>
                                                                <li>Site development plan (relationship of the building to the transformer vault or metering vault within other establishments)</li>
                                                                <li>Topography diagram (for rolling terrain)</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>Upon submission of the necessary documents, Meralco will determine the optimum location for the service entrance and will compute for the applicable contracted capacity based on the requirements specified in the submitted electrical plans. The technical requirements on the service entrance may vary depending on the customer’s location or structural design of its facility. To avoid unnecessary cost, customers should refrain from constructing the service entrance until Meralco advises the optimum location. The contracted capacity will also determine the estimated service deposit required for new service applications.</li>
                                                <li>For new service applications in an area with an existing Meralco facility – Meralco will send to the customer a new service contract indicating the amount of service deposit for the customer’s acceptance. For new service applications in an area without a close-by Meralco facility – Meralco will design a power facility to suit the customer’s power requirements and compute the relevant project cost to install this facility including the service deposit. Meralco will send to the customer a new service contract with the total project cost for customer’s acceptance.</li>
                                                <li>When all the mentioned requirements have been satisfied, the customer should submit the duly signed agreement and the Certificate of Final Electrical Inspection (CFEI) and pay the corresponding fees. In certain situations wherein the customer has a temporary service connection, there will be an installation and removal cost for the temporary electric facility structure.</li>
                                                <li>Meralco installs meter and/or additional facilities and energizes your electric service.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Streetlights
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="text-center mb-3">
                                                There are two types of streetlight service application – flat rate and metered streetlight service:
                                            </p>
                                            <ul style="max-width:600px;margin:0 auto;">
                                                <li>Flat Rate streetlight service is for customers who want Meralco to provide the streetlight for an existing Meralco pole. This service is for local government units, barangays, homeowners associations, commercial center associations, industrial estates, and real estate developers.</li>
                                                <li>Metered Streetlight services are for customers who want to install their streetlight.</li>
                                            </ul>
                                            <h5 class="text-center mt-4 mb-3">Requirements</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <strong>Flat Rate Streetlight</strong>
                                                    <ul>
                                                        <li>Application form</li>
                                                        <li>Service Deposit</li>
                                                        <li>Certificate of Availability of Funds (optional for LGUs only)</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <strong>Metered Streetlight</strong>
                                                    <ul>
                                                        <li>Application form</li>
                                                        <li>Service Deposit</li>
                                                        <li>Installation of Meter Base</li>
                                                        <li>Certificate of Final Electrical Inspection</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-center mt-5 mb-4 section-title">WATER (MAYNILAD SERVICES)</h2>
                            <h4 class="text-center mb-3" style="color: black;">Application for New and Additional Water Service Connections</h4>
                            <ul style="max-width:600px;margin:0 auto;">
                                <li>The assigned Business Area will check if the customer meets the following conditions:
                                    <ul>
                                        <li>No outstanding balance</li>
                                        <li>No pending illegal case</li>
                                        <li>Must be the owner of the property where the water service connection was authorized</li>
                                        <li>Letter of Authorization or a General Power of Attorney from the owner of the property, together with a valid ID, if the owner is not available to sign the application</li>
                                    </ul>
                                    <span class="text-danger small">*Failure to meet the conditions above will result to cancellation of the application.</span>
                                </li>
                                <li>Applicant fills out the application form available in any of the Maynilad Business Areas.</li>
                                <li>Once accomplished, applicant submits the application form to Maynilad along with the following requirements:
                                    <ul>
                                        <li>Copy of Transfer Certificate of Title (TCT) or Deed of Sale in the name of the owner of the property (original and photocopy)</li>
                                        <li>Two (2) clear copies of a valid government-issued I.D. (original and photocopies)</li>
                                        <li>Proof of Billing</li>
                                        <li>Barangay Certificate/Clearance (stating “for Maynilad Installation purposes”)</li>
                                    </ul>
                                    <span>Additional requirements will be required to those water service connections owned by a Company or a Corporation.</span>
                                    <ul>
                                        <li>Certificate of incorporation from the Securities and Exchange Commission</li>
                                        <li>Articles of incorporation</li>
                                        <li>Secretary’s Certificate authorizing a company representative to deal with Maynilad and to sign relevant documents.</li>
                                    </ul>
                                    <span>The following may also be required under certain conditions:</span>
                                    <ul>
                                        <li>Sanitary and plumbing design or permit; if the property pertains to a building under construction, with a service pipe of at least 50mm.</li>
                                        <li>Proof of grant of right-of-way from the lot owner; if the water service connection will pass through another private property.</li>
                                    </ul>
                                    <span>Note: If the property is within the sewered area network of Maynilad, the customer must also apply for a sewer service connection.</span>
                                </li>
                                <li>The Maynilad Business Area issues a reference number to the applicant to track the status of the request.</li>
                                <li>The Maynilad Business Area reviews and validates the request and the submitted requirements. If an applicant fails to provide the requirements, application will not be processed. However, for incomplete requirements, the Zone Specialist shall be the one to contact the applicant for follow-up.</li>
                                <li>Within two working days upon application, a Zone Specialist will visit the customer’s premises for inspection to validate the data provided by the applicant.</li>
                                <li>
                                    <span>Note: Any misrepresentation or inaccurate data given during the interview of the applicant may, depending on the nature of the misrepresentation, or the degree of inaccuracy, constitute sufficient ground for the denial of the application.</span>
                                </li>
                                <li>Maynilad Business Area shall create the customer’s account and once approved, Maynilad shall inform the customer.</li>
                                <li>The Maynilad shall issue the Request to Accept Payment (RAP) form and advises the applicant to present it in any accredited payment center. For check payments, no post-dated and out of town checks shall be accepted.</li>
                                <li>The applicant may submit payment receipt to the designated Business Area once paid. The payment will also be verified by the Zone Specialists. The water service connection will be installed within seven working days upon payment.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #accordionExample .accordion-body ol, 
            #accordionExample .accordion-body ul {
                margin-bottom: 0.5em;
            }
            #accordionExample .accordion-body ol,
            #accordionExample .accordion-body ul,
            .card-body ul {
                padding-left: 1.2em;
            }
            .card-body ul {
                margin-bottom: 1em;
            }
        </style>
    </section>
    <!-- Content -->
<?php
// Include footer
require_once __DIR__ . '/../includes/footer.php';
?>
