<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mindspace
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="mtop0">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="https://tenderminds.live/wp-content/uploads/2021/08/TenderMinds-favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="https://tenderminds.live/wp-content/uploads/2021/08/TenderMinds-favicon.png" type="image/x-icon"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Ultra&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
	<script src="/js/pubnub.min.js"></script>
	

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container-fluid">
	    <button type="button" class="beathelp nohelpformob" data-toggle="modal" data-target="#helpModal"  style="position:absolute; top:1%; right:2%; width:120px; z-index: 999; position: fixed; border: 0; background-color: transparent; cursor:pointer">
	        <img src="http://tenderminds.live/wp-content/uploads/2021/09/HelpButton.png">
	    </button>
	    
	    <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" style="width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title montfont" id="helpModalLabel">CHILDCARE NUMBERS FOR YOU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color:white;">&times;</span>
                </button>
              </div>
              <div class="modal-body lighthelpmodal">
                
                  <div class="main">
                    <h2 class="montfont" style="font-size: 24px;
padding: 2% 0% 0% 0%; color: #21c0f7;">Select your council from the dropdown:<h2>
                    <select id="select_box" class="montfont">
                      <option value="1" class="montfont">Select your council</option>
                      <option value="2" class="montfont">Alpine</option>
                      <option value="3" class="montfont">Ballarat</option>
                      <option value="4" class="montfont">Banyule</option>
                      <option value="5" class="montfont">Brimbank</option>
                      <option value="6" class="montfont">Buloke</option>
                      <option value="7" class="montfont">Campaspe</option>
                      <option value="8" class="montfont">Cardinia</option>
                      <option value="9" class="montfont">Casey</option>
                      <option value="10" class="montfont">Corangamite</option>
                      <option value="11" class="montfont">Council</option>
                      <option value="12" class="montfont">Darebin</option>
                      <option value="13" class="montfont">Frankston</option>
                      <option value="14" class="montfont">Gannawarra</option>
                      <option value="15" class="montfont">Glenelg</option>
                      <option value="16" class="montfont">Hepburn</option>
                      <option value="17" class="montfont">Hindmarsh</option>
                      <option value="18" class="montfont">Hume</option>
                      <option value="19" class="montfont">Indigo</option>
                      <option value="20" class="montfont">Kingston</option>
                      <option value="21" class="montfont">Knox</option>
                      <option value="22" class="montfont">Loddon</option>
                      <option value="23" class="montfont">Manningham</option>
                      <option value="24" class="montfont">Mansfield</option>
                      <option value="25" class="montfont">Maribyrnong</option>
                      <option value="26" class="montfont">Maroondah</option>
                      <option value="27" class="montfont">Melbourne</option>
                      <option value="28" class="montfont">Melton</option>
                      <option value="29" class="montfont">Mitchell</option>
                      <option value="30" class="montfont">Moira</option>
                      <option value="31" class="montfont">Monash</option>
                      <option value="32" class="montfont">Moorabool</option>
                      <option value="33" class="montfont">Moreland</option>
                      <option value="34" class="montfont">Moyne</option>
                      <option value="35" class="montfont">Nillumbik</option>
                      <option value="36" class="montfont">Pyrenees</option>
                      <option value="37" class="montfont">Stonnington</option>
                      <option value="38" class="montfont">Strathbogie</option>
                      <option value="39" class="montfont">Towong</option>
                      <option value="40" class="montfont">Wellington</option>
                      <option value="41" class="montfont">Whitehorse</option>
                      <option value="42" class="montfont">Wodonga</option>
                      <option value="43" class="montfont">Wyndham</option>
                      <option value="44" class="montfont">Yarra</option>
                      
                    </select>
                	<div id="1" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Please select a council from the dropdown to get immediate help!</h2>
                	</div>
                	<div id="2" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800271157" style="color:#21c0f7">1800 271 157</a></h2>
                	</div>
                	<div id="3" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call these childcare numbers to get immediate help: </br><a href="tel:1800319355" style="color:#21c0f7">1800 319 355</a> | <a href="tel:1800219819" style="color:#21c0f7">1800 219 819</a> </h2>
                	</div>
                	<div id="4" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800219819" style="color:#21c0f7">1800 219 819</a></h2>
                	</div>
                	<div id="5" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1300138180" style="color:#21c0f7">1300 138 180</a></h2>
                	</div>
                	<div id="6" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:(03)51447777" style="color:#21c0f7">(03) 5144 7777</a></h2>
                	</div>
                	<div id="7" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:(03)51447777" style="color:#21c0f7">(03) 5144 7777</a></h2>
                	</div>
                	<div id="8" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call these childcare numbers to get immediate help: </br><a href="tel:1300138180" style="color:#21c0f7">1300 138 180</a> | <a href="tel:1800271157" style="color:#21c0f7">1800 271 157</a> | <a href="tel:1800219819" style="color:#21c0f7">1800 219 819</a></h2>
                	</div>
                	<div id="9" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1300543779" style="color:#21c0f7">1300 543 779</a></h2>
                	</div>
                	<div id="10" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1300543779" style="color:#21c0f7">1300 543 779</a></h2>
                	</div>
                	<div id="11" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800634245" style="color:#21c0f7">1800 634 245</a></h2>
                	</div>
                	<div id="12" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800634245" style="color:#21c0f7">1800 634 245</a></h2>
                	</div>
                	<div id="13" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800634245" style="color:#21c0f7">1800 634 245</a></h2>
                	</div>
                	<div id="14" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call these childcare numbers to get immediate help: </br><a href="tel:1800634245" style="color:#21c0f7">1800 634 245</a> | <a href="tel:1800271157" style="color:#21c0f7">1800 271 157</a></h2>
                	</div>
                	<div id="15" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800271157" style="color:#21c0f7">1800 271 157</a></h2>
                	</div>
                	<div id="16" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800290943" style="color:#21c0f7">1800 290 943</a></h2>
                	</div>
                	<div id="17" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800512359" style="color:#21c0f7">1800 512 359</a></h2>
                	</div>
                	<div id="18" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800512359" style="color:#21c0f7">1800 512 359</a></h2>
                	</div>
                	<div id="19" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800512359" style="color:#21c0f7">1800 512 359</a></h2>
                	</div>
                	<div id="20" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800354322" style="color:#21c0f7">1800 354 322</a></h2>
                	</div>
                	<div id="21" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help</br>a href="tel:1800354322" style="color:#21c0f7">1800 354 322</a></h2>
                	</div>
                	<div id="22" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800219819" style="color:#21c0f7">1800 219 819</a></h2>
                	</div>
                	<div id="23" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:(03)97945973" style="color:#21c0f7">(03) 9794 5973</a></h2>
                	</div>
                	<div id="24" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call these childcare numbers to get immediate help: </br><a href="tel:(03)97945973" style="color:#21c0f7">(03) 9794 5973</a> | <a href="tel:(03)97053939" style="color:#21c0f7">(03) 9705 3939</a></h2>
                	</div>
                	<div id="25" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800219819" style="color:#21c0f7">1800 219 819</a></h2>
                	</div>
                	<div id="26" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800219819" style="color:#21c0f7">1800 219 819</a></h2>
                	</div>
                	<div id="27" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800219819" style="color:#21c0f7">1800 219 819</a></h2>
                	</div>
                	<div id="28" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800219819" style="color:#21c0f7">1800 219 819</a></h2>
                	</div>
                	<div id="29" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800634245" style="color:#21c0f7">1800 634 245</a></h2>
                	</div>
                	<div id="30" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800290943" style="color:#21c0f7">1800 290 943</a></h2>
                	</div>
                	<div id="31" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800290943" style="color:#21c0f7">1800 290 943</a></h2>
                	</div>
                	<div id="32" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800290943" style="color:#21c0f7">1800 290 943</a></h2>
                	</div>
                	<div id="33" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800512359" style="color:#21c0f7">1800 512 359</a></h2>
                	</div>
                	<div id="34" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800512359" style="color:#21c0f7">1800 512 359</a></h2>
                	</div>
                	<div id="35" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800319355" style="color:#21c0f7">1800 319 355</a></h2>
                	</div>
                	<div id="36" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:(03)52325500" style="color:#21c0f7">(03) 5232 5500</a></h2>
                	</div>
                	<div id="37" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:(03)52325500" style="color:#21c0f7">(03) 5232 5500</a></h2>
                	</div>
                	<div id="38" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1300543779" style="color:#21c0f7">1300 543 779</a></h2>
                	</div>
                	<div id="39" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1300543779" style="color:#21c0f7">1300 543 779</a></h2>
                	</div>
                	<div id="40" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call these childcare numbers to get immediate help: </br><a href="tel:1300775160" style="color:#21c0f7">1300 775 160</a> | <a href="tel:1800634245" style="color:#21c0f7">1800 634 245</a> | <a href="tel:1300786433" style="color:#21c0f7">1300 786 433</a> | <a href="tel:1800195114" style="color:#21c0f7">1800 195 114</a> | <a href="tel:1300775160" style="color:#21c0f7">1300 775 160</a></h2>
                	</div>
                	<div id="41" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1300369146" style="color:#21c0f7">1300 369 146</a></h2>
                	</div>
                	<div id="42" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1800319355" style="color:#21c0f7">1800 319 355</a></h2>
                	</div>
                	<div id="43" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call this childcare number to get immediate help: </br><a href="tel:1300775160" style="color:#21c0f7">1300 775 160</a></h2>
                	</div>
                	<div id="44" class="hide montfont">
                		<h2 class="" style="padding-top: 3%;font-family: 'Ultra', serif; color:#fe6601; font-size: 25px;">Call these childcare numbers to get immediate help: </br><a href="tel:1300369146" style="color:#21c0f7">1300 369 146</a> | <a href="tel:1800354322" style="color:#21c0f7">1800 354 322</a></h2>
                	</div>
                	
                  </div>
                
              </div>
            </div>
          </div>
        </div>
	    
	    
	    <script type="text/javascript">
	function create_custom_dropdowns() {
    $('select').each(function (i, select) {
        if (!$(this).next().hasClass('dropdown-select')) {
            $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
            var dropdown = $(this).next();
            var options = $(select).find('option');
            var selected = $(this).find('option:selected');
            dropdown.find('.current').html(selected.data('display-text') || selected.text());
            options.each(function (j, o) {
                var display = $(o).data('display-text') || '';
                dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
            });
        }
    });

    $('.dropdown-select ul').before('<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
}

// Event listeners

// Open/close
$(document).on('click', '.dropdown-select', function (event) {
    if($(event.target).hasClass('dd-searchbox')){
        return;
    }
    $('.dropdown-select').not($(this)).removeClass('open');
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
        $(this).find('.option').attr('tabindex', 0);
        $(this).find('.selected').focus();
    } else {
        $(this).find('.option').removeAttr('tabindex');
        $(this).focus();
    }
});

