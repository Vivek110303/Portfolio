// assets/js/app.js
AOS.init({ once: true });

// Initialize VanillaTilt for 3D tilt effect
if (window.VanillaTilt) {
    VanillaTilt.init(document.querySelectorAll(".tilt"), {
        max: 8,
        speed: 400,
        glare: true,
        "max-glare": 0.2
    });
}

// jQuery contact form AJAX
$(function(){
    $('#contactForm').on('submit', function(e){
        e.preventDefault();
        const $form = $(this);
        const $btn = $form.find('button[type=submit]');
        const $alert = $('#formAlert').removeClass('d-none alert-success alert-danger').text('');

        $btn.prop('disabled', true).addClass('disabled');

        $.ajax({
            url: 'php/contact.php',
            method: 'POST',
            data: $form.serialize(),
            dataType: 'json'
        }).done(function(res){
            if(res.success){
                $alert.addClass('alert-success').text('Thanks! Your message has been sent.');
                $form[0].reset();
            }else{
                $alert.addClass('alert-danger').text(res.error || 'Something went wrong.');
            }
        }).fail(function(){
            $alert.addClass('alert-danger').text('Server error. Please try again later.');
        }).always(function(){
            $alert.removeClass('d-none');
            $btn.prop('disabled', false).removeClass('disabled');
        });
    });
});