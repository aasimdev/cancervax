$(function () {      

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 50) {
            $('.header-top').addClass('fixed');
        }
        else {
            $('.header-top').removeClass('fixed');
        }
    });

    $("[href^='#']").click(function () {
        id = $(this).attr("href");
        $('html, body').animate({
            scrollTop: $(id).offset().top - 253.42
        });
    });
  

    $('#jotformForm2').submit(function (e) {
        e.preventDefault();
        var form = $(this); // Cache the form element
        var formData = form.serialize();
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: formData,
            success: function (response) {
                $('.invest-sbmit-btn').fadeIn();
                $('.invest-modal .spinner-border').hide();
                $('.invest-alert').fadeIn();
                setTimeout(() => {
                    $('#investMoreModal').modal('hide');
                    $('body').removeClass('no-scroll');
                    form[0].reset();
                    $('.invest-alert').hide();
                }, 1500)
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });



    const teamModal = new bootstrap.Modal(document.getElementById('team'));
    $('.team-box-img, .team-box h5, .team-box p').on('click', function (e) {
        e.preventDefault();
        var title = $(this).parent().find('h5').html();
        var decription = $(this).parent().find('.team-description').html();
        $('#team').find('.modal-title').html(title);
        $('#team').find('.modal-body').html(decription);
        teamModal.show();
    });

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })


    $('.ceochats-carousel').slick({
        slidesToShow: 2.4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 9000,
        cssEase: 'linear',
        pauseOnHover: true,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1.5,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    // $('.newsCarousel').slick({
    //     slidesToShow: 3.2,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 0,
    //     speed: 8000,
    //     cssEase: 'linear',
    //     pauseOnHover: true,
    //     arrows: false,
    //     dots: false,
    //     responsive: [
    //         {
    //             breakpoint: 1200,
    //             settings: {
    //                 slidesToShow: 2,
    //             }
    //         },
    //         {
    //             breakpoint: 991,
    //             settings: {
    //                 slidesToShow: 1.3,
    //             }
    //         },
    //         {
    //             breakpoint: 600,
    //             settings: {
    //                 slidesToShow: 0.9,
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 0.7,
    //             }
    //         }
    //     ]
    // });


    $('.popup-youtube').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                }
            }
        },
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: true,

    });
     $('.popup-specific-youtube').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1&start=1203'
                }
            }
        },
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: true,

    });
    
    // Vimeo Popup
    $('.popup-vimeo').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
                '</div>',
            patterns: {
                vimeo: {
                    index: 'vimeo.com/',
                    id: '/',
                    src: 'https://player.vimeo.com/video/%id%?autoplay=1'
                }
            }
        },
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: true,
    });

    $("#subscriber-form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
        },
        messages: {
            email: {
                required: "Please enter your email",
                email: "Your email address must be in the format of name@domain.com",
            },
        }

    });

    $("#cForm").validate({
        rules: {
            name: {
                required: true,
                noSpace: true
            },
            email: {
                required: true,
                email: true,
                noSpace: true
            },
            subject: {
                required: true,
                noSpace: true
            },
        },
        messages: {
            name: {
                required: "Please specify your name",
                noSpace: "Please enter a valid name"
            },
            email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com",
                noSpace: "Please enter a valid email"
            },
            subject: {
                required: "Please specify your subject",
                noSpace: "Please enter a valid subject"
            },
        }

    });

    $.validator.addMethod("noSpace", function (value, element) {
        return value.indexOf("  ") < 0;
    }, "Please enter a value without spaces.");



    $(".cchat-box:not([data-video='trend'])").each(function (e) {
        var videoSrc = $(this).find('.getThumbnail').attr('href');
        var videoID = videoSrc.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
        var video_thumbnail = $('<img src="//img.youtube.com/vi/' + videoID + '/maxresdefault.jpg" class="object-fit-contain" alt="Cancervax">');
        $(this).find('.getThumbnail').siblings('.cchat-thumbnail').html(video_thumbnail);
    });


    function isIOS() {
        return /iPad|iPhone|iPod/.test(navigator.userAgent);
      }
    
      function isMobile() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
      }
    
      // Function to handle video button click/touch
      function handleVideoButtonClick(btn) {
        btn.style.display = 'none';

        // Get sibling iframe (previousElementSibling or use parent)
        const wrapper = btn.closest('.video-wrapper');
        const iframe = wrapper.querySelector('iframe');
        const videoId = iframe.dataset.videoId;

        const connector = videoId.includes('?') ? '&' : '?';
        const newSrc = `https://player.vimeo.com/video/${videoId}${connector}controls=1&muted=1&playsinline=1`;
        const newIframe = iframe.cloneNode();
        newIframe.src = newSrc;

        iframe.replaceWith(newIframe);

        const player = new Vimeo.Player(newIframe);

        if (isIOS()) {
          player.setMuted(true).then(() => player.play());
        } else {
          player.setMuted(false);
          player.setVolume(1);
          player.play();
        }
      }
    
      document.querySelectorAll('.vimeo-custom-btn').forEach(btn => {
        const wrapper = btn.closest('.video-wrapper');
        const iframe = wrapper.querySelector('iframe');
        const videoId = iframe.dataset.videoId;
        
        if (isMobile()) {
          // On mobile: hide custom button and enable native controls
          btn.style.display = 'none';
          
          // Update iframe src to include controls
          const newSrc = `https://player.vimeo.com/video/${videoId}?controls=1&muted=0&playsinline=1`;
          iframe.src = newSrc;
          
        } else {
          // On desktop: keep custom button and add click handler
          btn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            handleVideoButtonClick(btn);
          });
        }
      });

})


