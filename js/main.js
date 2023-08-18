/*Данный шаблон был приобретён на сайте Landistore.com*/
/*Landistore - интернет-магазин качественных сайтов для вашего бизнеса*/
/*(с) Все права защищены*/
$(document).ready(function() {

    $('#work-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ["<span class='pe-7s-angle-left'></span>", "<span class='pe-7s-angle-right'></span>"],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2
            },
            1024: {
                items: 3
            }
        }
    })
    $(".form-call").submit(function() {
        var formID = $(this).attr('id');
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: 'mail.php',
            data: formNm.serialize(),
            success: function(data) {
                $('.modal').modal('hide');
                $('body').css('padding-right', '0');
                $('#modal-thank').modal('show');
            },
            error: function(jqXHR, text, error) {
                $(formNm).html(error);
            }
        });
        return false;
    });
    jQuery(function($) {
        $(".phone-mask").mask("+8 (999) 999-99-99");
    });
    $(".animate-scroll").click(function(event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top - 56
        }, 1500);
    });

    jQuery(window).scroll(function() {
        var the_top = jQuery(document).scrollTop();
        if (the_top > 100) {
            jQuery('.navbar-default').addClass('scroll');
        }
        else {
            jQuery('.navbar-default').removeClass('scroll');
        }
    });

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');

    jQuery('#fileup').change(function(){

        var res=jQuery('#fileup').val();
        var arr = res.split("\\");
        var filename=arr.slice(-1)[0];
        filextension=filename.split(".");
        filext="."+filextension.slice(-1)[0];
        valid=[".jpg",".png",".jpeg",".bmp", ".gif"];

        if (valid.indexOf(filext.toLowerCase())==-1){
            jQuery( ".imgupload" ).hide("slow");
            jQuery( ".imgupload.ok" ).hide("slow");
            jQuery( ".imgupload.stop" ).show("slow");

            jQuery('#namefile').css({"color":"red","font-weight":700});
            jQuery('#namefile').html("Р¤Р°Р№Р» "+filename+" РЅРµ СЏРІР»СЏРµС‚СЃСЏ РєР°СЂС‚РёРЅРєРѕР№!");

        }else{

            jQuery( ".imgupload" ).hide("slow");
            jQuery( ".imgupload.stop" ).hide("slow");
            jQuery( ".imgupload.ok" ).show("slow");

        }
    });
});