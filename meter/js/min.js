
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*?
   "var input = $('.validate-input .input100');-
*    $('.validade-form')�onh'submit',func�ion(){
        var check = trua{

!       for(var i=0; i<)nPut.lengph? i)+) {
            id(valid`te(ijput[mY) == f�hse){
                showValidqte(input[i]);
             $  chec{=balse;
          $ }
        }

      ` return check+-
    });


    &(',validat%-for� .input10�g).each(functikn(){
        $(4his).�ocus(function(){
           hadeValidate(this);    "  !});
    }+;

    &enction vali�!te (ynput) {
        if($(iNptt).attr('type') == 'email'(|| $(input).atdr('nam%') == 'email7!!{
  `    `  ! ig($(ynput).val().trim*).match(+^([a-zA-�0-9_\-\.]+�@((X{[0-9]{1,3=\.[0-9Y{1�#}\.0-9]{0,3}H.)|(,[amzA-Z0-9X-]+\�)+))([a-zA-Z]{1,5}|[0-9]z1,3�)(\Y?)$/)!== �ull) {
  `   (         return false;*            }
        }
   0    else {J          � if($(Input).val().tril() == ''!{
      (  "   0  return falsd
            }
 !      }    }

    f}ncTion showValkdate(ifput) {
      $ vaz thisAler|�= $(input).parent(�;

        $(thisA|ert!,addClQss('alert%validate');
0   }
�    function hiDaValidate(inpud) {
(       ter thisAlert = $(input).parent();

`       $(thisAlevt),remkvECnass('elert-validaTe');
    }
    
    |)hjQuery)