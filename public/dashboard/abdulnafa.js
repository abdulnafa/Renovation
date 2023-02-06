$(document).ready(function(){

$("#firstsliderfile").change(function(){
readURL1(this);
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#firstsliderimage').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
});

$("#secondsliderfile").change(function(){
    
    readURL2(this);
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#secondsliderimage').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
 });

$("#thirdsliderfile").change(function(){
       
    readURL3(this);
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#thirdsliderimage').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }  
});

// Plane Card Sections 

// card 1 

$("#cardoneimageicon").on("click",function(){
$("#cardonefile").trigger("click");
});
$("#cardonefile").change(function(){
       
    readURL(this);
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#cardoneimg').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }  
});


// card 2 

$("#cardtwoimageicon").on("click",function(){
    $("#cardtwofile").trigger("click");
    });
    $("#cardtwofile").change(function(){
           
        readURL(this);
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#cardtwoimg').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }  
    });




    // card 3 

$("#cardthreeimageicon").on("click",function(){
    $("#cardthreefile").trigger("click");
    });
    $("#cardthreefile").change(function(){
           
        readURL(this);
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#cardthreeimg').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }  
    });




    // Gallery Code Here 

    $("#addnewbutton").on("click",function(){
$(".hiddendiv").show();
    });
var gallaryimages=[];
var servicename;
var filename;
    $(".servicecheck").click(function(){

$(".hiddendiv").hide();

$("#galleryimagefile").trigger("click");
 servicename=$(this).val();

    });



    $("#galleryimagefile").change(function(){
           
           
      filename = $("#galleryimagefile").val().replace(/^.*[\\\/]/, '');
         
        readURL(this);
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    // $('#cardthreeimg').attr('src', e.target.result);
                
        //             $('.allgalleryphotos').prepend(`<div class="col-md-3 my-2">
        //             <div class="galleryimgbox">
                  
        // <img src='${e.target.result}' width='100%' height='100%'/>
        //             </div>
        //         </div>`);

                gallaryimages.push({service:servicename,image:filename});
                console.log(gallaryimages);
                $("#savegalleryimage").trigger("click");

                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }  
    });

    $("#galleryform").submit(function(e){
e.preventDefault();
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var formData = new FormData($(this)[0]);
$.ajax({
    data: formData,
    processData: false,
    contentType: false,
    cache: false,
    url: "/savegalleryrecord",
    type: "POST",
    dataType: 'json',
    success: function (data) {
        $('.allgalleryphotos').prepend(`<div class="col-md-3 my-2">
        <div class="galleryimgbox position-relative">
        <a class="crosgalleryimage" href="/deletegallaryimage/${data['id']}">
        <span>X</span>
</a>
<img src="../../storage/dashboardpics/gallery/${data['galleryimage']}" width='100%' height='100%'/>
        </div>
    </div>`);
        
     
    },error: function(data) {
       console.log(data);
      }
});


    });




// -------------------------------All services ------------------------------------

// first

$("#serviceimageoneicon").on("click",function(){
    
    $("#headtopimgonefile").trigger("click");
    });
    $("#headtopimgonefile").change(function(){
           
        readURL(this);
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#headtoponeimageshow').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }  
    });



    // Second

$("#serviceimagetwoicon").on("click",function(){
    
    $("#headtopimgtwofile").trigger("click");
    });
    $("#headtopimgtwofile").change(function(){
           
        readURL(this);
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#headtoptwoimageshow').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }  
    });



       // Second

$("#serviceimagethreeicon").on("click",function(){
    
    $("#headtopimgthreefile").trigger("click");
    });
    $("#headtopimgthreefile").change(function(){
           
        readURL(this);
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#headtopthreeimageshow').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }  
    });

    // ----------------------Service Cards----------------------------
// one 
    $("#servicecardoneimageicon").on("click",function(){
    
        $("#servicecardonefile").trigger("click");
        });
        $("#servicecardonefile").change(function(){
               
            readURL(this);
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
            
                    reader.onload = function (e) {
                        $('#servicecardoneimg').attr('src', e.target.result);
                    }
            
                    reader.readAsDataURL(input.files[0]);
                }
            }  
        });


        // two 
    $("#servicecardtwoimageicon").on("click",function(){
    
        $("#servicecardtwofile").trigger("click");
        });
        $("#servicecardtwofile").change(function(){
               
            readURL(this);
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
            
                    reader.onload = function (e) {
                        $('#servicecardtwoimg').attr('src', e.target.result);
                    }
            
                    reader.readAsDataURL(input.files[0]);
                }
            }  
        });



         // Three 
    $("#servicecardthreeimageicon").on("click",function(){
    
        $("#servicecardthreefile").trigger("click");
        });
        $("#servicecardthreefile").change(function(){
               
            readURL(this);
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
            
                    reader.onload = function (e) {
                        $('#servicecardthreeimg').attr('src', e.target.result);
                    }
            
                    reader.readAsDataURL(input.files[0]);
                }
            }  
        });
    

// -------------------------------------------------------------End Of Jquery 
});