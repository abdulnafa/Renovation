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

});