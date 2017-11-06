var host = window.location.href; //backend
host = host.split("backend");
tinymce.init({
    selector: "textarea",
    theme: "modern",
    width: "",
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager "
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print preview",
    menubar: false,
    toolbar_items_size: 'small',
    relative_urls: false,
    remove_script_host:false,

    filemanager_title:"Responsive Filemanager",
    // filemanager_crossdomain: true,
    external_filemanager_path: host[0]+"filemanager/",
    external_plugins: { "filemanager" : host[0]+"filemanager/plugin.min.js"},
  
   image_advtab: true,
   
 });

// tinymce.init({
//     selector: "textarea",theme: "modern",width: 680,height: 300,
//     plugins: [
//          "advlist autolink link image lists charmap print preview hr anchor pagebreak",
//          "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
//          "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
//    ],
//    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
//    toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
//    image_advtab: true ,
//     relative_urls: false,
//    external_filemanager_path: host[0]+"filemanager/",
//    filemanager_title:"Responsive Filemanager" ,
//    external_plugins: { "filemanager" : host[0]+"js/tinymce/plugins/responsivefilemanager/plugin.min.js"}
//  });

// tinymce.init({
//     selector: "textarea",
//     theme: "modern",
//     width: 680,
//     height: 300,
//     plugins: [
//          "advlist autolink link image lists charmap print preview hr anchor pagebreak",
//          "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
//          "table contextmenu directionality emoticons paste textcolor responsivefilemanager "
//    ],
//     relative_urls: false,

//     filemanager_title:"Responsive Filemanager",
//     filemanager_crossdomain: true,
//     external_filemanager_path:"http://test.albertoperipolli.com/secondaryserver/filemanager/",
//     external_plugins: { "filemanager" : "http://test.albertoperipolli.com/secondaryserver/filemanager/plugin.min.js"},
  
//    image_advtab: true,
//    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
//    toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print preview"
//  });

$(document).ready(function() {
	$('#product-startsale').datepicker({'dateFormat':'d-m-yy'});
	$('#product-endsale').datepicker({'dateFormat':'d-m-yy'});
});