/**
 * Created by m.benhenda on 22/03/2016.
 */
$(document).ready(function() {
    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });
    var client = new ZeroClipboard($(".copy-button"));
    client.on( "copy", function (event) {
        var clipboard = event.clipboardData;
        clipboard.setData( "application/rtf", "{\\rtf1\\ansi\n{\\b Copy me!}}" );
    });
});


