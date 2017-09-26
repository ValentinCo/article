var markdown = require("markdown").markdown;
console.log(markdown.toHTML("Hello *World*!"));

var md_content = "Hello.\n\n* This is markdown.\n* It is fun\n* Love it or leave it."
var html_content = markdown.toHTML(md_content);
console.log(html_content);

$('document').ready(function () {
    var test = $("#content").text();
    $('#content').html(markdown.toHTML(test));
})