// Close when clicking outside
$(document).on('click', function (event) {
    if ($(event.target).closest('.dropdown-select').length === 0) {
        $('.dropdown-select').removeClass('open');
        $('.dropdown-select .option').removeAttr('tabindex');
    }
    event.stopPropagation();
});

function filter(){
    var valThis = $('#txtSearchValue').val();
    $('.dropdown-select ul > li').each(function(){
     var text = $(this).text();
        (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();         
   });
};
// Search

// Option click
$(document).on('click', '.dropdown-select .option', function (event) {
    $(this).closest('.list').find('.selected').removeClass('selected');
    $(this).addClass('selected');
    var text = $(this).data('display-text') || $(this).text();
    $(this).closest('.dropdown-select').find('.current').text(text);
    $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
});

// Keyboard events
$(document).on('keydown', '.dropdown-select', function (event) {
    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
    // Space or Enter
    //if (event.keyCode == 32 || event.keyCode == 13) {
    if (event.keyCode == 13) {
        if ($(this).hasClass('open')) {
            focused_option.trigger('click');
        } else {
            $(this).trigger('click');
        }
        return false;
        // Down
    } else if (event.keyCode == 40) {
        if (!$(this).hasClass('open')) {
            $(this).trigger('click');
        } else {
            focused_option.next().focus();
        }
        return false;
        // Up
    } else if (event.keyCode == 38) {
        if (!$(this).hasClass('open')) {
            $(this).trigger('click');
        } else {
            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
            focused_option.prev().focus();
        }
        return false;
        // Esc
    } else if (event.keyCode == 27) {
        if ($(this).hasClass('open')) {
            $(this).trigger('click');
        }
        return false;
    }
});

$(document).ready(function () {
    create_custom_dropdowns();
});

$('#select_box').change(function () {
var select=$(this).find(':selected').val();        
 $(".hide").hide();
 $('#' + select).show();

	    }).change();
</script>
	    
	    
		<div class="row">	
			<div class="col-12 col-md-2 paddleftandright0 fixedleftmenu pbot10mobile">
				<p class="text-center nomarginmobile">
					<a href = "https://tenderminds.live/"><img alt="" class="leftinmobile w60 ptop5 w20mobile ptop1pmobile" src="https://tenderminds.live/wp-content/uploads/2021/08/TenderMindsLogo-new.png" /></a>
					<a href="javascript:void(0)" class="d-inline-block d-sm-inline-block d-md-none d-lg-none mobile-nav-toggle rightinmobile ptbw17mobile ptop15mobile"><img alt="" src="https://tenderminds.live/wp-content/uploads/2021/08/hamorange.png"/></a>
				</p>
				<header id="masthead" class="site-header">
					<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'padfornavi main-menu',
					) );
					?>
					</nav>
				</header>
			</div>
			<div class="col-12 col-md-10 paddleftandright0 offset-md-2">
	<div id="content" class="site-content">
