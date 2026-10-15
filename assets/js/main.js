/**
 * Core16 Theme — Main JavaScript
 * Lightweight vanilla interactions for navigation, accessibility, and UI states.
 */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // Mobile Navigation Toggle
  const mobileToggle = document.getElementById('core16-mobile-menu-toggle');
  const mobileDrawer = document.getElementById('core16-mobile-drawer');
  const mobileClose = document.getElementById('core16-mobile-drawer-close');

  function openMobileMenu() {
    if (!mobileDrawer) return;
    mobileDrawer.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
    if (mobileToggle) {
      mobileToggle.setAttribute('aria-expanded', 'true');
    }
  }

  function closeMobileMenu() {
    if (!mobileDrawer) return;
    mobileDrawer.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
    if (mobileToggle) {
      mobileToggle.setAttribute('aria-expanded', 'false');
    }
  }

  if (mobileToggle) {
    mobileToggle.addEventListener('click', function (e) {
      e.preventDefault();
      const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';
      if (isExpanded) {
        closeMobileMenu();
      } else {
        openMobileMenu();
      }
    });
  }

  if (mobileClose) {
    mobileClose.addEventListener('click', function (e) {
      e.preventDefault();
      closeMobileMenu();
    });
  }

  // Close mobile drawer when clicking overlay backdrop
  if (mobileDrawer) {
    mobileDrawer.addEventListener('click', function (e) {
      if (e.target === mobileDrawer) {
        closeMobileMenu();
      }
    });
  }

  // Close mobile menu on Escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mobileDrawer && !mobileDrawer.classList.contains('hidden')) {
      closeMobileMenu();
    }
  });

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();
        closeMobileMenu();
        const headerOffset = 80;
        const elementPosition = targetElement.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
});
