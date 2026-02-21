<?php
/**
 * Configuration and Data Arrays
 * Central location for all static data including pricing, rates, and information
 */

// Exchange Rate
$exchange_rate = [
    'usd_to_php' => 58.46,
    'last_updated' => '2026-02-22'
];

// Accommodation Rates
$accommodation_rates = [
    'rooms' => [
        [
            'type' => 'Standard Room (2 pax)',
            'rate_php_min' => 1500.00,
            'rate_php_max' => 2800.00,
            'rate_usd_min' => 25.66,
            'rate_usd_max' => 47.90
        ],
        [
            'type' => 'Family Room (4 pax)',
            'rate_php_min' => 3000.00,
            'rate_php_max' => 6000.00,
            'rate_usd_min' => 51.32,
            'rate_usd_max' => 102.63
        ]
    ],
    'commercial_space' => [
        [
            'type' => 'Commercial Zone',
            'rate_php_min' => 500.00,
            'rate_php_max' => 600.00,
            'rate_usd_min' => 8.55,
            'rate_usd_max' => 10.26,
            'unit' => 'Per sq. meter/month'
        ],
        [
            'type' => 'Outside Commercial Zone',
            'rate_php_min' => 400.00,
            'rate_php_max' => 500.00,
            'rate_usd_min' => 6.84,
            'rate_usd_max' => 8.55,
            'unit' => 'Per sq. meter/month'
        ]
    ]
];

// Communication Service Fees
$communication_fees = [
    [
        'service' => 'Monthly Fee',
        'rate' => '₱ 1,699.00'
    ],
    [
        'service' => 'Local Fees',
        'rate' => 'Free and Unlimited'
    ],
    [
        'service' => 'NDD Calls',
        'rate' => '₱ 3.00 per minute'
    ],
    [
        'service' => 'IDD Calls',
        'rate' => '$ 0.40 per minute'
    ],
    [
        'service' => 'Cellular Calls',
        'rate' => '₱ 6.50 per minute'
    ],
    [
        'service' => 'Local Calls',
        'rate' => '₱ 2.00 per minute'
    ],
    [
        'service' => 'Embassy Calls',
        'rate' => '₱ 36.08* per minute'
    ]
];

// Courier and Cargo Services
$courier_services = [
    'LBC Express' => [
        'minimum_rate_php' => 160,
        'minimum_rate_usd' => 2.74
    ],
    'Fasttrack' => [
        'minimum_rate_php' => 250,
        'minimum_rate_usd' => 4.28
    ],
    'Erim Express' => [
        'minimum_rate_php' => 80,
        'minimum_rate_usd' => 1.37
    ],
    'Xend Business Solutions' => [
        'minimum_rate_php' => 89,
        'minimum_rate_usd' => 1.52
    ],
    'J&T Express' => [
        'minimum_rate_php' => 80,
        'minimum_rate_usd' => 1.37
    ],
    'JRS Express' => [
        'minimum_rate_php' => 0,
        'minimum_rate_usd' => 0
    ],
    'Mail' => [
        'minimum_rate_php' => 107,
        'minimum_rate_usd' => 1.83
    ],
    'Cargo' => [
        'minimum_rate_php' => 165,
        'minimum_rate_usd' => 2.82
    ],
    'Box' => [
        'minimum_rate_php' => 350,
        'minimum_rate_usd' => 5.99
    ],
    'Pouch' => [
        'minimum_rate_php' => 220,
        'minimum_rate_usd' => 3.76
    ],
    '2GO Courier - Cash First (Php 5,000)' => [
        'minimum_rate_php' => 120,
        'minimum_rate_usd' => 2.05
    ],
    '2GO Courier - Box (3kg)' => [
        'minimum_rate_php' => 245,
        'minimum_rate_usd' => 4.19
    ],
    'ABest Express - Document' => [
        'minimum_rate_php' => 60,
        'minimum_rate_usd' => 1.03
    ],
    'ABest Express - Parcel' => [
        'minimum_rate_php' => 90,
        'minimum_rate_usd' => 1.54
    ],
    'ABest Express - Box' => [
        'minimum_rate_php' => 170,
        'minimum_rate_usd' => 2.91
    ],
    'Metrowide - Medium (Min)' => [
        'minimum_rate_php' => 145,
        'minimum_rate_usd' => 2.48
    ],
    'Metrowide - Large Pouch (Min)' => [
        'minimum_rate_php' => 190,
        'minimum_rate_usd' => 3.25
    ]
];

