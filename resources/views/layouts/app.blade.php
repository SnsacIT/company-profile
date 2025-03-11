<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SURYA NUSANTARA SENTOSA | SNS.AC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/logo1.png" rel="apple-touch-icon">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .navbar .nav-link:hover,
        .hover-transparent:hover {
            color: rgba(0, 123, 255, 0.7); /* Text color with transparency */
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        :root {
    --default-font: "Roboto",  system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --heading-font: "Raleway",  sans-serif;
    --nav-font: "Poppins",  sans-serif;
  }

  /* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
  :root {
    --background-color: #ffffff; /* Background color for the entire website, including individual sections */
    --default-color: #444444; /* Default color used for the majority of the text content across the entire website */
    --heading-color: #124265; /* Color for headings, subheadings and title throughout the website */
    --accent-color: #2487ce; /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
    --surface-color: #ffffff; /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
    --contrast-color: #ffffff; /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
  }

  /* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
  :root {
    --nav-color: #124265;  /* The default color of the main navmenu links */
    --nav-hover-color: #2487ce; /* Applied to main navmenu links when they are hovered over or active */
    --nav-mobile-background-color: #ffffff; /* Used as the background color for mobile navigation menu */
    --nav-dropdown-background-color: #ffffff; /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
    --nav-dropdown-color: #124265; /* Used for navigation links of the dropdown items in the navigation menu. */
    --nav-dropdown-hover-color: #2487ce; /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
  }

  /* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

  .light-background {
    --background-color: #f6fafd;
    --surface-color: #ffffff;
  }

  .dark-background {
    --background-color: #060606;
    --default-color: #ffffff;
    --heading-color: #ffffff;
    --surface-color: #252525;
    --contrast-color: #ffffff;
  }

  .accent-background {
    --background-color: #2487ce;
    --default-color: #ffffff;
    --heading-color: #ffffff;
    --accent-color: #ffffff;
    --surface-color: #469fdf;
    --contrast-color: #ffffff;
  }

  .color-section{
    background-color: rgb(241, 249, 255);
  }
  .gradient-text {
    font-size: 90px;
    background: linear-gradient(180deg, rgba(37,105,187,1) 0%, rgba(32,132,204,1) 25%, rgba(3,151,255,1) 63%);
    color: transparent;
  }

  .text-navy{
    color: #1B3F73;
  }
  /* Smooth scroll */
  :root {
    scroll-behavior: smooth;
  }

  /*--------------------------------------------------------------
  # General Styling & Shared Classes
  --------------------------------------------------------------*/
  body {
    background-image: url('assets/img/Background_body.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    color: var(--default-color);
    background-color: var(--background-color);
    font-family: var(--default-font);
  }

  a {
    color: var(--accent-color);
    text-decoration: none;
    transition: 0.3s;
  }

  a:hover {
    color: color-mix(in srgb, var(--accent-color), transparent 25%);
    text-decoration: none;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    color: var(--heading-color);
    font-family: var(--heading-font);
  }

  .responsive-img {
    width: 90%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

  /* Pulsating Play Button
  ------------------------------*/
  .pulsating-play-btn {
    width: 94px;
    height: 94px;
    background: radial-gradient(var(--accent-color) 50%, color-mix(in srgb, var(--accent-color), transparent 75%) 52%);
    border-radius: 50%;
    display: block;
    position: relative;
    overflow: hidden;
  }

  .pulsating-play-btn:before {
    content: "";
    position: absolute;
    width: 120px;
    height: 120px;
    animation-delay: 0s;
    animation: pulsate-play-btn 2s;
    animation-direction: forwards;
    animation-iteration-count: infinite;
    animation-timing-function: steps;
    opacity: 1;
    border-radius: 50%;
    border: 5px solid color-mix(in srgb, var(--accent-color), transparent 30%);
    top: -15%;
    left: -15%;
    background: rgba(198, 16, 0, 0);
  }

  .pulsating-play-btn:after {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-40%) translateY(-50%);
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 15px solid #fff;
    z-index: 100;
    transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }

  .pulsating-play-btn:hover:before {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-40%) translateY(-50%);
    width: 0;
    height: 0;
    border: none;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 15px solid #fff;
    z-index: 200;
    animation: none;
    border-radius: 0;
  }

  .pulsating-play-btn:hover:after {
    border-left: 15px solid var(--accent-color);
    transform: scale(20);
  }

  @keyframes pulsate-play-btn {
    0% {
      transform: scale(0.6, 0.6);
      opacity: 1;
    }

    100% {
      transform: scale(1, 1);
      opacity: 0;
    }
  }

  /* PHP Email Form Messages
  ------------------------------*/
  .php-email-form .error-message {
    display: none;
    background: #df1529;
    color: #ffffff;
    text-align: left;
    padding: 15px;
    margin-bottom: 24px;
    font-weight: 600;
  }

  .php-email-form .sent-message {
    display: none;
    color: #ffffff;
    background: #059652;
    text-align: center;
    padding: 15px;
    margin-bottom: 24px;
    font-weight: 600;
  }

  .php-email-form .loading {
    display: none;
    background: var(--surface-color);
    text-align: center;
    padding: 15px;
    margin-bottom: 24px;
  }

  .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid var(--accent-color);
    border-top-color: var(--surface-color);
    animation: php-email-form-loading 1s linear infinite;
  }

  @keyframes php-email-form-loading {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  /*--------------------------------------------------------------
  # Global Header
  --------------------------------------------------------------*/
  .header {
    color: var(--default-color);
    background-color: var(--background-color);
    padding: 20px 0;
    transition: all 0.5s;
    z-index: 997;
    border-bottom: 1px solid color-mix(in srgb, var(--accent-color), transparent 85%);
  }

  .header .logo {
    line-height: 1;
  }

  .header .logo img {
    max-height: 36px;
    margin-right: 8px;
  }

  .header .logo h1 {
    font-size: 30px;
    margin: 0;
    font-weight: 300;
    color: var(--heading-color);
  }

  .header .btn-getstarted,
  .header .btn-getstarted:focus {
    color: var(--contrast-color);
    background: var(--accent-color);
    font-size: 14px;
    padding: 8px 25px;
    margin: 0 0 0 30px;
    border-radius: 4px;
    transition: 0.3s;
  }

  .header .btn-getstarted:hover,
  .header .btn-getstarted:focus:hover {
    color: var(--contrast-color);
    background: color-mix(in srgb, var(--accent-color), transparent 15%);
  }

  @media (max-width: 1200px) {
    .header .logo {
      order: 1;
    }

    .header .btn-getstarted {
      order: 2;
      margin: 0 15px 0 0;
      padding: 6px 15px;
    }

    .header .navmenu {
      order: 3;
    }
  }

  .scrolled .header {
    border-color: var(--contrast-color);
    box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
  }

  /*--------------------------------------------------------------
  # Navigation Menu
  --------------------------------------------------------------*/
  /* Navmenu - Desktop */
  @media (min-width: 1200px) {
    .navmenu {
      padding: 0;
    }

    .navmenu ul {
      margin: 0;
      padding: 0;
      display: flex;
      list-style: none;
      align-items: center;
    }

    .navmenu li {
      position: relative;
    }

    .navmenu a,
    .navmenu a:focus {
      color: var(--nav-color);
      padding: 18px 15px;
      font-size: 16px;
      font-family: var(--nav-font);
      font-weight: 400;
      display: flex;
      align-items: center;
      justify-content: space-between;
      white-space: nowrap;
      transition: 0.3s;
    }

    .navmenu a i,
    .navmenu a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
      transition: 0.3s;
    }

    .navmenu li:last-child a {
      padding-right: 0;
    }

    .navmenu li:hover>a,
    .navmenu .active,
    .navmenu .active:focus {
      color: var(--nav-hover-color);
    }

    .navmenu .dropdown ul {
      margin: 0;
      padding: 10px 0;
      background: var(--nav-dropdown-background-color);
      display: block;
      position: absolute;
      visibility: hidden;
      left: 14px;
      top: 130%;
      opacity: 0;
      transition: 0.3s;
      border-radius: 4px;
      z-index: 99;
      box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
    }

    .navmenu .dropdown ul li {
      min-width: 200px;
    }

    .navmenu .dropdown ul a {
      padding: 10px 20px;
      font-size: 15px;
      text-transform: none;
      color: var(--nav-dropdown-color);
    }

    .navmenu .dropdown ul a i {
      font-size: 12px;
    }

    .navmenu .dropdown ul a:hover,
    .navmenu .dropdown ul .active:hover,
    .navmenu .dropdown ul li:hover>a {
      color: var(--nav-dropdown-hover-color);
    }

    .navmenu .dropdown:hover>ul {
      opacity: 1;
      top: 100%;
      visibility: visible;
    }

    .navmenu .dropdown .dropdown ul {
      top: 0;
      left: -90%;
      visibility: hidden;
    }

    .navmenu .dropdown .dropdown:hover>ul {
      opacity: 1;
      top: 0;
      left: -100%;
      visibility: visible;
    }
  }

  /* Navmenu - Mobile */
  @media (max-width: 1199px) {
    .mobile-nav-toggle {
      color: var(--nav-color);
      font-size: 28px;
      line-height: 0;
      margin-right: 10px;
      cursor: pointer;
      transition: color 0.3s;
    }

    .navmenu {
      padding: 0;
      z-index: 9997;
    }

    .navmenu ul {
      display: none;
      position: absolute;
      inset: 60px 20px 20px 20px;
      padding: 10px 0;
      margin: 0;
      border-radius: 6px;
      background-color: var(--nav-mobile-background-color);
      overflow-y: auto;
      transition: 0.3s;
      z-index: 9998;
      box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
    }

    .navmenu a,
    .navmenu a:focus {
      color: var(--nav-dropdown-color);
      padding: 10px 20px;
      font-family: var(--nav-font);
      font-size: 17px;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: space-between;
      white-space: nowrap;
      transition: 0.3s;
    }

    .navmenu a i,
    .navmenu a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      transition: 0.3s;
      background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
    }

    .navmenu a i:hover,
    .navmenu a:focus i:hover {
      background-color: var(--accent-color);
      color: var(--contrast-color);
    }

    .navmenu a:hover,
    .navmenu .active,
    .navmenu .active:focus {
      color: var(--nav-dropdown-hover-color);
    }

    .navmenu .active i,
    .navmenu .active:focus i {
      background-color: var(--accent-color);
      color: var(--contrast-color);
      transform: rotate(180deg);
    }

    .navmenu .dropdown ul {
      position: static;
      display: none;
      z-index: 99;
      padding: 10px 0;
      margin: 10px 20px;
      background-color: var(--nav-dropdown-background-color);
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
      box-shadow: none;
      transition: all 0.5s ease-in-out;
    }

    .navmenu .dropdown ul ul {
      background-color: rgba(33, 37, 41, 0.1);
    }

    .navmenu .dropdown>.dropdown-active {
      display: block;
      background-color: rgba(33, 37, 41, 0.03);
    }

    .mobile-nav-active {
      overflow: hidden;
    }

    .mobile-nav-active .mobile-nav-toggle {
      color: #fff;
      position: absolute;
      font-size: 32px;
      top: 15px;
      right: 15px;
      margin-right: 0;
      z-index: 9999;
    }

    .mobile-nav-active .navmenu {
      position: fixed;
      overflow: hidden;
      inset: 0;
      background: rgba(33, 37, 41, 0.8);
      transition: 0.3s;
    }

    .mobile-nav-active .navmenu>ul {
      display: block;
    }
  }

  /*--------------------------------------------------------------
  # Global Footer
  --------------------------------------------------------------*/
  .footer {
    color: var(--default-color);
    background-color: var(--background-color);
    border-top: 1px solid color-mix(in srgb, var(--accent-color), transparent 80%);
    font-size: 14px;
    padding-bottom: 50px;
    position: relative;
  }

  .footer .footer-top {
    padding-top: 50px;
  }

  .footer .footer-about .logo {
    line-height: 1;
    margin-bottom: 25px;
  }

  .footer .footer-about .logo img {
    max-height: 40px;
    margin-right: 6px;
  }

  .footer .footer-about .logo span {
    color: var(--heading-color);
    font-size: 30px;
    font-weight: 700;
    letter-spacing: 1px;
    font-family: var(--heading-font);
  }

  .footer .footer-about p {
    font-size: 14px;
    font-family: var(--heading-font);
  }

  .footer .social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 4px;
    border: 1px solid color-mix(in srgb, var(--accent-color), transparent 50%);
    font-size: 16px;
    color: var(--accent-color);
    margin-right: 10px;
    transition: 0.3s;
  }

  .footer .social-links a:hover {
    background-color: var(--accent-color);
    color: var(--contrast-color);
    border-color: var(--accent-color);
  }

  .footer h4 {
    font-size: 16px;
    font-weight: bold;
    position: relative;
    padding-bottom: 12px;
  }

  .footer .footer-links {
    margin-bottom: 30px;
  }

  .footer .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .footer .footer-links ul i {
    padding-right: 2px;
    font-size: 12px;
    line-height: 0;
  }

  .footer .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }

  .footer .footer-links ul li:first-child {
    padding-top: 0;
  }

  .footer .footer-links ul a {
    color: color-mix(in srgb, var(--default-color), transparent 20%);
    display: inline-block;
    line-height: 1;
  }

  .footer .footer-links ul a:hover {
    color: var(--accent-color);
  }

  .footer .footer-contact p {
    margin-bottom: 5px;
  }

  .footer .copyright {
    padding-top: 25px;
    padding-bottom: 25px;
    background-color: var(--accent-color);
    color: var(--contrast-color);
  }

  .footer .copyright p {
    margin-bottom: 0;
  }

  .footer .credits {
    margin-top: 4px;
    font-size: 13px;
  }

  .footer .credits a {
    color: color-mix(in srgb, var(--contrast-color), transparent 30%);
  }

  /*--------------------------------------------------------------
  # Preloader
  --------------------------------------------------------------*/
  #preloader {
    position: fixed;
    inset: 0;
    z-index: 999999;
    overflow: hidden;
    background: var(--background-color);
    transition: all 0.6s ease-out;
  }

  #preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #ffffff;
    border-color: var(--accent-color) transparent var(--accent-color) transparent;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    animation: animate-preloader 1.5s linear infinite;
  }

  @keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  /*--------------------------------------------------------------
  # Scroll Top Button
  --------------------------------------------------------------*/
  .scroll-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 99999;
    background-color: var(--accent-color);
    width: 40px;
    height: 40px;
    border-radius: 4px;
    transition: all 0.4s;
  }

  .scroll-top i {
    font-size: 24px;
    color: var(--contrast-color);
    line-height: 0;
  }

  .scroll-top:hover {
    background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
    color: var(--contrast-color);
  }

  .scroll-top.active {
    visibility: visible;
    opacity: 1;
  }

  /*--------------------------------------------------------------
  # Disable aos animation delay on mobile devices
  --------------------------------------------------------------*/
  @media screen and (max-width: 768px) {
    [data-aos-delay] {
      transition-delay: 0 !important;
    }
  }

  /*--------------------------------------------------------------
  # Global Page Titles & Breadcrumbs
  --------------------------------------------------------------*/
  .page-title {
    color: var(--default-color);
    background-color: var(--background-color);
    padding: 120px 0;
    text-align: center;
    position: relative;
  }

  .page-title h1 {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 10px;
  }

  .page-title .breadcrumbs ol {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    justify-content: center;
    padding: 0;
    margin: 0;
    font-size: 16px;
    font-weight: 400;
  }

  .page-title .breadcrumbs ol a {
    color: color-mix(in srgb, var(--default-color), transparent 20%);
  }

  .page-title .breadcrumbs ol li+li {
    padding-left: 10px;
  }

  .page-title .breadcrumbs ol li+li::before {
    content: "/";
    display: inline-block;
    padding-right: 10px;
    color: color-mix(in srgb, var(--default-color), transparent 70%);
  }

  /*--------------------------------------------------------------
  # Global Sections
  --------------------------------------------------------------*/
  section,
  .section {
    color: var(--default-color);
    background-color: var(--background-color);
    padding: 60px 0;
    scroll-margin-top: 100px;
    overflow: clip;
  }

  @media (max-width: 1199px) {

    section,
    .section {
      scroll-margin-top: 76px;
    }
  }

  /*--------------------------------------------------------------
  # Global Section Titles
  --------------------------------------------------------------*/
  .section-title {
    text-align: center;
    padding-bottom: 60px;
    position: relative;
  }

  .section-title h2 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 15px;
    text-transform: uppercase;
  }

  .section-title p {
    margin-bottom: 0;
  }

  /*--------------------------------------------------------------
  # Hero Section
  --------------------------------------------------------------*/
  .hero {
    width: 100%;
    min-height: calc(100vh - 100px);
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .hero:before {
    content: "";
    background: color-mix(in srgb, var(--background-color), transparent 30%);
    position: absolute;
    inset: 0;
    z-index: 2;
  }

  .hero img {
    inset: 0;
    display: block;
    width: 100%;
    object-fit: cover;
    z-index: 1;
  }

  .hero .container {
    position: relative;
    z-index: 3;
  }

  .hero h1 {
    margin: 0;
    font-size: 56px;
    font-weight: 700;
    line-height: 72px;
  }

  .hero p {
    margin: 10px 0 0 0;
    font-size: 22px;
    color: color-mix(in srgb, var(--default-color), transparent 30%);
  }

  @media (max-width: 992px) {
    .hero h1 {
      font-size: 28px;
      line-height: 36px;
    }

    .hero p {
      font-size: 18px;
      line-height: 24px;
    }
  }

  .hero .btn-get-started {
    color: var(--contrast-color);
    background: #1B3F73;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 0.5px;
    display: inline-block;
    padding: 16px 32px;
    border-radius:5px;
    transition: 0.5s;
    margin-top: 30px;
  }
  .hero .btn-get-ourstory {
    color: #1B3F73;
    background: #fcfbff;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 0.5px;
    display: inline-block;
    padding: 17px 60px;
    border-radius:5px;
    transition: 0.5s;
    margin-top: 30px;
    border: 2px solid #1B3F73;
  }

  .btn-get-ourstory img {
    width: 24px;
    height: 24px;
    margin-right: 8px; /* Jarak antara gambar dan teks */
  }

  .hero .btn-get-started:hover {
    background: #466796;
  }
  .hero .btn-get-ourstory:hover {
    color: #fbfdff;
    font-size: 18px;
    padding: 19px 62px;
    background: #466796;
  }

  .hero .icon-box {
    background-color: var(--surface-color);
    padding: 50px 30px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 0 29px 0 rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
    border-radius: 8px;
    z-index: 1;
    height: 100%;
    width: 100%;
  }

  .hero .icon-box .title {
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 18px;
  }

  .hero .icon-box .title a {
    color: var(--heading-color);
    transition: 0.3s;
  }

  .hero .icon-box .description {
    font-size: 15px;
    margin-bottom: 0;
    color: color-mix(in srgb, var(--default-color), transparent 40%);
  }

  .hero .icon-box .icon {
    margin-bottom: 20px;
    padding-top: 10px;
    display: inline-block;
    transition: all 0.3s ease-in-out;
    font-size: 36px;
    line-height: 1;
    color: var(--accent-color);
  }

  @media (min-width: 640px) {
    .hero .icon-box:hover {
      transform: scale(1.08);
    }

    .hero .icon-box:hover .title a {
      color: var(--accent-color);
    }
  }

  /*--------------------------------------------------------------
  # About Section
  --------------------------------------------------------------*/
  .about ul {
    list-style: none;
    padding: 0;
  }

  .about ul li {
    padding-bottom: 5px;
    display: flex;
    align-items: center;
  }

  .about ul i {
    font-size: 20px;
    padding-right: 4px;
    color: var(--accent-color);
  }

  .about .read-more {
    background: var(--accent-color);
    color: var(--contrast-color);
    font-family: var(--heading-font);
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    padding: 10px 28px;
    border-radius: 5px;
    transition: 0.3s;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .about .read-more i {
    font-size: 18px;
    margin-left: 5px;
    line-height: 0;
    transition: 0.3s;
  }

  .about .read-more:hover {
    background: color-mix(in srgb, var(--accent-color), transparent 20%);
  }

  .about .read-more:hover i {
    transform: translate(5px, 0);
  }

  /*--------------------------------------------------------------
  # Stats Section
  --------------------------------------------------------------*/
  .stats {
    padding: 30px 0;
  }

  .stats .stats-item {
    padding: 30px;
    width: 100%;
  }

  .stats .stats-item span {
    font-size: 48px;
    display: block;
    color: var(--accent-color);
    font-weight: 700;
  }

  .stats .stats-item p {
    color: color-mix(in srgb, var(--default-color), transparent 40%);
    padding: 0;
    margin: 0;
    font-family: var(--heading-font);
    font-size: 15px;
    font-weight: 600;
  }

  /*--------------------------------------------------------------
  # About Alt Section
  --------------------------------------------------------------*/
  .about-alt .content h3 {
    font-size: 1.75rem;
    font-weight: 700;
  }

  .about-alt .content ul {
    list-style: none;
    padding: 0;
  }

  .about-alt .content ul li {
    padding: 10px 0 0 0;
    display: flex;
  }

  .about-alt .content ul i {
    color: var(--accent-color);
    margin-right: 0.5rem;
    line-height: 1.2;
    font-size: 1.25rem;
  }

  .about-alt .content p:last-child {
    margin-bottom: 0;
  }

  .about-alt .pulsating-play-btn {
    position: absolute;
    left: calc(50% - 47px);
    top: calc(50% - 47px);
  }

  /*--------------------------------------------------------------
  # Clients Section
  --------------------------------------------------------------*/
  .clients {
    padding: 20px 0;
  }

  .clients .client-logo {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
  }

  .clients .client-logo img {
    padding: 20px 40px;
    max-width: 90%;
    transition: 0.3s;
    opacity: 0.5;
    filter: grayscale(100);
  }

  .clients .client-logo img:hover {
    filter: none;
    opacity: 1;
    transform: scale(1.1);
  }

  @media (max-width: 640px) {
    .clients .client-logo img {
      padding: 20px;
    }
  }

  /*--------------------------------------------------------------
  # Testimonials Section
  --------------------------------------------------------------*/
  .testimonials .testimonials-carousel,
  .testimonials .testimonials-slider {
    overflow: hidden;
  }

  .testimonials .testimonial-item {
    box-sizing: content-box;
    min-height: 320px;
  }

  .testimonials .testimonial-item .testimonial-img {
    width: 90px;
    border-radius: 50%;
    margin: -40px 0 0 40px;
    position: relative;
    z-index: 2;
    border: 6px solid var(--background-color);
  }

  .testimonials .testimonial-item h3 {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0 5px 45px;
  }

  .testimonials .testimonial-item h4 {
    font-size: 14px;
    color: color-mix(in srgb, var(--default-color), transparent 20%);
    margin: 0 0 0 45px;
  }

  .testimonials .testimonial-item .quote-icon-left,
  .testimonials .testimonial-item .quote-icon-right {
    color: color-mix(in srgb, var(--accent-color), transparent 50%);
    font-size: 26px;
    line-height: 0;
  }

  .testimonials .testimonial-item .quote-icon-left {
    display: inline-block;
    left: -5px;
    position: relative;
  }

  .testimonials .testimonial-item .quote-icon-right {
    display: inline-block;
    right: -5px;
    position: relative;
    top: 10px;
    transform: scale(-1, -1);
  }

  .testimonials .testimonial-item p {
    font-style: italic;
    margin: 0 15px 0 15px;
    padding: 20px 20px 60px 20px;
    background: color-mix(in srgb, var(--default-color), transparent 97%);
    position: relative;
    border-radius: 6px;
    position: relative;
    z-index: 1;
  }

  .testimonials .swiper-wrapper {
    height: auto;
  }

  .testimonials .swiper-pagination {
    margin-top: 20px;
    position: relative;
  }

  .testimonials .swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: var(--background-color);
    opacity: 1;
    border: 1px solid var(--accent-color);
  }

  .testimonials .swiper-pagination .swiper-pagination-bullet-active {
    background-color: var(--accent-color);
  }

  /*--------------------------------------------------------------
  # Services Section
  --------------------------------------------------------------*/
  .services .service-item {
    background-color: var(--surface-color);
    box-shadow: 0px 5px 90px 0px rgba(0, 0, 0, 0.1);
    height: 100%;
    padding: 60px 30px;
    text-align: center;
    transition: 0.3s;
    border-radius: 5px;
  }

  .services .service-item .icon {
    margin: 0 auto;
    width: 100px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: ease-in-out 0.3s;
    position: relative;
  }

  .services .service-item .icon i {
    font-size: 36px;
    transition: 0.5s;
    position: relative;
  }

  .services .service-item .icon svg {
    position: absolute;
    top: 0;
    left: 0;
  }

  .services .service-item .icon svg path {
    transition: 0.5s;
    fill: color-mix(in srgb, var(--default-color), transparent 95%);
  }

  .services .service-item h3 {
    font-weight: 700;
    margin: 10px 0 15px 0;
    font-size: 22px;
  }

  .services .service-item p {
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }

  .services .service-item:hover {
    box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.1);
  }

  .services .service-item.item-cyan i {
    color: #0dcaf0;
  }

  .services .service-item.item-cyan:hover .icon i {
    color: #fff;
  }

  .services .service-item.item-cyan:hover .icon path {
    fill: #0dcaf0;
  }

  .services .service-item.item-orange i {
    color: #fd7e14;
  }

  .services .service-item.item-orange:hover .icon i {
    color: #fff;
  }

  .services .service-item.item-orange:hover .icon path {
    fill: #fd7e14;
  }

  .services .service-item.item-teal i {
    color: #20c997;
  }

  .services .service-item.item-teal:hover .icon i {
    color: #fff;
  }

  .services .service-item.item-teal:hover .icon path {
    fill: #20c997;
  }

  .services .service-item.item-red i {
    color: #df1529;
  }

  .services .service-item.item-red:hover .icon i {
    color: #fff;
  }

  .services .service-item.item-red:hover .icon path {
    fill: #df1529;
  }

  .services .service-item.item-indigo i {
    color: #6610f2;
  }

  .services .service-item.item-indigo:hover .icon i {
    color: #fff;
  }

  .services .service-item.item-indigo:hover .icon path {
    fill: #6610f2;
  }

  .services .service-item.item-pink i {
    color: #f3268c;
  }

  .services .service-item.item-pink:hover .icon i {
    color: #fff;
  }

  .services .service-item.item-pink:hover .icon path {
    fill: #f3268c;
  }

  /*--------------------------------------------------------------
  # Call To Action Section
  --------------------------------------------------------------*/
  .call-to-action {
    padding: 80px 0;
    position: relative;
    clip-path: inset(0);
  }

  .call-to-action h3 {
    font-size: 28px;
    font-weight: 700;
    color: var(--default-color);
  }

  .call-to-action p {
    color: var(--default-color);
  }

  .call-to-action .cta-btn {
    font-family: var(--heading-font);
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 12px 40px;
    border-radius: 5px;
    transition: 0.5s;
    margin: 10px;
    border: 2px solid var(--contrast-color);
    color: var(--contrast-color);
  }

  .call-to-action .cta-btn:hover {
    background: var(--surface-color);
    color: var(--accent-color);
  }

  /*--------------------------------------------------------------
  # Portfolio Section
  --------------------------------------------------------------*/
  .portfolio .portfolio-filters {
    padding: 0;
    margin: 0 auto 20px auto;
    list-style: none;
    text-align: center;
  }

  .portfolio .portfolio-filters li {
    cursor: pointer;
    display: inline-block;
    padding: 8px 20px 10px 20px;
    margin: 0;
    font-size: 15px;
    font-weight: 600;
    line-height: 1;
    margin-bottom: 5px;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
    font-family: var(--heading-font);
  }

  .portfolio .portfolio-filters li:hover,
  .portfolio .portfolio-filters li.filter-active {
    color: var(--accent-color);
  }

  .portfolio .portfolio-filters li:first-child {
    margin-left: 0;
  }

  .portfolio .portfolio-filters li:last-child {
    margin-right: 0;
  }

  @media (max-width: 575px) {
    .portfolio .portfolio-filters li {
      font-size: 14px;
      margin: 0 0 10px 0;
    }
  }

  .portfolio .portfolio-item {
    position: relative;
    overflow: hidden;
  }

  .portfolio .portfolio-item .portfolio-info {
    opacity: 0;
    position: absolute;
    left: 12px;
    right: 12px;
    bottom: -100%;
    z-index: 3;
    transition: all ease-in-out 0.5s;
    background: color-mix(in srgb, var(--background-color), transparent 10%);
    padding: 15px;
  }

  .portfolio .portfolio-item .portfolio-info h4 {
    font-size: 18px;
    font-weight: 600;
    padding-right: 50px;
  }

  .portfolio .portfolio-item .portfolio-info p {
    color: color-mix(in srgb, var(--default-color), transparent 30%);
    font-size: 14px;
    margin-bottom: 0;
    padding-right: 50px;
  }

  .portfolio .portfolio-item .portfolio-info .preview-link,
  .portfolio .portfolio-item .portfolio-info .details-link {
    position: absolute;
    right: 50px;
    font-size: 24px;
    top: calc(50% - 14px);
    color: color-mix(in srgb, var(--default-color), transparent 30%);
    transition: 0.3s;
    line-height: 0;
  }

  .portfolio .portfolio-item .portfolio-info .preview-link:hover,
  .portfolio .portfolio-item .portfolio-info .details-link:hover {
    color: var(--accent-color);
  }

  .portfolio .portfolio-item .portfolio-info .details-link {
    right: 14px;
    font-size: 28px;
  }

  .portfolio .portfolio-item:hover .portfolio-info {
    opacity: 1;
    bottom: 0;
  }

  /*--------------------------------------------------------------
  # Team Section
  --------------------------------------------------------------*/
  .team .team-member {
    background-color: var(--surface-color);
    overflow: hidden;
    border-radius: 5px;
    box-shadow: 0px 0 10px rgba(0, 0, 0, 0.1);
    height: 100%;
  }

  .team .team-member .member-img {
    position: relative;
    overflow: hidden;
  }

  .team .team-member .social {
    position: absolute;
    left: 0;
    bottom: 30px;
    right: 0;
    opacity: 0;
    transition: ease-in-out 0.3s;
    text-align: center;
  }

  .team .team-member .social a {
    background: color-mix(in srgb, var(--contrast-color), transparent 25%);
    color: color-mix(in srgb, var(--default-color), transparent 20%);
    margin: 0 3px;
    border-radius: 4px;
    width: 36px;
    height: 36px;
    transition: ease-in-out 0.3s;
    display: inline-flex;
    justify-content: center;
    align-items: center;
  }

  .team .team-member .social a:hover {
    color: var(--contrast-color);
    background: var(--accent-color);
  }

  .team .team-member .social i {
    font-size: 18px;
    line-height: 0;
  }

  .team .team-member .member-info {
    padding: 25px 15px;
  }

  .team .team-member .member-info h4 {
    font-weight: 700;
    margin-bottom: 5px;
    font-size: 18px;
  }

  .team .team-member .member-info span {
    display: block;
    font-size: 13px;
    font-weight: 400;
    color: color-mix(in srgb, var(--default-color), transparent 40%);
  }

  .team .team-member:hover .social {
    opacity: 1;
    bottom: 15px;
  }

  /*--------------------------------------------------------------
  # Pricing Section
  --------------------------------------------------------------*/
  .pricing .pricing-item {
    background-color: var(--surface-color);
    padding: 60px 40px;
    box-shadow: 0 3px 20px -2px rgba(0, 0, 0, 0.1);
    height: 100%;
    position: relative;
  }

  .pricing h3 {
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 20px;
  }

  .pricing h4 {
    font-size: 48px;
    color: var(--accent-color);
    font-family: var(--heading-font);
    font-weight: 400;
  }

  .pricing h4 sup {
    font-size: 28px;
  }

  .pricing h4 span {
    color: color-mix(in srgb, var(--default-color), transparent 60%);
    font-size: 18px;
  }

  .pricing ul {
    padding: 20px 0;
    list-style: none;
    color: color-mix(in srgb, var(--default-color), transparent 30%);
    text-align: left;
    line-height: 20px;
  }

  .pricing ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }

  .pricing ul i {
    color: #059652;
    font-size: 24px;
    padding-right: 3px;
  }

  .pricing ul .na {
    color: color-mix(in srgb, var(--default-color), transparent 60%);
  }

  .pricing ul .na i {
    color: color-mix(in srgb, var(--default-color), transparent 60%);
  }

  .pricing ul .na span {
    text-decoration: line-through;
  }

  .pricing .buy-btn {
    color: color-mix(in srgb, var(--default-color), transparent 40%);
    background-color: var(--background-color);
    display: inline-block;
    padding: 8px 35px 10px 35px;
    border-radius: 4px;
    border: 1px solid color-mix(in srgb, var(--default-color), transparent 60%);
    transition: none;
    font-size: 16px;
    font-weight: 500;
    font-family: var(--heading-font);
    transition: 0.3s;
  }

  .pricing .buy-btn:hover {
    background: var(--accent-color);
    border-color: var(--accent-color);
    color: var(--contrast-color);
  }

  .pricing .featured {
    z-index: 10;
  }

  .pricing .featured .pricing-item {
    background: var(--accent-color);
  }

  @media (min-width: 992px) {
    .pricing .featured .pricing-item {
      transform: scale(1.02, 1.1);
    }
  }

  .pricing .featured h3,
  .pricing .featured h4,
  .pricing .featured h4 span,
  .pricing .featured ul,
  .pricing .featured ul .na,
  .pricing .featured ul i,
  .pricing .featured ul .na i {
    color: var(--contrast-color);
  }

  .pricing .featured .buy-btn {
    background: var(--accent-color);
    color: var(--contrast-color);
    border-color: var(--contrast-color);
  }

  .pricing .featured .buy-btn:hover {
    background: color-mix(in srgb, var(--background-color), transparent 92%);
  }

  /*--------------------------------------------------------------
  # Faq Section
  --------------------------------------------------------------*/
  .faq .faq-container .faq-item {
    background-color: var(--surface-color);
    position: relative;
    padding: 20px;
    margin-bottom: 15px;
    border: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
    border-radius: 5px;
    overflow: hidden;
  }

  .faq .faq-container .faq-item:last-child {
    margin-bottom: 0;
  }

  .faq .faq-container .faq-item h3 {
    font-weight: 600;
    font-size: 18px;
    line-height: 24px;
    margin: 0 30px 0 0;
    transition: 0.3s;
    cursor: pointer;
    display: flex;
    align-items: center;
  }

  .faq .faq-container .faq-item h3 .num {
    color: var(--accent-color);
    padding-right: 5px;
  }

  .faq .faq-container .faq-item h3:hover {
    color: var(--accent-color);
  }

  .faq .faq-container .faq-item .faq-content {
    display: grid;
    grid-template-rows: 0fr;
    transition: 0.3s ease-in-out;
    visibility: hidden;
    opacity: 0;
  }

  .faq .faq-container .faq-item .faq-content p {
    margin-bottom: 0;
    overflow: hidden;
  }

  .faq .faq-container .faq-item .faq-toggle {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 16px;
    line-height: 0;
    transition: 0.3s;
    cursor: pointer;
  }

  .faq .faq-container .faq-item .faq-toggle:hover {
    color: var(--accent-color);
  }

  .faq .faq-container .faq-active {
    background-color: var(--accent-color);
    border-color: var(--accent-color);
    color: var(--contrast-color);
  }

  .faq .faq-container .faq-active h3 {
    color: var(--contrast-color);
  }

  .faq .faq-container .faq-active .faq-content {
    grid-template-rows: 1fr;
    visibility: visible;
    opacity: 1;
    padding-top: 10px;
  }

  .faq .faq-container .faq-active .faq-toggle {
    transform: rotate(90deg);
    color: var(--accent-color);
  }

  /*--------------------------------------------------------------
  # Contact Section
  --------------------------------------------------------------*/
  .contact .info-item+.info-item {
    margin-top: 40px;
  }

  .contact .info-item i {
    color: var(--contrast-color);
    background: var(--accent-color);
    font-size: 20px;
    width: 44px;
    height: 44px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
    transition: all 0.3s ease-in-out;
    margin-right: 15px;
  }

  .contact .info-item h3 {
    padding: 0;
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 5px;
  }

  .contact .info-item p {
    padding: 0;
    margin-bottom: 0;
    font-size: 14px;
  }

  .contact .php-email-form {
    height: 100%;
  }

  .contact .php-email-form input[type=text],
  .contact .php-email-form input[type=email],
  .contact .php-email-form textarea {
    font-size: 14px;
    padding: 10px 15px;
    box-shadow: none;
    border-radius: 0;
    color: var(--default-color);
    background-color: color-mix(in srgb, var(--background-color), transparent 50%);
    border-color: color-mix(in srgb, var(--default-color), transparent 80%);
  }

  .contact .php-email-form input[type=text]:focus,
  .contact .php-email-form input[type=email]:focus,
  .contact .php-email-form textarea:focus {
    border-color: var(--accent-color);
  }

  .contact .php-email-form input[type=text]::placeholder,
  .contact .php-email-form input[type=email]::placeholder,
  .contact .php-email-form textarea::placeholder {
    color: color-mix(in srgb, var(--default-color), transparent 70%);
  }

  .contact .php-email-form button[type=submit] {
    color: var(--contrast-color);
    background: var(--accent-color);
    border: 0;
    padding: 10px 30px;
    transition: 0.4s;
    border-radius: 4px;
  }

  .contact .php-email-form button[type=submit]:hover {
    background: color-mix(in srgb, var(--accent-color), transparent 20%);
  }

  /*--------------------------------------------------------------
  # Portfolio Details Section
  --------------------------------------------------------------*/
  .portfolio-details .portfolio-details-slider img {
    width: 100%;
  }

  .portfolio-details .swiper-wrapper {
    height: auto;
  }

  .portfolio-details .swiper-button-prev,
  .portfolio-details .swiper-button-next {
    width: 48px;
    height: 48px;
  }

  .portfolio-details .swiper-button-prev:after,
  .portfolio-details .swiper-button-next:after {
    color: rgba(255, 255, 255, 0.8);
    background-color: rgba(0, 0, 0, 0.15);
    font-size: 24px;
    border-radius: 50%;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
  }

  .portfolio-details .swiper-button-prev:hover:after,
  .portfolio-details .swiper-button-next:hover:after {
    background-color: rgba(0, 0, 0, 0.3);
  }

  @media (max-width: 575px) {

    .portfolio-details .swiper-button-prev,
    .portfolio-details .swiper-button-next {
      display: none;
    }
  }

  .portfolio-details .swiper-pagination {
    margin-top: 20px;
    position: relative;
  }

  .portfolio-details .swiper-pagination .swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    background-color: color-mix(in srgb, var(--default-color), transparent 85%);
    opacity: 1;
  }

  .portfolio-details .swiper-pagination .swiper-pagination-bullet-active {
    background-color: var(--accent-color);
  }

  .portfolio-details .portfolio-info h3 {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
  }

  .portfolio-details .portfolio-info h3:after {
    content: "";
    position: absolute;
    display: block;
    width: 50px;
    height: 3px;
    background: var(--accent-color);
    left: 0;
    bottom: 0;
  }

  .portfolio-details .portfolio-info ul {
    list-style: none;
    padding: 0;
    font-size: 15px;
  }

  .portfolio-details .portfolio-info ul li {
    display: flex;
    flex-direction: column;
    padding-bottom: 15px;
  }

  .portfolio-details .portfolio-info ul strong {
    text-transform: uppercase;
    font-weight: 400;
    color: color-mix(in srgb, var(--default-color), transparent 50%);
    font-size: 14px;
  }

  .portfolio-details .portfolio-info .btn-visit {
    padding: 8px 40px;
    background: var(--accent-color);
    color: var(--contrast-color);
    border-radius: 50px;
    transition: 0.3s;
  }

  .portfolio-details .portfolio-info .btn-visit:hover {
    background: color-mix(in srgb, var(--accent-color), transparent 20%);
  }

  .portfolio-details .portfolio-description h2 {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 20px;
  }

  .portfolio-details .portfolio-description p {
    padding: 0;
  }

  .portfolio-details .portfolio-description .testimonial-item {
    padding: 30px 30px 0 30px;
    position: relative;
    background: color-mix(in srgb, var(--default-color), transparent 97%);
    margin-bottom: 50px;
  }

  .portfolio-details .portfolio-description .testimonial-item .testimonial-img {
    width: 90px;
    border-radius: 50px;
    border: 6px solid var(--background-color);
    float: left;
    margin: 0 10px 0 0;
  }

  .portfolio-details .portfolio-description .testimonial-item h3 {
    font-size: 18px;
    font-weight: bold;
    margin: 15px 0 5px 0;
    padding-top: 20px;
  }

  .portfolio-details .portfolio-description .testimonial-item h4 {
    font-size: 14px;
    color: #6c757d;
    margin: 0;
  }

  .portfolio-details .portfolio-description .testimonial-item .quote-icon-left,
  .portfolio-details .portfolio-description .testimonial-item .quote-icon-right {
    color: color-mix(in srgb, var(--accent-color), transparent 50%);
    font-size: 26px;
    line-height: 0;
  }

  .portfolio-details .portfolio-description .testimonial-item .quote-icon-left {
    display: inline-block;
    left: -5px;
    position: relative;
  }

  .portfolio-details .portfolio-description .testimonial-item .quote-icon-right {
    display: inline-block;
    right: -5px;
    position: relative;
    top: 10px;
    transform: scale(-1, -1);
  }

  .portfolio-details .portfolio-description .testimonial-item p {
    font-style: italic;
    margin: 0 0 15px 0 0 0;
    padding: 0;
  }

  /*--------------------------------------------------------------
  # Service Details Section
  --------------------------------------------------------------*/
  .service-details .services-list {
    background-color: var(--surface-color);
    padding: 10px 30px;
    border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    margin-bottom: 20px;
  }

  .service-details .services-list a {
    display: block;
    line-height: 1;
    padding: 8px 0 8px 15px;
    border-left: 3px solid color-mix(in srgb, var(--default-color), transparent 70%);
    margin: 20px 0;
    color: color-mix(in srgb, var(--default-color), transparent 20%);
    transition: 0.3s;
  }

  .service-details .services-list a.active {
    color: var(--heading-color);
    font-weight: 700;
    border-color: var(--accent-color);
  }

  .service-details .services-list a:hover {
    border-color: var(--accent-color);
  }

  .service-details .services-img {
    margin-bottom: 20px;
  }

  .service-details h3 {
    font-size: 26px;
    font-weight: 700;
  }

  .service-details h4 {
    font-size: 20px;
    font-weight: 700;
  }

  .service-details p {
    font-size: 15px;
  }

  .service-details ul {
    list-style: none;
    padding: 0;
    font-size: 15px;
  }

  .service-details ul li {
    padding: 5px 0;
    display: flex;
    align-items: center;
  }

  .service-details ul i {
    font-size: 20px;
    margin-right: 8px;
    color: var(--accent-color);
  }
      </style>

</head>
<body>
    <div id="app">
            @yield('content')
    </div>
</body>
</html>
