var topSecret = function(){
  confirm ("Still working on this, check back end of December!");
}
$('#web-dev').hide();
$('#bier').hide();
$('#multi').hide();

var $webDev = $('input[value="Full Stack Web Developer"]');
var $mulMed = $('input[value="Multimedia Professional"]');
var $SocGur = $('input[value="Social Guru"]');
var $StoTel = $('input[value="Story Teller"]');
var $beer = $('input[value="Beer Enthusiest"]');
var $top = $('#top');
// $top.hide();

var header = [
  "Full Stack Web Development",
  "Multimedia",
  "Social",
  "Stories",
  "Beer"
];

$webDev.click(function(){
  $('#multi').hide();
  $('#web-dev').slideToggle(1500);
  $('#bier').hide(1500);
});

$beer.click(function(){
  $('#bier').slideToggle(1500);
  $('#web-dev').hide(1500);
  $('#multi').hide(1500);
});

$mulMed.click(function(){
  $('#multi').slideToggle(1500);
  $('#bier').hide(1500);
  $('#web-dev').hide(1500);
});

// $('html, body').scroll(function(){
//   $top.show();
// });
$top.click(function(){
  $('html, body').animate({scrollTop:0}, 'fast');
});
