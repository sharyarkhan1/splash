<?php
$sitePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
if ($sitePath === '/' || $sitePath === '.') {
    $sitePath = '';
}
$assetPath = $sitePath . '/assets';
$homeUrl = ($sitePath ?: '') . '/';
$aboutUrl = ($sitePath ?: '') . '/about';
$servicesUrl = ($sitePath ?: '') . '/services';
$galleryUrl = ($sitePath ?: '') . '/gallery';
$reviewsUrl = ($sitePath ?: '') . '/reviews';
$areasUrl = ($sitePath ?: '') . '/areas-we-cover';
$contactUrl = ($sitePath ?: '') . '/contact';
$callbackUrl = ($sitePath ?: '') . '/request-a-call-back';
$brochureUrl = $assetPath . '/documents/splash-clean-brochure.pdf';
$pageContent = require __DIR__ . '/page-content.php';
$galleryProjects = $pageContent['gallery'];
$homeGalleryProjects = $pageContent['homeGallery'];
$contactFaqs = $pageContent['faqs'];
$coverageDescription = $pageContent['coverage'];
$address = $pageContent['address'];
$quoteDescription = $pageContent['quote'];

$businessName = 'Splash Clean Caerleon';
$phoneNewport = '01633 479030';
$phoneCardiff = '02920 090155';
$phoneMobile = '07588 879324';
$email = 'info@splashcleancaerleon.co.uk';
$locationText = 'Cardiff, Newport & South Wales';
$serviceAreas = ['Caerleon', 'Newport', 'Cardiff', 'South Wales'];

// One source for live service titles, descriptions, photos and slugs.
$serviceDetails = require __DIR__ . '/service-details.php';
$serviceSlugs = array_keys($serviceDetails);
$services = array_map(static fn($detail) => [$detail['cardTitle'], $detail['cardDescription']], array_values($serviceDetails));
$serviceImages = array_column(array_values($serviceDetails), 'cardImage');
$serviceUrls = array_map(static fn($slug) => $servicesUrl . '/' . $slug . '/', $serviceSlugs);
$serviceLegacySlugs = [
    'driveway-and-patio-restoration-service' => 'professional-driveway-cleaning-and-sealing-services',
    'block-paving-cleaning-and-sealing' => 'professional-driveway-cleaning-and-sealing-services',
    'patio-cleaning-and-sealing' => 'professional-patio-cleaning-and-sealing-services',
    'imprinted-concrete-restoration' => 'professional-imprinted-driveway-cleaning-sealing-and-restoration',
    'tarmac-cleaning-and-restoration' => 'professional-tarmac-cleaning-and-restoration',
    'decking-cleaning-and-restoration' => 'professional-decking-cleaning-coating-repairs',
    'interior-floor-cleaning-and-sealing' => 'professional-interior-floor-cleaning-sealing-services',
    'commercial-and-business' => 'professional-commercial-and-business-cleaning-solutions',
    'driveway-and-patio-installation' => 'professional-driveway-patio-repairs-and-drainage-solutions',
    'eco-wash' => 'professional-k-rend-cleaning-and-treatments-2',
    'resin-driveways-cleaned-sealed' => 'professional-resin-driveway-cleaning-and-treatments',
    'artificial-grass-cleaning' => 'professional-artificial-grass-cleaning-and-treatments'
];
$imageRoot = $assetPath . '/images';
$awardImages = $pageContent['awards'];
$awardAltText = [
    'images/client/scoot-award.jpg' => 'Scoot Headline Award Winner 2016',
    'images/client/cv-magazine-ward.png' => 'CV Magazine Excellence Awards 2018',
    'images/pages/Prestige-Awards.png' => 'Prestige Awards',
    'images/pages/corporate-livewire-award.png' => 'Corporate LiveWire Awards',
    'images/client/bce-award.png' => 'BUILD Construction and Engineering award for driveway cleaning and restoration in Wales',
];
$awardMarqueeItems = [
    [
        'image' => 'images/client/which-trusted-trader-seal.png',
        'alt' => 'Which? Trusted Trader',
    ],
    [
        'image' => 'images/client/logos.jpg',
        'alt' => 'Registered installers: SmartSeal, AlgoClear Pro and Adseal',
    ],
];
foreach ($awardImages as $awardImage) {
    $awardMarqueeItems[] = [
        'image' => $awardImage,
        'alt' => $awardAltText[$awardImage] ?? 'Industry award recognition',
    ];
}
$reviews = [
 ['Charlie Pattinson','Great job cleaning my drive - it was an embarrassment before you started and now looks like new. Friendly and efficient service at a great price. Many thanks.'],
 ['James Molyneux','Splash Clean did an amazing job on my driveway. Friendly and professional, my options were clearly priced and good advice was given specific to my driveway. Would highly recommend to friends and family and will be using again.'],
 ['Dennis','Kristian and his colleague did an excellent job of cleaning up our block paving and sandstone paths and patios. After 8 years, they were all grimy and, in the shadier parts, green. Now they look like they were newly-laid. Thanks, Kristian.'],
 ['Sarah','Massive attention to detail and eager to please. Punctual also which is rare for tradespeople. Great job on driveway and wall. Thank you. If Carlsberg did drive cleaning companies...']
];
