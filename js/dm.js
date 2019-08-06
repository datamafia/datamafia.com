quotes1 = [
    '&quot;Sometimes you have to absorb and maintain a package. &quot;',
    '&quot;Sometimes one line of code takes 2 days to write.&quot;',
    '&quot;Sometimes you have to make GIT cry. Just do it on an isolated branch..&quot;',
    '&quot;Sometimes infinite loops go bad and cause damage.&quot;'
];

var quote_count = 0;
function quote1(id){
    quote_count = quote_count+1;
    if (quote_count > quotes1.length){
        quote_count = 0;
    }
    $(id).fadeOut(450, function(){
        $(id).html(quotes1[quote_count]);
        $(id).fadeIn(550);
    });
}

$( document ).ready(function() {
    setInterval(function() {
        quote1($('#switch_quote_1'), quotes1);
    }, 5000);
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var target = this.hash, $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
});