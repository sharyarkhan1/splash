<?php
$pageTitle = $pageTitle ?? $businessName;
$pageDescription = $pageDescription ?? 'Professional driveway, patio and interior floor cleaning across Cardiff, Newport and South Wales.';
$bodyClass = $bodyClass ?? '';
?>
<!doctype html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $assetPath ?>/images/client/favicon.png">
  <link rel="apple-touch-icon" sizes="32x32" href="<?= $assetPath ?>/images/client/favicon.png">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <?php if (($activePage ?? '') === 'home'): ?>
    <link rel="preload" as="image" href="<?= $assetPath ?>/images/client/home-tgb.webp" type="image/webp" fetchpriority="high">
  <?php endif; ?>
  <link rel="stylesheet" href="<?= $assetPath ?>/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $assetPath ?>/vendor/fontawesome/css/all.min.css">
  <?php if (!empty($includeOwlAssets)): ?>
    <link rel="stylesheet" href="<?= $assetPath ?>/vendor/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $assetPath ?>/vendor/owl/owl.theme.default.min.css">
  <?php endif; ?>
  <link rel="stylesheet" href="<?= $assetPath ?>/css/fonts.css?v=<?= filemtime(__DIR__ . '/../assets/css/fonts.css') ?>">
  <link rel="stylesheet" href="<?= $assetPath ?>/css/style.css?v=<?= filemtime(__DIR__ . '/../assets/css/style.css') ?>">
</head>
<body<?= $bodyClass ? ' class="' . htmlspecialchars($bodyClass) . '"' : '' ?> data-page="<?= htmlspecialchars($activePage ?? '') ?>">
