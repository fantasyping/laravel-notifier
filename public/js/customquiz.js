$(document).ready(function () {
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
            $target.find('input:eq(0)').focus();
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
$(document).ready(function() {

    var grandParent1 = document.getElementById('step-1');
    var grandParent2 = document.getElementById('step-2');
    var grandParent3 = document.getElementById('step-3');
    var grandParent4 = document.getElementById('step-4');
    var findParent1 = $(grandParent1).find('.form-check-label');
    var findParent2 = $(grandParent2).find('.form-check-label');
    var findParent3 = $(grandParent3).find('.form-check-label');
    var findParent4 = $(grandParent4).find('.form-check-label');
    var checkBoxes1 = $(findParent1).children('.form-checkbox-input');
    var checkBoxes2 = $(findParent2).children('.form-checkbox-input');
    var checkBoxes3 = $(findParent3).children('.form-checkbox-input')
    var checkBoxes4 = $(findParent4).children('.form-checkbox-input')
    var count = 0;
    $(checkBoxes1).on('click', function() {
        count = 0;
        $.each(checkBoxes1, function(i) {
            if (checkBoxes1[i].checked) {
                count++;
            }
        });
        var checkindex = count;
        if(checkindex > 0) {
            console.log(checkindex);
            $("#next1").removeAttr("disabled");
        } else{
            $("#next1").attr("disabled", "disabled");
        }
    });
    $(checkBoxes2).on('click', function() {
        count = 0;
        $.each(checkBoxes2, function(i) {
            if (checkBoxes2[i].checked) {
                count++;
            }
        });
        var checkindex = count;
        if(checkindex > 0) {
            console.log(checkindex);
            $("#next2").removeAttr("disabled");
        } else{
            $("#next2").attr("disabled", "disabled");
        }
    });
    $(checkBoxes3).on('click', function() {
        count = 0;
        $.each(checkBoxes3, function(i) {
            if (checkBoxes3[i].checked) {
                count++;
            }
        });
        var checkindex = count;
        if(checkindex > 0) {
            console.log(checkindex);
            $("#next3").removeAttr("disabled");
        } else{
            $("#next3").attr("disabled", "disabled");
        }
    });
    $(checkBoxes4).on('click', function() {
        count = 0;
        $.each(checkBoxes4, function(i) {
            if (checkBoxes4[i].checked) {
                count++;
            }
        });
        var checkindex = count;
        if(checkindex > 0) {
            console.log(checkindex);
            $("#next4").removeAttr("disabled");
        } else{
            $("#next4").attr("disabled", "disabled");
        }
    });
});
});
