$(document).ready(function(){
    $.extend($.expr[':'], {
        absolute: function(element) {
          return $(element).css('position') === 'absolute';
        }
      });
    // condidate form jquery code
    $(".form-field input, .form-field select").focus(function(){
        $(this).parent().css("border-color","var(--color-tr)")
        $(this).siblings().css("color","var(--color-tr)")
    })
    $(".form-field input, .form-field select").blur(function(){
        $(this).parent().css("border-color","var(--color-fr)")
        $(this).siblings().css("color","var(--color-fr)")
    })


})