$(document).ready(function () {
    if (!$('.invkeywords').length == 0) {
        $(window).scroll(function () {
            var offerMain = $('.offer-main');
            var priceCardmob = $('.priceCardmob');

            var offerMainTop = offerMain.offset().top;
            var offerMainBottom = offerMainTop + offerMain.outerHeight();
            var viewportBottom = $(window).scrollTop() + $(window).height();

            if (offerMainTop < viewportBottom && offerMainBottom > $(window).scrollTop()) {
                priceCardmob.css('display', 'flex');
            } else {
                priceCardmob.css('display', 'none');
            }
        });
    }
});



if (!$('.invkeywords').length == 0) {
    var typing = new Typed(".invkeywords", {
        strings: ["", "Invest", "Partner", "JOIN THE FIGHT"],
        typeSpeed: 150,
        backSpeed: 50,
        loop: true,
    });
}



if ($('.particleinn').length != 0) {
    particlesJS("particles-js", {
        particles: {
            number: { value: 19, density: { enable: true, value_area: 800 } },
            color: { value: "#48b6af" },
            shape: { type: "circle", stroke: { width: 0, color: "#000000" }, polygon: { nb_sides: 5 }, image: { src: "img/github.svg", width: 100, height: 100 } },
            opacity: { value: 1, random: true, anim: { enable: true, speed: 1, opacity_min: 1, sync: true } },
            size: { value: 3, random: true, anim: { enable: false, speed: 40, size_min: 0.1, sync: false } },
            line_linked: { enable: true, distance: 150, color: "#48b6af", opacity: 1, width: 1 },
            move: { enable: true, speed: 6, direction: "none", random: false, straight: false, out_mode: "out", bounce: false, attract: { enable: false, rotateX: 600, rotateY: 1200 } },
        },
        interactivity: {
            detect_on: "canvas",
            events: { onhover: { enable: true, mode: "repulse" }, onclick: { enable: true, mode: "push" }, resize: true },
            modes: {
                grab: { distance: 400, line_linked: { opacity: 1 } },
                bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
                repulse: { distance: 200, duration: 0.4 },
                push: { particles_nb: 4 },
                remove: { particles_nb: 2 },
            },
        },
        retina_detect: true,
    });

}


// $(function () {
//     const second = 1000,
//         minute = second * 60,
//         hour = minute * 60,
//         day = hour * 24;

//     // Set the target date and time for the countdown (November 7th at midnight, Pacific Time)
//     const targetDate = new Date('2023-11-07T00:00:00-08:00'); // Pacific Time (PST, UTC-8)

//     const x = setInterval(function () {
//         const now = new Date().getTime();
//         const distance = targetDate - now;

//         if (distance < 0) {
//             document.getElementById("countdown").style.display = "none";
//             clearInterval(x);
//         } else {
//             // Update the countdown
//             document.getElementById("days").innerText = Math.floor(distance / day);
//             document.getElementById("hours").innerText = Math.floor((distance % day) / hour);
//             document.getElementById("minutes").innerText = Math.floor((distance % hour) / minute);
//             document.getElementById("seconds").innerText = Math.floor((distance % minute) / second);
//         }
//     }, 1000); // Update every 1 second
// })();