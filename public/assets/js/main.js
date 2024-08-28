$(document).ready(function () {



  
  function get_brand_list() {
    
    go_on_server('/brands',{},'GET',function (response) {
      
      $.each(response, function(index, item) {

        var stars = '';

        for (var i = 0; i < item.rating; i++) {
          
            stars +='<li><i class="icofont-star"></i></li>';
        }
          
        var content = '<tr>';
            content +='<td>'+index+'</td>';
            content +='<td><div class="d-flex align-items-center"><div class="avatar avatar-xs"><img src="'+$('.all_url').attr('images')+'/'+item.brand_image+'" class="rounded-circle" alt=""></div><span class="tx-medium mg-l-10">'+item.brand_name+'</span></div></td>';
            content +='<td><div class="rating-stars"><ul>'+stars+'</ul></div></td>';
            content +='</tr>';

        $('.the_container').append(content);
      });
    })
  }

  get_brand_list();



  







  function go_on_server(url,data,method,callback) {
    
    $.ajax({
          url : $('.all_url').attr('api_url')+url,
          type : method,
          data:data,
          error : function(error){
            console.log(error)
          },
          success:function (response) {

            callback(response);
          }
      });
  }

})
