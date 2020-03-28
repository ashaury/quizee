$(document).ready(function(){
    var src = "https://docs.google.com/forms/d/e/1FAIpQLSdvuZXWHBzu1MRlvI8Vo4SWxkDsJj3op624E9ycv9uSxlFp1Q/viewform";
    var el = '<iframe src="'+src+'" class="qframe" frameborder="0"></iframe>';
    $("body").append(el);
});