
$(document).ready(function(){

  

  $(".dropdown").click(function(){
    $(".dropdown-menu").toggle();
  })

  $("#btn-sidebar").on({
    click: function(){
      $(".sidebar-head").toggle(2000);
      $(this).hide(2000)
      $('#show-sidebar').show(2000);
    }
  })

  $("#show-sidebar").on({
    click: function(){
      $(".sidebar-head").toggle(2000);
      $(this).hide(2000)
      $('#btn-sidebar').show(2000);
    }
  })

  $('input').on({
    click: function(){
      $(this).focus().css('background','lightblue');
    },
    mouseleave: function(){
      $(this).css('background','white')
    }
  })

  $('#show-modal').on({
    click: function(){
      $('#modalId').show();
    }
  })

  $('.close').on({
    click: function(){
      $('#modalId').hide();
    }
  })

  let a = $('.nav-link').css({'border' :'10px solid white','background-color':'rgba(0,0,0,0.4)'});
  

 let b = $('#qty').val(3);
   console.log(b);

   $('.modal-btn').click(function(){
    $('.modal').slideDown(500).fadeIn(500);
    $('.dropdown-menu').hide();
   })

   $('.row').on({
     dblclick: function(){
      
      $('.modal').hide();
     }
   })
   })