// Transportation Rates
$transportation_rates = [
    'UV EXPRESS' => [
        [
            'route' => 'Manila - Imus',
            'rate_php' => 70,
            'rate_usd' => 1.20
        ]
    ],
    'PROVINCIAL BUSES' => [
        [
            'route' => 'Manila - Imus (Air-Conditioned)',
            'rate_php' => 40,
            'rate_usd' => 0.68
        ],
        [
            'route' => 'Manila - Imus (Ordinary)',
            'rate_php' => 30,
            'rate_usd' => 0.51
        ]
    ],
    'CITY FARE' => [
        [
            'route' => 'Imus Lumina - New City Hall of Imus',
            'rate_php' => 28,
            'rate_usd' => 0.48
        ],
        [
            'route' => 'Binakayan - New City Hall of Imus',
            'rate_php' => 30,
            'rate_usd' => 0.51
        ],
        [
            'route' => 'Robinson Imus - New City Hall of Imus',
            'rate_php' => 28,
            'rate_usd' => 0.48
        ]
    ]
];

// National Taxes Information
$national_taxes = [
    'Value Added Tax (VAT)' => 'Value added tax is a tax imposed and collected on every sale, barter, exchange, or transaction deemed sale of taxable goods, properties, lease of goods or properties, or services in the course of trade or business as they pass along the production and distribution chain. The tax is limited only to the value added to such goods, properties or services by the seller or transferor.',
    'Percentage Tax' => 'Any person engaged in business whose sales or receipts are exempt from payment of the value added tax and who is not a VAT-registered person must file a percentage tax return and pay the appropriate percentage tax. Percentage tax is a business tax measured by a given ratio between the gross sales or receipts and the burden imposed upon the taxpayer.',
    'Excise Tax' => 'The excise tax applies to certain specified goods or articles manufactured or produced in the Philippines for domestic sale, consumption, or any other disposition and to things imported into the Philippines.',
    'Income Tax' => 'Income tax is a tax on all yearly profits arising from property, profession, trades or offices or as a tax on a person\'s income, emoluments, profits and the like.',
    'Withholding Tax' => 'Classification includes: Expanded withholding tax, Final withholding tax, Withholding of income tax on compensation, and Withholding of creditable VAT and other percentage taxes.',
    'Capital Gains Tax' => 'Capital gains is a tax imposed on the gains presumed to have been realized by the seller from the sale, exchange, or other disposition of real property located in the Philippines.',
    'Documentary Stamp Tax' => 'Documentary stamp tax is a tax on documents, instruments, loan agreements and papers evidencing the acceptance, assignment, sale or transfer of an obligation, rights, or property incident thereto.'
];

// Page Configuration
$page_config = [
    'site_name' => 'City of Imus',
    'site_url' => 'https://cityofimus.gov.ph',
    'organization' => 'City Government of Imus',
    'email' => 'info@cityofimus.gov.ph',
    'phone' => '+63 46-5320-102',
    'facebook' => 'https://www.facebook.com/CityofImus',
    'timezone' => 'Asia/Manila',
    'copyright_year' => 2026
];

// Form Configuration
$form_config = [
    'business_inquiry_email' => 'business@cityofimus.gov.ph',
    'max_upload_size' => 5242880, // 5MB
    'allowed_file_types' => ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'jpg', 'png']
];
