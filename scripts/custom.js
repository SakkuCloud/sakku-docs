jQuery(document).ready(function( $ ) {

    $("ul.tree").treemenu({openActive: true});

    $('.menu-trigger').click(function() {
        $(this).toggleClass('active')
        $('.tree-container').fadeToggle(500);
    });

});
