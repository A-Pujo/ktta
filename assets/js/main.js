/**
* Template Name: SoftLand - v4.5.0
* Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  // validasi formulir BA
  $.validator.addMethod("email_pknstan", 
    function(value, element) {
        return /^([A-Za-z0-9_\-\.])+\@pknstan.ac.id$/.test(value);
    }, 
    "Maaf, email yang digunakan harus email dengan domain pknstan.ac.id."
  );
  $('#form-ba').validate({
    rules:{
      email:{
        required: true,
        email_pknstan: true,
      }
    },
    submitHandler: function(form) {
      $.ajax({
        url: 'http://ktta.adhirayakta.com/submit-data-BA',
        type: 'post',
        data: $('#form-ba').serialize(),
        success: function(){
          Swal.fire('Pengajuanmu berhasil dicatat sob.');
        },
        error: function(){
          Swal.fire('Ups, sepertinya ada masalah!');
        }
      });
    }
  })
  
  $('#sk').removeAttr('checked');
  $('#terima-sk').click(function(){
    $('#sk').attr('checked', true);
    if($('#sk').attr('checked')){
      $('#sk-button').removeAttr('disabled');
    };
  });

  // select2
  $('.form-select').select2();

  // data table
  $('#tabel-data').DataTable({
    dom: 'Bfrtip',
    order: [[5, 'desc']],
    buttons: [
        'csv', 'excel', 'pdf',
    ]
  });

})()