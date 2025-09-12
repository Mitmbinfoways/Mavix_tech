<!DOCTYPE html>
<html>

<head>
  <title><?= $config['site_name'] ?></title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css"
    integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo $config['WEB_PATH'] ?>components/header/header.css" />
  <link rel="stylesheet" href="<?php echo $config['WEB_PATH'] ?>components/potential/potential.css" />
  <link
    rel="stylesheet"
    href="<?php echo $config['WEB_PATH'] ?>components/elevatebusiness/elevatebusiness.css" />
  <link
    rel="stylesheet"
    href="<?php echo $config['WEB_PATH'] ?>components/transformative/transformative.css" />


  <link rel="stylesheet" href="<?php echo $config['WEB_PATH'] ?>components/contact/style.css" />
  <link rel="stylesheet" href="<?php echo $config['WEB_PATH'] ?>components/footer/footer.css" />

  <!-- Global CSS -->
  <link rel="stylesheet" href="<?php echo $config['WEB_PATH'] ?>global.css" />
  <?php if (isset($page) && strtolower($page) == 'order') { ?>
    <link rel="stylesheet" href="<?php echo $config['WEB_PATH'] ?>components/orderotherservice/orderotherservice.css" />
  <?php } ?>
  <!-- Slick Slider CSS -->
  <link rel="stylesheet" href="<?php echo $config['WEB_PATH'] ?>components/slider-2/style.css" />
  <link
    rel="stylesheet"
    href="https://cdn.rawgit.com/kenwheeler/slick/master/slick/slick.css" />
  <link
    rel="stylesheet"
    href="https://cdn.rawgit.com/kenwheeler/slick/master/slick-theme.css" />
  <!-- Animate.css -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <?php
  $webPath = $config['WEB_PATH'];
  switch (strtolower($_GET['p'] ?? '')) {
    case "salesforces-services":
      echo '<link rel="stylesheet" href="' . $webPath . 'components/salesforsesheader/salesforsesheader.css" />
      <link rel="stylesheet" href="' . $webPath . 'components/salesforceservices/salesforceservices.css" />
      <link rel="stylesheet" href="' . $webPath . 'components/salesforcebusinesspotential/salesforcebusinesspotential.css" />
      <link rel="stylesheet" href="' . $webPath . '>components/salseforceconclusionslider/salseforceconclusionslider.css" />
      <script type="text/javascript" src="' . $webPath . 'components/salseforceconclusionslider/salseforceconclusionslider.js">
      </script>';
      break;
    case "shopify-services":
      echo '<link rel="stylesheet" href="' . $webPath . 'components/shopifyheader/shopifyheader.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/shopifymigrate/shopifymigrate.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/shopifyservices/shopifyservices.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/shopifysolution/shopifysolution.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/shopifyvoicethat/shopifyvoicethat.css" />';
      break;
    case "email-marketing":
      echo '<link rel="stylesheet" href="' . $webPath . 'components/emailmarketingheader/emailmarketingheader.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/emailmarketingvisually/emailmarketingvisually.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/emailmarketingservice/emailmarketingservice.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/emailmarketingpowerfulltool/emailmarketingpowerfulltool.css" />';
      break;
    case "digital-marketing":
      echo '<link rel="stylesheet" href="' . $webPath . 'components/digitalmarketingservice/digitalmarketingservice.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/digitalmarketingmavixtech/digitalmarketingmavixtech.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/digitalmarketingheader/digitalmarketingheader.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/digitalmarketingdolorsitamit/digitalmarketingdolorsitamit.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/digitalmarketingcustomer/digitalmarketingcustomer.css" />';
      break;

    case "contact-us":
      echo '<link rel="stylesheet" href="' . $webPath . 'components/contactheader/contactheader.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/contactusform/contactusform.css" />';
      echo '<link rel="stylesheet" href="' . $webPath . 'components/contact/style.css" />';
      break;
  ?>
  <?php  } ?>
</head>

<body>
  <?php include_once('menus.php') ?>