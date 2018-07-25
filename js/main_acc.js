$(document).ready(function(){
  $('#slidedown').on('click', showImages);
});

function showImages(){
  $('.accord').slideToggle(200);
  $('.accord').css('overflow','unset');
}

