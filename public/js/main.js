
$( ".search__item--top" ).click(function(e) {
    e.preventDefault();
    $( this ).siblings(".search__item--bottom").slideToggle();
    $( this ).toggleClass("x");

  });
$(".xit__slayder").slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive:[
      {
        breakpoint: 790,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true
            }
    },
    {
        breakpoint: 540,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            arrows: false
            }

    },
    {
      breakpoint: 425,
      settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          arrows: false
          }

    },
    
  ]
});
$(".cart__slider1").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.cart__slider2',
  fade: true,
  arrows: false,
  
});
$(".cart__slider2").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.cart__slider1',
  arrows: false,
  focusOnSelect: true,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive:[
    
  {
    breakpoint: 425,
    settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        arrows: false
        }

  },
  
]

});

$(".rang__head").click(function(){
    $(".a2").slideToggle(500);
    
});
$(".fa-info-circle").click(function(){
  $(".infoabsolute").css("display","block");
});
$(".exit").click(function(){
  $(".infoabsolute").css("display","none");
});
$(".razmer__head").click(function(){
  $(".a1").slideToggle(500);
});


$(".sveti__item").click(function(){
  $(".sveti__item").removeClass("border-color")
  $(this).addClass("border-color");
  
  var id=$(this).data('id');
  $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
      url : '/getImage',
      type: 'POST',
      data: {id:id},
      success: function(data){
        $('#getImage').html(data);
      }
  });
  $(".svet__modal").slideToggle(500);
});

$('body').delegate(".svet__exit", 'click', function(){
  $(".svet__modal").slideToggle(500);
});

$(".olcham__item").click(function(){
  $(".olcham__item").removeClass("border-color")
  $(this).addClass("border-color");
});


/*codes for zoom*/


