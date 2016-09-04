$(document).ready(
  funtion(){
    $.ajax({
      type: "POST",
      url: basePath."Peliculas/index",
      data:{

      },
      datatype:"html",
      success: function(data){
          $('#').html(data);

        }
    })
  }
)
