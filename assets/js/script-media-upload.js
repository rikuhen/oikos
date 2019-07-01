$(document).ready( function() {

    $.wpMediaUploader({

        target : '.smartcat-uploader', // The class wrapping the textbox
        uploaderTitle : 'Selecciona o sube una imagen', // The title of the media upload popup
        multiple : false, // Allow the user to select multiple images
        buttonText : 'Insertar imagen', // The text of the upload button
        previewSize : '150px', // The preview image size
        modal : false, // is the upload button within a bootstrap modal ?
    
    });

})